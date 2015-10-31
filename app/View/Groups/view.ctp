<div class="panel-group" id="accordion">
  <div class="panel panel-default">

    <div class="panel-heading toggle">
			<h3 class="panel-title toggle"  data-toggle="collapse" data-parent="#accordion1" data-target="#collapseOne">
				<i class="glyphicon glyphicon-eye-open"></i>&nbsp; View User
			</h3>
    </div>

    <div id="collapseOne" class="panel-collapse collapse in">
			<div class="panel-body">

				<div class="table-responsive">
				<fieldset>
				<legend><i class="glyphicon glyphicon-cog"></i> <?php echo __('Group Details'); ?></legend>
	    		<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<tbody>
							<tr>
								<td><strong><?php echo __('Id'); ?></strong></td>
								<td><?php echo h($group['Group']['id']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Name'); ?></strong></td>
								<td><?php echo h($group['Group']['name']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Created'); ?></strong></td>
								<td><?php echo h($group['Group']['created']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Modified'); ?></strong></td>
								<td><?php echo h($group['Group']['modified']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Created By'); ?></strong></td>
								<td><?php echo h($group['Group']['created_by']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Modified By'); ?></strong></td>
								<td><?php echo h($group['Group']['modified_by']); ?></td>
							</tr>
						</tbody>
					</table>
					</div>
				</fieldset>
				</div>

				<div class="table-responsive">
					<?php if (!empty($group['User'])): ?>
					<fieldset>
						<legend><i class="glyphicon glyphicon-user"></i> <?php echo __('Related Users'); ?></legend>
						<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th><?php echo __('Id'); ?></th>
									<th><?php echo __('First Name'); ?></th>
									<th><?php echo __('Last Name'); ?></th>
									<th><?php echo __('Address'); ?></th>
									<th><?php echo __('Username'); ?></th>
									<th><?php echo __('Password'); ?></th>
									<th><?php echo __('Group Id'); ?></th>
									<th><?php echo __('Created'); ?></th>
									<th><?php echo __('Created By'); ?></th>
									<th><?php echo __('Modified'); ?></th>
									<th><?php echo __('Modified By'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($group['User'] as $user): ?>
								<tr>
									<td><?php echo $user['id']; ?></td>
									<td><?php echo $user['first_name']; ?></td>
									<td><?php echo $user['last_name']; ?></td>
									<td><?php echo $user['address']; ?></td>
									<td><?php echo $user['username']; ?></td>
									<td><?php echo $user['password']; ?></td>
									<td><?php echo $user['group_id']; ?></td>
									<td><?php echo $user['created']; ?></td>
									<td><?php echo $user['created_by']; ?></td>
									<td><?php echo $user['modified']; ?></td>
									<td><?php echo $user['modified_by']; ?></td>
									<td class="actions">
										<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id']), array('class' => 'btn btn-xs btn-primary')); ?>
										<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id']), array('class' => 'btn btn-xs btn-success')); ?>
										<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete #%s?', $user['id'])); ?>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						</div>
					<?php endif; ?>
					</fieldset>
				</div>

			</div>
    </div>

  </div>
</div>
