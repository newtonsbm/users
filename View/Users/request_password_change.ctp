<?php
/**
 * Copyright 2010 - 2013, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2013, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<?php echo $this->element('Users.Users/sidebar'); ?>
<div class="users form">
<h2><?php echo __d('users', 'Forgot your password?'); ?></h2>
<p><?php echo __d('users', 'Please enter the email you used for registration and you\'ll get an email with further instructions.'); ?></p>
<?php
	echo $this->Form->create($model, array(
		'class'=>'form-horizontal',
		'url' => array(
			'admin' => false,
			'action' => 'reset_password')));
	echo $this->Form->input('email', array(
		'label' => array('text'=>__d('users', 'Your Email'),'class'=>'control-label col-md-2'),
		'div' => 'form-group',
		'between' => '<div class="col-md-4">',
		'class' => 'form-control',
		'after' => '</div>'));
	echo $this->Form->submit(__d('users', 'Submit'),array('class'=>'btn btn-primary'));
	echo $this->Form->end();
?>
</div>
