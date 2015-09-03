
<?php $this->load->view('admin/components/page_head');?>
  <body>
    <header class="header">
      <h1><?php echo anchor('', config_item('site_name')); ?></h1>
      <div class="navbar navbar-static-top navbar-inner">
      <div class="navbar-inner">
        <a class="brand" href="<?php echo site_url('admin/dashboard')?>"><?php echo $meta_title ; ?></a>
        <!-- <ul class="nav">
          <li class="active"><a href="<? //php echo site_url('admin/dashboard')?>">Dashboard</a></li>
          <li><? // php echo anchor('cms/casetype','मुद्दाको किसिम')?></li>
          <li><? //php echo anchor('cms/casename','मुद्दाको नाम')?></li>
          <li><? //php echo anchor('cms/casereg','मुद्दा दर्ता')?>
            <ul>
               <li><? //php echo anchor('cms/casetype','मुद्दा दर्ता')?>
              // <li><? //php echo anchor('cms/casetype','मुद्दा दर्ता')?>
            </ul> 
          </li>

          <li><? //php echo anchor('cms/person','मुद्दाको नाम')?></li>
        </ul>
      </div> 
      <!-- /// test-->
 <div class="dropdown" style="position:relative">
  <a href="#" class="link btn-primary dropdown-toggle" data-toggle="dropdown">Click Here <span class="caret"></span></a>
  <ul class="dropdown-menu">
    <li>
      <a class="trigger right-caret">Level 1</a>
      <ul class="dropdown-menu sub-menu">
        <li><a href="#">Level 2</a></li>
        <li>
          <a class="trigger right-caret">Level 2</a>
          <ul class="dropdown-menu sub-menu">
            <li><a href="#">Level 3</a></li>
            <li><a href="#">Level 3</a></li>
            <li>
              <a class="trigger right-caret">Level 3</a>
              <ul class="dropdown-menu sub-menu">
                <li><a href="#">Level 4</a></li>
                <li><a href="#">Level 4</a></li>
                <li><a href="#">Level 4</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#">Level 2</a></li>
      </ul>
    </li>
    <li><a href="#">Level 1</a></li>
    <li><a href="#">Level 1</a></li>
  </ul>
</div>

     <!--  ////End Test Here -->


    </div>
    </header>
    <div class="container">
      <div class="row">
          <!--Main Column -->
          <div class="span12">
            <?php $this->load->view($subview);?>
          </div>
          <!--Side Bar -->
          <div class="span3">
            <section>
              <?php echo mailto('manishpaudyal@hotmail.com', '<i class="icon-user"></i> manishpaudyal@hotmail.com' );?><br>
              <?php echo anchor('page','<i class="icon-off"></i> Logout');?>
            </section>
          </div>
      </div>
    </div>
<?php $this->load->view('admin/components/page_tail');?>
   