<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Calculator</title>

  <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
  <link rel="stylesheet" href="<?php echo asset_url(); ?>css/normalize.css" />
  <link rel="stylesheet" href="<?php echo asset_url(); ?>css/foundation.css" />

  <script src="<?php echo asset_url(); ?>js/vendor/custom.modernizr.js"></script>

</head>
<body>

<h1>Hello, world?</h1>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? '<?php echo asset_url(); ?>js/vendor/zepto' : '<?php echo asset_url(); ?>js/vendor/jquery') +
  '.js><\/script>')
  </script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.alerts.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.clearing.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.cookie.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.dropdown.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.forms.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.joyride.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.magellan.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.orbit.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.placeholder.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.reveal.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.section.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.tooltips.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.topbar.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.interchange.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>
