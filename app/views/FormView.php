<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        textarea {
            font-size: 12px;
        }
    </style>
</head>
<body>
<h3>Soar Form</h3>

<form action ="<?php echo URLROOT; ?>/Form/submit/" method = "post">

    <div class = "card-template">
        <div class = "one">
            <h4>Description</h4>
            <textarea id = "te" rows = "15" cols = "56"placeholder="..." name="wuby"></textarea>
        </div>
    </div>

    <label for="name">Student Name:</label>
    <input type="text" id="name" name="studentName" required><br><br>

    <label for="Homeroom-Teacher">Homeroom Teacher:</label>
    <input type="text" id="Homeroom-Teacher" name="homeroomTeacher" required><br><br>

    <label for="Referring-Staff-Member">Referring Staff Member:</label>
    <input type="text" id="Referring-Staff-Member" name="referringstaffMember" required><br><br>

    <label for = "LocationofBehavior">Location Where Behavior Occurred</label>

    <select>
        <option value = "Classroom">Classroom</option>
        <option value = "Bathroom">Bathroom</option>
        <option value = "Recess">Recess</option>
        <option value = "Hallway">Hallway</option>
        <option value = "Specials">Specials</option>
        <option value = "Lunch">Lunch</option>
    </select>

    <br>
    <h5>SOAR Expectation(s) Not Met</h5>
    <input type = "checkbox" id = "StaySafe" name = "StaySafe" value = "StaySafe">
    <label for = "StaySafe"><b>S- </b>Stay Safe</label>
    <br>
    <input type = "checkbox" id = "ownyourActions" name = "ownyourActions" value = "ownyourActions">
    <label for = "ownyourActions"><b>O- </b>Own Your Actions</label>
    <br>
    <input type = "checkbox" id = "actResponsibly" name = "actResponsibly" value = "actResponsibly">
    <label for = "actResponsibly"><b>A- </b>Act Responsibly</label>
    <br>
    <input type = "checkbox" id = "respecteveryoneandEverything" name = "respecteveryoneandEverything" value = "respecteveryoneandEverything">
    <label for = "respecteveryoneandEverything"><b>R- </b>Respect Everyone and Everything</label>

    <br>
    <input type = "submit" value = "send" id = "send">
    <!--    <input type="submit" value="Submit">-->
</form>
</body>
</html>