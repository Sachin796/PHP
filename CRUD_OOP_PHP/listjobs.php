<?php
require_once 'database.php';
require_once 'Jobs.php';

$job=new Jobs();
$listofjobs=$job->listJobs(database::getDb());
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<div id="topdiv">
    <div>
<p id="top">
<h1>Hello Sachin</h1>
</p>
<p >
<h4>Here are the list of jobs available for you</h4>
</p>
</div>
    <div id="btnform">
<form method="post" action="listAppliedJobs.php">
    <button name="listjobs" type="submit">LIST APPLIED JOBS</button>
</form>
    </div>
</div>
<ul>
<?php
foreach ($listofjobs as $list)
{

  echo
      "<div id='maindiv'>
<div>
Job ID is = ".$list->job_id."<br />" .
"Job Description is = ".$list->job_description."<br />" .
"Application Deadline is = ".$list->application_deadline."<br />" .
"Seats Open are = ".$list->open_seats.
      "</div>
<div id='x'>
<form method='post' action='addDetails.php'>
<button name='addbutton' type='submit' value='$list->job_id'>Add Job To List</button>
</form>
</div>
</div>";

}
?>
</ul>


<!--Add data-->
<?php
if(isset($_POST['datasubmit']))
{
    $appliedJobId=$_POST['job_id_apply'];
$applicantName=$_POST['applicantName'];
$applicantEmail=$_POST['applicantEmail'];
$applicantContact=$_POST['applicantContact'];

$count=$job->addJobs(database::getDb(),$appliedJobId,$applicantName,$applicantEmail,$applicantContact);
if($count)
{
    echo "Data Added";
}

}
?>

<!--Update Data-->

<?php
if(isset($_POST['dataUpdate']))
{
    $appliedJobId=$_POST['job_id_apply'];
    $applicantName=$_POST['applicantName'];
    $applicantEmail=$_POST['applicantEmail'];
    $applicantContact=$_POST['applicantContact'];

    $count=$job->updateJobs(database::getDb(),$appliedJobId,$applicantName,$applicantEmail,$applicantContact);
    if($count)
    {
        echo "Data Updated";
    }
}
?>