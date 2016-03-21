<?php snippet('header') ?>
<main class="parallax home">

	 <section class="slide parallax__group">
      <section class="parallax__layer parallax__layer--base">
      	<div class="container para--content">	
	       
	       <div class="row col-md-6">
		       	<div class="polo">
					<?php echo getPoloImage($page) ?>
			  	</div><!--polo-->
		  	</div><!-- .row-->
	       
	        <div class="intro post-it-bg-two row col-md-6 content-right"> 
				    <h1  class="post-it-title"><a href="<?php echo $page->buttonurl()->html() ?>"><?php echo $page->posttitle()->html() ?></a></h1>
				    <p><?php echo $page->text()->kirbytext() ?></p>

					<a class="btn btn-arrow" href="<?php echo $page->buttonurl()->html() ?>" role="button"><span><?php echo $page->button()->html() ?></span></a>
			</div><!--./post-it-bg-two -->


      	</div>
      </section>
    </section>


	<?php snippet('new-home-section') ?>	
  
  	<?php snippet('footer-home') ?>	

</main>

