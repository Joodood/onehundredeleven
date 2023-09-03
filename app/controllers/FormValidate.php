<?php

error_reporting(E_ERROR | E_PARSE);

class ValidateForm {
    private $data;
    private $errors = [];
    private static $fields = ['wuby', 'studentName', 'homeroomTeacher', 'referringstaffMember', 'StaySafe', 'ownyourActions', 'actResponsibly', 'respecteveryoneandEverything','LocationofBehavior', 'myActions', 'etib', 'howOthers', 'futureChoice', 'responsibilityActions'];
    protected $perfpost = [];

    public function __construct($post) {
        $this->data = $post;
//        $this->perfpost['user_id'] = $_SESSION['user_id'];
    }

    public function validateBlogForm() {

//        foreach (self::$fields as $field) {
//            if(!array_key_exists($field, $this->data)) {
//                trigger_error("$field is not present in data");
//                return;
//            }
//        }
        $this->validatewuby();
        $this->validatestudentName();
        $this->validatehomeroomTeacher();
        $this->validatereferringstaffMember();
        $this->validateStaySafe();
        $this->validateownyourActions();
        $this->validateactResponsibly();
        $this->validaterespecteveryoneandEverything();
        $this->validateLocationofBehavior();

        $this->validatemyActions();
        $this->validateetib();
        $this->validatehowOthers();
        $this->validatefutureChoice();
        $this->validateresponsibilityActions();

//        $this->validatewuby();
        $new = array_merge($this->errors, $this->perfpost);
        return $new;
        //validate title
        //validate body

    }
    private function validatewuby() {
        $va = trim($this->data['wuby']);
        $vas = htmlspecialchars($va);
        $this->addPerfPost('wuby', $vas);
    }
    private function validatestudentName() {
        $va = trim($this->data['studentName']);
        $vas = htmlspecialchars($va);

        if(empty($vas)) {
            $this->addError('err_studentName', 'Student Name cannot be empty');
        } else {
            //check type of $val title to then filter it correctly
//            require_once "QuickieBlogFilter.php";
//            $val = new Quickie($vas);
            //val is now the filtered title
            $this->addPerfPost('studentName', $vas);
        }
    }
    private function validatehomeroomTeacher() {
        $va = trim($this->data['homeroomTeacher']);
        $vas = htmlspecialchars($va);

        if(empty($vas)) {
            $this->addError('errhomeroomTeacher', 'homeroom Teacher cannot be empty');
        } else {
//            require_once "QuickieBlogFilter.php";
//            $val = new Quickie($vas);
            $this->addPerfPost('homeroomTeacher', $vas);
        }
    }

    private function validatereferringstaffMember () {
        $va = trim($this->data['referringstaffMember']);
        $vas = htmlspecialchars($va);

        if(empty($vas)) {
            $this->addError('err_referringstaffMember', 'Referring Staff Member Cannot Be Empty');
        } else {
//            require_once "QuickieBlogFilter.php";
//            $val = new Quickie($vas);
            $this->addPerfPost('referringstaffMember', $vas);
        }
    }
    private function validateStaySafe() {
        $va = trim($this->data['StaySafe']);
        $vas = htmlspecialchars($va);
        if(empty($vas)) {
            $this->addPerfPost('StaySafe', FALSE);
        }
        $this->addPerfPost('StaySafe', $vas);
    }
    private function validateownyourActions() {
        $va = trim($this->data['ownyourActions']);
        $vas = htmlspecialchars($va);
        if(empty($vas)) {
            $this->addPerfPost('ownyourActions', FALSE);
        }
        $this->addPerfPost('ownyourActions', $vas);
    }
    private function validateactResponsibly() {
        $va = trim($this->data['actResponsibly']);
        $vas = htmlspecialchars($va);
        if(empty($vas)) {
            $this->addPerfPost('actResponsibly', FALSE);
        }
        $this->addPerfPost('actResponsibly', $vas);
    }
    private function validaterespecteveryoneandEverything() {
        $va = trim($this->data['respecteveryoneandEverything']);
        $vas = htmlspecialchars($va);
        if(empty($vas)) {
            $this->addPerfPost('respecteveryoneandEverything', FALSE);
        }
        $this->addPerfPost('respecteveryoneandEverything', $vas);
    }
    private function validateLocationofBehavior() {
        $va = trim($this->data['LocationofBehavior']);
        $vas = htmlspecialchars($va);
        if(empty($vas)) {
            $this->addPerfPost('LocationofBehavior', FALSE);
        }
        $this->addPerfPost('LocationofBehavior', $vas);
    }
    private function validatemyActions() {
        $va = trim($this->data['myActions']);
        $vas = htmlspecialchars($va);
        if(empty($vas)) {
            $this->addPerfPost('myActions', FALSE);
        }
        $this->addPerfPost('myActions', $vas);
    }
    private function validateetib() {
        $va = trim($this->data['etib']);
        $vas = htmlspecialchars($va);
        if(empty($vas)) {
            $this->addPerfPost('etib', FALSE);
        }
        $this->addPerfPost('etib', $vas);
    }
    private function validatehowOthers() {
        $va = trim($this->data['howOthers']);
        $vas = htmlspecialchars($va);
        if(empty($vas)) {
            $this->addPerfPost('howOthers', FALSE);
        }
        $this->addPerfPost('howOthers', $vas);
    }
    private function validatefutureChoice() {
        $va = trim($this->data['futureChoice']);
        $vas = htmlspecialchars($va);
        if(empty($vas)) {
            $this->addPerfPost('futureChoice', FALSE);
        }
        $this->addPerfPost('futureChoice', $vas);
    }
    private function validateresponsibilityActions() {
        $va = trim($this->data['responsibilityActions']);
        $vas = htmlspecialchars($va);
        if(empty($vas)) {
            $this->addPerfPost('responsibilityActions', FALSE);
        }
        $this->addPerfPost('responsibilityActions', $vas);
    }
//    private function StaySafe ()
//    {
//        $va = trim($this->data['StaySafe']);
//        $vas = htmlspecialchars($va);
//
//        if (empty($vas)) {
//            $this->addError('err_StaySafe', 'Stay Safe cannot be empty');
//        } else {
////            require_once "QuickieBlogFilter.php";
////            $val = new Quickie($vas);
//            $this->addPerfPost('referringstaffMember', $vas);
//        }
//    }

    private function addError($key, $value) {
        $this->errors[$key] = $value;
    }

    private function addPerfPost($key, $value) {
        $this->perfpost[$key] = $value;
    }

}