<?php


//require "./libraries/Database.php";

//require_once "model.php";
//date_default_timezone_set('America/Chicago');
//
//$created_at = date('F d, Y');

class Formdata {

    public $db;
    public function __construct() {
        $this->db = new Database();
    }

//['studentName', 'homeroomTeacher', 'referringstaffMember', 'StaySafe', 'ownyourActions', 'actResponsibly', 'respecteveryoneandEverything','LocationofBehavior']
    public function addPost($wuby, $studentName, $homeroomTeacher, $referringstaffMember, $StaySafe, $ownyourActions, $respecteveryoneandEverything, $LocationofBehavior, $created_at) {
        date_default_timezone_set('America/Chicago');

        $created_at = date('F d, Y');
        $this->db->query('INSERT INTO soarform (wuby, referringstaffMember, studentName, homeroomTeacher, StaySafe, ownyourActions, actResponsibly, respecteveryoneandEverything, LocationofBehavior, created_at) VALUES (:wuby, :referringstaffMember, :studentName, :homeroomTeacher, :StaySafe, :ownyourActions, :actResponsibly, :respecteveryoneandEverything, :LocationofBehavior, :created_at)');
        $this->db->bind(':wuby', $wuby);
        $this->db->bind(':studentName', $studentName);
        $this->db->bind(':homeroomTeacher', $homeroomTeacher);
        $this->db->bind(':referringstaffMember', $referringstaffMember);
        $this->db->bind(':StaySafe', $StaySafe);
        $this->db->bind(':ownyourActions', $ownyourActions);
        $this->db->bind(':respecteveryoneandEverything',$respecteveryoneandEverything);
        $this->db->bind(':LocationofBehavior',$LocationofBehavior);
        $this->db->bind(':created_at', $created_at);
        $this->db->execute();
//        if($this->db->execute()) {
//            echo "YAAAAA";
//        } else {
//            die('something went wrong');
//        }
//        $this->db->execute();
    }
}








?>