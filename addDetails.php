<link rel="stylesheet" type="text/css" href="css/style.css">
<h3 id="applyjobs">Apply Job Portal</h3>

<form method="post" action="listjobs.php">
    <div id="formdata">
   Job ID :- <input type="text" name="job_id_apply" value="<?php echo $_POST['addbutton'];?>"> <br>
    Name :- <input type="text" name="applicantName" placeholder="Enter name here"> <br>
    Email :- <input type="text" name="applicantEmail" placeholder="Enter email here"> <br>
    Contact :- <input type="text" name="applicantContact" placeholder="Enter contact here"> <br>
    <button type="submit" name="datasubmit">SUBMIT</button>
    </div>
</form>
