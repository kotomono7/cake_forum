<div class="panel-group" id="accordion">
  <div class="panel panel-default">

    <div class="panel-heading toggle">
  		<h3 class="panel-title toggle"  data-toggle="collapse" data-parent="#accordion1" data-target="#collapseOne">
  			<i class="glyphicon glyphicon-cog"></i>&nbsp; User Setting
  		</h3>
    </div>

    <div id="collapseOne" class="panel-collapse collapse in">
		  <div class="panel-body">

      <div class="col-md-6">
      <fieldset>
        <legend><small><i class="glyphicon glyphicon-user"></i> <?php echo __('Profile'); ?></small></legend>
        <?php echo $this->Form->create('Profile', array('class' => 'form-horizontal')); ?>
				<div class="form-group">
          <div class="col-sm-8">
             <?php echo $this->Form->input('first_name', array('class' => 'form-control', 'value' => $user['User']['first_name'])); ?>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-8">
            <?php echo $this->Form->input('last_name', array('class' => 'form-control', 'value' => $user['User']['last_name'])); ?>
          </div>
        </div>
				<div class="form-group">
          <div class="col-sm-8">
            <?php echo $this->Form->input('address', array('type' => 'textarea', 'class' => 'form-control', 'value' => $user['User']['address'])); ?>
          </div>
        </div>
				<div class="form-group">
          <div class="col-sm-8">
            <?php echo $this->Form->input('email', array('class' => 'form-control', 'value' => $user['User']['email'])); ?>
          </div>
        </div>
          <?php
            echo $this->Form->input('modified_by',
              array('type' => 'hidden', 'value' => $this->Session->read('Auth.User.username'))
            );
          ?>
        <div class="form-group">
          <div class="col-sm-4">
            <?php echo $this->Form->submit(__('Update Profile'), array('class'=>'btn btn-primary')); ?>
          </div>
        </div>
				<?php echo $this->Form->end(); ?>
      </fieldset>
      </div>

      <div class="col-md-6">
      <fieldset>
        <legend><small><i class="glyphicon glyphicon-lock"></i> <?php echo __('Password'); ?></small></legend>
        <?php echo $this->Form->create('Password', array('class' => 'form-horizontal')); ?>
        <div class="form-group">
          <div class="col-sm-8">
            <?php echo $this->Form->input('old_password', array('type' => 'password', 'class' => 'form-control', 'value' => $user['User']['password'])); ?>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-8">
            <?php echo $this->Form->input('old_password2', array('label' => 'Verify Old Password', 'class' => 'form-control')); ?>
          </div>
        </div>
				<div class="form-group">
          <div class="col-sm-8">
            <?php echo $this->Form->input('new_password', array('class' => 'form-control')); ?>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-8">
            <?php echo $this->Form->input('new_password2', array('label' => 'Verify New Password', 'class' => 'form-control')); ?>
          </div>
        </div>
          <?php
            echo $this->Form->input('modified_by',
              array('type' => 'hidden', 'value' => $this->Session->read('Auth.User.username'))
            );
          ?>
        <div class="form-group">
          <div class="col-sm-4">
            <?php echo $this->Form->submit(__('Update Password'), array('class'=>'btn btn-primary')); ?>
          </div>
        </div>
        <?php echo $this->Form->end(); ?>
      </fieldset>
      </div>

      </div>
    </div>

  </div>
</div>
