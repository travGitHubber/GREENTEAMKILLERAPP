<center>
<h1>Login</h1>
<?php echo $session->flash('auth'); ?>
</br>
<?php echo $form->create('User', array('action'=>'login')); ?>
<?php echo $form->input('username'); ?>
<?php echo $form->input('password'); ?>
<?php echo $form->end('Login'); ?>
</center>