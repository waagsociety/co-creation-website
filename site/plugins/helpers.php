<?php

/**
 * getPostUrl()
 *
 * Returns the full URL of a given post in wordpress-style.
 *
 * @param  mixed $post
 * @return string
 */
function getPostUrl($post) {
  $site = site();

  $uri  = $site->url();
  $uri .=   '/' . 'articles'
          . '/' . $post->slug();

  return $uri;
}

/**
 * getAuthorName()
 *
 * Returns the full name of a given author instead of the username.
 *
 * @param  string $username
 * @return string
 */
function getAuthorName($username) {
  $site = site();
  $author = $site->users()->get($username);
  $name = $username;

  if($author) {
    if($author->firstname()) {
      $name =  $author->firstname();
      if($author->lastname()){
        $name .= ' ' . $author->lastname();
      }
    }
  }

  return $name;
}

/**
 * getCoverImage()
 *
 * Returns an img-element with the coverimage for a given post if exists.
 *
 * @param  mixed $post
 * @return string
 */
function getCoverImage($post) {

  $coverimage = (string)$post->coverimage();

  if($coverimage != "") {
    $img = brick('img');
    $img->attr('src', $post->image($coverimage)->url());
    $img->attr('alt', $post->title()->html());

    return $img;
  }
}


/* Gets cover image source to place image as background image LS */
function getCoverImageSRC($post) {

  $coverimage = (string)$post->coverimage();

  if($coverimage != "") {

    $img = $coverimage;
    $src = $post->image($coverimage)->url();

    return $src;
  }

}
/* Gets the footer image from the site options page LS*/
function getFooterImageSRC($site) {

  $footerimage = (string)$site->footerimage();

  if($footerimage != "") {

    $img = $footerimage;
    $src = $site->image($footerimage)->url();

    return $src;
  }

}

/* Gets the footer image from the site options page LS*/
function getHeaderImageSRC($site) {

  $headerimage = (string)$site->headerimage();

  if($headerimage != "") {

    $img = $headerimage;
    $src = $site->image($headerimage)->url();

    return $src;
  }

}

/* Gets the poloroid image for front page LS*/
function getPoloImage($section) {

  $poloimage = (string)$section->poloimage();

  if($poloimage != "") {
    $img = brick('img');
    $img->attr('src', $section->image($poloimage)->url());
    $img->attr('alt', $section->title()->html());

    return $img;
  }
}

/**
 * getDatesArchive()
 *
 * Returns all years and months where posts exists.
 *
 * @return array
 */
function getDatesArchive() {
  $site = site();
  $posts = $site->find('posts')->children()->visible();

  if($posts->count() > 0) {
    foreach ($posts as $post) {
      $year = $post->date('Y');
      $month = $post->date('m');
      if(isset($dates[$year][$month])) {
        $dates[$year][$month] += 1;
      } else {
        $dates[$year][$month] = 1;
      }
    }
    return $dates;
  }
}

/**
 * getTagsArchive()
 *
 * Returns tagcloud.
 *
 * @return array
 */
function getTagsArchive() {
  return tagcloud(page('posts'), array('field'   => 'tags',
                                       'param'   => 'tag',
                                       'baseurl' => ''));
}

/**
 * getTagsArchive()
 *
 * Returns categorycloud.
 *
 * @return array
 */
function getCategoriesArchive() {
  return tagcloud(page('posts'), array('field'   => 'category',
                                       'param'   => 'category',
                                       'baseurl' => ''));
}

/**
 * getAuthorsArchive()
 *
 * Returns authorcloud.
 *
 * @return array
 */
function getAuthorsArchive() {
  return tagcloud(page('posts'), array('field'   => 'author',
                                       'param'   => 'author',
                                       'baseurl' => ''));
}
?>
