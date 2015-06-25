<aside id="sidebar_left" class="nano nano-primary">
            <div class="nano-content">
                <!-- sidebar menu -->
				 <!-- Users -->
                <ul class="nav sidebar-menu">
                    <li class="sidebar-label pt15">Menu</li>
                    <li>
						<!-- menu-open -->
                        <a class="accordion-toggle" href="#">
                            <span class="glyphicons glyphicons-group"></span>
                            <span class="sidebar-title">Manage Users</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
								<?php echo $this->Html->link(
									'<span class="glyphicons glyphicons-book"></span> List Users',
										array(
											'controller'=>'users',
											'action'=>'index',
											'admin'=>true
										),
										array(
											'escape' => FALSE
										)
									);
								?>
                            </li>
                            <li>
								<?php echo $this->Html->link(
									'<span class="glyphicons glyphicons-show_big_thumbnails"></span> New user',
									array(
										'controller'=>'users',
										'action'=>'add',
										'admin'=>true
									),
									array(
										'escape' => FALSE
									)
								);?>
                            </li>
                            <!--<li>
								<?php 
									/*$id = $this->Session->read('Auth.User.id');
									echo $this->Html->link(
									'<span class="glyphicons glyphicons-sampler"></span> Edit User',
									array(
										'admin'=>true,
										'controller'=>'users',
										'action'=>'edit',
										$id
									),
									array(
										'escape' => FALSE
									)
								);*/ ?>
                            </li>-->
                        </ul>
                    </li>
                    <!-- Teachers -->
					
					<li>
                        <a class="accordion-toggle" href="#">
                            <span class="glyphicons glyphicons-parents"></span>
                            <span class="sidebar-title">Manage Teachers</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
								<?php echo $this->Html->link(
									'<span class="glyphicons glyphicons-book"></span> List Teachers',
										array(
											'controller'=>'teachers',
											'action'=>'index',
											'admin'=>true
										),
										array(
											'escape' => FALSE
										)
									);
								?>
                            </li>
                            <li>
								<?php echo $this->Html->link(
									'<span class="glyphicons glyphicons-show_big_thumbnails"></span> Add Teacher',
									array(
										'controller'=>'teachers',
										'action'=>'add',
										'admin'=>true
									),
									array(
										'escape' => FALSE
									)
								);?>
                            </li>
                        </ul>
                    </li>
					
					 <!-- Trips -->
					
					<li>
                        <a class="accordion-toggle" href="#">
                            <span class="glyphicons glyphicons-bicycle"></span>
                            <span class="sidebar-title">Manage Trips</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
								<?php echo $this->Html->link(
									'<span class="glyphicons glyphicons-book"></span> List Trips',
										array(
											'controller'=>'trips',
											'action'=>'index',
											'admin'=>true
										),
										array(
											'escape' => FALSE
										)
									);
								?>
                            </li>
                            <li>
								<?php echo $this->Html->link(
									'<span class="glyphicons glyphicons-show_big_thumbnails"></span> Add New Trip',
									array(
										'controller'=>'trips',
										'action'=>'add',
										'admin'=>true
									),
									array(
										'escape' => FALSE
									)
								);?>
                            </li>
                        </ul>
                    </li>
                     <!-- Addons -->
					
					<li>
                        <a class="accordion-toggle" href="#">
                            <span class="glyphicons glyphicons-shopping_cart"></span>
                            <span class="sidebar-title">Manage Addons</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
								<?php echo $this->Html->link(
									'<span class="glyphicons glyphicons-book"></span> List Addons',
										array(
											'controller'=>'addons',
											'action'=>'index',
											'admin'=>true
										),
										array(
											'escape' => FALSE
										)
									);
								?>
                            </li>
                            <li>
								<?php echo $this->Html->link(
									'<span class="glyphicons glyphicons-show_big_thumbnails"></span> Add New Addons',
									array(
										'controller'=>'addons',
										'action'=>'add',
										'admin'=>true
									),
									array(
										'escape' => FALSE
									)
								);?>
                            </li>
                        </ul>
                    </li>
					
					<!-- Schools -->
					
					<li>
                        <a class="accordion-toggle" href="#">
                            <span class="glyphicons glyphicons-book"></span>
                            <span class="sidebar-title">Manage Schools</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
								<?php echo $this->Html->link(
									'<span class="glyphicons glyphicons-book"></span> List Schools',
										array(
											'controller'=>'schools',
											'action'=>'index',
											'admin'=>true
										),
										array(
											'escape' => FALSE
										)
									);
								?>
                            </li>
                            <li>
								<?php echo $this->Html->link(
									'<span class="glyphicons glyphicons-show_big_thumbnails"></span> Add New School',
									array(
										'controller'=>'schools',
										'action'=>'add',
										'admin'=>true
									),
									array(
										'escape' => FALSE
									)
								);?>
                            </li>
                        </ul>
                    </li>
					
					<!-- Guides -->
					
					<li>
                        <a class="accordion-toggle " href="#">
                            <span class="glyphicons glyphicons-binoculars"></span>
                            <span class="sidebar-title">Manage Guides</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
								<?php echo $this->Html->link(
									'<span class="glyphicons glyphicons-book"></span> List Guides',
										array(
											'controller'=>'guides',
											'action'=>'index',
											'admin'=>true
										),
										array(
											'escape' => FALSE
										)
									);
								?>
                            </li>
                            <li>
								<?php echo $this->Html->link(
									'<span class="glyphicons glyphicons-show_big_thumbnails"></span> Add New Guide',
									array(
										'controller'=>'guides',
										'action'=>'add',
										'admin'=>true
									),
									array(
										'escape' => FALSE
									)
								);?>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="sidebar-toggle-mini">
                    <a href="#">
                        <span class="fa fa-sign-out"></span>
                    </a>
                </div>
            </div>
        </aside>