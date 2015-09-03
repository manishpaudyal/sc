<h1><i class="icon-bar-chart"></i> Class Setup</h1>
</div>
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">School</a></li>
  <li><a href="#">Class</a></li>
  <li class="active">Index</li>
</ol>
<div class="main-content">
    <div class="widget">
      <div class="widget-content-white glossed">
        <div class="padded">
         <section>
             <?php echo validation_errors();?>
                    <div class="padded">
                      <?php echo form_open('',array('class' => 'form-horizontal'));?>
                        <div class="widget-controls pull-right">
                          <!-- a href="#" class="widget-link-remove"><i class="icon-minus-sign"></i></a>
                          <a href="#" class="widget-link-remove"><i class="icon-remove-sign"></i></a> -->
                        </div>
                        <h3 class="section-title first-title"><i class="icon-th-list"></i><?php echo empty($classes->id) ? 'Add New Class': 'Edit Class information : ' . $classes->classname ;?></h3>
                        <!-- <h3 class="form-title form-title-first"> Horizontal Form</h3> -->
                        <div class="form-group">
                          <label class="col-md-2 control-label">Class Name:</label>
                          <div class="col-md-8">
                            <?php echo form_input('classname',set_value('classname', $classes->classname ),'class="form-control"');?>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 control-label">Description</label>
                          <div class="col-md-8">
                            <?php echo form_input('description', set_value('description',$classes->description),'class="form-control"');?>
                          </div>
                        </div>
 
                        <div class="form-group">
                          <div class="col-md-offset-4 col-md-8">
                            <?php echo form_submit('submit', ' Save ', 'class="btn btn-primary"');?>
                          </div>
                        </div>
                     <?php echo form_close();?>
                    </div>

            </section>
          </div>
      </div>
    </div>
</div>
