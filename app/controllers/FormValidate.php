<?php


class ValidateForm {
    private $data;
    private $errors = [];
    private static $fields = ['wuby', 'studentName', 'homeroomTeacher', 'referringstaffMember', 'StaySafe', 'ownyourActions', 'actResponsibly', 'respecteveryoneandEverything','LocationofBehavior'];
    protected $perfpost = [];

    public function __construct($post) {
        $this->data = $post;
//        $this->perfpost['user_id'] = $_SESSION['user_id'];
    }

    public function validateBlogForm() {

        foreach (self::$fields as $field) {
            if(!array_key_exists($field, $this->data)) {
                trigger_error("$field is not present in data");
                return;
            }
        }

        $this->validatestudentName();
        $this->validatehomeroomTeacher();
        $this->validatereferringstaffMember();
        $new = array_merge($this->errors, $this->perfpost);
        return $new;
        //validate title
        //validate body

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