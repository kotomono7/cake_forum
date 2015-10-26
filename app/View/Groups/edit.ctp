<div class="panel-group" id="accordion">
  <div class="panel panel-default">

    <div class="panel-heading toggle">
  		<h3 class="panel-title toggle"  data-toggle="collapse" data-parent="#accordion1" data-target="#collapseOne">
  			<i class="glyphicon glyphicon-plus"></i>&nbsp; Add New User
  		</h3>
    </div>

    <div id="collapseOne" class="panel-collapse collapse in">
		  <div class="panel-body">

        <?php echo $this->Form->create('Group', array('class' => 'form-horizontal')); ?>
				<?php echo $this->Form->input('id'); ?>
				<div class="form-group">
          <div class="col-sm-4">
             <?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
          </div>
        </div>
          <?php
            echo $this->Form->input('modified_by',
              array('type' => 'hidden', 'value' => $this->Session->read('Auth.User.username'))
            );
          ?>
        <div class="form-group">
          <div class="col-sm-4">
            <?php echo $this->Form->submit(__('Save'), array('class'=>'btn btn-primary')); ?>
          </div>
        </div>
				<?php echo $this->Form->end(); ?>
      </div>
    </div>

  </div>
</div>
