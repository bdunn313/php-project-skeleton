  
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?= $config->base_url ?>assets/js/bootstrap.min.js"></script>
  <?php if( ! empty($scripts) && is_array($scripts)): ?>
  <?php foreach($scripts as $script): ?>
  <script src="<?= $config->base_url ?>assets/js/<?= $script ?>.js"></script>
  <?php endforeach; ?>
  <?php endif; ?>
  </body>
</html>