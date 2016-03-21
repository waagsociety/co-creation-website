<?php foreach(page('home')->children()->visible()->limit(4) as $section): ?>
	<section class="slide parallax__group">

		<?php if($section->sectiontwo() == '1'): ?>

    <div class="container parallax__layer parallax__layer--base">
		
		<div class="post-it-bg row col-md-6">
			
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

    </div><!--.base-layer -->
    
    <div class="slide2 parallax__layer parallax__layer--back"></div>


		<?php elseif($section->sectionthree() == '1'): ?>

		<div class="overlay overlay-three">
			<div class="container cf">

				<div class="parallax__layer--base">
				
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

				</div><!--/.base-->
			   
		</div> <!--/.container-->
		</div><!--/.overlay/-->

		<?php else: ?>
			<div class="container cf">

				<div class="parallax__layer--base">

						<div class="post-it-bg row col-md-6">
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
				
		  	</div> <!--/.container-->
		<?php endif ?>

<?php endforeach ?>
</section> <!--/.slide -->

