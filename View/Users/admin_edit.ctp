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
<?php echo $this->element('Users.Users/admin_sidebar'); ?>
<div class="users form">
	<?php echo $this->Form->create($model,array('class'=>'form-horizontal')); ?>
		<fieldset>
			<legend><?php echo __d('users', 'Edit User'); ?></legend>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('username', array(
					'label' => array('text'=>__d('users', 'Username'),'class'=>'control-label col-md-2'),
					'div' => 'form-group',
					'class' => 'form-control',
					'between'=> '<div class="col-md-4">',
					'after' => '</div>'));
				echo $this->Form->input('email', array(
					'label' => array('text'=>__d('users', 'Email'),'class'=>'control-label col-md-2'),
					'div' => 'form-group',
					'class' => 'form-control',
					'between'=> '<div class="col-md-4">',
					'after' => '</div>'));
                if (!empty($roles)) {
                    echo $this->Form->input('role', array(
                        'label' => __d('users', 'Role'), 'values' => $roles));
                }
                echo $this->Form->input('is_admin', array(
						'label' => array('text'=>__d('users', 'Is Admin'),'class'=>'control-label'),
						'div' => 'form-group',
						'before'=> '<div class="col-md-4 col-md-offset-2"><div class="checkbox">',
						'after' => '</div></div>'));
                    echo $this->Form->input('active', array(
						'label' => array('text'=>__d('users', 'Active'),'class'=>'control-label'),
						'div' => 'form-group',
						'before'=> '<div class="col-md-4 col-md-offset-2"><div class="checkbox">',
						'after' => '</div></div>'));
			?>
		</fieldset>
	<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
	<?php echo $this->Form->end(); ?>
</div>
