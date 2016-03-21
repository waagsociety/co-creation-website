<?php
if(!isset($date))     $date     = true;
if(!isset($author))   $author   = false;
if(!isset($avatar))   $avatar   = false;
if(!isset($tags))     $tags     = false;
if(!isset($category)) $category = false;
if(!isset($class))    $class    = false;
?>

<footer id="post-footer" <?php if($class) echo 'class="' . $class . '"' ?>>
  <section class="cf">
    
    <section class="pull-left">

      <?php if($author && $post->author() != ""): ?>
        <div class="author">
          Author:
         
            <?= getAuthorName((string)$post->author()) ?>

        </div>
      <?php endif ?>

      <?php if($avatar && $post->author() != ""): ?>
        <?php if($avatar = $site->user((string)$post->author())->avatar()): ?>
          <div class="avatar">
            Avatar:
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

  
    </section>
  </section>
</footer>
