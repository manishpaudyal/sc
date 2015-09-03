<!-- <div class="container-fluid">

	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="text-right">

				<a href="index.html" class="modal-link">
				<i class="fa fa-bell"></i>
				<span class="badge"></span>
				</a>
		
			</div>
            
            <div class="box">
				<div class="box-content">
					
            		<div class="panel panel-default">
			  			<div class="panel-heading">
			  				<h3 class="page-header">User Login</h3>
						</div>
				  		<div class="panel-body">
						    <div class="form-group">
								<label class="control-label">User Name:</label>
								<input type="text" class="form-control" name="identity" />
							</div>
							<div class="form-group">
								<label class="control-label">Password:</label>
								<input type="password" class="form-control" name="password" />
							</div>
		                                      
		                   	<div class="text-center">
		                    	<input type="submit" value="Login" class="btn btn-info"/>
		                    	<input type="reset" value="Reset" class="btn btn-info"/>
							</div>
				  		</div>
					</div>
				</div>
			</div>

		  

		</div>
	</div>
</div> -->





<div class="col-md-4 col-md-offset-4">

      <div class="content-wrapper bold-shadow">
        <div class="content-inner">
        	
          <div class="main-content main-content-grey-gradient no-page-header">
          			<?php if($message): ?>
								 <div class="alert alert-danger alert-dismissible" role="alert">
		                          <?php echo 'Alert!!'.$message; ?> 
		                        </div> 			
		            <?php endif; ?>
            <div class="main-content-inner">
            <?php echo form_open();?>
              <h4 class="form-title form-title-first"><i class="icon-lock"></i> Login</h4>
              <div class="form-group">
                <label>Username</label>
                <input type="email" class="form-control" placeholder="Enter email" name="identity">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password"> 
              </div>
              <!-- <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Remember me
                  </label>
                </div>
              </div> -->
              <div class="text-center">
		                    	<input type="submit" value="Login" class="btn btn-info"/>
		                    	<input type="reset" value="Reset" class="btn btn-info"/>
				</div>
             <!--  <a href="index-2.html" class="btn btn-primary btn-lg">Sign in</a>
              <a href="index-2.html" class="btn btn-link">Cancel</a> -->
            <?php echo form_close();?> 
            </div>
          </div>
        </div>
      </div>
    </div>