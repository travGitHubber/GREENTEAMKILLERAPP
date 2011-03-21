<?php

// find a record based on these criteria, submit that record, and allow editing on that record

echo "<center><h2>Search for records by patient ID, they can be edited once located.<h2></center>";





?>

<center><h1>Search</h1>
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Session->flash(); ?>
<?php
// not the pretty way to do this...

echo "<form name='input' action='/cakephp/surveyexports/recordfinderhome' method = 'post'>
Search by ID:  <input type = 'text' name='id' />
<input type='submit' value='Submit' />



</form>";



?>
</center>




