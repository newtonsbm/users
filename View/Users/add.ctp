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
	<h2><?php echo __d('users', 'Add User'); ?></h2>
	<fieldset>
		<?php
			echo $this->Form->create($model,array('class'=>'form-horizontal','role'=>'form'));
			echo $this->Form->input('username', array(
				'label' => array('text'=>__d('users', 'Username'), 'class'=>'control-label col-md-2'),
				'class' => 'form-control',
				'div' => 'form-group',
				'between' => '<div class="col-md-4">',
				'after'=>'</div>'
				));
			echo $this->Form->input('email', array(
				'label' => array('text'=>__d('users', 'E-mail (used as login)'), 'class'=>'control-label col-md-2'),
				'class' => 'form-control',
				'div' => 'form-group',
				'between' => '<div class="col-md-4">',
				'after'=>'</div>',
				'error' => array('isValid' => __d('users', 'Must be a valid email address'),
				'isUnique' => __d('users', 'An account with that email already exists'))));
			echo $this->Form->input('password', array(
				'label' => array('text'=>__d('users', 'Password'), 'class'=>'control-label col-md-2'),
				'class' => 'form-control',
				'div' => 'form-group',
				'between' => '<div class="col-md-4">',
				'after'=>'</div>',
				'type' => 'password'));
			echo $this->Form->input('temppassword', array(
				'label' => array('text'=>__d('users', 'Password (confirm)'), 'class'=>'control-label col-md-2'),
				'class' => 'form-control',
				'div' => 'form-group',
				'between' => '<div class="col-md-4">',
				'after'=>'</div>',
				'type' => 'password'));
			$tosLink = $this->Html->link(__d('users', 'Terms of Service'), array('controller' => 'pages', 'action' => 'tos', 'plugin' => null));
			echo $this->Form->input('tos', array(
				'label' => __d('users', 'I have read and agreed to ') . $tosLink));
			echo '<br>';
			echo $this->Form->submit(__d('users','Submit'),array('class'=>'btn btn-lg btn-primary'));
			echo $this->Form->end();
		?>
	</fieldset>
</div>
