<<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php //@author Travis Bloomquist?>
<html>
<center>
<?php echo "<center>".$this->element('overviewElement')."</center>"; ?>
<h1>Reporting</h1>
<h2>Canned Reports</h2>
<body>
<form action="cannedreports" method = "post" >
<select name="cannedReports">
<option value="allData">All Data</option>
<option value="recordCount">Count Report</option>
<option value="referralReport">Referral Report</option>
<option value="diseaseReport">Disease Report</option>
<option value="demographicReport">Demographic Report</option>
<option value="comselfeff">Computer Self Efficacy Report</option>
<option value="ucdreport">UCD Report</option>
</select>
<input type="submit" value="runReport" name="runreport" />
</form>
</body>
</center>
</html>


