<ol class="breadcrumb">
	<li>
		<?php echo $this->Html->link(__('Forum'), '/'); ?>
	</li>
	<li class="active">
		<?php echo $forum['Forum']['name']; ?>
	</li>
</ol>

<div class="panel-group" id="accordion">
    <div class="panel panel-default">

        <div class="panel-heading toggle">
			<h3 class="panel-title toggle"  data-toggle="collapse" data-parent="#accordion1" data-target="#collapseOne">
				<i class="glyphicon glyphicon-bullhorn"></i>&nbsp; Available Topics
			</h3>
        </div>

        <div id="collapseOne" class="panel-collapse collapse in">
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-8 col-md-8 col-lg-8">
						<p>
							<?php
								echo $this->Html->link(__('Create Topic'), array('action' => 'add'), array('class' => 'btn btn-primary'));
							?>
						</p>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<p class="pull-right" style="margin-top: 7px;">
							<strong>
							<?php
								echo $this->Paginator->counter('Showing {:start} - {:end} of {:count}');
							?>
							</strong>
						</p>
					</div>
				</div>

				<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th colspan=2>Topic</th>
							<th>Author</th>
							<th>Created</th>
							<th>Posts</th>
							<th>Activity</th>
						</tr>
					</thead>

					<tbody>
						<?php $nr = 1; ?>
						<?php foreach ($topics as $topic): ?>
						<tr>
							<td><?php echo $nr; ?></td>
							<td>
								<?php
									echo $this->Html->link($topic['Topic']['name'],
										array(
											'controller' => 'topics',
											'action' => 'view',
											$topic['Topic']['id']
										)
									);
								?>
							</td>
							<td>
								<?php
									echo $this->Html->link($topic['User']['username'],
										array(
											'controller' => 'users',
											'action' => 'profile',
											$topic['User']['id']
										)
									);
								?>
							</td>
							<td>
								<?php
									echo $this->Time->timeAgoInWords($topic['Topic']['created']);
								?>
							</td>
							<td>
								<?php
									echo count($topic['Post']);
								?>
							</td>
							<td>
								<?php
									if (count($topic['Post'])>0) {
										$post = $topic['Post'][0];
										echo $this->Time->timeAgoInWords($post['created']);
										echo ' by ';
										echo $this->Html->link($post['User']['username'],
											array(
												'controller' => 'users',
												'action' => 'profile',
												$post['User']['id']
											)
										);
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
					<?php
						echo $this->element('paginator');
					?>
				</div>
         	</div>
        </div>

    </div>
</div>
