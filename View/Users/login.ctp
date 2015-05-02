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
<div class="users index well col-md-5 col-md-offset-4">
	<h2><?php echo __d('users', 'Login'); ?></h2>
		<?php echo $this->Session->flash('auth',array('params'=> array('class'=>'alert alert-warning')));?>
	<fieldset>
		<?php
			echo $this->Form->create($model, array(
				'action' => 'login',
				'id' => 'LoginForm'));
			echo $this->Form->input('email', array(
				'label' => false,
				'class' => 'form-control',
				'placeholder' => __d('users','Email')));
			echo $this->Form->input('password',  array(
				'label' => false,
				'class' => 'form-control',
				'placeholder' => __d('users', 'Password')));


			echo $this->Form->input('remember_me', array('type' => 'checkbox', 'label' =>  __d('users', 'Remember Me')));
			echo $this->Form->hidden('User.return_to', array(
				'value' => $return_to));
			echo $this->Form->submit(__d('users', 'Submit'),array('class'=>'btn btn-primary', 'div'=> false));
			echo $this->Html->link(__d('users', ' I forgot my password'), array('action' => 'reset_password'));
			echo $this->Form->end();
		?>
	</fieldset>
</div>
