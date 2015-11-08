<div class="panel-group" id="accordion">
  <div class="panel panel-default">

    <div class="panel-heading toggle">
			<h3 class="panel-title toggle"  data-toggle="collapse" data-parent="#accordion1" data-target="#collapseOne">
				<i class="glyphicon glyphicon-eye-open"></i>&nbsp; User Profile
			</h3>
    </div>

    <div id="collapseOne" class="panel-collapse collapse in">
			<div class="panel-body">

				<div class="table-responsive">
				<fieldset>
				<legend><small><i class="glyphicon glyphicon-user"></i> <?php echo h($user['User']['first_name']); ?> <?php echo h($user['User']['last_name']); ?></small></legend>
	    		<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<tbody>
              <tr>
								<td><strong><?php echo __('Group'); ?></strong></td>
								<td><?php echo h($user['Group']['name']); ?></td>
							</tr>
              <tr>
								<td><strong><?php echo __('E-mail'); ?></strong></td>
								<td><a href="mailto:<?php echo h($user['User']['email']); ?>"><?php echo h($user['User']['email']); ?></a></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Address'); ?></strong></td>
								<td><?php echo h($user['User']['address']); ?></td>
							</tr>
						</tbody>
					</table>
					</div>
				</fieldset>
				</div>

      </div>
    </div>

  </div>
</div>
