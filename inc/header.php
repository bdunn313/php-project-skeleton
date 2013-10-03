<!DOCTYPE html>
<html>
  <head>
    <title>
      <?= 
      ($page_title ? 
        $page_title . ' &bull; ' . $config->site_title : 
        $config->site_title) 
      ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?= $config->base_url ?>assets/css/main.min.css" rel="stylesheet" media="screen">

    <link rel="shortcut icon" href="<?= $config->base_url ?>assets/ico/favicon.ico" type="image/x-icon"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?= $config->base_url ?>assets/js/html5shiv.js"></script>
      <script src="<?= $config->base_url ?>assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
