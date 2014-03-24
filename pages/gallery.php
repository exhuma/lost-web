<br />
<?php
require_once("phpflickr/phpFlickr.php");

die('You need to set Flickr API key, and remove this line!');
$f = new phpFlickr("<api key>");

$recent = $f->photos_search(array("tags" => "mamerwiselen:event=lost2014"));

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
