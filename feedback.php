<?php
$nume = $_POST["nume"]; $prenume = $_POST["prenume"]; $email = $_POST["email"];$opinion = $_POST["opinie"];

$db = mysqli_connect("localhost", "Dragusin_Liviu","123456789" ,"feedback");
if (!$db) {
 exit('Conectare esuata: ' . mysqli_connect_error ());
}
echo 'Conectare reusita';
$interogare = "INSERT INTO informatii (nume, prenume, email ,opinie)
 VALUES ('$nume' , '$prenume' , '$email','$opinion')";
mysqli_query($db,$interogare);

if (mysqli_errno($db))
 exit('<br>Adaugare esuata: '.mysqli_errno($db).": ".mysqli_error($db)."<BR>");

echo "<br> $prenume $nume a fost adaugat in agenda.";

mysqli_close($db);
?> 