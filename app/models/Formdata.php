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
//        echo "database recieved";

    }

//['studentName', 'homeroomTeacher', 'referringstaffMember', 'StaySafe', 'ownyourActions', 'actResponsibly', 'respecteveryoneandEverything','LocationofBehavior']
    public function addPost($data) {
//        echo "<br>";
//        echo "Inside addPost";
//        echo "<br>";
        date_default_timezone_set('America/Chicago');
        $created_atDate = date('F d, Y');

        $wuby = $data['wuby'];
        $studentName = $data['studentName'];
        $homeroomTeacher = $data['homeroomTeacher'];
        $referringstaffMember = $data['referringstaffMember'];
        $StaySafe = $data['StaySafe'];
        $ownyourActions = $data['ownyourActions'];
        $actResponsibly = $data['actResponsibly'];
        $respecteveryoneandEverything = $data['respecteveryoneandEverything'];

        $myActions = $data['myActions'];
        $etib = $data['etib'];
        $howOthers = $data['howOthers'];
        $futureChoice = $data['futureChoice'];
        $responsibilityActions = $data['responsibilityActions'];


        $LocationofBehavior = array();

//        $Locationofbehavior = $data['LocationofBehavior'];
        if(isset($_POST['LocationofBehavior'])){
//            echo "Location of behavior is set";
            $LocationofBehavior = array();
            $select1 = $_POST['LocationofBehavior'];
            switch ($select1) {
                case 'Classroom':
                    array_push($LocationofBehavior, 'Classroom');
                    break;
                case 'Bathroom':
                    array_push($LocationofBehavior, 'Bathroom');
                    break;
                case 'Recess':
                    array_push($LocationofBehavior, 'Recess');
                    break;
                case 'Hallway':
                    array_push($LocationofBehavior, 'Hallway');
                    break;
                case 'Specials':
                    array_push($LocationofBehavior, 'Specials');
                    break;
                case 'Lunch':
                    array_push($LocationofBehavior, 'Lunch');
//                    $LocationofBehavior = 'Lunch';
                    break;
                default:
                    array_push($LocationofBehavior, 'Classroom');
                    # code...

                    break;
            }
        }
//        $myActions = $data['myActions'];
//        $etib = $data['etib'];
//        $howOthers = $data['howOthers'];
//        $futureChoice = $data['futureChoice'];
//        $responsibilityActions = $data['responsibilityActions'];

//        $created_at  = $created_atDate;

        $this->db->query('INSERT INTO soarform (wuby, referringstaffMember, studentName, homeroomTeacher, StaySafe, ownyourActions, actResponsibly, respecteveryoneandEverything, LocationofBehavior, myActions, etib, howOthers, futureChoice, responsibilityActions, created_at) VALUES (:wuby, :referringstaffMember, :studentName, :homeroomTeacher, :StaySafe, :ownyourActions, :actResponsibly, :respecteveryoneandEverything, :LocationofBehavior, :myActions, :etib, :howOthers, :futureChoice, :responsibilityActions, :created_at)');
        $this->db->bind(':wuby', $wuby);
        $this->db->bind(':studentName', $studentName);
        $this->db->bind(':homeroomTeacher', $homeroomTeacher);
        $this->db->bind(':referringstaffMember', $referringstaffMember);
        $this->db->bind(':StaySafe', $StaySafe);
        $this->db->bind(':ownyourActions', $ownyourActions);
        $this->db->bind(':actResponsibly', $actResponsibly);
        $this->db->bind(':respecteveryoneandEverything',$respecteveryoneandEverything);
        $this->db->bind(':LocationofBehavior', $LocationofBehavior[0]);
        $this->db->bind(':myActions', $myActions);
        $this->db->bind(':etib', $etib);
        $this->db->bind(':howOthers', $howOthers);
        $this->db->bind(':futureChoice', $futureChoice);
        $this->db->bind(':created_at', $created_atDate);
        $this->db->bind(':responsibilityActions', $responsibilityActions);
//        $this->db->execute();
        if($this->db->execute()) {
            return null;
//            echo "<br>";
//            echo "YAAAAA";
        } else {
            die('something went wrong');
        }
//        $this->db->execute();
    }

}








?>