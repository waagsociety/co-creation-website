<?php snippet('header') ?>

  <main class="main page practices-background" role="main">

    <section id="hero" class="featured-image" >
        <?php 
          $image = getCoverImageSRC($page);

        ?>

    <style type="text/css">

          .featured-image{
            background-image: url(<?php echo $image ?>);
          }
          
    </style>
          <header class="post-header">
            <h1 class="post-title">
              <a href="#">
                <?php echo $page->title()->html() ?>
              </a>
            </h1>
          </header>
      </section>

<section class="blank-page">
    
    <div class="text">

        <?php if($page->imageslider() == '1' ): ?>

          <?php snippet('image-slide') ?>

        <?php else:?>

        <?php endif ?>

        <div class="post-divider"></div>
    
    <div class="readability">

        <?php echo $page->text()->kirbytext() ?>

        <?php   $video = (string)$page->video();

                  if($video != ""):   ?>

          <div class="video"><?php echo $page->video() ?></div>

          <?php endif ?>


        <?php   $references = (string)$page->references();

                  if($references != ""):   ?>
        <section class="references text">
          <article class="sources">
            <?php echo $page->references()->kirbytext() ?>
          </article>
        </section>
    <?php endif ?>

    </div>

    

    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev pull-left" href="<?php echo $prev->url() ?>">&larr; previous</a>
      <?php endif ?>
      
      <?php if($next = $page->nextVisible()): ?>
      <a class="next pull-right" href="<?php echo $next->url() ?>">next &rarr;</a>
      <?php endif ?>
    </nav>

    </div>
</section>

  </main>

<?php snippet('footer') ?>