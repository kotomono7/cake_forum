<ol class="breadcrumb">
    <li>
        <?php echo $this->Html->link(__('Forum'), '/'); ?>
    </li>
    <li>
        <?php
			echo $this->Html->link($forum['Forum']['name'],
				array('controller' => 'topics', 'action' => 'index', $forum['Forum']['id'])
			);
		?>
    </li>
    <li class="active">
        <?php echo $topic['Topic']['name']; ?>
    </li>
</ol>

<div class="panel-group" id="accordion">
    <div class="panel panel-default">

        <div class="panel-heading toggle">
			<h3 class="panel-title toggle"  data-toggle="collapse" data-parent="#accordion1" data-target="#collapseOne">
				<i class="glyphicon glyphicon-comment"></i>&nbsp; Available Posts
			</h3>
        </div>

        <div id="collapseOne" class="panel-collapse collapse in">
			<div class="panel-body">
			<div class="row">
				<div class="col-sm-8 col-md-8 col-lg-8">
					<p class="lead">
						<?php echo $topic['Topic']['content']; ?>
					</p>
				</div>

				<div class="col-sm-4 col-md-4 col-lg-4">
					<p class="text-right">
						<?php
							echo $this->Html->link(__('Create Topic'),
								array('action' => 'add'),
								array('class' => 'btn btn-primary')
							);
						?>
						<?php
							echo $this->Html->link(__('Post Reply'),
								array('controller' => 'posts', 'action' => 'add', $topic['Topic']['id']),
								array('class' => 'btn btn-primary')
							);
						?>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-md-4 col-lg-4">
					<p>
						<?php
							echo $this->Paginator->counter('Showing {:start} - {:end} of {:count}');
						?>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<tbody>
							<?php
								foreach ($posts as $post) :
							?>
							<tr>
								<td>
									<small><?php echo $this->Time->timeAgoInWords($post['Post']['created']); ?></small>
								</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td width="150px">
									<p>
										<?php
											echo $this->Html->link($post['User']['username'],
												array('controller' => 'users', 'action' => 'profile', $post['User']['id'])
											);
										?>
									</p>
									<?php $hash = md5($post['User']['email']); ?>
									<img src="http://www.gravatar.com/avatar/<?php echo $hash; ?>?s=100">
								</td>
								<td>
									<p>
										<?php echo $post['Post']['content']; ?>
									</p>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					</div>

					<div class="pull-right">
						<?php
							echo $this->element('paginator');
						?>
					</div>

					<div class="clearfix"></div>

					<div class="well">
						<h4><?php echo __('Quick Reply'); ?></h4>
						<?php
							echo $this->Form->create('Post',
								array(
									'url' => array('controller' => 'posts', 'action' => 'add'),
									'inputDefaults' => array('label' => false)
								)
							);
						?>
						<div class="form-group">
							<?php echo $this->Form->textarea('content', array('class' => 'form-control', 'rows' => 5)); ?>
						</div>
						<?php echo $this->Form->hidden('topic_id',array('value' => $topic['Topic']['id'])); ?>
						<?php echo $this->Form->hidden('forum_id',array('value' => $forum['Forum']['id'])); ?>
						<?php echo $this->Form->submit(__('Post Reply'),array('class'=>'btn btn-primary')); ?>
						<?php echo $this->Form->end(); ?>
					</div>
				</div>
			</div>
         	</div>
        </div>

    </div>
</div>
