<?php
	// ADD BREADCRUMBS HERE
	$this->Html->addCrumb('<span class="glyphicon glyphicon-home"></span>',  '/', array(
		'class'=>'crumb-active',
		'escape' => FALSE
	)) ;
	$this->Html->addCrumb('My Dashboard',  '', array('class' => 'crumb-trail')) ;
?>
	<section id="content">
	 <!-- Dashboard Tiles -->

		
		<div class="col-md-12">
				<div class="row mb10">
			<div class="col-md-3">
				<div class="panel bg-alert light of-h mb10">
					<div class="pn pl20 p5">
						<div class="icon-bg"> <i class="fa fa-comments-o"></i> </div>
						<h2 class="mt15 lh15"> <b>523</b> </h2>
						<h5 class="text-muted">Users</h5>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="panel bg-info light of-h mb10">
					<div class="pn pl20 p5">
						<div class="icon-bg"> <i class="fa fa-twitter"></i> </div>
						<h2 class="mt15 lh15"> <b>348</b> </h2>
						<h5 class="text-muted">Teachers</h5>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="panel bg-danger light of-h mb10">
					<div class="pn pl20 p5">
						<div class="icon-bg"> <i class="fa fa-bar-chart-o"></i> </div>
						<h2 class="mt15 lh15"> <b>267</b> </h2>
						<h5 class="text-muted">Trips</h5>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="panel bg-warning light of-h mb10">
					<div class="pn pl20 p5">
						<div class="icon-bg"> <i class="fa fa-envelope"></i> </div>
						<h2 class="mt15 lh15"> <b>714</b> </h2>
						<h5 class="text-muted">Schools</h5>
					</div>
				</div>
			</div>
		</div>
                    <!-- MouseWheel Zoom Chart -->
                    <!-- Combined Chart -->
                    <div class="panel" id="pchart12">
                        <div class="panel-heading">
                            <span class="panel-icon"><i class="fa fa-pencil"></i>
                            </span>
                            <span class="panel-title">Dashboard Analysys</span>
                        </div>
                        <div class="panel-body bg-light dark">
                            <div id="combo-chart" style="height: 370px; width: 100%;"></div>
                        </div>
                    </div>						
		</div>
	</section>
	<?php 
	echo $this->Html->css('../files/theme/vendor/plugins/c3charts/c3.min.css', array(
		'inline'=>false
	));
	echo $this->Html->script(array(
		'../files/theme/vendor/plugins/c3charts/d3.min.js',
		'../files/theme/vendor/plugins/c3charts/c3.min.js',
	), array('block' => 'footerBlock')); ?>
	<?php $this->start('scriptBottom');?>
		    <script type="text/javascript">
			/* All functions in this file are used only for charts.html */
				var D3Charts = function () {
			// Init Flot Chart Plugins
			var runD3Plugins = function () {
				// Plugin 1
			}
			// Init Flot Charts Plugin
			var runD3Charts = function () {
				// Add a series of colors to be used in the charts and pie graphs
						var Colors = [bgPrimary, bgInfo, bgWarning, bgAlert, bgDanger, bgSystem, bgSuccess,];			
							// Combination Chart
						var chart13 = c3.generate({
							bindto: '#combo-chart',
							color: {
							  pattern: Colors,
							},
							padding: {
							  left: 30,
							  right: 15,
							  top: 0,
							  bottom: 0,
						   },
							data: {
								columns: [
									['Trips', 30, 20, 50, 40, 60, 50],
									['Schools', 200, 130, 90, 240, 130, 220],
									['Guides', 300, 200, 160, 400, 250, 250],
									['Teachers', 200, 130, 90, 240, 130, 220],
									['Addons', 130, 120, 150, 140, 160, 150],
									['Users', 90, 70, 20, 50, 60, 120],
								],
								type: 'bar',
								types: {
									data3: 'spline',
									data4: 'spline',
									data6: 'spline',
								},
								
							}
						});

					};
					
					return {
						init: function () {
							runD3Plugins();
							runD3Charts();
						}
					};
				}();
				jQuery(document).ready(function() {
				 // This page contains more Initilization Javascript than normal.
					// As a result it has its own js page. See charts.js for more info
					D3Charts.init();

					// Init tray navigation smooth scroll
					$('.tray-nav a').smoothScroll({
						offset: -145
					});

				});
			</script>
			<!-- END: PAGE SCRIPTS -->
	<?php $this->end();?>