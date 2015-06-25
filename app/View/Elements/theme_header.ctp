<header class="navbar navbar-fixed-top bg-light">
	<div class="navbar-branding">
		<?php echo $this->Html->link('<b>Evolve</b>Tours', array(
			'admin'=>true,
			'controller'=>'users',
			'action'=>'index'
		), array(
			'class'=>'navbar-brand',
			'escape'=>false
		)); ?>
		<span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
		<ul class="nav navbar-nav pull-right hidden">
			<li>
				<a href="#" class="sidebar-menu-toggle">
					<span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
				</a>
			</li>
		</ul>
	</div>
	<ul class="nav navbar-nav navbar-left">
		<li>
			<a class="topbar-menu-toggle" href="#">
				<span class="glyphicons glyphicons-magic fs16"></span>
			</a>
		</li>
	</ul>
	<!-- <form class="navbar-form navbar-left navbar-search ml5" role="search">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Search..." value="Search...">
		</div>
	</form>-->
	<ul class="nav navbar-nav navbar-right">
		<li class="dropdown">
			<a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
				<?php
					echo $this->Html->image('
						../files/theme/assets/img/avatars/5.jpg
					',array(
						'alt'=>$this->Session->read('Auth.User.username'),
						'class'=>'mw30 br64 mr15'
					));
				?>							
				<span><?php echo strtoupper($this->Session->read('Auth.User.username')); ?></span>
				<span class="caret caret-tp"></span>
			</a>
			<ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
				<li class="br-t of-h">
					<?php 
						echo $this->html->link('<span class="fa fa-gear pr5"></span> Account Settings </a>', array(
							'controller'=>'users'
						), array(
							'class'=>'fw600 p12 animated animated-short fadeInDown',
							'escape' => FALSE
						));
					?>
				</li>
				<li class="br-t of-h">
						<?php 
						echo $this->html->link('<span class="fa fa-power-off pr5"></span> Logout </a>', array(
							'controller'=>'users',
							'action'=>'logout',
							'admin'=>false
						), array(
							'class'=>'fw600 p12 animated animated-short fadeInDown',
							'escape' => FALSE
						));
					?>
				</li>
			</ul>
		</li>
	</ul>
</header>