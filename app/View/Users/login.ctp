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
                echo '<p align="center" class="img-responsive" style="margin-bottom: 0;">';
                echo $this->Html->image(
                  $this->Html->url(
                    array(
                      'controller' => 'users',
                      'action' => 'captcha'
                    ),
                    true
                  ),
                  array('id' => 'captcha-img', 'vspace' => 0, 'align' => 'center')
                );
                echo '<a href="" id="reload-captcha" class="btn btn-link">Can\'t read? Reload captcha image</a>';
                echo '</p>';
                echo $this->Form->input('captcha',
                  array(
                    'autocomplete' => 'off',
                    'label' => false,
                    'class' => 'form-control',
                    'placeholder' => 'Enter captcha code...'
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
                  __('&nbsp; Log in'),
                  array(
                    'type' => 'submit',
                    'class' => 'btn btn-primary',
                    'escape' => false
                  )
                );
                echo $this->Form->end();

                /** echo $this->Html->link('Register new account here!',
                  array('controller' => 'users', 'action' => 'register')
                  array('class' => 'btn btn-link')
                ); */
              ?>
  					</div>
  				</div>
  			</fieldset>

  		</div>
    </div>

  </div>
</div>

<script>
  $('#reload-captcha').click(function() {
  	var $captcha = $("#captcha-img");
      $captcha.attr('src', $captcha.attr('src')+'?'+Math.random());
  	return false;
  });
</script>
