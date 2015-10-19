<div class="panel-group" id="accordion">
  <div class="panel panel-default">

    <div class="panel-heading toggle">
			<h3 class="panel-title toggle"  data-toggle="collapse" data-parent="#accordion1" data-target="#collapseOne">
				<i class="glyphicon glyphicon-home"></i>&nbsp; Available Forums
			</h3>
    </div>

    <div id="collapseOne" class="panel-collapse collapse in">
			<div class="panel-body">

    		<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th colspan=2>Forum</th>
							<th>Topics</th>
							<th>Posts</th>
							<th>Activity</th>
						</tr>
					</thead>
					<tbody>
						<?php $nr = 1; ?>
						<?php foreach ($forums as $forum): ?>
						<tr>
							<td><?php echo $nr; ?></td>
							<td>
								<?php
									echo $this->Html->link('<strong>'.$forum['Forum']['name'].'</strong>',
										array('controller' => 'topics', 'action' => 'index', $forum['Forum']['id']),
										array('escape' => false)
									);
								?>
							</td>
							<td><?php echo count($forum['Topic']); ?></td>
							<td><?php echo count($forum['Post']); ?></td>
							<td>
								<?php
									if (count($forum['Post']) > 0) {
										$post = $forum['Post'][0];
										echo $this->Html->link($post['Topic']['name'],
											array(
												'controller'=>'topics',
												'action'=>'view',
												$post['Topic']['id']
											)
										);
										echo ' (';
										echo $this->Time->timeAgoInWords($post['created']);
										echo ' by ';
										echo $this->Html->link($post['User']['username'],
											array(
												'controller'=>'users',
												'action'=>'profile',
												$post['User']['id']
											)
										);
										echo ')';
									}
								?>
							</td>
						</tr>
						<?php $nr++; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
				</div>

				<div class="pull-right">
					<?php echo $this->element('paginator'); ?>

        </div>

			</div>
    </div>

  </div>
</div>
