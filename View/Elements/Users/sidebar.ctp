<div class="navbar navbar-default" role="navigation">
	<ul class="nav navbar-nav">
		<?php if (!$this->Session->read('Auth.User.id')) : ?>
			<li><?php echo $this->Html->link(__d('users', 'Login'), array('action' => 'login')); ?></li>
            <?php if (!empty($allowRegistration) && $allowRegistration)  : ?>
			<li><?php echo $this->Html->link(__d('users', 'Register an account'), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__d('users', 'Resend verification'), array('action' => 'resend_verification')); ?></li>
            <?php endif; ?>
		<?php else : ?>
			<li><?php echo $this->Html->link(__d('users', 'Logout'), array('action' => 'logout')); ?>
			<li><?php echo $this->Html->link(__d('users', 'My Account'), array('action' => 'edit',$this->Session->read('Auth.User.slug'))); ?>
			<li><?php echo $this->Html->link(__d('users', 'Change password'), array('action' => 'change_password')); ?>
		<?php endif ?>
		<?php if($this->Session->read('Auth.User.is_admin')) : ?>
            <li>&nbsp;</li>
            <li><?php echo $this->Html->link(__d('users', 'List Users'), array('action'=>'index'));?></li>
        <?php endif; ?>
	</ul>
	<?php if ($this->Session->read('Auth.User.id')) : ?>
	<ul class="nav navbar-nav pull-right">
		<li><?php echo $this->Html->link(__d('users',"logged as "). $this->Session->read('Auth.User.username'), array('action'=>'index')) ?></li>
	</ul>
	<?php endif; ?>
</div>

