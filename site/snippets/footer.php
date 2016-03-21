<footer class="footer-main">

	<div class="container">
      <div id="colophon" class="col-md-6">
        <img src="<?php echo getFooterImageSRC($site); ?>" />  
        
      </div>

      <div id="copyright" class="col-md-6">
        <?php echo $site->copyright()->kirbytext() ?>
      </div>
	</div>
<?php snippet('scripts') ?>
</footer>

  </body>
</html>
