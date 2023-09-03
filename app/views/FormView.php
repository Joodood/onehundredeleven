<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding:0;
            font-family: "-apple-system";
            font-size: 12px;
        }

        /*.flex-container, html, body {*/
        /*    height: 90%;*/
        /*    margin: 0;*/
        /*}*/

        header {

            text-align: center;
            /*align-items: center;*/
            font-size: 16px;
            font-family: sans-serif;
            font-weight: 600;
        }
        .flex-container {
            min-height:90vh;
            width: 100%;
            display: flex;
            background-color: white;
            justify-content: space-between;
        }

        .flex-child {
            flex-grow: 1;
            border: 2px solid white;
            align-items: stretch;
        }

        /*.flex-child:first-child {*/
        /*    margin-right: 20px;*/
        /*    margin-left: 30px;*/
        /*}*/

        .left {
            /*color: white;*/
            /*border-top: 0;*/
            width: 50%;
            /*height: 50%;*/
            background-color: white;
            border-style: inset;
            border-radius: 15px/45px;

        }
        .left textarea {
            font-size: 12px;
            font-family: -apple-system, sans-serif;
            text-shadow: 0 0 1px transparent;
            line-height: 24px;
            width: 100%;
            padding: 12px 16px;
            /*border: 1px solid #ddd;*/
            border-radius: 6px;
            outline: none;
            resize: none;
            white-space: pre-wrap;
            overflow-wrap: break-word;
            transition: all 0.3s;
            -webkit-transition: all 0.3s;
        }
        .left textarea:focus {
            box-shadow: 0 0 8px 2px rgba(0, 0, 0, 0.2);
            outline: 0;
        }

        .left textarea {
            font-family: -apple-system, sans-serif;
            font-size: 12px;
            text-shadow: 0 0 1px transparent;
            /*height: calc(100vh-280px);*/

        }

        .right {
            /*color: white;*/
            background-color: white;
            /*width:50%;*/
            /*height: 50%;*/
            border-style: inset;
            border-radius: 15px/45px;
            /*border-radius: 15px;*/
            width:60%;
        }
        .right .one {
            font-size: 12px;
            text-shadow: 0 0 1px transparent;
            /*line-height: 24px;*/
            width: 98%;
        }
        .right .one #teReflect {
            font-size: 12px;
            font-family: -apple-system, sans-serif;
            text-shadow: 0 0 1px transparent;
            line-height: 18px;
            width: 100%;
            padding: 12px 16px;
            /*border: 1px solid #ddd;*/
            border-radius: 6px;
            outline: none;
            resize: none;
            white-space: pre-wrap;
            overflow-wrap: break-word;
            transition: all 0.3s;
            -webkit-transition: all 0.3s;

        }
        .right .one #teReflect:focus {
           box-shadow: 0 0 8px 2px rgba(0, 0, 0, 0.2);
            outline: 0;
        }
        .right #teReflect {
            font-family: -apple-system, sans-serif;
            font-size: 12px;
            text-shadow: 0 0 1px transparent;
            /*height: calc(100vh-280px);*/

        }
        textarea {
            font-size: 12px;
        }
    </style>
</head>

<header>
    Soar Form
</header>

<body>

<div class = "flex-container">

    <div class = "flex-child left">
<!--        Flexbox1-->
<!--<h4>Soar Form</h4>-->


<form action ="<?php echo URLROOT; ?>/Form/submit/" method = "post">

    <div class = "card-template">
        <div class = "one">
            <h4>Description</h4>
            <textarea id = "te" rows = "4" cols = "56"placeholder="..." name="wuby"></textarea>
        </div>
    </div>

    <label for="name">Student Name:</label>
    <input type="text" id="name" name="studentName" required><br><br>

    <label for="Homeroom-Teacher">Homeroom Teacher:</label>
    <input type="text" id="Homeroom-Teacher" name="homeroomTeacher" required><br><br>

    <label for="Referring-Staff-Member">Referring Staff Member:</label>
    <input type="text" id="Referring-Staff-Member" name="referringstaffMember" required><br><br>

    <label for = "LocationofBehavior">Location Where Behavior Occurred</label>
    <select id="LocationofBehavior" name="LocationofBehavior">
        <option value = "Classroom">Classroom</option>
        <option value = "Bathroom">Bathroom</option>
        <option value = "Recess">Recess</option>
        <option value = "Hallway">Hallway</option>
        <option value = "Specials">Specials</option>
        <option value = "Lunch">Lunch</option>
    </select>
    <br>
    <br>
    <h5>SOAR Expectation(s) Not Met</h5>

    <input type = "checkbox" id = "StaySafe" name = "StaySafe" value = "StaySafe">
    <label for = "StaySafe"><b>S- </b>Stay Safe</label>
    <br>
    <br>
    <input type = "checkbox" id = "ownyourActions" name = "ownyourActions" value = "ownyourActions">
    <label for = "ownyourActions"><b>O- </b>Own Your Actions</label>
    <br>
    <br>
    <input type = "checkbox" id = "actResponsibly" name = "actResponsibly" value = "actResponsibly">
    <label for = "actResponsibly"><b>A- </b>Act Responsibly</label>
    <br>
    <br>
    <input type = "checkbox" id = "respecteveryoneandEverything" name = "respecteveryoneandEverything" value = "respecteveryoneandEverything">
    <label for = "respecteveryoneandEverything"><b>R- </b>Respect Everyone and Everything</label>

    </div>



    <div class = "flex-child right">
    <br>
    <div class = "reflection-sheet">
        <div class = "one">
            <h4>My Actions: </h4>
            <textarea id = "teReflect" rows = "3" cols = "46"placeholder="..." name="myActions"></textarea>
        </div>
        <div class = "one">
            <h4>The SOAR Expectation(s) I Broke: </h4>
            <textarea id = "teReflect" rows = "3" cols = "46"placeholder="..." name="etib"></textarea>
        </div>
        <div class = "one">
            <h4>How others felt when I broke this SOAR Expectation: </h4>
            <textarea id = "teReflect" rows = "3" cols = "46"placeholder="..." name="howOthers"></textarea>
        </div>
        <div class = "one">
            <h4>In the future I will make a better choice by: </h4>
            <textarea id = "teReflect" rows = "3" cols = "46"placeholder="..." name="futureChoice"></textarea>
        </div>
        <div class = "one">
            <h4>Explain how I will take responsibility for my own actions: </h4>
            <textarea id = "teReflect" rows = "3" cols = "46"placeholder="..." name="responsibilityActions"></textarea>
        </div>
    </div>
    <br>
    <input type = "submit" value = "send" id = "send">
<!--        <div class = "flex-child right">-->
    <!--    <input type="submit" value="Submit">-->
</form>
</div>
<!--    <script>-->
<!--            if ( window.history.replaceState ) {-->
<!--            window.history.replaceState( null, null, window.location.href );-->
<!--        }-->
<!--        </script>-->
</body>
</html>