<?php

$url = 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
?>

<!-- Comment form -->
<h3>Dejá tu comentario</h3>

<div class="well">
  <div class="fb-share-button" data-href=<?php echo $url;?> data-layout="button" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u="<?php echo $url;?>"&amp;src=sdkpreparse">Compartir video</a></div>
  <div class="fb-comments" data-href=<?php echo $url;?> data-width="100%" data-numposts="10"></div>
</div>