<h2> Edit Record </h2>

<?php echo $form->create('Surveyexport', array('action'=>'edit'));
echo $form->input('participantID');
//echo $form->input('body');
echo $form->input('id', array('type'=>'hidden'));
echo $form->end('Update Record');

?>