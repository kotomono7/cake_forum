<div class="panel-group" id="accordion">
  <div class="panel panel-default">

    <div class="panel-heading toggle">
  		<h3 class="panel-title toggle"  data-toggle="collapse" data-parent="#accordion1" data-target="#collapseOne">
  			<i class="glyphicon glyphicon-log-in"></i>&nbsp; Member Area
  		</h3>
    </div>

    <div id="collapseOne" class="panel-collapse collapse in">
  		<div class="panel-body">

        <fieldset>
  				<legend>Please, log in here...</legend>
  				<div class="col-sm-3 col-md-3 col-lg-3">
  				<?php
  					echo $this->Form->create('User', array(
  						'url' => array(
  							'controller' => 'users',
  							'action' => 'login'
  						),
  						'class' => 'form-horizontal',
  						'role' => 'form'
  					));
  				?>
  				<div class="form-group">
  					<div class="input-group">
  						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  						<?php
  							echo $this->Form->input('username',
  								array(
  									'label' => false,
  									'class' => 'form-control',
  									'placeholder' => 'Username...',
  								)
  							);
  						?>
  					</div>
  				</div>
  				<div class="form-group">
  					<div class="input-group">
  						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  						<?php
  							echo $this->Form->input('password',
  								array(
  									'label' => false,
  									'class' => 'form-control',
  									'placeholder' => 'Password...'
  								)
  							);
  						?>
  					</div>
  				</div>
  				<div class="form-group">
  					<div class="input-group">
    					<?php
                echo $this->Form->button(
                  $this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-log-in')).
                  __('&nbsp; Login'),
                  array(
                    'type' => 'submit',
                    'class' => 'btn btn-primary',
                    'escape' => false
                  )
                );
              ?>
  						<?php echo $this->Form->end(); ?>
  					</div>
  				</div>
  			</fieldset>

  		</div>
    </div>

  </div>
</div>
