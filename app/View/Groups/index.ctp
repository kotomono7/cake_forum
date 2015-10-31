<div class="panel-group" id="accordion">
  <div class="panel panel-default">

    <div class="panel-heading toggle">
			<h3 class="panel-title toggle"  data-toggle="collapse" data-parent="#accordion1" data-target="#collapseOne">
				<i class="glyphicon glyphicon-cog"></i>&nbsp; Available Groups
			</h3>
    </div>

    <div id="collapseOne" class="panel-collapse collapse in">
			<div class="panel-body">

				<p>
					<?php
						echo $this->Html->link(__('Add New Group'), array('action' => 'add'),
							array('class' => 'btn btn-success')
						);
					?>
				</p>

    		<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('created'); ?></th>
              <th><?php echo $this->Paginator->sort('created_by'); ?></th>
							<th><?php echo $this->Paginator->sort('modified'); ?></th>
							<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($groups as $group): ?>
					<tr>
						<td><?php echo h($group['Group']['id']); ?></td>
						<td><?php echo h($group['Group']['name']); ?></td>
						<td><?php echo h($group['Group']['created']); ?></td>
            <td><?php echo h($group['Group']['created_by']); ?></td>
						<td><?php echo h($group['Group']['modified']); ?></td>
						<td><?php echo h($group['Group']['modified_by']); ?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('action' => 'view', $group['Group']['id']), array('class' => 'btn btn-xs btn-primary')); ?>
							<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $group['Group']['id']), array('class' => 'btn btn-xs btn-success')); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $group['Group']['id']), array('class' => 'btn btn-xs btn-danger', 'confirm' => __('Are you sure you want to delete #%s?', $group['Group']['id']))); ?>
						</td>
					</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
				</div>

				<p>
				<?php
					echo $this->Paginator->counter(array(
						'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>
				</p>
				<div>
					<?php echo $this->element('paginator'); ?>
        </div>

			</div>
    </div>

  </div>
</div>
