<?php
if(!isset($date))     $date     = true;
if(!isset($author))   $author   = true;
if(!isset($avatar))   $avatar   = false;
if(!isset($tags))     $tags     = false;
if(!isset($category)) $category = false;
if(!isset($class))    $class    = false;
?>
  <section id="post-header" class="cf">

    <?php if($author && $post->author() != ""): ?>
      <div class="author">
        By:
       <?= getAuthorName((string)$post->author()) ?>
      </div>
    <?php endif ?>

    <?php if($avatar && $post->author() != ""): ?>
      <?php if($avatar = $site->user((string)$post->author())->avatar()): ?>
        <div class="avatar">
          <img src="<?= $avatar->url() ?>"
               alt="<?= getAuthorName((string)$post->author()) ?>'s avatar">
        </div>
      <?php endif ?>
    <?php endif ?>

     <?php if($date): ?>
      <div class="datetime">
        <time datetime="<?= $post->date('Y-m-d') ?>">
          Posted on: 
          <?= $post->date('d/m/Y') ?>
        </time>
      </div>
    <?php endif ?>


  </section>
