<div class="row">
  <div class="col-lg-12">
    <ol class="breadcrumb">
      <li>
        <?php echo $this->Html->link(__('Forum'),'/')?>
      </li>
      <li>
        <?php echo $this->Html->link($forum['Forum']['name'],array('controller'=>'topics','action'=>'index',$forum['Forum']['id']))?>
      </li>
      <li>
        <?php echo $this->Html->link($topic['Topic']['name'],array('controller'=>'topics','action'=>'view',$topic['Topic']['id']))?>
      </li>
      <li class="active">
        <?php echo __('Post Reply');?>
      </li>
    </ol>
  </div>
</div>

<div class="panel-group" id="accordion">
  <div class="panel panel-default">

    <div class="panel-heading toggle">
     <h3 class="panel-title toggle"  data-toggle="collapse" data-parent="#accordion1" data-target="#collapseOne">
       <i class="glyphicon glyphicon-send"></i>&nbsp; Post Reply
     </h3>
    </div>

    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">

        <?php echo $this->Form->create('Post',array('class'=>'form-horizontal','inputDefaults'=>array('label'=>false)));?>
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
               <?php echo $this->Form->submit(__('Post Reply'),array('class'=>'btn btn-primary'))?>
            </div>
          </div>

          <?php echo $this->Form->hidden('topic_id', array('value'=>$topic['Topic']['id']))?>
          <?php echo $this->Form->hidden('forum_id', array('value'=>$forum['Forum']['id']))?>
        <?php echo $this->Form->end();?>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
    CKEDITOR.replace( 'editor',
      {
        // toolbar: [['Bold','Italic','Underline'],],
        skin: 'bootstrapck',
        // extraPlugins: 'imageuploader,tableresize',
      }
    );
</script>
