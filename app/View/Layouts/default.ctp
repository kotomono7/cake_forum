<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>

<!DOCTYPE html>
<html>
<head>
  <?php echo $this->Html->charset(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CakePHP Forum</title>
  <?php
    echo $this->Html->meta('icon');
    echo $this->Html->script('jquery-1.9.1');
    echo $this->Html->script('ckeditor/ckeditor', array('inline' => false));
    echo $this->Html->css('bootstrap');
    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('styles');
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
  ?>
</head>
<body>
  <div class="container">
	<div id="header">
		<?php echo $this->element('navigation'); ?>
	</div>

	<div id="content">
		<?php $msg_auth = $this->Session->flash('auth'); ?>
		<?php if (trim($msg_auth) != "" ) { ?>
      <div class="alert alert-danger">
      	<button type="button" class="close" data-dismiss="alert">&times;</button>
      	<?php echo $msg_auth; ?>
      </div><!-- /.alert alert-danger -->
		<?php } ?>
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>

	<div id="footer">
		<p class="text-muted text-center">
			CakePHP Forum &copy; 2015, Powered by <?php echo $cakeVersion; ?>
      <br>Developed by <a href="http://www.github.com/umamscarlet" target="_blank">Muhammad Khoirul Umam</a>
		</p>

		<p id="ScrollToTop" class="text-center">
		<button type="button" class="btn btn-xs btn-primary" id="scroll-to-top" title="Scroll to Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</button>
		</p>
	</div>

  </div> <!-- /container -->

  <!-- Bootstrap core JavaScript, placed at the end of the document so the pages load faster -->
  <?php echo $this->Html->script('jquery-1.10.2.min'); ?>
  <?php echo $this->Html->script('bootstrap.min'); ?>

  <script type="text/javascript">
		$(function() {
			$(window).scroll(function() {
				if($(this).scrollTop() > 100) {
					$('#ScrollToTop').fadeIn();
				} else {
					$('#ScrollToTop').fadeOut();
				}
			});
		});

		$(document).ready(function() {
			$('#scroll-to-top').click(function() {
				$('html, body').animate({scrollTop: 0}, 1000);
				return false;
			});
		});
  </script>
</body>
</html>
