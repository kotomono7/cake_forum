<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">

    <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
      <?php echo $this->Html->image('cake.icon.png', array('alt' => 'cake.icon', 'class' => 'navbar-brand img-responsive')); ?>
			<strong><?php echo $this->Html->link(__('CakePHP Forum'), '/', array('class'=>'navbar-brand')); ?></strong>
    </div>

    <div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
			<?php if (!$this->Session->check('Auth.User')) { ?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						You are not logged in <b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li>
							<?php
                echo $this->Html->link(
                  $this->Html->tag('i', '&nbsp;', array('class' => 'glyphicon glyphicon-log-in')).
                  __('Log in'), array('controller' => 'users', 'action' => 'login'),
                  array('escape' => false)
                );
              ?>
						</li>
						<li>
							<?php
                echo $this->Html->link(
                  $this->Html->tag('i', '&nbsp;', array('class' => 'glyphicon glyphicon-edit')).
                  __('Register'), array('controller' => 'users', 'action' => 'register'),
                  array('escape' => false)
                );
                ?>
						</li>
					</ul>
				</li>
			<?php } else { ?>
      <?php if ($this->Session->read('Auth.User.group_id')==1) { ?>
        <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Dashboard <b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
            <li>
							<?php
                echo $this->Html->link(
                  $this->Html->tag('i', '&nbsp;', array('class' => 'glyphicon glyphicon-bullhorn')).
                  __('List Topics'), array('controller' => 'topics', 'action' => 'index'),
                  array('escape' => false)
                );
              ?>
						</li>
						<li>
							<?php
                echo $this->Html->link(
                  $this->Html->tag('i', '&nbsp;', array('class' => 'glyphicon glyphicon-comment')).
                  __('List Posts'), array('controller' => 'posts', 'action' => 'index'),
                  array('escape' => false)
                );
              ?>
						</li>
            <li role="separator" class="divider"></li>
            <li>
							<?php
                echo $this->Html->link(
                  $this->Html->tag('i', '&nbsp;', array('class' => 'glyphicon glyphicon-user')).
                  __('List Users'), array('controller' => 'users', 'action' => 'index'),
                  array('escape' => false)
                );
              ?>
						</li>
            <li>
							<?php
                echo $this->Html->link(
                  $this->Html->tag('i', '&nbsp;', array('class' => 'glyphicon glyphicon-cog')).
                  __('List Groups'), array('controller' => 'groups', 'action' => 'index'),
                  array('escape' => false)
                );
              ?>
						</li>
					</ul>
				</li>
      <?php } ?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<?php echo $this->Session->read('Auth.User.first_name')." ".$this->Session->read('Auth.User.last_name'); ?> <b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li>
							<?php
                echo $this->Html->link(
                  $this->Html->tag('i', '&nbsp;', array('class' => 'glyphicon glyphicon-user')).
                  __('My Profile'), array('controller' => 'users', 'action' => 'profile', $this->Session->read('Auth.User.id')),
                  array('escape' => false)
                );
              ?>
						</li>
						<li>
							<?php
                echo $this->Html->link(
                  $this->Html->tag('i', '&nbsp;', array('class' => 'glyphicon glyphicon-cog')).
                  __('Settings'), array('controller' => 'users', 'action' => 'setting'),
                  array('escape' => false)
                );
              ?>
						</li>
            <li role="separator" class="divider"></li>
						<li>
							<?php
                echo $this->Html->link(
                  $this->Html->tag('i', '&nbsp;', array('class' => 'glyphicon glyphicon-off')).
                  __('Logout'), array('controller' => 'users', 'action' => 'logout'),
                  array('escape' => false)
                );
              ?>
						</li>
					</ul>
				</li>
			<?php } ?>
			</ul>
    </div> <!--/.nav-collapse -->

  </div>
</div>
