<center><h1>Add a new User</h1>
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Session->flash(); ?>
<?php echo $form->create('User', array('action'=>'add')); ?>

<?php echo $form->input('name'); ?>
<?php echo $form->input('username'); ?>
<?php echo $form->input('password'); ?>
<?php //if($admin){ ?>
<?php echo $form->input('roles'); ?>
<?php //} ?>
<?php echo $form->end(__('Submit', true)); ?>
</center>