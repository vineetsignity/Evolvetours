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

$cakeDescription = __d('cake_dev', 'Evolve Tours');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		
		/*echo $this->Html->css(array(
			'bootstrap.min.css',
			'style.css',
			'styles.css'
		));
		echo $this->Html->script(array(
			'//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js',
			'bootstrap.min.js',
		));*/
		echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1 style="width:120px;"><?php echo $this->Html->link($cakeDescription,
					'/admin/users/index',
					array('escape' => false, 'id' => 'logo_id')
				);
			?>			
			</h1>
			<?php
				$user_id =  $this->Session->read('Auth.User.id');
				if($user_id){
					echo $this->Html->link('Logout', '/users/logout/',array(
						'style'=>'float:right; margin-top: -24px;'
					));
				}
			?>
		</div>
		<div id="content">
			<nav>
				<ul>
					<!--<li>
						<?php /*echo $this->Html->link('Manage Roles', array(
							'controller'=>'roles',
							'action'=>'index',
							'admin'=>true
						));*/ ?>
					</li>--->
					<li>
						<?php echo $this->Html->link('Manage Users', array(
							'controller'=>'users',
							'action'=>'index',
							'admin'=>true
						)); ?>
					</li>
					<li>
						<?php echo $this->Html->link('Manage Schools', array(
							'controller'=>'schools',
							'action'=>'index',
							'admin'=>true
						)); ?>
					</li>
					<li>
						<?php echo $this->Html->link('Manage Teachers', array(
							'controller'=>'teachers',
							'action'=>'index',
							'admin'=>true
						)); ?>
					</li>
					<li>
						<?php echo $this->Html->link('Manage Guides', array(
							'controller'=>'guides',
							'action'=>'index',
							'admin'=>true
						)); ?>
					</li>
					<li>
						<?php echo $this->Html->link('Manage Trips', array(
							'controller'=>'trips',
							'action'=>'index',
							'admin'=>true
						)); ?>
					</li>
					<li>
					<?php echo $this->Html->link('Manage Addons', array(
							'controller'=>'addons',
							'action'=>'index',
							'admin'=>true
						)); ?>
					</li>
				</ul>
			</nav>
			<div style="clear:both;"></div>
			<?php echo $this->Session->flash(); ?>
			
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
