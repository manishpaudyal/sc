<div id="main" class="container-fluid">
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
				<li>
					<a href="#" class="active ajax-link">
						<i class="fa fa-home"></i>
						<span class="hidden-xs">गृह पृष्ठ</span>
					</a>
				</li>
				<li class="dropdown">
					<a href="<?php echo site_url('case/admin'); ?>" class="dropdown-toggle">
						<i class="fa fa-file"></i>
						<span class="hidden-xs">मुद्दा रुजु गर्ने</span>
					</a>
				</li>
               <li class="dropdown">
					<a href="<?php echo site_url('case/admin/search_edit'); ?>" class="dropdown-toggle">
						<i class="fa fa-edit"></i>
						<span class="hidden-xs">मुद्दा बिबरण हेर्ने</span>
					</a>
				</li> 
               <li class="dropdown">
					<a href="<?php echo site_url('case/admin/search_case'); ?>" class="dropdown-toggle">
						<i class="fa fa-search"></i>
						<span class="hidden-xs">मुद्दा खोज्ने </span>
					</a>
				</li> 
			</ul>
		</div>