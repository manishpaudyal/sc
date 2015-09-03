<?php $this->load->view('admin/components/page_head');?>

<body style="background: #666;">
	<div class="modal show" role="dialog">
		<?php $this->load->view($subview); // Subview is set in controller ?>
		<div class="modal-footer">
			&copy; <?php echo $meta_title;?>
		</div>

	</div>
</body>

<?php $this->load->view('admin/components/page_tail');?>