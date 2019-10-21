
<?php
require_once ('database.php');
require_once ('Jobs.php');
if(isset($_POST['listjobs']))
{
$listofappliedjobs=new Jobs();
$loaj=$listofappliedjobs->listAppliedJobs(database::getDb());
}
?>
<link rel="stylesheet" type="text/css" href="css/style.css">

<form method="post" action="listjobs.php">
    <button name="listjobs" type="submit">Back to Job List</button>
</form>

<ul>
    <?php
    foreach ($loaj as $list)
    {
        echo
            "<div id='maindiv'>
<div>
Job ID is = ".$list->job_id."<br />" .
            "Employee Name is = ".$list->emp_name."<br />" .
            "Employee Email is = ".$list->emp_email."<br />" .
            "Employee Contact = ".$list->emp_contact.
            "</div>
<div id='x'>
<form method='post' action='updateJobs.php'>
<button name='updatebutton' type='submit' value='$list->job_id,$list->emp_name,$list->emp_email,$list->emp_contact'>Update</button>
</form>
<form method='post' action='deleteJobs.php'>
<button name='deletebutton' type='submit' value='$list->job_id'>Withdraw Application</button>
</form>
</div>
</div>";

    }
    ?>
</ul>
