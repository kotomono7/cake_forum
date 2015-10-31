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
				<legend><i class="glyphicon glyphicon-user"></i> <?php echo __('User Details'); ?></legend>
	    		<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<tbody>
							<tr>
								<td><strong><?php echo __('Id'); ?></strong></td>
								<td><?php echo h($user['User']['id']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('First Name'); ?></strong></td>
								<td><?php echo h($user['User']['first_name']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Last Name'); ?></strong></td>
								<td><?php echo h($user['User']['last_name']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Address'); ?></strong></td>
								<td><?php echo h($user['User']['address']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Username'); ?></strong></td>
								<td><?php echo h($user['User']['username']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Password'); ?></strong></td>
								<td><?php echo h($user['User']['password']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('E-mail'); ?></strong></td>
								<td><?php echo h($user['User']['email']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Group'); ?></strong></td>
								<td><?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Created'); ?></strong></td>
								<td><?php echo h($user['User']['created']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Modified'); ?></strong></td>
								<td><?php echo h($user['User']['modified']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Created By'); ?></strong></td>
								<td><?php echo h($user['User']['created_by']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Modified By'); ?></strong></td>
								<td><?php echo h($user['User']['modified_by']); ?></td>
							</tr>
						</tbody>
					</table>
					</div>
				</fieldset>
				</div>

				<div class="table-responsive">
					<?php if (!empty($user['Post'])): ?>
					<fieldset>
						<legend><i class="glyphicon glyphicon-comment"></i> <?php echo __('Related Posts'); ?></legend>
						<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th><?php echo __('Id'); ?></th>
									<th><?php echo __('Topic Id'); ?></th>
									<th><?php echo __('Forum Id'); ?></th>
									<th><?php echo __('Created'); ?></th>
									<th><?php echo __('Modified'); ?></th>
									<th><?php echo __('Content'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($user['Post'] as $post): ?>
								<tr>
									<td><?php echo $post['id']; ?></td>
									<td><?php echo $post['topic_id']; ?></td>
									<td><?php echo $post['forum_id']; ?></td>
									<td><?php echo $post['created']; ?></td>
									<td><?php echo $post['modified']; ?></td>
									<td><?php echo $post['content']; ?></td>
									<td class="actions">
										<?php echo $this->Html->link(__('View'), array('controller' => 'posts', 'action' => 'view', $post['id']), array('class' => 'btn btn-xs btn-primary')); ?>
										<?php echo $this->Html->link(__('Edit'), array('controller' => 'posts', 'action' => 'edit', $post['id']), array('class' => 'btn btn-xs btn-success')); ?>
										<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'posts', 'action' => 'delete', $post['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete #%s?', $post['id'])); ?>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						</div>
					<?php endif; ?>
					</fieldset>
				</div>

				<div class="table-responsive">
					<?php if (!empty($user['Topic'])): ?>
					<fieldset>
						<legend><i class="glyphicon glyphicon-bullhorn"></i> <?php echo __('Related Topics'); ?></legend>
						<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th><?php echo __('Id'); ?></th>
									<th><?php echo __('Name'); ?></th>
									<th><?php echo __('Content'); ?></th>
									<th><?php echo __('Created'); ?></th>
									<th><?php echo __('Modified'); ?></th>
									<th><?php echo __('Forum Id'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($user['Topic'] as $topic): ?>
								<tr>
									<td><?php echo $topic['id']; ?></td>
									<td><?php echo $topic['name']; ?></td>
									<td><?php echo $topic['content']; ?></td>
									<td><?php echo $topic['created']; ?></td>
									<td><?php echo $topic['modified']; ?></td>
									<td><?php echo $topic['forum_id']; ?></td>
									<td class="actions">
										<?php echo $this->Html->link(__('View'), array('controller' => 'topics', 'action' => 'view', $topic['id']), array('class' => 'btn btn-xs btn-primary')); ?>
										<?php echo $this->Html->link(__('Edit'), array('controller' => 'topics', 'action' => 'edit', $topic['id']), array('class' => 'btn btn-xs btn-success')); ?>
										<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'topics', 'action' => 'delete', $topic['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete #%s?', $topic['id'])); ?>
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
