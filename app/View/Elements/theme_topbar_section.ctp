<div id="topbar-dropmenu">
	<div class="topbar-menu row">
		<div class="col-xs-4 col-sm-2">
			<?php
				echo $this->Html->link(__(' <span class="metro-icon glyphicons glyphicons-inbox"></span><p class="metro-title">Trips</p> '), array(
					'admin'=>true,
					'controller'=>'trips',
					'action'=>'index'
				), array(
					'class'=>'metro-tile bg-success',
					'escape'=>false,
				));
			?>			
		</div>
		<div class="col-xs-4 col-sm-2">
			
			<?php
				echo $this->Html->link(__(' <span class="metro-icon glyphicons glyphicons-parents"></span><p class="metro-title">Users</p> '), array(
					'admin'=>true,
					'controller'=>'users',
					'action'=>'index'
				), array(
					'class'=>'metro-tile bg-info',
					'escape'=>false,
				));
			?>
		</div>
		<div class="col-xs-4 col-sm-2">
			<?php
				echo $this->Html->link(__(' <span class="metro-icon glyphicons glyphicons-headset"></span><p class="metro-title">Teachers</p> '), array(
					'admin'=>true,
					'controller'=>'teachers',
					'action'=>'index'
				), array(
					'class'=>'metro-tile bg-alert',
					'escape'=>false,
				));
			?>
		</div>
		<div class="col-xs-4 col-sm-2">
			<?php
				echo $this->Html->link(__(' <span class="metro-icon glyphicons glyphicons-cogwheels"></span><p class="metro-title">Guides</p> '), array(
					'admin'=>true,
					'controller'=>'guides',
					'action'=>'index'
				), array(
					'class'=>'metro-tile bg-primary',
					'escape'=>false,
				));
			?>
		</div>
		<div class="col-xs-4 col-sm-2">
			<?php
				echo $this->Html->link(__('<span class="metro-icon glyphicons glyphicons-facetime_video"></span>
				<p class="metro-title">Schools</p>'), array(
					'admin'=>true,
					'controller'=>'schools',
					'action'=>'index'
				), array(
					'class'=>'metro-tile bg-warning',
					'escape'=>false,
				));
			?>
		</div>
		<div class="col-xs-4 col-sm-2">
			<?php
				echo $this->Html->link(__(' <span class="metro-icon glyphicons glyphicons-picture"></span><p class="metro-title">Addons</p> '), array(
					'admin'=>true,
					'controller'=>'addons',
					'action'=>'index'
				), array(
					'class'=>'metro-tile bg-system',
					'escape'=>false,
				));
			?>
		</div>
	</div>
</div>