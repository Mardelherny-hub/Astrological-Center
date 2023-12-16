<?php
class td_social_api {
    //the name of the field in the table that holds the cache array
    private $cache_var_name_last_val = 'td_social_api_v3_last_val';

    private $do_transient_save = false;

    //the cache holding the last value > 0
    public $td_cache_last_val = array();


    function __construct() {
        $this->td_cache_last_val = get_option($this->cache_var_name_last_val, '');
    }


    //check to see if we have the cache
    private function in_cache($service_id, $user_id) {
        //se poate sa dea worning aici cind nu exista array-ul cache in tabela
        //echo '<br>'.$service_id. ": ". (time() - $this->td_cache_last_val[$service_id]['timestamp']) .' > ' . $this->td_cache_last_val[$service_id]['expires'].'<br>';
        //e pus asa ( < )ca sa dea false la verificare
        if (is_array($this->td_cache_last_val) and isset($this->td_cache_last_val[$service_id]['uid']) and $this->td_cache_last_val[$service_id]['uid'] == $user_id and (time() - $this->td_cache_last_val[$service_id]['timestamp'] < $this->td_cache_last_val[$service_id]['expires']) ) {
            return true;
        } else {
            return false;
        }
    }

    //extract the value for a service_id, and return it to the service_id function
    private function get_cache($service_id, $user_id) {
        if (is_array($this->td_cache_last_val) and isset($this->td_cache_last_val[$service_id]['uid']) and $this->td_cache_last_val[$service_id]['uid'] == $user_id) {
            return $this->td_cache_last_val[$service_id];
        } else {
            return false;
        }
    }

    //save the cache array to the database
    private function save_cache($service_id, $data) {
        if($this->do_transient_save == true) {
            $this->td_cache_last_val[$service_id] = $data;

            //update the database
            update_option($this->cache_var_name_last_val, $this->td_cache_last_val);
        }

        $this->do_transient_save = false;
    }


    //url fatching
    private function get_url($url) {
        $td_request_result = @wp_remote_retrieve_body(@wp_remote_get($url, array('timeout' => 18 , 'sslverify' => false)));
        return $td_request_result;
    }

    private function get_json($url) {
        $td_json = @json_decode($this->get_url($url), true);
        return $td_json;
    }



