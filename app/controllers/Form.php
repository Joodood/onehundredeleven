<?php


class Form extends Controller {
    public function __construct() {
        $this->modelForm = $this->model('Formdata');
//        if($this->modelForm) {
//            echo "something she cant seee";
//        }
    }
    public function index() {
//        $data = ['yose'];
        $this->view("FormView");
    }

    public function about() {

    }
//$wuby, $studentName, $homeroomTeacher, $referringstaffMember, $StaySafe, $ownyourActions, $respecteveryoneandEverything, $LocationofBehavior, $created_at
    public function submit() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            require_once "FormValidate.php";
            $mehigh = new ValidateForm($_POST);
            $err = $mehigh->validateBlogForm();
            $this->modelForm->addPost($err);
//
//            if($beem == true) {
//                echo "It is true";
//            } else {
//                echo "It is not true";
//            }
//            $data = $_POST;
//            require_once "./helpers/url_helper.php";
//            $this->view('successfulSuby', $err);
//            $this->view('successfulSubmission', $err);
        }
//        redirect('FormView.php');

        $this->view('successfulSubmission');
    }
//    public function successfulsuby() {
//        echo "Yose";
//        die();
//            $this->view('successfulSuby');
//    }
}

?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<!--<script>-->
<!--    $(document).ready(function(){-->
<!--        window.history.replaceState('','',window.location.href)-->
<!--    });-->
<!--</script>-->


<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<h3>Soar Form</h3>-->
<!--<form action = "submit.php" method = "post">-->
<!---->
<!--    <div class = "card-template">-->
<!--        <div class = "one">-->
<!--            <h4>Description</h4>-->
<!--            <textarea id = "te" rows = "15" cols = "56"placeholder="..." name="wuby"></textarea>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <label for="name">Student Name:</label>-->
<!--    <input type="text" id="name" name="name" required><br><br>-->
<!---->
<!--    <label for="Homeroom-Teacher">Homeroom Teacher:</label>-->
<!--    <input type="text" id="Homeroom-Teacher" name="Homeroom-Teacher" required><br><br>-->
<!---->
<!--    <label for="Referring-Staff-Member">Referring Staff Member:</label>-->
<!--    <input type="text" id="Referring-Staff-Member" name="Referring-Staff-Member" required><br><br>-->
<!---->
<!--    <label for = "LocationofBehavior">Location Where Behavior Occured</label>-->
<!--    <select>-->
<!--        <option value = "classroom">Classroom</option>-->
<!--        <option value = "classroom">Bathroom</option>-->
<!--        <option value = "classroom">Recess</option>-->
<!--        <option value = "classroom">Hallway</option>-->
<!--        <option value = "classroom">Specials</option>-->
<!--        <option value = "classroom">Lunch</option>-->
<!--    </select>-->
<!--    <br>-->
<!--    <h5>SOAR Expectation(s) Not Met</h5>-->
<!--    <input type = "checkbox" id = "S-staySafe" name = "Stay-Safe" value = "staySafe">-->
<!--    <label for = "S-staySafe"><b>S- </b>Stay Safe</label>-->
<!--    <br>-->
<!--    <input type = "checkbox" id = "O-ownyourActions" name = "O-ownyourActions" value = "O-ownyourActions">-->
<!--    <label for = "O-ownyourActions"><b>O- </b>Own Your Actions</label>-->
<!--    <br>-->
<!--    <input type = "checkbox" id = "A-actResponsibly" name = "A-actResponsibly" value = "A-actResponsibly">-->
<!--    <label for = "A-actResponsibly"><b>A- </b>Act Responsibly</label>-->
<!--    <br>-->
<!--    <input type = "checkbox" id = "R-respecteveryoneandEverything" name = "R-respecteveryoneandEverything" value = "R-respecteveryoneandEverything">-->
<!--    <label for = "R-respecteveryoneandEverything"><b>R- </b>Respect Everyone and Everything</label>-->
<!---->
<!--    <br>-->
<!--    <input type = "submit" value = "send" id = "send">-->
    <!--    <input type="submit" value="Submit">-->
<!--</form>-->
<!--</body>-->
<!--</html>-->
