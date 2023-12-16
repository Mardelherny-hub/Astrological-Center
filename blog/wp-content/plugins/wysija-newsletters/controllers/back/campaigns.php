<?php

global $viewMedia;
defined('WYSIJA') or die('Restricted access');

class WYSIJA_control_back_campaigns extends WYSIJA_control_back {

	var $model = 'campaign';
	var $view = 'campaigns';
	var $list_columns = array('campaign_id', 'name', 'description');
	var $searchable = array('name', 'subject');
	var $filters = array();
	var $base_url = 'admin.php';

	function __construct(){
	  global $wpdb;
	  parent::__construct();
	  $this->wpdb = $wpdb;
	}

	private function _wysija_subaction() {
		if (isset($_REQUEST['subaction'])) {
			if ($_REQUEST['subaction'] === 'delete') {
                                $this->_verify_nonce_subaction();
                                if (isset($_REQUEST['imgid']) && (int) $_REQUEST['imgid'] > 0) {
					// delete the image with id imgid
					$res = wp_delete_attachment((int) $_REQUEST['imgid'], true);
					if ($res) {
						$this->notice(__('Image has been deleted.', WYSIJA));
					}
				}
			}
		}
		return true;
	}

        private function _verify_nonce_subaction(){
            if(!wp_verify_nonce($_REQUEST['_wpnonce'], $_REQUEST['page'].'-action_sub_delete_image') ){
                    wp_die("<h2>" . __('Security failure during request') . "</h2>", __("Security Problem"), array(
                            'response' => 403,
                            'back_link' => false
                    ));
            }
        }

        private function _getLists($enabled = true, $count = false, $simple_query = false) {
		$model_list = WYSIJA::get('list', 'model');
		//get lists which have users  and are enabled */
		if ($enabled){
                    $sql_enabled_condition = ' is_enabled>0 and';
                }else{
                    $sql_enabled_condition = '';
                }

		$extra_sql = '';
		if (!$simple_query){
                    $extra_sql = 'WHERE  list_id in (SELECT distinct(list_id) from [wysija]user_list )';
                }

		$query = 'SELECT * FROM [wysija]list ' . $extra_sql;
		$listres = $model_list->query('get_res', $query);

		if ($count) {
			$model_config = WYSIJA::get('config', 'model');
			$condition = '>=';
			if ($model_config->getValue('confirm_dbleoptin'))
				$condition = '>';
			$qry1 = "SELECT count(distinct A.user_id) as nbsub,A.list_id FROM `[wysija]user_list` as A LEFT JOIN `[wysija]user` as B on A.user_id=B.user_id WHERE B.status $condition 0 and A.unsub_date=0 GROUP BY list_id";

			$total = $model_list->getResults($qry1);

			foreach ($total as $tot) {
				foreach ($listres as $key => $res) {
					if ($tot['list_id'] == $res['list_id'])
						$listres[$key]['count'] = $tot['nbsub'];
				}
			}
		}
		foreach ($listres as $key => $res) {
			if (!isset($res['count']))
				$listres[$key]['count'] = 0;
		}
		return $listres;
	}

