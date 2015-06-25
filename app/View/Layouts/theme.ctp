<?php echo $this->Html->docType('html5'); ?>
<html>
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
	<?php
	echo $this->Html->charset();
	echo $this->Html->meta(
			'charset',
			'utf-8'
		);
	echo $this->Html->tag('title', $this->fetch('title') , array());
	echo $this->Html->meta(
		'img/favicon.png',
		'/img/favicon.png',
		array('type' => 'icon')
	);
	echo $this->Html->meta(
		'keywords',
		'Evolve Tours Admin Panel'
	);	
	echo $this->Html->meta(
		'description',
		'Evolve Tours Admin Panel Settings'
	);
	echo $this->Html->meta(
		'author',
		'Evolve Tours'
	);
	echo $this->Html->meta(
		'viewport',
		'width=device-width, initial-scale=1.0'
	);
	
	
	echo $this->Html->css(array(
		'//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800', // Font CSS (Via CDN)
		'//fonts.googleapis.com/css?family=Roboto:400,500,700,300', // Font CSS (Via CDN)
		''.Configure::read('BaseURL').'/files/theme/assets/skin/default_skin/css/theme.css', //Theme CSS 
		''.Configure::read('BaseURL').'/files/theme/assets/js/utility/highlight/styles/googlecode.css', //Admin Forms CSS
		''.Configure::read('BaseURL').'/files/theme/vendor/plugins/datatables/media/css/dataTables.bootstrap.css',
		
	));

	echo $this->Html->meta(array('name' => 'robots', 'content' => 'noindex'));
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>
<body class="<?php echo $this->request->params['controller'].$this->request->params['action']; ?> tables-datatables-page">
<script>
var boxtest = localStorage.getItem('boxed');
if (boxtest === 'true') {
	document.body.className += ' boxed-layout';
}
</script>
    <!-- Start: Main -->
    <div id="main">
		 <!-- Start: Header -->
			<?php echo $this->element('theme_header'); ?>
		 <!-- End: Header -->
		<!-- Start: Sidebar -->
			<?php echo $this->element('theme_sidebar'); ?>
		<!-- End: Sidebar -->		
		<!-- Start: Content -->
        <section id="content_wrapper">
			<?php echo $this->element('theme_topbar_section'); ?>
			<!-- Start: Topbar -->
            <header id="topbar">
                <div class="topbar-left">
					<?php echo $this->Html->getCrumbList(array('class' => 'breadcrumb')); ?>
                </div>
            </header>
			<?php
				echo $this->Session->flash('auth');
				echo $this->Session->flash();
			?>
			<?php echo $this->fetch('content'); ?>
			<?php //echo $this->element('sql_dump'); ?>
		</section>
        <!-- End: Content -->
		<!-- Start: Right Sidebar -->
			<?php echo $this->element('theme_sidebar_right'); ?>
		<!-- End: Right Sidebar -->
	<?php
		echo $this->Html->script(array(
		''.Configure::read('BaseURL').'files/theme/vendor/jquery/jquery-1.11.1.min.js',		
		''.Configure::read('BaseURL').'files/theme/vendor/jquery/jquery_ui/jquery-ui.min.js',
		''.Configure::read('BaseURL').'files/theme/assets/js/bootstrap/bootstrap.min.js',
		''.Configure::read('BaseURL').'files/theme/vendor/plugins/datatables/media/js/jquery.dataTables.min.js',
		''.Configure::read('BaseURL').'files/theme/vendor/plugins/datatables/media/js/dataTables.bootstrap.js',
		''.Configure::read('BaseURL').'files/theme/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js',
		''.Configure::read('BaseURL').'files/theme/vendor/editors/xeditable/js/bootstrap-editable.js',		
		));
	?>
	<?php echo $this->fetch('footerBlock'); ?>
	<?php
		echo $this->Html->script(array(
		''.Configure::read('BaseURL').'files/theme/assets/js/utility/utility.js',
		''.Configure::read('BaseURL').'files/theme/assets/js/main.js',
		''.Configure::read('BaseURL').'files/theme/assets/js/demo.js',		
		));
	?>
	<?php echo $this->fetch('belowUtility'); ?>
	<script type="text/javascript">
        jQuery(document).ready(function() {
            "use strict";
            // Init Theme Core    
            Core.init();
            // Init Demo JS   
            Demo.init();
            // Init Highlight.js Plugin
            $('pre code').each(function(i, block) {
                hljs.highlightBlock(block);
            });
            // Select all text in CSS Generate Modal
            $('#modal-close').click(function(e) {
                e.preventDefault();
                $('.datatables-demo-modal').modal('toggle');
            });
        });
    </script>
	<?php echo $this->fetch('scriptBottom'); ?>
	</body>
</html>

