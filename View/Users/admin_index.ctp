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
<div class="users index">
	<h2><?php echo __d('users', 'Users'); ?></h2>
	<h3><?php echo __d('users', 'Filter'); ?></h3>
	<?php echo $this->Form->create($model, array('action' => 'index','class'=>'form-inline','role'=>'form')); ?>
		<?php echo $this->Form->input('username', array(
			'label' => array('text'=>__d('users', 'Username'),'class'=>'sr-only'),
			'div'=>'form-group',
			'class'=>'form-control',
			'placeholder'=>__d('users','Username'),
			));
		?>	
		<?php echo $this->Form->input('email', array(
			'label' => array(__d('users', 'Email'),'class'=>'sr-only'),
			'div'=>'form-group',
			'class'=>'form-control',
			'placeholder'=>__d('users','Email'),
			));
		?>
		<?php 
		echo $this->Form->button(__d('users', 'Search'),array('div'=>'form-control','class'=>'btn btn-default'));
	echo $this->Form->end();
	?>

	<?php echo $this->element('Users.paging'); ?>
	<?php echo $this->element('Users.pagination'); ?>
	<table class='table'>
		<tr>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('email_verified'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __d('users', 'Actions'); ?></th>
		</tr>
			<?php
			$i = 0;
			foreach ($users as $user):
				$class = null;
				if ($i++ % 2 == 0) :
					$class = ' class="altrow"';
				endif;
			?>
			<tr<?php echo $class;?>>
				<td>
					<?php echo $user[$model]['username']; ?>
				</td>
				<td>
					<?php echo $user[$model]['email']; ?>
				</td>
				<td>
					<?php echo $user[$model]['email_verified'] == 1 ? __d('users', 'Yes') : __d('users', 'No'); ?>
				</td>
				<td>
					<?php echo $user[$model]['active'] == 1 ? __d('users', 'Yes') : __d('users', 'No'); ?>
				</td>
				<td>
					<?php echo $user[$model]['created']; ?>
				</td>
				<td class="actions">
					<?php echo $this->Html->link(__d('users', 'View'), array('action' => 'view', $user[$model]['id'])); ?>
					<?php echo $this->Html->link(__d('users', 'Edit'), array('action' => 'edit', $user[$model]['id'])); ?>
					<?php echo $this->Html->link(__d('users', 'Delete'), array('action' => 'delete', $user[$model]['id']), null, sprintf(__d('users', 'Are you sure you want to delete # %s?'), $user[$model]['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
	<?php echo $this->element('Users.pagination'); ?>
</div>
