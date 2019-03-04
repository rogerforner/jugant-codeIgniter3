<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="container">
	<h1>CUERPO</h1>

	<div id="body">
    <pre><?php print_r($numbers); ?></pre>
    <hr>
    <pre><?php print_r($names); ?></pre>
	</div>
  <?php echo base_url(); ?>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

