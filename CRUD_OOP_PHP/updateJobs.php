
<?php
$str=$_POST['updatebutton'];
$newstr=explode(',',$str);
?>

<link rel="stylesheet" type="text/css" href="css/style.css">
<h3 id="applyjobs">Update Job Data</h3>
<form method="post" action="listjobs.php">
    Job ID :- <input type="text" name="job_id_apply" value="<?php echo $newstr[0];?>"> <br>
    Name :- <input type="text" name="applicantName" placeholder="Enter name here" value="<?php echo $newstr[1]?>"> <br>
    Email :- <input type="text" name="applicantEmail" placeholder="Enter email here" value="<?php echo $newstr[2]?>"> <br>
    Contact :- <input type="text" name="applicantContact" placeholder="Enter contact here" value="<?php echo $newstr[3]?>"> <br>
    <button type="submit" name="dataUpdate">UPDATE</button>
</form>

