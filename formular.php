<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://db.onlinewebfonts.com/c/ac95f91c55cc591ecf37a4d136ff8031?family=BMWTypeNext+Pro+Regular" rel="stylesheet">
    <link rel="stylesheet" href="clase.css">
    <script src="animatii.js"></script>
</head>
<BODY>
    <div class=bg>
       <div class="bg-formular">
          <?php include ('topnav.php') ?>
            <div class="formular-container">
                <FORM METHOD="POST" ACTION="feedback.php" class="formular">
                First Name:
                <INPUT class="butoane-formular" TYPE=TEXT SIZE=20 MAXLENGTH=20 NAME="nume" class="butoane-formular"placeholder="Your first name..">
                <BR>
                Second name:
                <INPUT class="butoane-formular" TYPE=TEXT SIZE=20 MAXLENGTH=20 NAME="prenume" placeholder="Your last name..">
                <BR>
                Email:<br>
                <INPUT class="butoane-formular" TYPE="TEXT" SIZE=20 MAXLENGTH=20 NAME="email" placeholder="Your email..">
                <br>
                Feedback:
                <INPUT class="butoane-formular" style="height: 100px;" TYPE=TEXT SIZE=20 MAXLENGTH=400 NAME="opinie" placeholder="Your opinion..">
                <BR>
                <BR>
                <INPUT class="butoanejos-formular" TYPE="SUBMIT" VALUE="Send"> 
                <INPUT class="butoanejos-formular" TYPE="RESET" VALUE="Reset">
                </FORM>
            </div>
        </div>
    </div> 
</BODY>
</HTML>