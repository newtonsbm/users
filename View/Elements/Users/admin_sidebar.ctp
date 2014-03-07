<div class="navbar navbar-default" role="navigation">
	<ul class="nav navbar-nav">
		<li><?php echo $this->Html->link(__d('users', 'Logout'), array('admin' => false, 'action' => 'logout')); ?>
		<li><?php echo $this->Html->link(__d('users', 'My Account'), array('admin' => false, 'action' => 'edit')); ?>
		<li>&nbsp;</li>
		<li><?php echo $this->Html->link(__d('users', 'Add Users'), array('admin' => true, 'action'=>'add'));?></li>
		<li><?php echo $this->Html->link(__d('users', 'List Users'), array('admin' => true, 'action'=>'index'));?></li>
		<li>&nbsp;</li>
		<li><?php echo $this->Html->link(__d('users', 'Frontend'), array('admin' => false, 'action'=>'index')); ?></li>
	</ul>
	<ul class="nav navbar-nav pull-right">
		<li><?php echo $this->Html->link(__d('users',"logged as "). $this->Session->read('Auth.User.username'), array('action'=>'index')) ?></li>
	</ul>
</div>