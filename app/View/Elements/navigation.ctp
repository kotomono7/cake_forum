<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?php echo $this->Html->link(__('CakePHP Forum'), '/', array('class'=>'navbar-brand')); ?>
        </div>
        <div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
			<?php if (!$this->Session->check('Auth.User')) { ?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Member <b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li>
							<?php echo $this->Html->link(__('Login'), array('controller' => 'Users', 'action' => 'login')); ?>
						</li>
						<li>
							<?php echo $this->Html->link(__('Register'), array('controller' => 'Users', 'action' => 'register')); ?>
						</li>
					</ul>
				</li>
			<?php } else { ?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<?php echo $this->Session->read('Auth.User.first_name')." ".$this->Session->read('Auth.User.last_name'); ?> <b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li>
							<?php echo $this->Html->link(__('My Profile'), array('controller' => 'Users', 'action' => 'profile')); ?>
						</li>
						<li>
							<?php echo $this->Html->link(__('Change Password'), array('controller' => 'Users', 'action' => 'change_password')); ?>
						</li>
						<li>
							<?php echo $this->Html->link(__('Logout'), array('controller' => 'Users', 'action' => 'logout')); ?>
						</li>
					</ul>
				</li>
			<?php } ?>
			</ul>
        </div> <!--/.nav-collapse -->
    </div>
</div>
