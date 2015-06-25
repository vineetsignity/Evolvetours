<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<link rel="icon" href="<?php echo $this->webroot; ?>img/favicon.png" type="image/png" />
<link rel="shortcut icon" href="<?php echo $this->webroot; ?>img/favicon.png" type="image/png" />
<title>Evolve Tours Login Form</title>
<meta name="generator" content="Bootply" />
<meta name="description" content="The premier educational travel &amp; student travel company. We offer school trips &amp; teen tours to the world’s most incredible travel destinations."/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php
	echo $this->Html->css(array(
		'bootstrap.min.css',
		'style.css',
		'styles.css'
	));
	
	echo $this->Html->script(array(
		'//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js',
		'bootstrap.min.js',
	));
?>
<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
</head>
<body class="background">
<div class="container">
  <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
    <div class="panel panel-default" >
      <div class="panel-heading">
        <div class="panel-title text-center"><img src="<?php echo $this->webroot; ?>img/logo.png"></div>
        <?php echo $this->Session->flash('auth'); ?>
        <?php echo $this->Session->flash(); ?>
      </div>
			<?php echo $this->fetch('content'); ?>
		<!----content for layout------------->
    </div>
    </form>
  </div>
</div>
</div>
</div>
<!-- script references --> 
</body>
</html>
