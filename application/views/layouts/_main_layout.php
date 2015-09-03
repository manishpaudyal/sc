<!--Page Header-->
<?php $this->load->view('components/page_head.php'); ?>
<!--End Page Header-->

<!--Menu Item-->
<?php $this->load->view('elements/other_menu.php'); ?>
<!--End Menu Item-->

<!---Mega Menu-->
  <?php  //$this->load->view('elements/mega_menu.php'); ?>
<!---End Mega Menu-->
<div class="col-md-9">
  <div class="content-wrapper">
    <div class="content-inner">
      <div class="page-header">
        <!--Other Header-->
        <?php $this->load->view('elements/other_header.php'); ?>
        <!--End Other Header-->
        <!--Start Content-->
        <?php $this->load->view($subview); ?>
         
       <!--End Content-->
  
          </div>
                </div>
    </div>

<!--Page Tail-->
<?php $this->load->view('components/page_tail.php'); ?>
<!--End Page Tail-->