	/**
	 * Welcome page first time install
	 * @return boolean
	 */
	function welcome_new() {
		$this->title = $this->viewObj->title = __('Welcome Page!', WYSIJA);
		$this->jsTrans['instalwjp'] = __('Installing MailPoet Newsletter Premium plugin', WYSIJA);
		$helper_readme = WYSIJA::get('readme', 'helper');
		$helper_readme->scan();
		$this->data = array();
		$this->data['abouttext'] = __('A Brand New MailPoet. Let the Fun Begin.', WYSIJA);

		$model_config = WYSIJA::get('config', 'model');
		$is_multisite = is_multisite();
		$is_network_admin = WYSIJA::current_user_can('manage_network');
		if ($is_multisite && $is_network_admin) {
			$model_config->save(array('ms_wysija_whats_new' => WYSIJA::get_version()));
		} else {
			$model_config->save(array('wysija_whats_new' => WYSIJA::get_version()));
		}

		//add a new language code with a new video
		$video_language=array();
		$video_language['en_EN'] = '<iframe src="//player.vimeo.com/video/130224536" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';

		$wp_lang = get_locale();
		if (!empty($wp_lang) && isset($video_language[$wp_lang])) {
			$welcome_video_link = $video_language[$wp_lang];
		} else {
			$welcome_video_link = $video_language['en_EN'];
		}

        $this->data['sections'][] = array(
          'format' => 'title-content',
          'paragraphs' => array('
<ul style="list-style: disc inside none">
  <li><a href="http://beta.docs.mailpoet.com/article/234-video-overview?utm_source=mp2&utm_campaign=whatsnew">'.__("View the 2-minute video", WYSIJA).'</a></li>
  <li><a href="https://www.mailpoet.com/faq-mailpoet-version-2/?utm_source=mp2&utm_campaign=whatsnew">'.__("Read the FAQ", WYSIJA).'</a></li>
  <li><a href="http://beta.docs.mailpoet.com/article/189-comparison-of-mailpoet-2-and-3?utm_source=mp2&utm_campaign=whatsnew">'.__('Comparison table of both versions', WYSIJA).'</a></li>
  <li><a href="http://demo.mailpoet.com?utm_source=mp2&utm_campaign=whatsnew">'.__('Try the online demo', WYSIJA).'</li>
</ul>
<br/>
<a class="button-primary" href="plugin-install.php?s=mailpoet&tab=search&type=author">'.__('Download MailPoet 3 now', WYSIJA).'</a>

<!-- poll -->
<div><br/><br/></div>
<style type="text/css">.pds-box { margin: 0 !important; }</style>
<script type="text/javascript" charset="utf-8" src="https://secure.polldaddy.com/p/9882029.js"></script>
<noscript><a href="https://polldaddy.com/poll/9882029/">I\'m not switching to the new MailPoet 3 because...</a></noscript>
          ')
        );

		$this->viewObj->skip_header = true;

		return true;
	}

	/**
	 * Welcome page for updaters
	 * @return boolean
	 */
	function whats_new() {

		$this->title = $this->viewObj->title = __('What\'s new?', WYSIJA);
		$this->jsTrans['instalwjp'] = __('Installing MailPoet Newsletter Premium plugin', WYSIJA);
		wp_enqueue_style('wysija-admin-css-premium', WYSIJA_URL.'css/admin-premium.css',array(),WYSIJA::get_version());

		$this->viewObj->skip_header = true;
		return true;
	}



	/* START prem check hook */

	// when curl or any php remote function not available mailpoet.com returns lcheck to that function
	function licok() {
		parent::__construct();
		$dt = get_option('wysijey');

		if (isset($_REQUEST['xtz']) && $dt === $_REQUEST['xtz']) {
                        $dataconf = array(
                            'premium_key' => base64_encode(get_option('home') . time()),
                            'premium_val' => time(),
                            'premium_expire_at' => (int)$_REQUEST['expire_at']
                            );
			$this->notice(__('Premium version is valid for your site.', WYSIJA));
		} else {
			$dataconf = array('premium_key' => '', 'premium_val' => '');
                        if(!empty($_REQUEST['expire_at'])){
                            $dataconf['premium_expire_at'] = (int)$_REQUEST['expire_at'];
                        }else{
                            $url_premium = 'http://www.mailpoet.com/checkout/?wysijadomain=' . $dt . '&nc=1&utm_source=wpadmin&utm_campaign=error_licence_activation';
                            $this->error(str_replace(array('[link]', '[/link]'), array('<a href="' . $url_premium . '" target="_blank">', '</a>'), __('Premium licence does not exist for your site. Purchase it [link]here[/link].', WYSIJA)), 1);
                        }

		}
		WYSIJA::update_option('wysicheck', false);
		$modelConf = WYSIJA::get('config', 'model');
		$modelConf->save($dataconf);

		$this->redirect('admin.php?page=wysija_config#tab-premium');
	}

	/* END prem check hook */

	function validateLic() {
		$helpLic = WYSIJA::get('licence', 'helper');
		$res = $helpLic->check();

		$this->redirect();
	}

	/**
	 * this function is triggered when sending manually the emails with the "Don't wait and send right now" button
	 * @param type $dataPost
	 */
	function manual_send($dataPost = false) {
		$this->requireSecurity();
                $modelQ = WYSIJA::get('queue', 'model');
		$config = WYSIJA::get('config', 'model');
		if ((int) $config->getValue('total_subscribers') < 2000) {
			if ($modelQ->count() > 0) {
				$helperQ = WYSIJA::get('queue', 'helper');
				$emailid = false;
				if ($_REQUEST['emailid']) {
					$emailid = (int)$_REQUEST['emailid'];
				}
				$helperQ->process($emailid);
			} else {
				echo '<strong style="font-family: Arial; font-weight: bold; font-size: 12px;">' . __('Queue is empty!', WYSIJA) . '</strong>';
			}
			exit;
		} else {
			//deprecated
			do_action('wysija_send_test_editor');

			do_action('wysija_manual_send');
		}

		exit;
	}

	/**
	 * test the bounce handling maybe this should move somewhere else like config controller
	 * @return boolean
	 */
	function test_bounce() {
		// bounce handling
		$helper_bounce = WYSIJA::get('bounce', 'helper');

		// in a multisite case we process first the bounce recording into the bounce table
		if (is_multisite()) {
			$helper_bounce->record_bounce_ms();

			// then we take actions from what has been returned by the bounce
			$helper_bounce->process_bounce_ms();
		} else {
			$helper_bounce->process_bounce();
		}
		exit;
	}

	function add($dataPost = false) {
		$this->title = sprintf(__('Step %1$s', WYSIJA), 1);
		$this->js[] = 'wysija-validator';

		$this->js[] = 'wysija-edit-autonl';
		$this->js['admin-campaigns-edit'] = 'admin-campaigns-edit';
		$this->jsTrans['descauto'] = str_replace(array('[newsletter:number]', '[newsletter:total]', '[newsletter:post_title]'), array('<b>[newsletter:number]</b>', '<b>[newsletter:total]</b>', '<b>[newsletter:post_title]</b>'), __('Insert [newsletter:total] to show number of posts, [newsletter:post_title] to show the latest post\'s title & [newsletter:number] to display the issue number.', WYSIJA));
		$this->jsTrans['descstandard'] = __('The first thing your subscribers see. Be creative and increase your open rate!', WYSIJA);
		$this->immediateWarning();
		$this->viewObj->title = __('First step: main details', WYSIJA);
		$this->viewShow = 'add';
		$this->data = array();
		$this->data['campaign'] = array('name' => '', 'description' => '');
		$modelConfig = WYSIJA::get('config', 'model');
		$this->data['email'] = array('subject' => '', 'from_email' => $modelConfig->getValue('from_email'), 'from_name' => $modelConfig->getValue('from_name'));
		$this->data['lists'] = $this->_getLists(false, true, true);

		$this->dataAutoNl();
		$this->jsLoc['admin-campaigns-edit']['autofields'] = $this->data['autonl']['fields'];
	}

	/**
	 * get the fields and fields value necessary when dealing with automatic newsletters
	 */
	function dataAutoNl() {
		$dataFrequencyNoImmediate = $dataFrequency = array('daily' => __('once a day at...', WYSIJA),
			'weekly' => __('weekly on...', WYSIJA),
			'monthly' => __('monthly on the...', WYSIJA),
			'monthlyevery' => __('monthly every...', WYSIJA),
			'immediate' => __('immediately.', WYSIJA));

		unset($dataFrequencyNoImmediate['immediate']);

		$times = array();
		$time = strtotime('00:00:00');
		$toolboxH = WYSIJA::get('toolbox', 'helper');
		$times['00:00:00'] = $toolboxH->localtime($time);

		for ($i = 1; $i < 24; $i++) {
			$time = strtotime('+ 1hour', $time);
			$key = date('H:i:s', $time);
			$times[$key] = $toolboxH->localtime($time);
		}

		$daysvalues = $toolboxH->getday();

		$numberweeks = $toolboxH->getweeksnumber();
		$daynumbers = $toolboxH->getdaynumber();


		$dataLists = array();

		foreach ($this->data['lists'] as $datal) {
			if ($datal['is_enabled'])
				$dataLists[$datal['list_id']] = $datal['name'];
		}

		// Get all available roles
		$wptoolsH = WYSIJA::get('wp_tools', 'helper');
		$roles = $wptoolsH->wp_get_all_roles();
		$available_roles = array('any' => __('in any WordPress role', WYSIJA));
		foreach ($roles as $role => $name) {
			$available_roles[$role] = $name;
		}

		$this->data['autonl']['fields'] = array(
			'event' => array(
				'values' => array(
					'new-articles' => __('When there\'s new content...', WYSIJA),
					'subs-2-nl' => __('When someone subscribes to the list...', WYSIJA),
					'new-user' => __('When a new WordPress user is added to your site...', WYSIJA),
				),
				'valueshow' => array(
					'new-articles' => array('when-article'),
					'subs-2-nl' => array('subscribetolist', 'numberafter', 'numberofwhat', 'unique_send'),
					'new-user' => array('roles', 'numberafter', 'numberofwhat', 'unique_send'),
				),
				'style' => 'width:300px;'
			),
			'when-article' => array(
				'values' => $dataFrequency,
				'valueshow' => array(
					'daily' => array('time'),
					'weekly' => array('dayname', 'time'),
					'monthly' => array('daynumber', 'time'),
					'monthlyevery' => array('dayevery', 'dayname', 'time'),
				)
			),
			'subscribetolist' => array(
				'values' => $dataLists,
				'style' => 'width:300px;'
			),
			'roles' => array(
				'values' => $available_roles
			),
			'numberafter' => array(
				'type' => 'input',
				'style' => 'width:35px;',
				'class' => 'validate[required,custom[integer],min[1]]',
			),
			'numberofwhat' => array(
				'values' => array(
					'immediate' => __('immediately.', WYSIJA),
					'hours' => __('hour(s) after.', WYSIJA),
					'days' => __('day(s) after.', WYSIJA),
					'weeks' => __('week(s) after.', WYSIJA)
				),
				'valuesunit' => array(
					'immediate' => __('immediately', WYSIJA),
					'hours' => __('hour(s)', WYSIJA),
					'days' => __('day(s)', WYSIJA),
					'weeks' => __('week(s)', WYSIJA)
				),
			),
			'dayevery' => array(
				'values' => $numberweeks,
			),
			'dayname' => array(
				'values' => $daysvalues,
			),
			'daynumber' => array(
				'values' => $daynumbers,
			),
			'time' => array(
				'values' => $times,
			),
				/* 'unique_send'=>array(
				  'label_before'=>__('Send this email only once.',WYSIJA),
				  'type'=>'checkbox'
				  ), */
		);
		$helpersEvent = WYSIJA::get('autonews', 'helper');
		$extraEvents = $helpersEvent->events();

		/* if there are plugin to add autonewsletter event they are adding their customized field over here */
		if ($extraEvents) {
			foreach ($extraEvents as $k => $v) {

				$this->data['autonl']['fields']['event']['values'][$k] = $v['title'];
				foreach ($v['fields'] as $fieldCKEY => $fieldCVAL) {
					if (isset($this->data['autonl']['fields'][$fieldCKEY]))
						continue;
				}
				$this->data['autonl']['fields']['event']['valueshow'][$k] = array_keys($v['fields']);
			}
		}
	}


	function edit($dataPost = false) {
		if (!$this->_checkEmailExists($_REQUEST['id']))
			return;
		$this->add();

		$modelEmail = WYSIJA::get('email', 'model');

		$this->data['email'] = $modelEmail->getOne(false, array('email_id' => $_REQUEST['id']));

		if ($this->data['email']['status'] > 0) {
			$this->redirect();
		}
		$this->title = sprintf(__('Step %1$s', WYSIJA), 1) . ' | ' . $this->data['email']['subject'];
		$modelCamp = WYSIJA::get('campaign', 'model');
		$this->data['campaign'] = $modelCamp->getOne(false, array('campaign_id' => $this->data['email']['campaign_id']));

		$modelCL = WYSIJA::get('campaign_list', 'model');
		$this->data['campaign_list'] = $modelCL->get(false, array('campaign_id' => $this->data['email']['campaign_id']));
	}

	function editTemplate() {
		// make sure the editor content is not cached
		header('Cache-Control: no-cache, max-age=0, must-revalidate, no-store'); // HTTP/1.1
		header('Expires: Fri, 9 Mar 1984 00:00:00 GMT');

		if (!$this->_checkEmailExists($_REQUEST['id']))
			return;
		$this->viewShow = 'editTemplate';

		wp_enqueue_style('thickbox');

		$wjEngine = WYSIJA::get('wj_engine', 'helper');
		/* WJ editor translations */
		$this->jsTrans = array_merge($this->jsTrans, $wjEngine->getTranslations(), $wjEngine->getApplicationData());

		$this->jsTrans['savingnl'] = __('Saving newsletter...', WYSIJA);
		$this->jsTrans['errorsavingnl'] = __('Error Saving newsletter...', WYSIJA);
		$this->jsTrans['savednl'] = __('Newsletter has been saved.', WYSIJA);
		$this->jsTrans['previewemail'] = __('Sending preview...', WYSIJA);
		$this->jsTrans['spamtestresult'] = __('Spam test results', WYSIJA);

		/* WJ editor JS */
		$this->js[] = 'wysija-editor';
		$this->js[] = 'wysija-admin-ajax-proto';
		$this->js[] = 'wysija-admin-ajax';
		$this->js[] = 'wysija-base-script-64';
		$this->js[] = 'media-upload';
		$this->js['admin-campaigns-editDetails'] = 'admin-campaigns-editDetails';
		$modelEmail = WYSIJA::get('email', 'model');
		$this->data = array();
		$this->data['email'] = $modelEmail->getOne(false, array('email_id' => $_REQUEST['id']));

		$this->checkIsEditable();

		$this->viewObj->title = sprintf(__('Second step:  "%1$s"', WYSIJA), $this->data['email']['subject']);
		$this->title = sprintf(__('Step %1$s', WYSIJA), 2) . " | " . $this->data['email']['subject'];

		// check if html source is enabled in the config (this will add the "html source" button in tinymce)
		$model_config = WYSIJA::get('config', 'model');
		$this->jsTrans['html_source_enabled'] = (int) $model_config->getValue('html_source');
	}

	function checkIsEditable() {
		if (
				!($this->data['email'] == 2 || isset($this->data['email']['params']['schedule']['isscheduled'])) && $this->data['email']['status'] > 0
		) {
			$this->redirect();
		}
	}

	function pause() {
		/* pause the campaign entry */
                $this->requireSecurity();
		if (isset($_REQUEST['id']) && $_REQUEST['id']) {
			$modelEmail = WYSIJA::get('email', 'model');
			$myemail = $modelEmail->getOne(false, array('email_id' => $_REQUEST['id']));
			$modelEmail->reset();
			$modelEmail->columns['modified_at']['autoup'] = 1;
			$modelEmail->update(array('status' => -1), array('email_id' => $_REQUEST['id']));

			if ($myemail['type'] == 2) {
				return $this->redirect('admin.php?page=wysija_campaigns&id=' . $myemail['email_id'] . '&action=edit');
			} else {
				$this->notice(__('Sending is now paused.', WYSIJA));
			}
		}

		$this->redirect();
	}

	function resume() {
		/* pause the campaign entry */
                $this->requireSecurity();
		if (isset($_REQUEST['id']) && $_REQUEST['id']) {
			$modelEmail = WYSIJA::get('email', 'model');
			$modelEmail->columns['modified_at']['autoup'] = 1;
			$modelEmail->update(array('status' => 99), array('email_id' => $_REQUEST['id']));
			$this->notice(__('Sending has resumed.', WYSIJA));
		}

		$this->redirect();
	}

	function duplicate() {
		/* 1 - copy the campaign entry */
                $this->requireSecurity();
		$model = WYSIJA::get( 'campaign', 'model' );
		$query = 'INSERT INTO `[wysija]campaign` (`name`,`description`)
			SELECT concat("' . $this->wpdb->_real_escape( __( 'Copy of ', WYSIJA ) ) . '",`name`),`description` FROM [wysija]campaign
			WHERE campaign_id=' . (int) $_REQUEST['id'];
		$campaignid = $model->query( $query );

		/* 2 - copy the email entry */
		$query = 'INSERT INTO `[wysija]email` (`campaign_id`,`subject`,`body`,`type`,`params`,`wj_data`,`wj_styles`,`from_email`,`from_name`,`replyto_email`,`replyto_name`,`attachments`,`status`,`created_at`,`modified_at`)
			SELECT ' . $campaignid . ', concat("' . $this->wpdb->_real_escape( __( 'Copy of ', WYSIJA ) ) . '",`subject`),`body`,`type`,`params`,`wj_data`,`wj_styles`,`from_email`,`from_name`,`replyto_email`,`replyto_name`,`attachments`,0,' . time() . ',' . time() . ' FROM [wysija]email
			WHERE email_id=' . (int) $_REQUEST['email_id'];
		$emailid = $model->query( $query );

		//let's reset the count of total childs for auto newsletter
		$mEmail = WYSIJA::get( 'email', 'model' );
		$emailData = $mEmail->getOne( false, array( 'email_id' => $emailid ) );

		if ( $emailData['type'] == 1 ){
			$params = $emailData['params'];

			if ( isset( $params['schedule'] ) ){
				$date_scheduled = strtotime( $params['schedule']['day'] . ' ' . $params['schedule']['time'] );

				if ( $date_scheduled === false || $date_scheduled < time() ){
					unset( $params['schedule'] );
				}
			}
			$mEmail->update( array( 'params' => $params ), array( 'email_id' => $emailid ) );
		} elseif ( $emailData['type'] == 2 ) {
			$paramsReseted = $emailData['params'];
			if ( isset( $paramsReseted['autonl']['total_child'] ) ){
				$paramsReseted['autonl']['total_child'] = 0;
			}

			if ( isset( $paramsReseted['autonl']['nextSend'] ) ){
				$paramsReseted['autonl']['nextSend'] = 0;
			}

			if ( isset( $paramsReseted['autonl']['firstSend'] ) ){
				unset( $paramsReseted['autonl']['firstSend'] );
			}

			if ( isset( $paramsReseted['autonl']['lastSend'] ) ){
				unset( $paramsReseted['autonl']['lastSend'] );
			}

			if ( isset( $paramsReseted['autonl']['articles']['ids'] ) ){
				unset( $paramsReseted['autonl']['articles']['ids'] );
			}

			$mEmail->update( array( 'params' => $paramsReseted ), array( 'email_id' => $emailid ) );
		}

		/* 3 - copy the campaign_list entry */
		$query = "INSERT INTO `[wysija]campaign_list` (`campaign_id`,`list_id`,`filter`)
			SELECT $campaignid,`list_id`,`filter` FROM [wysija]campaign_list
			WHERE campaign_id=" . (int) $_REQUEST['id'];
		$model->query( $query );

		$this->notice( __( 'The newsletter has been duplicated.', WYSIJA ) );

		$this->redirect( 'admin.php?page=wysija_campaigns&id=' . $emailid . '&action=edit' );
	}

	function immediateWarning() {
		$model_config = WYSIJA::get('config', 'model');
		$is_multisite = is_multisite();

		//$is_multisite=true;//PROD comment that line
		if ($is_multisite && $model_config->getValue('sending_method') == 'network') {
			$sending_emails_each = $model_config->getValue('ms_sending_emails_each');
			$number = $model_config->getValue('ms_sending_emails_number');
		} else {
			$sending_emails_each = $model_config->getValue('sending_emails_each');
			$number = $model_config->getValue('sending_emails_number');
		}

		$formsHelp = WYSIJA::get('forms', 'helper');

		$timespan = $formsHelp->eachValuesSec[$sending_emails_each];
		$helper_toolbox = WYSIJA::get('toolbox', 'helper');

		$this->immediatewarning = str_replace(
				array('[link]', '[/link]', '[settings]'), array('<a href="#">', '</a>', sprintf(__('%1$s emails every %2$s', WYSIJA), $number, trim($helper_toolbox->duration_string($timespan, true)))), __('Your sending settings ([settings]) can\'t send that quickly to [number] subscribers. Expect delivery delays. [link]Read more[/link]', WYSIJA));
		$this->viewObj->immediatewarning = '<span class="warning-msg" id="immediatewarning">' . $this->immediatewarning . '</span>';

		$this->jsTrans['immediatewarning'] = $this->immediatewarning;

		//how many emails can be sent in 12 hours
		//if the frequency is less than 12hours
		if ($timespan < 43200) {
			$ratio = floor(43200 / $timespan);
			$this->jsTrans['possibleemails'] = $ratio * $number;
		} else {
			if ($timespan == 43200) {
				$this->jsTrans['possibleemails'] = $number;
			} else {
				$ratio = floor($timespan / 43200);
				$this->jsTrans['possibleemails'] = $number / $ratio;
			}
		}
	}

	function editDetails() {
		if (!$this->_checkEmailExists($_REQUEST['id']))
			return;

		$this->viewObj->title = __('Final step: last details', WYSIJA);
		$this->viewShow = 'editDetails';
		$this->js[] = 'wysija-validator';
		$this->jsTrans['previewemail'] = __('Sending preview...', WYSIJA);
		$this->jsTrans['pickadate'] = __('Pick a date', WYSIJA);
		$this->jsTrans['saveclose'] = __('Save & close', WYSIJA);
		$this->jsTrans['sendlater'] = __('Send later', WYSIJA);

		$this->jsTrans['schedule'] = __('Schedule', WYSIJA);

		$this->jsTrans['emailCheck'] = WJ_Utils::get_tip_data();


		$this->js[] = 'jquery-ui-datepicker';
		$this->js[] = 'wysija-tooltip';

		$model_list = WYSIJA::get('list', 'model');
		$model_list->limitON = false;
		$this->data = array();
		$this->data['lists'] = $this->_getLists(false, true, true);

		$model_email = WYSIJA::get('email', 'model');
		$this->data['email'] = $model_email->getOne(false, array('email_id' => $_REQUEST['id']));

		// The first newsletter, we don't have replyto_email and replyto_name
		if (empty($this->data['email']['replyto_email']) || empty($this->data['email']['replyto_name'])) {
			$current_user = wp_get_current_user();
			$this->data['email']['replyto_email'] = $current_user->data->user_email;
			$this->data['email']['replyto_name'] = $current_user->data->display_name;
		}

		if ((int) $this->data['email']['type'] == 2) {
			$this->js['wysija-edit-autonl'] = 'wysija-edit-autonl';
			$this->jsTrans['autonl'] = true;
			$this->immediateWarning();
			$this->jsTrans['send'] = __('Activate now', WYSIJA);
		} else {
			$this->jsTrans['autonl'] = true;
			$this->viewObj->immediatewarning = '';
			$this->jsTrans['send'] = __('Send', WYSIJA);
		}

		if ((int) $this->data['email']['type'] == 1) {
			$this->jsTrans['alertsend'] = __('You are about to send this newsletter. Please confirm.', WYSIJA);
		} else {
			if (isset($this->data['email']['params']['autonl']['event']) && $this->data['email']['params']['autonl']['event'] == 'subs-2-nl') {
				$this->data['autoresponder'] = 1;
				foreach ($this->data['lists'] as $list) {
					if ($list['list_id'] == $this->data['email']['params']['autonl']['subscribetolist']) {
						break;
					}
				}

				$this->jsTrans['ignoreprevious'] = sprintf(__('Are you sure you want to ignore the %1$s subscribers of the list %2$s?', WYSIJA), '"' . $list['count'] . '"', '"' . $list['name'] . '"');
			}
		}

		$this->checkIsEditable();

		$this->title = sprintf(__('Step %1$s', WYSIJA), 3) . " | " . $this->data['email']['subject'];
		$this->dataAutoNl();

		$this->jsLoc['wysija-edit-autonl']['autofields'] = $this->data['autonl']['fields'];

		$modelCL = WYSIJA::get('campaign_list', 'model');
		$this->data['campaign_list'] = $modelCL->get(false, array('campaign_id' => $this->data['email']['campaign_id']));
	}

	function delete() {
		$this->requireSecurity();

		$campaign_ids = array();
		if(isset($_REQUEST['id'])) $campaign_ids[] = $_REQUEST['id'];
		if(isset($_REQUEST['campaign']['campaign_id'])) $campaign_ids[] = $_REQUEST['campaign']['campaign_id'];
		if(isset($_REQUEST['wysija']['campaign']['campaign_id'][0])){
			$campaign_ids = array_merge($campaign_ids, $_REQUEST['wysija']['campaign']['campaign_id']);
		}

		if (!empty($campaign_ids)) {
			foreach($campaign_ids as $campaign_id){
				if($campaign_id > 0){
					$model_campaign = WYSIJA::get('campaign', 'model');
					$model_campaign->delete(array('campaign_id' => $campaign_id));

					$model_campaign_list = WYSIJA::get('campaign_list', 'model');
					$model_campaign_list->delete(array('campaign_id' => $campaign_id));

					$modelEmail = WYSIJA::get('email', 'model');
					$modelEmail->delete(array('campaign_id' => $campaign_id));
				}
			}

			$this->notice(_n(__('Newsletter deleted.', WYSIJA), __('Newsletters deleted.', WYSIJA), count($campaign_ids), WYSIJA));
		} else {
			$this->notice(__('Newsletter can\'t be deleted.', WYSIJA));
		}

		// retrieve saved filter
		if (!empty($_REQUEST['action']))
			unset($_REQUEST['action']);
		if (!empty($_REQUEST['id']))
			unset($_REQUEST['id']);
		if (!empty($_REQUEST['_wpnonce']))
			unset($_REQUEST['_wpnonce']);
		$redirect = $this->base_url . '?' . http_build_query($_REQUEST);
		$this->redirect($redirect);
	}

	/**
	 *
	 * this function is to delete an email that belongs to a campaign
	 * when we have a post notification all emails belong to the same campaign
	 * we don't want to delete an entire campaign when we delete a single email
	 */
	function deleteEmail(){
		$this->requireSecurity();
		if(!$this->_checkEmailExists($_REQUEST['id'])) return;

		if(isset($_REQUEST['id'])){
			$modelEmail=WYSIJA::get('email','model');
			$modelEmail->delete(array('email_id'=>$_REQUEST['id']));
			$this->notice(__('Newsletter deleted.',WYSIJA));
		}else{
			$this->notice(__('Newsletter can\'t be deleted.',WYSIJA));
		}

		$this->redirect();
	}

	function savecamp() {
		$this->redirectAfterSave = false;
                $this->requireSecurity();
		/* update email */
		$data = array();
		// in case the newsletter already exists
		if (isset($_REQUEST['id'])) {
			$modelEmail = WYSIJA::get('email', 'model');
			$modelEmail->fieldValid = false;
			$emaildataarr = $modelEmail->getOne(false, array('email_id' => $_REQUEST['id']));

			$model_campaign = WYSIJA::get('campaign', 'model');
			$model_campaign->update(array('name' => $_POST['wysija']['email']['subject'], 'description' => ''), array('campaign_id' => $emaildataarr['campaign_id']));

			$campaign_id = $emaildataarr['campaign_id'];
			$email_id = $emaildataarr['email_id'];
			$dataEmail = array(
				'campaign_id' => $campaign_id,
				'subject' => $_POST['wysija']['email']['subject'],
				'type' => $_POST['wysija']['email']['type']);

			if((int)$dataEmail['type'] === 2) {
				// set autonl params
				$dataEmail['params'] = array('autonl' => $_POST['wysija']['email']['params']['autonl']);

				// WTF?
				if(!isset($newparams['autonl']['unique_send'])) {
					unset($dataEmail['params']['autonl']['unique_send']);
				} else {
					$dataEmail['params']['autonl']['unique_send'] = true;
				}
			}

			// check if the newsletter used to be an automatic newsletter (if )
			if((int)$dataEmail['type'] === 1 && (int)$emaildataarr['type'] === 2) {
				// make sure we remove any kind of auto-post block
				$helper_autonews = WYSIJA::get('autonews', 'helper');
				$updated_email_data = $helper_autonews->remove_autopost_blocks($emaildataarr['wj_data']);
				if($updated_email_data !== false) {
					// if the email data has been changed, make sure to update it in the DB
					$dataEmail['wj_data'] = $updated_email_data;
				}
			}

			$modelEmail->columns['modified_at']['autoup'] = 1;
			$modelEmail->debugupdate = true;
			$dataEmail['email_id'] = $_REQUEST['id'];

			if(isset($_REQUEST['save-reactivate'])) {
				//if the button save and reactivate has been clicked then we reactivate and redirect to the newsletter page
				$dataEmail['status'] = 99;
				$_REQUEST['return'] = 1;
			}

			$data['email']['email_id'] = $modelEmail->update($dataEmail, array('email_id' => (int)$_REQUEST['id']));
		} else {
			// get default theme
			$model_config = WYSIJA::get('config', 'model');
			$default_theme = $model_config->getValue('newsletter_default_theme', 'default');

			$helper_themes = WYSIJA::get('themes', 'helper');
			$theme_data = $helper_themes->getData($default_theme);

			// get campaign data
			$model_campaign = WYSIJA::get('campaign', 'model');
			$campaign_id = $model_campaign->insert(array('name' => $_POST['wysija']['email']['subject'], 'description' => ''));

			$modelEmail = WYSIJA::get('email', 'model');
			$modelEmail->fieldValid = false;
			$emaildata = array(
				'campaign_id' => $campaign_id,
				'subject' => $_POST['wysija']['email']['subject'],
				'type' => (int) $_POST['wysija']['email']['type']
			);


			// create autonl parameters if necessary
			if ((int) $_POST['wysija']['email']['type'] === 2 && isset($_POST['wysija']['email']['params']['autonl'])) {
				$emaildata['params'] = array('autonl' => $_POST['wysija']['email']['params']['autonl']);
			}

			// create sample data depending on newsletter's type
			if ((int) $_POST['wysija']['email']['type'] === 2 && $_POST['wysija']['email']['params']['autonl']['event'] === 'new-articles') {

				// if immediate, post_limit is set to 1
				if ($emaildata['params']['autonl']['when-article'] === 'immediate') {
					$autopostParams = array(
						array('key' => 'category_ids', 'value' => null),
						array('key' => 'title_tag', 'value' => 'h2'),
						array('key' => 'title_alignment', 'value' => 'left'),
						array('key' => 'title_position', 'value' => 'inside'),
						array('key' => 'image_alignment', 'value' => 'alternate'),
						array('key' => 'image_width', 'value' => 325),
						array('key' => 'post_content', 'value' => 'excerpt'),
						array('key' => 'readmore', 'value' => base64_encode(__('Read more.', WYSIJA))),
						array('key' => 'show_divider', 'value' => 'yes'),
						array('key' => 'post_limit', 'value' => 1),
						array('key' => 'post_type', 'value' => 'post'),
						array('key' => 'author_show', 'value' => 'no'),
						array('key' => 'author_label', 'value' => base64_encode(__('Author:', WYSIJA))),
						array('key' => 'category_show', 'value' => 'no'),
						array('key' => 'category_label', 'value' => base64_encode(__('Categories:', WYSIJA))),
						array('key' => 'nopost_message', 'value' => base64_encode(__('Latest content already sent.', WYSIJA))),
						array('key' => 'bgcolor1', 'value' => null),
						array('key' => 'bgcolor2', 'value' => null),
						array('key' => 'sort_by', 'value' => 'newest')
					);
				} else {
					$autopostParams = array(
						array('key' => 'category_ids', 'value' => null),
						array('key' => 'title_tag', 'value' => 'h2'),
						array('key' => 'title_alignment', 'value' => 'left'),
						array('key' => 'title_position', 'value' => 'inside'),
						array('key' => 'image_alignment', 'value' => 'alternate'),
						array('key' => 'image_width', 'value' => 325),
						array('key' => 'post_content', 'value' => 'excerpt'),
						array('key' => 'readmore', 'value' => base64_encode(__('Read more.', WYSIJA))),
						array('key' => 'show_divider', 'value' => 'yes'),
						array('key' => 'post_limit', 'value' => 2),
						array('key' => 'post_type', 'value' => 'post'),
						array('key' => 'author_show', 'value' => 'no'),
						array('key' => 'author_label', 'value' => base64_encode(__('Author:', WYSIJA))),
						array('key' => 'category_show', 'value' => 'no'),
						array('key' => 'category_label', 'value' => base64_encode(__('Categories:', WYSIJA))),
						array('key' => 'nopost_message', 'value' => base64_encode(__('Latest content already sent.', WYSIJA))),
						array('key' => 'bgcolor1', 'value' => null),
						array('key' => 'bgcolor2', 'value' => null),
						array('key' => 'sort_by', 'value' => 'newest')
					);
				}

				// sample data for post notifications
				$newwjdata = array(
					'version' => WYSIJA::get_version(),
					'header' => array(
						'text' => NULL,
						'image' => array(
							'src' => WYSIJA_EDITOR_IMG . 'transparent.png',
							'width' => 600,
							'height' => 86,
							'alignment' => 'center',
							'static' => true,
						),
						'alignment' => 'center',
						'static' => true,
						'type' => 'header'
					),
					'body' => array(
						'block-1' => array(
							'text' => array(
								'value' => '<h3 class="align-right">' . sprintf(__("The posts below were added with the widget %sAutomatic latest content%s", WYSIJA), '<strong>', '</strong>') . '</h3>'
							),
							'image' => array(
								'src' => WYSIJA_EDITOR_IMG . 'default-newsletter/autonewsletter/arrow-up.png',
								'width' => 45,
								'height' => 45,
								'alignment' => 'right',
								'static' => false
							),
							'alignment' => 'right',
							'static' => false,
							'position' => '1',
							'type' => 'content'
						),
						'block-2' => array(
							'text' => array(
								'value' => '<h3>' . sprintf(__('%sTo edit%s, mouse over to show edit button below.', WYSIJA), '<strong>', '</strong>') . '</h3>'
							),
							'image' => array(
								'src' => WYSIJA_EDITOR_IMG . 'default-newsletter/autonewsletter/arrow-down.png',
								'width' => 150,
								'height' => 53,
								'alignment' => 'left',
								'static' => false
							),
							'alignment' => 'left',
							'static' => false,
							'position' => '2',
							'type' => 'content'
						),
						'block-3' => array(
							'params' => $autopostParams,
							'position' => '3',
							'type' => 'auto-post'
						)
					),
					'footer' => array(
						'text' => NULL,
						'image' => array(
							'src' => WYSIJA_EDITOR_IMG . 'transparent.png',
							'width' => 600,
							'height' => 86,
							'alignment' => 'center',
							'static' => true,
						),
						'alignment' => 'center',
						'static' => true,
						'type' => 'footer'
					)
				);
			} else {
				if(!isset($emaildata['params'])) {
					$emaildata['params'] = array();
				}

				$emaildata['params']['quickselection'] = array(
					'wp-301' => array(
						'identifier' => 'wp-301',
						'width' => 281,
						'height' => 190,
						'url' => WYSIJA_EDITOR_IMG . 'default-newsletter/newsletter/pigeon.png',
						'thumb_url' => WYSIJA_EDITOR_IMG . 'default-newsletter/newsletter/pigeon-150x150.png'
					)
				);

				if($theme_data['divider'] === null) {
					// default theme does not exist anymore or there is no divider associated to the theme
					// we need to get the default divider in this case
					$helper_dividers = WYSIJA::get('dividers', 'helper');
					$default_divider = $helper_dividers->getDefault();
				} else {
					// set default divider
					$default_divider = $theme_data['divider'];
				}
				// set default divider in email parameters
				$emaildata['params']['divider'] = $default_divider;

				// get bookmarks from iconset 2
				$helper_bookmarks = WYSIJA::get('bookmarks', 'helper');
				$bookmarks = $helper_bookmarks->getAllByIconset('medium', '02');

				// sample data for regular newsletter
				$newwjdata = array(
					'version' => WYSIJA::get_version(),
					'header' => array(
						'text' => null,
						'image' => array(
							// 'src' => WYSIJA_EDITOR_IMG.'default-newsletter/newsletter/header.png',
							'src' => WYSIJA_EDITOR_IMG . 'transparent.png',
							'width' => 600,
							'height' => 86,
							'alignment' => 'center',
							'static' => true
						),
						'alignment' => 'center',
						'static' => true,
						'type' => 'header'
					),
					'body' => array(
						'block-1' => array(
							'text' => array(
								'value' => '<h2><strong>' . __('Step 1:', WYSIJA) . '</strong> ' . __('hey, click on this text!', WYSIJA) . '</h2>' . '<p>' . __('To edit, simply click on this block of text.', WYSIJA) . '</p>'
							),
							'image' => null,
							'alignment' => 'left',
							'static' => false,
							'position' => 1,
							'type' => 'content'
						),
						'block-2' => array_merge(array(
								'position' => 2,
								'type' => 'divider'
							),
							$default_divider
						),
						'block-3' => array(
							'text' => array(
								'value' => '<h2><strong>' . __('Step 2:', WYSIJA) . '</strong> ' . __('play with this image', WYSIJA) . '</h2>'
							),
							'image' => null,
							'alignment' => 'left',
							'static' => false,
							'position' => 3,
							'type' => 'content'
						),
						'block-4' => array(
							'text' => array(
								'value' => '<p>' . __('Position your mouse over the image to the left.', WYSIJA) . '</p>'
							),
							'image' => array(
								'src' => WYSIJA_EDITOR_IMG . 'default-newsletter/newsletter/pigeon.png',
								'width' => 281,
								'height' => 190,
								'alignment' => 'left',
								'static' => false
							),
							'alignment' => 'left',
							'static' => false,
							'position' => 4,
							'type' => 'content'
						),
						'block-5' => array_merge(array(
							'position' => 5,
							'type' => 'divider'
								), $default_divider
						),
						'block-6' => array(
							'text' => array(
								'value' => '<h2><strong>' . __('Step 3:', WYSIJA) . '</strong> ' . __('drop content here', WYSIJA) . '</h2>' .
								'<p>' . sprintf(__('Drag and drop %1$stext, posts, dividers.%2$s Look on the right!', WYSIJA), '<strong>', '</strong>') . '</p>' .
								'<p>' . sprintf(__('You can even %1$ssocial bookmarks%2$s like these:', WYSIJA), '<strong>', '</strong>') . '</p>'
							),
							'image' => null,
							'alignment' => 'left',
							'static' => false,
							'position' => 6,
							'type' => 'content'
						),
						'block-7' => array(
							'width' => 184,
							'alignment' => 'center',
							'items' => array(
								array_merge(array(
									'url' => 'http://www.facebook.com/mailpoetplugin',
									'alt' => 'Facebook',
									'cellWidth' => 61,
									'cellHeight' => 32
										), $bookmarks['facebook']),
								array_merge(array(
									'url' => 'http://www.twitter.com/mail_poet',
									'alt' => 'Twitter',
									'cellWidth' => 61,
									'cellHeight' => 32
										), $bookmarks['twitter']),
								array_merge(array(
									'url' => 'https://plus.google.com/+Mailpoet',
									'alt' => 'Google',
									'cellWidth' => 61,
									'cellHeight' => 32
										), $bookmarks['google'])
							),
							'position' => 7,
							'type' => 'gallery'
						),
						'block-8' => array_merge(array(
							'position' => 8,
							'type' => 'divider'
								), $default_divider
						),
						'block-9' => array(
							'text' => array(
								'value' => '<h2><strong>' . __('Step 4:', WYSIJA) . '</strong> ' . __('and the footer?', WYSIJA) . '</h2>' .
								'<p>' . sprintf(__('Change the footer\'s content in MailPoet\'s %1$sSettings%2$s page.', WYSIJA), '<strong>', '</strong>') . '</p>'
							),
							'image' => null,
							'alignment' => 'left',
							'static' => false,
							'position' => 9,
							'type' => 'content'
						)
					),
					'footer' => array(
						'text' => NULL,
						'image' => array(
							// 'src' => WYSIJA_EDITOR_IMG.'default-newsletter/newsletter/footer.png',
							'src' => WYSIJA_EDITOR_IMG . 'transparent.png',
							'width' => 600,
							'height' => 86,
							'alignment' => 'center',
							'static' => true,
						),
						'alignment' => 'center',
						'static' => true,
						'type' => 'footer'
					)
				);
			}

			// set default styles
			$helper_engine = WYSIJA::get('wj_engine', 'helper');
			$styles = $helper_engine->getDefaultStyles();
			// end - set default styles

			// set theme specific data
			if($theme_data['header'] !== null) {
				$newwjdata['header'] = $theme_data['header'];
			}
			if($theme_data['footer'] !== null) {
				$newwjdata['footer'] = $theme_data['footer'];
			}
			if($theme_data['divider'] !== null) {
				$newwjdata['widgets'] = array('divider' => $theme_data['divider']);
			}
			// end - set theme specific data

			$emaildata['wj_data'] = base64_encode(serialize($newwjdata));
			$emaildata['wj_styles'] = base64_encode(serialize($styles));

			$email_id = $data['email']['email_id'] = $modelEmail->insert($emaildata);

			$this->notice(__('Newsletter successfully created.', WYSIJA));
		}

		$this->_saveLists($campaign_id, true);

		if (isset($_REQUEST['return']))
			$this->redirect();
		else {
			$this->redirect('admin.php?page=wysija_campaigns&action=editTemplate&id=' . $email_id);
		}
	}

	function saveemail() {
		$this->redirectAfterSave = false;
		$this->requireSecurity();
		$modelEmail = WYSIJA::get("email", "model");
		$modelEmail->fieldValid = false;
		$emaildataarr = $modelEmail->getOne(array('email_id' => $_REQUEST['id']));

		if (isset($_REQUEST['save-reactivate'])) {
			//if the button save and reactivate has been clicked then we reactivate and redirect to the newsletter page
			$dataEmail['status'] = 99;
			$_REQUEST['return'] = 1;
		}

		if (isset($_REQUEST['return']))
			$this->redirect();
		else {
			$this->redirect('admin.php?page=wysija_campaigns&action=editDetails&id=' . $emaildataarr['email_id']);
		}
	}

	function savelast() {
		$this->redirectAfterSave = false;
		$post_notification = false;
		$this->requireSecurity();

		if (!isset($_POST['wysija']['email']['from_name']) || !isset($_POST['wysija']['email']['from_email']) || !isset($_POST['wysija']['email']['replyto_name']) || !isset($_POST['wysija']['email']['replyto_email'])) {
			$this->error(__('Information is missing.', WYSIJA));
			return $this->editDetails();
		}
		if (isset($_REQUEST['wysija']['email']['params']['googletrackingcode']) && $_REQUEST['wysija']['email']['params']['googletrackingcode'] &&
				(!is_string($_REQUEST['wysija']['email']['params']['googletrackingcode']) OR
				preg_match('#[^a-z0-9_\-\s]#i', $_REQUEST['wysija']['email']['params']['googletrackingcode']) !== 0 )) {
			//force to simple text
			$_REQUEST['wysija']['email']['params']['googletrackingcode'] = preg_replace('#[^a-z0-9_\-\s]#i', '_', $_REQUEST['wysija']['email']['params']['googletrackingcode']);
			$this->error(__('Your Google Campaign can only contain latin characters, numbers, spaces and hyphens!', WYSIJA), 1);
			return $this->editDetails();
		}

		$update_email = array(
			'email_id' => $_POST['wysija']['email']['email_id'],
			'from_name' => $_POST['wysija']['email']['from_name'],
			'from_email' => $_POST['wysija']['email']['from_email'],
			'replyto_name' => $_POST['wysija']['email']['replyto_name'],
			'replyto_email' => $_POST['wysija']['email']['replyto_email'],
			'subject' => $_POST['wysija']['email']['subject'],
		);
		$model_email = WYSIJA::get('email', 'model');
		if (isset($_POST['wysija']['email']['params']))
			$update_email['params'] = $_POST['wysija']['email']['params'];

		//insert into campaigns lists
		$this->_saveLists($_POST['wysija']['campaign']['campaign_id']);
		$email_data = $model_email->getOne($_POST['wysija']['email']['email_id']);

		// if we just save the draf we don't go through the big sending process setup
		if (isset($_POST['submit-draft']) || isset($_POST['submit-pause']) || (isset($_REQUEST['wj_redir']) && $_REQUEST['wj_redir'] == 'savelastback')) {
			if (isset($_POST['wysija']['email']['params']['schedule']['isscheduled']))
				$this->notice(__('Newsletter has been scheduled.', WYSIJA));
			else
				$this->notice(__('Newsletter has been saved as a draft.', WYSIJA));

            if (isset($_POST['submit-draft'])) {

                $update_email['status'] = 0;// Email is being stored as draft

                if (isset($update_email['params']['schedule']['isscheduled'])) {
                    // draft emails should not be scheduled, clear any schedules
                    unset($update_email['params']['schedule']['isscheduled']);
                }
            }
		}else {
			// we update the param attribute with what's has been posted
			foreach ($update_email as $ki => $vi) {
				if ($ki == 'params') {
					foreach ($vi as $parake => $paraval) {
						$email_data['params'][$parake] = $paraval;
					}
					$update_email[$ki] = $email_data[$ki];
				}
				else
					$email_data[$ki] = $vi;
			}

			// if the checkbox to ignore retroactivity is  here we just tell the class
			if (isset($_POST['wysija']['email']['ignore_subscribers'])) {
				$model_email->retro_active_autoresponders = false;
			}

			// activate or send the email depending on the typ
			$model_email->send_activate($email_data);
		}

		// update email
		$update_email['type'] = $email_data['type'];

		if ($post_notification) {
			$helper_autonews = WYSIJA::get('autonews', 'helper');
			$update_email['params']['autonl']['nextSend'] = $helper_autonews->getNextSend($update_email);
		}

		$model_email->reset();
		$model_email->columns['modified_at']['autoup'] = 1;

        // re-render and save newsletter body (title may change during the last newsletter creation step)
        $wj_engine = WYSIJA::get('wj_engine', 'helper');
        // set data & styles
        $wj_engine->setData($email_data['wj_data'], true);
        $wj_engine->setStyles($email_data['wj_styles'], true);
        $email_data['subject'] = $_POST['wysija']['email']['subject'];
        $update_email['body'] = $wj_engine->renderEmail($email_data);
        // update some fields of the email
		$model_email->update($update_email);

		// update the campaign subject which ispretty much useless but good to keep in sync with the email
		$model_campaign = WYSIJA::get('campaign', 'model');
		$model_campaign->reset();
		$update_campaign = array('campaign_id' => $_REQUEST['id'], 'name' => $_POST['wysija']['email']['subject']);
		$model_campaign->update($update_campaign);

		if (isset($_REQUEST['wj_redir']) && $_REQUEST['wj_redir'] == 'savelastback') {
			return $this->redirect('admin.php?page=wysija_campaigns&action=editTemplate&id=' . $_POST['wysija']['email']['email_id']);
		}
		else
			return $this->redirect();
	}

	function _saveLists($campaignId, $flagup = false) {
		//record the list that we have in that campaign
		$modelCampL = WYSIJA::get('campaign_list', 'model');
		if ($flagup || (int) $campaignId > 0) {
			$modelCampL->delete(array('equal' => array('campaign_id' => $campaignId)));
			$modelCampL->reset();
		}

		if (isset($_POST['wysija']['campaign_list']['list_id'])) {
			//$modelCampL=WYSIJA::get("campaign_list","model");
			foreach ($_POST['wysija']['campaign_list']['list_id'] as $listid) {
				$modelCampL->insert(array('campaign_id' => $campaignId, "list_id" => $listid));
			}
		}
	}

	function _addLinkFilter($status, $type = 'status') {
		switch ($type) {
			case 'status':
				switch ($status) {
					case 'draft':
						$this->filters['equal'] = array('status' => 0);
						break;
					case 'sending':
						$this->filters['equal'] = array('status' => 99);
						break;
					case 'sent':
						$this->filters['equal'] = array('status' => 2);
						break;
					case 'paused':
						$this->filters['equal'] = array('status' => -1);
						break;
					case 'scheduled':
						$this->filters['equal'] = array('status' => 4);
						break;
				}
				break;
			case 'type':
				switch ($status) {
					case 'regular':
						$this->filters['equal'] = array('type' => 1);
						break;
					case 'autonl':
						$this->filters['equal'] = array('type' => 2);
						break;
				}
				break;
		}
	}

	/**
	 * Get all campaigns, based on the filters
	 */
	protected function get_campaigns() {
		$order_by = ' ORDER BY ';

		if (isset($_REQUEST['orderby'])) {
			if (!is_string($_REQUEST['orderby']) OR preg_match('|[^a-z0-9#_.-]|i', $_REQUEST['orderby']) !== 0) {
				$_REQUEST['orderby'] = '';
			}
			if (!in_array(strtoupper($_REQUEST['ordert']), array('DESC', 'ASC'))){
                            $_REQUEST['ordert'] = 'DESC';
                        }
			$order_by.=$_REQUEST['orderby'] . ' ' . $_REQUEST['ordert'];
		}else {
			$order_by.='FIELD(B.status, 99,3,1,0,2), ';
			$order_by.='B.status desc, ';
			$order_by.='B.modified_at desc, ';
			$order_by.='B.sent_at desc, ';
			$order_by.='B.type desc, ';
			$order_by.='A.' . $this->modelObj->getPk() . ' DESC';
		}

		$query = '
			SELECT
				A.`campaign_id`,
				A.`name` as `campaign_name`,
				B.`subject` as `name`,
				A.`description`,
				B.`params`,
				B.`type`,
				B.`number_sent`,
				B.`number_opened`,
				B.`number_clicked`,
				B.`number_unsub`,
			(B.`number_sent` +
			B.`number_opened` +
			B.`number_clicked` +
			B.`number_unsub` +
			B.`number_bounce` +
			B.`number_forward`
			) AS `number_total`,
				B.`status`,
				B.`created_at`,
				B.`modified_at`,
				B.`sent_at`,
				B.`email_id`
			FROM
				`[wysija]' . $this->modelObj->table_name . '` AS A
			LEFT JOIN
				`[wysija]email` AS B on A.`campaign_id` = B.`campaign_id`
			LEFT JOIN
				`[wysija]campaign_list` AS C on A.`campaign_id` = C.`campaign_id`';
		$campaigns = $this->modelObj->getResults($query . $this->modelObj->makeWhere() . ' GROUP BY B.email_id' . $order_by . $this->modelObj->setLimit());

		// calculate percetange of open / click / unsubscribe
		$helper_numbers = WYSIJA::get('numbers', 'helper');
		foreach ($campaigns as &$campaign) {
			// open rate, based on sent number
			$campaign['rate_opened'] = $helper_numbers->calculate_percetage($campaign['number_opened'], $campaign['number_total'], 1);
			// click rate, based on opened number
			$campaign['rate_clicked'] = $helper_numbers->calculate_percetage($campaign['number_clicked'], $campaign['number_total'], 1);
			// unsubscribe rate, based on opened number
			$campaign['rate_unsub'] = $helper_numbers->calculate_percetage($campaign['number_unsub'], $campaign['number_total'], 1);
		}
		return $campaigns;
	}

	/**
	 * Get the first campaign in history
	 */
	protected function get_oldest_compaign() {
		$query = '
			SELECT
				MIN(B.created_at) as datemin
			FROM `[wysija]' . $this->modelObj->table_name . '` as A
			LEFT JOIN
				`[wysija]email` AS B on A.campaign_id = B.campaign_id
			LEFT JOIN
				`[wysija]campaign_list` as C on A.campaign_id = C.campaign_id';

		return $this->modelObj->query('get_row', $query . $this->modelObj->makeWhere());
	}

	/**
	 * Count ALL emails of each email-status
	 * @todo: move to model
	 */
	protected function count_emails_by_status() {
	   $query = '
			SELECT
				COUNT(`email_id`) AS `campaigns`,
				`status`
			FROM
				`[wysija]email`
			WHERE
				`campaign_id` > 0
			GROUP BY `status`';

		$countss = $this->modelObj->query('get_res', $query);
		$counts = array();
		$total = 0;

		foreach ($countss as $count) {
			switch ($count['status']) {
				case '0':
					$type = 'draft';
					break;
				case '1':
				case '3':
				case '99':
					$type = 'sending';
					break;
				case '2':
					$type = 'sent';
					break;
				case '-1':
					$type = 'paused';
					break;
				case '4':
					$type = 'scheduled';
					break;
			}
			$total = $total + $count['campaigns'];
			$counts['status-' . $type] = $count['campaigns'];
		}
		return $counts;
	}

	/**
	 * Count emails which matched the filters
	 */
	protected function count_emails() {
		$query = '
			SELECT
				COUNT(DISTINCT B.`email_id`) AS `campaigns`
			FROM
				`[wysija]' . $this->modelObj->table_name . '` AS A
			LEFT JOIN
				`[wysija]email` AS B ON A.`campaign_id` = B.`campaign_id`
			LEFT JOIN
				`[wysija]campaign_list` AS C ON A.`campaign_id` = C.`campaign_id`';
		return $this->modelObj->count($query . $this->modelObj->makeWhere(), 'campaigns');
	}

	/**
	 * Count ALL emails of each type of email
	 */
	protected function count_emails_by_type() {
		$query = '
			SELECT
				COUNT(`email_id`) AS `campaigns`,
				`type`
			FROM
				`[wysija]email`
			WHERE
				`campaign_id` > 0
			GROUP BY `type`';
		$countss = $this->modelObj->query('get_res', $query, ARRAY_A);
		$counts = array();
		foreach ($countss as $count) {
			switch ($count['type']) {
				case '1':
					$type = 'regular';
					break;
				case '2':
					$type = 'autonl';
					break;
			}
			$counts['type-' . $type] = $count['campaigns'];
		}
		return $counts;
	}

	/**
	 * Get all existing lists
	 */
	protected function get_lists() {
		$model_list = WYSIJA::get('list', 'model');
		$query = '
			SELECT
				A.`list_id`,
				A.`name`,
				A.`is_enabled`,
				COUNT( B.`campaign_id` ) AS `users`
			FROM
				`[wysija]' . $model_list->table_name . '` as A
			LEFT JOIN
				`[wysija]campaign_list` AS B on A.`list_id` = B.`list_id`
			GROUP BY A.`list_id`';
		$result = $model_list->getResults($query);
		$lists = array();
		foreach ($result as $list_obj) {
			$lists[$list_obj['list_id']] = $list_obj;
		}
		return $lists;
	}

	function defaultDisplay() {
		$this->data['base_url'] = $this->base_url . '?' . http_build_query($_REQUEST); // saved filter
		$this->title = __('Newsletters', WYSIJA);
		$this->viewShow = $this->action = 'main';
		$this->js[] = 'wysija-admin-list';
		$this->jsTrans["selecmiss"] = __('Please select a newsletter.', WYSIJA);
		$this->jsTrans['suredelete'] = __('Delete this newsletter for ever?', WYSIJA);
		$this->jsTrans['suredelete_bulk'] = __('Delete these newsletters for ever?', WYSIJA);
		$this->jsTrans['processqueue'] = __('Sending batch of emails...', WYSIJA);
		$this->jsTrans['viewnews'] = __('View newsletter', WYSIJA);
		$this->jsTrans['confirmpauseedit'] = __('The newsletter will be deactivated, you will need to reactivate it once you\'re over editing it. Do you want to proceed?', WYSIJA);


		//get the filters
		if (isset($_REQUEST['search']) && $_REQUEST['search']) {
			$this->filters['like'] = array();
			foreach ($this->searchable as $field)
				$this->filters['like'][$field] = $_REQUEST['search'];
		}

		if (isset($_REQUEST['filter-list']) && $_REQUEST['filter-list']) {
			$this->filters['equal'] = array('C.list_id' => $_REQUEST['filter-list']);
		}

		if (isset($_REQUEST['filter-date']) && $_REQUEST['filter-date']) {
			$this->filters['greater_eq'] = array('created_at' => $_REQUEST['filter-date']);
			$this->filters['less_eq'] = array('created_at' => strtotime('+1 month', $_REQUEST['filter-date']));
		}

		$this->filters['is'] = array('type' => 'IS NOT NULL');


		if (isset($_REQUEST['link_filter']) && $_REQUEST['link_filter']) {
			$linkfilters = explode('-', $_REQUEST['link_filter']);

			if (count($linkfilters) > 1) {
				$this->_addLinkFilter($linkfilters[1], $linkfilters[0]);
			} else {
				$this->_addLinkFilter($_REQUEST['link_filter']);
			}
		}

		$this->modelObj->noCheck = true;
		$this->modelObj->reset();
		if ($this->filters){
                    $this->modelObj->setConditions($this->filters);
                }


		// Count emails by status and type
		$emails_by_status = $this->count_emails_by_status();
		$emails_by_type = $this->count_emails_by_type();
		$counts = array_merge($emails_by_status, $emails_by_type);
		$counts['all'] = array_sum($emails_by_status);

		// collect data
		$this->data['campaigns'] = $this->get_campaigns();
		$this->data['datemin'] = $this->get_oldest_compaign();
		$lists = $this->get_lists(); // $lists is in use later within this scope
		$this->data['lists'] = $lists;

		// for paging
		$this->modelObj->countRows = $counts['all'];
                if ($this->filters){
                    $count_emails = $this->count_emails();
                    if( !empty($count_emails) ){
                        $this->modelObj->countRows = $count_emails;
                    }
                }

		// count queue
		$email_ids = array();
		foreach ($this->data['campaigns'] as $emailcamp) {
			if (in_array($emailcamp['status'], array(1, 3, 99)))
				$email_ids[] = $emailcamp['email_id'];
		}
		$model_queue = WYSIJA::get('queue', 'model');
		$model_queue->setConditions(array("email_id" => $email_ids));
		$model_queue->groupBy('email_id');
		$queue = $model_queue->count();
		if ($queue) {
			$this->viewObj->queuedemails = $queue;
		}

		$this->modelObj->reset();

		//make a loop from the first created to now and increment an array of months
		$now = time();
		$this->data['dates'] = array();

		if ((int) $this->data['datemin']['datemin'] > 1) {
			setlocale(LC_TIME, 'en_US');
			$formtlettres = "1 " . date('F', $this->data['datemin']['datemin']) . ' ' . date("Y", $this->data['datemin']['datemin']);
			$month_start = strtotime($formtlettres);

			if ($month_start > 0) {
				for ($i = $month_start; $i < $now; $i = strtotime('+1 month', $i)) {
					$this->data['dates'][$i] = date_i18n('F Y', $i); //date('F Y',$i);
				}
			}
		}



		$campaign_ids_sent = $campaign_ids = array();
		foreach ($this->data['campaigns'] as &$campaign) {
			$campaign_ids[] = $campaign['campaign_id'];
			$model_email = WYSIJA::get('email', 'model');
			$model_email->getParams($campaign);
			if (in_array((int) $campaign['status'], array(-1, 1, 2, 3, 99)))
				$campaign_ids_sent[] = $campaign['campaign_id'];
		}

		// 3 - campaign_list request & count request for queue */
		if ($campaign_ids) {
			$model_campaign_list = WYSIJA::get('campaign_list', 'model');
			$userlists = $model_campaign_list->get(array('list_id', 'campaign_id'), array('campaign_id' => $campaign_ids));

			if ($campaign_ids_sent) {
				$model_campaign_list = WYSIJA::get("email_user_stat", "model");
				$statstotal = $model_campaign_list->getResults("SELECT COUNT(A.user_id) as count,B.email_id FROM `[wysija]queue` as A
					 JOIN `[wysija]email` as B on A.email_id=B.email_id
						WHERE B.campaign_id IN (" . implode(",", $campaign_ids_sent) . ") group by B.email_id");

				$senttotalgroupedby = $model_campaign_list->getResults("SELECT COUNT(A.user_id) as count,B.campaign_id,B.email_id,B.type,B.status,A.status as statususer FROM `[wysija]" . $model_campaign_list->table_name . "` as A
					 JOIN `[wysija]email` as B on A.email_id=B.email_id
						WHERE B.campaign_id IN (" . implode(",", $campaign_ids_sent) . ") group by A.status,B.email_id"); //,A.status


				$updateEmail = array();
				$columnnamestatus = array(0 => "number_sent", 1 => "number_opened", 2 => "number_clicked", 3 => "number_unsub", -1 => "number_bounce");
				foreach ($senttotalgroupedby as $sentbystatus) {
					if ($sentbystatus['statususer'] != "-2")
						$updateEmail[$sentbystatus['email_id']][$columnnamestatus[$sentbystatus['statususer']]] = $sentbystatus['count'];
					if (isset($senttotal[$sentbystatus['email_id']])) {
						$senttotal[$sentbystatus['email_id']]['count'] = (int) $senttotal[$sentbystatus['email_id']]['count'] + (int) $sentbystatus['count'];
					} else {
						unset($sentbystatus['statususer']);
						$senttotal[$sentbystatus['email_id']] = $sentbystatus;
					}
				}

				$model_email = WYSIJA::get('email', 'model');

				foreach ($updateEmail as $emailid => $update) {

					foreach ($columnnamestatus as $v) {
						if (!isset($update[$v]))
							$update[$v] = 0;
					}

					$model_email->update($update, array('email_id' => $emailid));
					$model_email->reset();
				}


				$model_config = WYSIJA::get('config', 'model');
				$running = false;

				$is_multisite = is_multisite();

				if ($is_multisite && $model_config->getValue('sending_method') == 'network') {
					$sending_emails_each = $model_config->getValue('ms_sending_emails_each');
				} else {
					$sending_emails_each = $model_config->getValue('sending_emails_each');
				}

				if ($model_config->getValue('cron_manual')) {
					$formsHelp = WYSIJA::get('forms', 'helper');
					$queue_frequency = $formsHelp->eachValuesSec[$sending_emails_each];
					$queue_scheduled = WYSIJA::get_cron_schedule('queue');

					$next_scheduled_queue = $queue_scheduled['next_schedule'];
					$running = $queue_scheduled['running'];

					if ($running) {
						$helper_toolbox = WYSIJA::get('toolbox', 'helper');
						$running = time() - $running;
						$running = $helper_toolbox->duration_string($running, true, 4);
					}
				} else {
					$schedules = wp_get_schedules();
					$queue_frequency = $schedules[wp_get_schedule('wysija_cron_queue')]['interval'];
					$next_scheduled_queue = wp_next_scheduled('wysija_cron_queue');
				}



				$status_sent_complete = array();
				if (isset($senttotal) && $senttotal) {
					foreach ($senttotal as $sentot) {
						if ($sentot) {
							$this->data['sent'][$sentot['email_id']]['total'] = $sentot['count'];
							$this->data['sent'][$sentot['email_id']]['to'] = $sentot['count'];
						} else {
							$this->data['sent'][$sentot['email_id']]['total'] = $this->data['sent'][$sentot['email_id']]['to'] = 0;
						}
						$this->data['sent'][$sentot['email_id']]['status'] = $sentot['status'];
						$this->data['sent'][$sentot['email_id']]['type'] = $sentot['type'];
						$this->data['sent'][$sentot['email_id']]['left'] = (int) $this->data['sent'][$sentot['email_id']]['total'] - (int) $this->data['sent'][$sentot['email_id']]['to'];
					}
				}

				foreach ($statstotal as $sentot) {
					if (!isset($this->data['sent'][$sentot['email_id']])) {
						$this->data['sent'][$sentot['email_id']]['total'] = 0;
						$this->data['sent'][$sentot['email_id']]['to'] = 0;
					}
					$this->data['sent'][$sentot['email_id']]['total'] = $this->data['sent'][$sentot['email_id']]['total'] + $sentot['count'];
					$this->data['sent'][$sentot['email_id']]['left'] = (int) $this->data['sent'][$sentot['email_id']]['total'] - (int) $this->data['sent'][$sentot['email_id']]['to'];
				}

				if ($is_multisite && $model_config->getValue('sending_method') == 'network') {
					$sending_emails_number = $model_config->getValue('ms_sending_emails_number');
				} else {
					$sending_emails_number = $model_config->getValue('sending_emails_number');
				}

				if (isset($this->data['sent'])) {
					foreach ($this->data['sent'] as $key => &$camp) {
						if ($this->data['sent'][$key]['left'] > 0) {
							$cronsneeded = ceil($this->data['sent'][$key]['left'] / $sending_emails_number);
							$this->data['sent'][$key]['remaining_time'] = $cronsneeded * $queue_frequency;
							$this->data['sent'][$key]['running_for'] = $running;
							$this->data['sent'][$key]['next_batch'] = $next_scheduled_queue - time();
							$this->data['sent'][$key]['remaining_time'] = $this->data['sent'][$key]['remaining_time'] - ($queue_frequency) + $this->data['sent'][$key]['next_batch'];
						} else {
							if ((in_array($this->data['sent'][$key]['status'], array(1, 3, 99))) && $this->data['sent'][$key]['type'] == 1)
								$status_sent_complete[] = $key;
						}
					}
				}


				// status update to sent for the one that are sent
				if (count($status_sent_complete) > 0) {
					$model_email = WYSIJA::get('email', 'model');
					$model_email->noCheck = true;
					$model_email->reset();
					$model_email->update(array('status' => 2), array('equal' => array('email_id' => $status_sent_complete)));
				}
			}
		}

		$this->data['counts'] = array_reverse($counts);

		// regrouping all the data in the same array
		foreach ($this->data['campaigns'] as &$campaign) {
			// default key while we don't have the data
			//TODO add data for stats about emails opened clicked etc
			$campaign["emails"] = 0;
			$campaign["opened"] = 0;
			$campaign["clicked"] = 0;

			if ($userlists) {
				foreach ($userlists as $key => $userlist) {
					if ($campaign["campaign_id"] == $userlist["campaign_id"] && isset($lists[$userlist["list_id"]])) {
						if (!isset($campaign["lists"]))
							$campaign["lists"] = $lists[$userlist["list_id"]]["name"];
						else
							$campaign["lists"].=", " . $lists[$userlist["list_id"]]["name"];
					}
				}
			}
			if (isset($campaign["lists"]) && !$campaign["lists"])
				unset($campaign["lists"]);

			if (((isset($campaign['params']['schedule']['isscheduled']) ||
					($campaign['type'] == 2 && isset($campaign['params']['autonl']['event']) && in_array($campaign['params']['autonl']['event'], array('new-articles'/* ,'subs-2-nl' */)))
					) && $campaign['status'] != 2 && !isset($campaign["lists"])) || ($campaign['type'] == 2 && isset($campaign['params']['autonl']['event']) && in_array($campaign['params']['autonl']['event'], array('subs-2-nl')) && $campaign['status'] != 2 && (!isset($campaign['params']['autonl']['subscribetolist']) || !isset