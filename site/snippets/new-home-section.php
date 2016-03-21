<?php foreach(page('home')->children()->visible()->limit(4) as $section): ?>
    

  <section class="slide parallax__group">

    <?php if($section->sectiontwo() == '1'): ?>

    <div class="parallax__layer parallax__layer--base">
      <div class="container para--content">
      <div class="post-it-bg row col-md-6 content">
        
        <h1 class="post-it-title"><a href="<?php echo $section->buttonurl()->html() ?>"><?php echo $section->title()->html() ?></a></h1>

          <p><?php echo $section->text() ?></p>

        <?php if($section->buttonurl()->empty()): ?>

        <?php else:?>
          
          <a class="btn btn-arrow" href="<?php echo $section->buttonurl()->html() ?>" role="button"><span><?php echo $section->button()->html() ?></span></a>

          <?php endif ?>

      </div><!--/.post-it -->

        <div class="polo">
      <?php echo getPoloImage($section) ?>
        </div><!--polo-->
      </div> <!--.container-->
    </div><!--.base-layer -->
    
    <div class="parallax__layer parallax__layer--back"><div class="parallax__layer overlay"></div></div>


    <?php elseif($section->sectionthree() == '1'): ?>
      
        <nav id="nav-arrows" class="nav-arrows">
          <span class="nav-arrow-prev">Previous</span>
          <span class="nav-arrow-next">Next</span>
        </nav>

    <div id="slider" class="sl-slider-wrapper">
    <div class="sl-slider">
      <section class="sl-slide parallax__layer parallax__layer--fore">
        
          <div class="container para--content"> 
            <div class="row col-md-6">
                  <div class="polo polo-two">
                <?php echo getPoloImage($section) ?>
                  </div>
            </div><!-- .row-->
            
            <div class="post-it-bg-two row col-md-6 content-right">
              <h1 class="post-it-title"><a href="<?php echo $section->buttonurl()->html() ?>"><?php echo $section->title()->html() ?></a></h1>

                <p><?php echo $section->text() ?></p>

              <?php if($section->buttonurl()->empty()): ?>

              <?php else:?>
                <a class="btn btn-arrow" href="<?php echo $section->buttonurl()->html() ?>" role="button"><span><?php echo $section->button()->html() ?></span></a>
                <?php endif ?>
            </div><!--/.post-it -->
          </div>
       
      </section>
      <section class="parallax__layer parallax__layer--base"> <div class="overlay parallax__layer"> </div></section>
      </div><!--.slider-->
    </div><!--.wrapper-->

      <ul class="slideshow project-list cf">
        <?php foreach(page('projects')->children()->visible() as $project): ?>
        <li>
          <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
          <p><?php echo $project->text()->excerpt(80) ?> <a href="<?php echo $project->url() ?>">read&nbsp;more&nbsp;→</a></p>
          <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
          <div style="background-image: url('<?php echo $image->url() ?>');" class="row col-md-6">
<!--             <div class="polo polo-two">
              <a href="<?php echo $project->url() ?>">
                <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
              </a>
            </div> -->
          </div>
          <?php endif ?>
        </li>
        <?php endforeach ?>
      </ul>

     




    <?php else: ?>
      
      <section class="parallax__layer parallax__layer--base">
        <div class="container para--content">
            <div class="post-it-bg row col-md-6 content">
              <h1 class="post-it-title"><a href="<?php echo $section->buttonurl()->html() ?>"><?php echo $section->title()->html() ?></a></h1>

                <p><?php echo $section->text() ?></p>
            
            <?php if($section->buttonurl()->empty()): ?>

            <?php else:?>
                <a class="btn btn-arrow" href="<?php echo $section->buttonurl()->html() ?>" role="button"><span><?php echo $section->button()->html() ?></span></a>
              <?php endif ?>
            
            </div><!--/.post-it -->

            <div class="polo">
          <?php echo getPoloImage($section) ?>
          </div>

        </div><!--/.base-->
      </section>
      <section class="parallax__layer parallax__layer--back">
        <section class="para--content"></section>
      </section>
      <section class="parallax__layer parallax__layer--deep">
        <section class="para--content"></section>
      </section>



    <?php endif ?>

</section> <!--/.slide -->

<?php endforeach ?>


