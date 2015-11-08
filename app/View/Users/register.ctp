<div class="panel-group" id="accordion">
  <div class="panel panel-default">

    <div class="panel-heading toggle">
  		<h3 class="panel-title toggle"  data-toggle="collapse" data-parent="#accordion1" data-target="#collapseOne">
  			<i class="glyphicon glyphicon-edit"></i>&nbsp; Free Register
  		</h3>
    </div>

    <div id="collapseOne" class="panel-collapse collapse in">
		  <div class="panel-body">

        <?php echo $this->Form->create('User', array('class' => 'form-horizontal')); ?>
      <div class="col-md-6">
				<div class="form-group">
          <div class="col-sm-8">
             <?php echo $this->Form->input('first_name', array('class' => 'form-control')); ?>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-8">
            <?php echo $this->Form->input('last_name', array('class' => 'form-control')); ?>
          </div>
        </div>
				<div class="form-group">
          <div class="col-sm-8">
            <?php echo $this->Form->input('address', array('class' => 'form-control')); ?>
          </div>
        </div>
      </div>

      <div class="col-md-6">
				<div class="form-group">
          <div class="col-sm-8">
            <?php echo $this->Form->input('username', array('class' => 'form-control')); ?>
          </div>
        </div>
				<div class="form-group">
          <div class="col-sm-8">
            <?php echo $this->Form->input('password', array('class' => 'form-control')); ?>
          </div>
        </div>
				<div class="form-group">
          <div class="col-sm-8">
            <?php echo $this->Form->input('email', array('class' => 'form-control')); ?>
          </div>
        </div>
      </div>
        <?php
					echo $this->Form->input('group_id',
						array('type' => 'hidden', 'value' => 3, 'class' => 'form-control')
					);
          echo $this->Form->input('created_by',
            array('type' => 'hidden', 'value' => $this->Session->read('Auth.User.username'))
          );
        ?>
      <div class="col-md-12">
        <div class="form-group">
          <div class="col-sm-4">
            <?php echo $this->Form->submit(__('Submit'), array('class'=>'btn btn-primary')); ?>
          </div>
        </div>
      </div>
				<?php echo $this->Form->end(); ?>

      </div>
    </div>

  </div>
</div>
