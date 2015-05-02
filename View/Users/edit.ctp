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
	<?php echo $this->Form->create('Detail',array('class'=>'form-horizontal','role'=>'form')); ?>
		<?php echo $this->Form->input('id',array('type'=>'hidden')) ?>
		<fieldset>
			<legend><?php echo __d('users', 'Edit User'); ?></legend>
			<?php
				echo $this->Form->input('first_name', array(
					'label' => array('text'=>__d('users', 'First name'), 'class'=>'control-label col-md-2'),
					'class' => 'form-control',
					'div' => 'form-group',
					'between' => '<div class="col-md-4">',
					'after'=>'</div>'
				));
				echo $this->Form->input('last_name',array(
					'label' => array('text'=>__d('users', 'Last name'), 'class'=>'control-label col-md-2'),
					'class' => 'form-control',
					'div' => 'form-group',
					'between' => '<div class="col-md-4">',
					'after'=>'</div>'
				));
				echo $this->Form->input('birthday',array(
					'label' => array('text'=>__d('users', 'Birthday'), 'class'=>'control-label col-md-2'),
					'class' => 'form-control',
					'div' => 'form-group',
					'between' => '<div class="col-md-4">',
					'after'=>'</div>'
				));
				echo $this->Form->input('cellphone',array(
					'label' => array('text'=>__d('users', 'Cellphone'), 'class'=>'control-label col-md-2'),
					'class' => 'form-control',
					'div' => 'form-group',
					'between' => '<div class="col-md-4">',
					'after'=>'</div>'
				));
				echo $this->Form->input('telephone',array(
					'label' => array('text'=>__d('users', 'Telephone'), 'class'=>'control-label col-md-2'),
					'class' => 'form-control',
					'div' => 'form-group',
					'between' => '<div class="col-md-4">',
					'after'=>'</div>'
				));
				echo $this->Form->input('country',array(
					'label' => array('text'=>__d('users', 'Country'), 'class'=>'control-label col-md-2'),
					'class' => 'form-control',
					'div' => 'form-group',
					'between' => '<div class="col-md-4">',
					'after'=>'</div>'
				));
				echo $this->Form->input('state',array(
					'label' => array('text'=>__d('users', 'State'), 'class'=>'control-label col-md-2'),
					'class' => 'form-control',
					'div' => 'form-group',
					'between' => '<div class="col-md-4">',
					'after'=>'</div>'
				));
				echo $this->Form->input('city',array(
					'label' => array('text'=>__d('users', 'City'), 'class'=>'control-label col-md-2'),
					'class' => 'form-control',
					'div' => 'form-group',
					'between' => '<div class="col-md-4">',
					'after'=>'</div>'
				));
				echo $this->Form->input('street',array(
					'label' => array('text'=>__d('users', 'Street'), 'class'=>'control-label col-md-2'),
					'class' => 'form-control',
					'div' => 'form-group',
					'between' => '<div class="col-md-4">',
					'after'=>'</div>'
				));
				echo $this->Form->input('number',array(
					'label' => array('text'=>__d('users', 'Number'), 'class'=>'control-label col-md-2'),
					'class' => 'form-control',
					'div' => 'form-group',
					'between' => '<div class="col-md-4">',
					'after'=>'</div>'
				));
				echo $this->Form->input('zipcode',array(
					'label' => array('text'=>__d('users', 'Zipcode'), 'class'=>'control-label col-md-2'),
					'class' => 'form-control',
					'div' => 'form-group',
					'between' => '<div class="col-md-4">',
					'after'=>'</div>'
				));

			?>
			<?php echo $this->Html->link(__d('users', 'Change your password'), array('action' => 'change_password')); ?>
		</fieldset>
	<?php echo $this->Form->submit(__d('users','Submit'),array('class'=>'btn btn-primary')) ?>
	<?php echo $this->Form->end(); ?>
</div>
