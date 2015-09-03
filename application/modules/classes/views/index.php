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
                  <h3 class="section-title first-title"><?php  echo anchor('classes/classes/edit','<i class="icon-plus"></i> ADD NEW CLASS');?></h3>
                  <div class="widget-content-white glossed">
                    <div class="padded">
                      <section>
                          <table class="table table-striped table-bordered table-hover">
                          <thead>
                              <th>Class Name</th>
                              <th>Description</th>
                              <th>&nbsp;</th>
                              <th>&nbsp;</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php  if(count($classes)): foreach ($classes as $classes):?>
                            <tr>
                              <td><?php echo anchor('classes/classes/edit/'. $classes->id, $classes->classname); ?></td>
                              <td><?php echo $classes->description; ?></td>
                              <td class="text-right"><?php echo btn_edit('classes/classes/edit/'. $classes->id); ?></td>
                              <td class="text-right"><?php echo btn_delete('classes/classes/delete/'. $classes->id); ?></td>
                            </tr>
                            <?php endforeach ;?>
                          <?php else: ?>
                            <tr>
                              <td colspan="4"> There Are Not Any Class to Display.</td>
                            </tr>
                          <?php endif;?>
                          </tbody>
                        </table>
                      
                      </section>
                      </div>
                    </div>
                </div>
              </div>
          </div>