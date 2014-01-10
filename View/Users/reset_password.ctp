<?php echo $this->element('Users.Users/sidebar'); ?>
<div class="users form">
<h2><?php echo __d('users', 'Reset your password'); ?></h2>
<?php
	echo $this->Form->create($model, array(
		'class'=>'form-horizontal',
		'url' => array(
			'action' => 'reset_password',
			$token)));
	echo $this->Form->input('new_password', array(
		'label' => array('text'=>__d('users', 'New Password'),'class'=>'control-label col-md-2'),
		'div' => 'form-group',
		'between' => '<div class="col-md-4">',
		'class' => 'form-control',
		'after'=>'</div>',
		'type' => 'password'));
	echo $this->Form->input('confirm_password', array(
		'label' => array('text'=>__d('users', 'Confirm'),'class'=>'control-label col-md-2'),
		'div' => 'form-group',
		'between' => '<div class="col-md-4">',
		'class' => 'form-control',
		'after'=>'</div>',
		'type' => 'password'));
	echo $this->Form->submit(__d('users', 'Submit'),array('class'=>'btn btn-primary'));
	echo $this->Form->end();
?>
</div>
