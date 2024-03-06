<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMW M Hybrid V8</title>
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://db.onlinewebfonts.com/c/ac95f91c55cc591ecf37a4d136ff8031?family=BMWTypeNext+Pro+Regular" rel="stylesheet">
    <link rel="stylesheet" href="clase.css">
    <script src="animatii.js"></script>
</head>
<body class="body">
    <div class=bg>
      <div class="bg image2">
          <?php include ('topnav.php') ?>
        <br><br><br>
        <h1 class="h1">BMW M HYBRID V8</h1>
      </div>
    </div>
      <?php include ('mcars.php') ?>
    <div class="text-bmw">
      Back in the top class and back on the big stage, BMW M Motorsport is returning to international prototype
      racing with the BMW M Hybrid V8. As of the 2023 season, the new car will be battling it out for overall 
      victory in the new GTP class of the IMSA series, at such prestigious classics as the 24 Hours of Daytona, 
      the 12 Hours of Sebring, and the iconic Petit Le Mans at Road Atlanta. From 2024, BMW M Motorsport will 
      also compete in the FIA World Endurance Championship again with the car. The last big victory for a BMW 
      prototype came back in 1999, when the BMW V12 LMR won the 24 Hours of Le Mans. That car had also triumphed 
      in the 12 Hours of Sebring in the same season. Regulations specify that LMDh race cars have a combustion 
      engine and an electric motor. While each manufacturer can use their own combustion engine, the electric 
      motor, battery and transmission are standard parts. The BMW M Hybrid V8 is powered by the P66/3 eight-cylinder 
      turbo engine with supplementary electric drive.
    </div>
    <div class="spec-cars">
      <img src="img/bmwm8hybridspec.png" alt="BMWMHybridV8spec" style="width:700px;height:430px;">
      <div class="text">
        <p style="font-size:26px;margin-bottom: 30px;">TECHNICAL DATA OF THE BMW M HYBRID V8:</p>
        <p><b>V-shaped Otto four-stroke twin-turbo engine</b><br>
        <b>Capacity:</b> 3,999 ccm<br>
        <b>No. cylinders:</b> 8<br>
        <b>V angle:</b> 90°<br>
        <b>Bore:</b> 93 mm<br>
        <b>Stroke:</b> 73.6 mm<br>
        <b>Cylinder spacing:</b> 102 mm<br>
        <b>Valves per cylinder:</b> 4<br>
        <b>Engine speed: max.</b> 8,200 rpm<br>
        <b>Output (regulated):</b> approx. 640 hp<br>
        <b>Injection:</b> High-pressure direct injection at 350 bar<br>
        <b>Torque:</b> approx. 650 Nm
        </p>  
      </div>
    </div>
    <div class="galery">
      <div>
        <img class="galery-photo1" src="img/Hybrid1.png" alt="photo1" onmouseover="IndepartareIn(this)" onmouseout="IndepartareOut(this)">
        <img class="galery-photo1" src="img/Hybrid3.png" alt="photo3" onmouseover="IndepartareIn(this)" onmouseout="IndepartareOut(this)">
      </div>
      <div>
        <img class="galery-photo2" src="img/Hybrid2.png" alt="photo2" onmouseover="IndepartareIn(this)" onmouseout="IndepartareOut(this)">
        <img class="galery-photo3" src="img/Hybrid4.png" alt="photo4" onmouseover="IndepartareIn(this)" onmouseout="IndepartareOut(this)">
        <img class="galery-photo3" src="img/Hybrid5.png" alt="photo5" onmouseover="IndepartareIn(this)" onmouseout="IndepartareOut(this)">
      </div>
    </div>
    <?php include ('footer.php') ?>
    
</body>
</html>