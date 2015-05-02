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
	<h2><?php echo __d('users', 'Resend the Email Verification'); ?></h2>
	<p><?php echo __d('users', 'Please enter the email you used for registration and you\'ll get an email with further instructions.'); ?></p>
	<?php
	echo $this->Form->create($model, array(
		'url' => array(
			'admin' => false,
			'action' => 'resend_verification')));
	echo $this->Form->input('email', array(
		'label' => array('text'=>__d('users', 'Your Email'), 'class'=>'control-label col-md-2'),
		'class' => 'form-control',
		'div' => 'form-group',
		'between' => '<div class="col-md-4">',
		'after'=>'</div>'));
	echo $this->Form->submit(__d('users','Submit'),array('class'=>'btn btn-lg btn-primary'));
	echo $this->Form->end();
	?>
</div>
