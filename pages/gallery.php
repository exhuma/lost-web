<br />
<?php
require_once("phpflickr/phpFlickr.php");

$flickr = new phpFlickr(trim(file_get_contents('flickr_key.txt')));

#$recent = $flickr->photos_search(array("tags" => "mamerwiselen:event=lost2013"));
$photos = $flickr->photosets_getPhotos('72157642905812775');
if ($photos['photoset']['total'] == 0) {
  ?>
  <p class="note">Hei ass nach näischt!</p>
  <?php
} else {
  foreach ($photos['photoset']['photo'] as $photo) {
      printf("<a href=\"http://farm%s.staticflickr.com/%s/%s_%s.jpg\"><img src=\"http://farm%s.staticflickr.com/%s/%s_%s_q.jpg\" /></a>",
        $photo['farm'],
        $photo['server'],
        $photo['id'],
        $photo['secret'],
        $photo['farm'],
        $photo['server'],
        $photo['id'],
        $photo['secret']);
  }
}
