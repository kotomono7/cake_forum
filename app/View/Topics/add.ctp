<div class="row">
  <div class="col-lg-12">
    <ol class="breadcrumb">
      <li>
        <?php echo $this->Html->link(__('Forum'),'/'); ?>
      </li>
      <li class="active">
        <?php echo __('Create Topic'); ?>
      </li>
    </ol>
  </div>
</div>

<div class="panel-group" id="accordion">
  <div class="panel panel-default">

    <div class="panel-heading toggle">
  		<h3 class="panel-title toggle"  data-toggle="collapse" data-parent="#accordion1" data-target="#collapseOne">
  			<i class="glyphicon glyphicon-plus"></i>&nbsp; Create New Topic
  		</h3>
    </div>

    <div id="collapseOne" class="panel-collapse collapse in">
		  <div class="panel-body">

        <?php echo $this->Form->create('Topic', array('class'=>'form-horizontal','inputDefaults'=>array('label'=>false))); ?>
        <div class="form-group">
          <label class="col-sm-1 control-label">Title</label>
          <div class="col-sm-11">
             <?php echo $this->Form->input('name', array('class'=>'form-control')); ?>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1 control-label">Forum</label>
          <div class="col-sm-11">
            <?php echo $this->Form->input('forum_id', array('options'=>$forums, 'class'=>'form-control')); ?>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1 control-label">Content</label>
          <div class="col-sm-11">
            <?php
              echo $this->Form->textarea('content',
                array(
                  'id' => 'editor',
                  'class' => 'ckeditor form-control'
                )
              );
            ?>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-1 col-sm-11">
            <?php echo $this->Form->submit(__('Create'), array('class'=>'btn btn-primary')); ?>
            <?php echo $this->Form->end(); ?>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
    CKEDITOR.replace( 'editor',
      {
        // toolbar: [['Bold','Italic','Underline','Subscript','Superscript'],],
        skin: 'bootstrapck',
        // extraPlugins: 'imageuploader,tableresize',
      }
    );
</script>
