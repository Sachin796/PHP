<?php


class Jobs
{
public function listJobs($db)
{
$sql= "SELECT * FROM job_postings";
    $pdostm = $db->prepare($sql);

    $pdostm->setFetchMode(PDO::FETCH_OBJ);
    $pdostm->execute();
    $joblists = $pdostm->fetchAll(PDO::FETCH_OBJ);
    return $joblists;

}
    public function addJobs($db,$job_id,$name,$email,$contact)
    {
$sql="INSERT INTO add_details(job_id,emp_name,emp_email,emp_contact)VALUES(:job_id,:name,:email,:contact)";
       $pdostm=$db->prepare($sql);
$pdostm->bindValue(':job_id',$job_id);
        $pdostm->bindValue(':name',$name);
        $pdostm->bindValue(':email',$email);
        $pdostm->bindValue(':contact',$contact);
        $count=$pdostm->execute();
        return $count;

    }
    public function updateJobs($db,$job_id,$name,$email,$contact)
    {
$sql="UPDATE add_details SET emp_name=:name,emp_email=:email,emp_contact=:contact WHERE job_id=:job_id";
$pdostm=$db->prepare($sql);
$pdostm->bindValue(":job_id",$job_id);
        $pdostm->bindValue(":name",$name);
        $pdostm->bindValue(":email",$email);
        $pdostm->bindValue(":contact",$contact);
        $count=$pdostm->execute();
        return $count;
    }
    public function deleteJobs($db,$job_id)
    {
$sql="DELETE FROM add_details WHERE job_id=$job_id";
$pdostm=$db->prepare($sql);
$deleted=$pdostm->execute();
return $deleted;
    }

    public function listAppliedJobs($db)
    {
        $sql= "SELECT * FROM add_details";
        $pdostm = $db->prepare($sql);

        $pdostm->setFetchMode(PDO::FETCH_OBJ);
        $pdostm->execute();
        $appliedjoblists = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $appliedjoblists;
    }
}