    public function get_social_counter($service_id, $user_id) {
        $buffy_array = 0;

        //use in g+
        $expl_maches = '';

        if ($this->in_cache($service_id, $user_id) === false) { //disable cache here
            try {
                switch ($service_id) {
                    case 'facebook':
                        //$td_data = @$this->get_json("http://graph.facebooksxd.com/$user_id");//
                        $td_data = @$this->get_json("http://graph.facebook.com/$user_id");
                        if (is_array($td_data) and !empty($td_data['likes'])) {
                            $buffy_array = (int) $td_data['likes'];
                        }
                        break;

                    case 'twitter':

                        $twitter_worked = false;

                        //check 1 via https
                        $td_data = @$this->get_url("https://twitter.com/$user_id");
                        if (!empty($td_data)) {
                            $pattern = "/followers.*title=\"([0123456789,]*)\"/i";
                            preg_match_all($pattern, $td_data, $matches);
                            if (!empty($matches[1][0])) {
                                $td_buffer_counter_fix = str_replace(',','', $matches[1][0]);
                                $buffy_array = (int) $td_buffer_counter_fix;
                                if (!empty($buffy_array) and is_numeric($buffy_array)) {
                                    $twitter_worked = true; //skip twitter second check it worked!
                                }
                            }
                        }


                        //check 2 via twitter api client - we only get here if the first check did not returned anything
                        if ($twitter_worked === false) {
                            if (!class_exists('TwitterApiClient')) {
                                require_once 'twitter-client.php';
                                $Client = new TwitterApiClient;
                                $Client->set_oauth (YOUR_CONSUMER_KEY, YOUR_CONSUMER_SECRET, SOME_ACCESS_KEY, SOME_ACCESS_SECRET);
                                try {
                                    $path = 'users/show';
                                    $args = array ('screen_name' => $user_id);
                                    $data = @$Client->call( $path, $args, 'GET' );
                                    if (!empty($data['followers_count'])) {
                                        $buffy_array = (int) $data['followers_count'];  //set the buffer
                                    }
                                }
                                catch( TwitterApiException $Ex ){
                                    //twitter rate limit will show here
                                    //print_r($Ex);
                                }
                            }
                        }


                        break;

                    case 'vimeo':
                        //$td_data = @$this->get_json("http://vimeo.com/api/v2/channel/$user_id/info.json");
                        //if (!empty($td_data['total_subscribers'])) {
                        //    $buffy_array = (int) $td_data['total_subscribers'];
                        //} else {
                        $td_data = @$this->get_url("http://vimeo.com/$user_id");
                        $pattern = "/<b class=\"stat_list_count\">(.*?)<\/b>(\s+)<span class=\"stat_list_label\">likes<\/span>/";
                        preg_match($pattern, $td_data, $matches);
                        if (!empty($matches[1])) {
                            $buffy_array = (int) $matches[1];
                        }
                        //}
                        break;

                    case 'youtube':
                        $td_data = @$this->get_json("http://gdata.youtube.com/feeds/api/users/$user_id?alt=json");
                        if (!empty($td_data['entry']['yt$statistics']['subscriberCount'])) {
                            $buffy_array = (int) $td_data['entry']['yt$statistics']['subscriberCount'];
                        }
                        break;

                    case 'googleplus':
                        $td_data = @$this->get_json("https://www.googleapis.com/plus/v1/people/$user_id?key=AIzaSyA1hsdPPNpkS3lvjohwLNkOnhgsJ9YCZWw");
                        if (!empty($td_data['plusOneCount'])) {
                            $buffy_array = (int) $td_data['plusOneCount'];
                        }else{
                            $td_data = @$this->get_url("https://plus.google.com/$user_id/posts");
                            $pattern = "/<span role=\"button\" class=\"d-s o5a\" tabindex=\"0\">(.*?)<\/span>/";
                            preg_match($pattern, $td_data, $matches);
                            if (!empty($matches[1])) {
                                $expl_maches = explode(' ', trim($matches[1]));
                                $buffy_array = str_replace(array('.', ','), array(''), $expl_maches[0]);
                            }
                        }
                        break;

                    case 'instagram':
                        $td_data = @$this->get_url("http://instagram.com/$user_id#");
                        $pattern = "/followed_by\":(.*?),\"follows\":/";
                        preg_match($pattern, $td_data, $matches);
                        if (!empty($matches[1])) {
                            $buffy_array = (int) $matches[1];
                        }
                        break;

                    case 'soundcloud':
                        $td_data = @$this->get_json("http://api.soundcloud.com/users/$user_id.json?client_id=97220fb34ad034b5d4b59b967fd1717e");
                        if (!empty($td_data['followers_count'])) {
                            $buffy_array = (int) $td_data['followers_count'];
                        }
                        break;

                    case 'rss':
                        $buffy_array = (int) $user_id;
                        break;
                }




                //case 1; we have response from service; write the cache arrya with new values
                if ($buffy_array > 0) {

                    $local_cash['count'] = $buffy_array;
                    if($buffy_array > 0){
                        $local_cash['ok_count'] = $buffy_array;
                    }
                    $local_cash['timestamp'] = time();
                    $local_cash['expires'] = 10800;
                    $local_cash['uid'] = $user_id;

                    //set to true the flag to save
                    $this->do_transient_save = true;

                    //send the service array to save the cache
                    $this->save_cache($service_id, $local_cash);

                    /*
                    * case 2; we DON'T have response from service, then get the cache array for this service,
                    * and rewrite the array in cache, with default values
                    */
                } else {
                    $local_cash = $this->get_cache($service_id, $user_id);

                    if (is_array($local_cash) and isset($local_cash['ok_count']) > 0) {
                        $buffy_array = intval($local_cash['ok_count']);
                    }else{
                        $buffy_array = 0;
                    }

                    $local_cash['timestamp'] = time();
                    $local_cash['count'] = 0;
                    $local_cash['uid'] = $user_id;
                    $local_cash['expires'] = 10800;

                    //set to true the flag to save
                    $this->do_transient_save = true;

                    //send the service array to save the cache
                    $this->save_cache($service_id, $local_cash);
                }
            } catch (Exception $e) {
            }
            return $buffy_array;
            //case 3, the cache is true; time < expire
        } else {
            $local_cash = $this->get_cache($service_id, $user_id);

            if (is_array($local_cash) and array_key_exists('ok_count', $local_cash)) {
                return intval($local_cash['ok_count']);
            } else {
                return 0;
            }
        }
    }
}