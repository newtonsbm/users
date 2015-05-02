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
<?php echo $this->element('Users.Users/admin_sidebar'); ?>
<div class="users form">
	<?php echo $this->Form->create($model,array('class'=>'form-horizontal','role'=>'form')); ?>
		<fieldset>
			<legend><?php echo __d('users', 'Add User'); ?></legend>
			<?php
				echo $this->Form->input('username', array(
					'div' => 'form-group',
					'between' => '<div class="col-md-4">',
					'class' => 'form-control',
					'after'=>'</div>',
					'label' => array('text' =>__d('users', 'Username'),'class'=>'control-label col-md-2')));
				echo $this->Form->input('email', array(
					'div' => 'form-group',
					'between' => '<div class="col-md-4">',
					'class' => 'form-control',
					'after'=>'</div>',
					'label' => array('text' =>__d('users', 'E-mail (used as login)'),'class'=>'control-label col-md-2'),
					'error' => array('isValid' => __d('users', 'Must be a valid email address'),
						'isUnique' => __d('users', 'An account with that email already exists'))));
				echo $this->Form->input('password', array(
					'div' => 'form-group',
					'between' => '<div class="col-md-4">',
					'class' => 'form-control',
					'after'=>'</div>',
					'label' => array('text' =>__d('users', 'Password'),'class'=>'control-label col-md-2'),
					'type' => 'password'));
				echo $this->Form->input('temppassword', array(
					'div' => 'form-group',
					'between' => '<div class="col-md-4">',
					'class' => 'form-control',
					'after'=>'</div>',
					'label' => array('text' =>__d('users', 'Password (confirm)'),'class'=>'control-label col-md-2'),
					'type' => 'password'));
				if (!empty($roles)) {
					echo $this->Form->input('role', array(
						'div' => 'form-group',
						'between' => '<div class="col-md-4">',
						'class' => 'form-control',
						'after'=>'</div>',
						'label' => array('text'=>__d('users', 'Role'),'class'=>'control-label'), 'values' => $roles));
				}
				echo $this->Form->input('is_admin', array(
						'label' => __d('users', 'Is Admin'),
						'div' => 'form-group',
						'before' => '<div class="col-md-4 col-md-offset-2"><div class="checkbox">',
						'after'=>'</div></div>',
						));
				echo $this->Form->input('active', array(
					'label' => __d('users', 'Active'),
					'div' => 'form-group',
					'before' => '<div class="col-md-4 col-md-offset-2"><div class="checkbox">',
					'after'=>'</div></div>',
					));
			?>
		</fieldset>
	<?php echo $this->Form->submit(__d('users','Submit'),array('class'=>'btn btn-primary')); ?>
	<?php echo $this->Form->end(); ?>
</div>
