<?php snippet( 'header') ?>
<main class="page post-background">

  <section id="hero" class="featured-image" >
    <?php 
      $image = getCoverImageSRC($post);

    ?>

<style type="text/css">

      .featured-image{
        background-image: url(<?php echo $image ?>);
      }
      
</style>
      <header class="post-header">
        <h1 class="post-title">
          <a href="<?= getPostUrl($post) ?>">
            <?= $post->title()->html() ?>
          </a>
        </h1>
      </header>
  </section>

  <section id="post" class="blank-page">

    <?php snippet('post-header') ?>
    
    <div class="post-divider"></div>
    
    <article class="readability">

      <?= $post->text()->kirbytext() ?>

    </article>


    <?php snippet('post-footer', array(  $post        => true,
                                         'author'     => true,
                                         'tags'       => true,
                                         'categories' => true)) ?>
    

    <?= snippet('nav-pager') ?>

  </section>
</main>
<?php snippet('footer') ?>
