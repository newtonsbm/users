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
	<?php echo $this->Form->create($model,array('class'=>'form-horizontal')); ?>
		<fieldset>
			<legend><?php echo __d('users', 'Edit User'); ?></legend>
			<?php
				echo $this->Form->input('UserDetail.first_name');
				echo $this->Form->input('UserDetail.last_name');
				echo $this->Form->input('UserDetail.birthday');
			?>
			<?php echo $this->Html->link(__d('users', 'Change your password'), array('action' => 'change_password')); ?>
		</fieldset>
	<?php echo $this->Form->submit(__d('users','Submit'),array('class'=>'btn btn-primary')) ?>
	<?php echo $this->Form->end(); ?>
</div>
