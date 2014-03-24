<br />
<?php
require_once("phpflickr/phpFlickr.php");

$f = new phpFlickr(trim(file_get_contents('flickr_key.txt')));

$recent = $f->photos_search(array("tags" => "mamerwiselen:event=lost2013"));

foreach ($recent['photo'] as $photo) {
    $owner = $f->people_getInfo($photo['owner']);
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
