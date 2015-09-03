
<h3><?php echo empty($user->id) ? 'Add a new user': 'Edit User ' . $user->username ;?></h3>
	
<?php echo validation_errors();?>
<?php echo form_open();?>
<table class="table">
	<tr>
		<td>Full Name</td>
		<td><?php echo form_input('fullname', set_value('fullname',$user->fullname));?></td>
	</tr>
	<tr>
		<td>User Name</td>
		<td><?php echo form_input('username',set_value('username',$user->username));?></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><?php echo form_password('password');?></td>
	</tr>
	<tr>
		<td>Confirm Password</td>
		<td><?php echo form_password('password_confirm');?></td>
	</tr>
	<tr>
		<td></td>
		<td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"');?></td>
	</tr>
</table>
	
<?php echo form_close();?>
