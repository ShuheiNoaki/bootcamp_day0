<!DOCTYPE html>
<html lang="ja">
<head>
	<?php echo $this->Html->charset(); ?>
	<?php
	echo $this->Html->meta('icon');
	echo $this->Html->css('bootstrap.min');
	echo $this->Html->css('stylesheet');
	?>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
	<div> 
		<?php echo $this->element('header');?>
		<?php echo $this->fetch('content');?>
		<?php echo $this->element('footer');?>
		<?php echo $this->element('lazy-loading');?>
	</div>
</body>
</html>

