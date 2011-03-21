<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<style type="text/css">
body
{

}
</style>
<style type"text/css">
#userNav{
width: 100%;
text-align:center;
}
</style>
<title><?php echo $title_for_layout?></title>


<?php echo $session->flash('auth'); ?>

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<!-- Include external files and scripts here (See HTML helper for more info.) -->

<?php echo $scripts_for_layout ?>
</head>

<body>


	<b>  </b>

	<!-- If you'd like some sort of menu to 
show up on all of your views, include it here -->
	<div id="header">
	<?php navBar(); ?>
	
		<div id="menu"></div>
	</div>


	<!-- Here's where I want my views to be displayed -->

	<?php
echo"<center><img src='http://travisb.info/cakephp/app/webroot/mdhbanner2.jpg' alt='MDH Systems' /></center>";

echo "</br></br>";
?>
<div id="userNav">
<?php 
if($logged_in){
echo "<b>Welcome ". $users_username . " " .  $html->link('Logout', array('controller'=>'users', 'action'=>'logout')); 
echo "</b>";
echo "     <a href='/cakephp/surveyexports'>Home</a>";
}else{
echo $html->link('Login', array('controller'=>'users', 'action'=>'login')); 
}
?>
</div>

 		
		<script type='text/javascript'>
function goBack()
  {
  window.history.go(-2)
  }
function goBack()
  {
  window.history.forward()
  }
</script>

<center><input type='button' value='Back' onclick='goBack()' /><input type='button' value='Forward' onclick='goForward()' /></center>


	
	
	
	<?php echo $content_for_layout ?>

	<!-- Add a footer to each displayed page -->
	</br></br></br></br></br></br></br></br>
	<center><div id="footer">Group Green Senior Project</div></center>

</body>
</html>













	<?php
	// echo out the html menu
	// may be easier to do in cake = research more










function navBar(){
echo "";
}

?>

