<?php

include "connect.php";

if(isset($_POST['submit']))

   {

     $filename=$_POST['filename'];

     $handle = fopen("$filename", "r");

     while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)

     {

    

       $import="INSERT INTO `mis1105402314808`.`testing2`(( `1` , `2` , `3` , `4` , `5` , `6` , `7` , `8` , `9` , `10` , `11` , `12` , `13` , `14` , `15` , `16` , `17` , `18` , `19` , `20` , `21` , `22` ) values('5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree')";

       mysql_query($import) or die(mysql_error());

     }

     fclose($handle);

     print "Import done";

 

   }

   else

   {

 

      print "<form action='import2.php' method='post'>";

      print "Type file name to import:<br>";

      print "<input type='text' name='filename' size='20'><br>";

      print "<input type='submit' name='submit' value='submit'></form>";

   }

?>