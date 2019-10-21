<?php
require_once ('database.php');
require_once ('Jobs.php');

$job=new Jobs();

if(isset($_POST['updatebutton']))
{

    $job->updateJobs(database::getDb());
}
if(isset($_POST['deletebutton']))
{
    $id=$_POST['deletebutton'];
    $count = $job->deleteJobs(database::getDb(),$id);

    header("Location:listjobs.php");
}

?>