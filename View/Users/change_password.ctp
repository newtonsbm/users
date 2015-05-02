<?php
/**
 * Copyright 2010 - 2014, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2014, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<?php echo $this->element('Users.Users/sidebar'); ?>
<div class="users form">
<h2><?php echo __d('users', 'Change your password'); ?></h2>
<p><?php echo __d('users', 'Please enter your old password because of security reasons and then your new password twice.'); ?></p>
	<?php
		echo $this->Form->create($model, array('action' => 'change_password','class'=>'form-horizontal','role'=>'form'));
		echo $this->Form->input('old_password', array(
			'label' => array('label'=>__d('users', 'Old Password'),'class'=>'control-label col-md-2'),
			'class' => 'form-control',
			'div' => 'form-group',
			'between' => '<div class="col-md-4">',
			'after'=>'</div>',
			'type' => 'password'));
		echo $this->Form->input('new_password', array(
			'label' => array('label'=>__d('users', 'New Password'),'class'=>'control-label col-md-2'),
			'class' => 'form-control',
			'div' => 'form-group',
			'between' => '<div class="col-md-4">',
			'after'=>'</div>',
			'type' => 'password'));
		echo $this->Form->input('confirm_password', array(
			'label' => array('label'=>__d('users', 'Confirm'),'class'=>'control-label col-md-2'),
			'class' => 'form-control',
			'div' => 'form-group',
			'between' => '<div class="col-md-4">',
			'after'=>'</div>',
			'type' => 'password'));
		echo $this->Form->submit(__d('users', 'Submit'),array('class'=>'btn btn-primary'));
		echo $this->Form->end();
	?>
</div>
