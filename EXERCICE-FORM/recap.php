<?php
$cin = isset($_POST['cin']) ? $_POST['cin'] : NULL;
$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
$kaskrout_kifech = isset($_POST['kaskrout_kifech']) ? $_POST['kaskrout_kifech'] : NULL;
$harissa = isset($_POST['harissa']) ? $_POST['harissa'] : NULL;
$salade = isset($_POST['salade']) ? $_POST['salade'] : NULL;
$mayo = isset($_POST['mayo']) ? $_POST['mayo'] : NULL;
$ketchup = isset($_POST['ketchup']) ? $_POST['ketchup'] : NULL;
$adresse = isset($_POST['adresse']) ? $_POST['adresse'] : NULL;

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>recap</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="container text-monospace  bg-light ">
<div class="col-md-12 border bg-info text-white text-uppercase" >
    <?php
      echo' nombres de sandwich :'.$nombre; echo'<br><br>';
      echo ' kifech :'.$kaskrout_kifech;echo'<br><br>';
      echo 'bech : ';
            echo $harissa;echo' ';
            echo $salade;echo' ';
            echo $mayo;echo' ';
            echo $ketchup;echo'<br><br>';
      echo 'adresse du client :' .$adresse.'<br><br>';
     $res=$nombre/10;
    $res1=(int)$res;
 $prix=($nombre*4)-($res1*4);
 echo' 3andek :'.$res1.'blech <br><br>';
 echo ' bech t5alles ken:'.$prix .'dt<br><br>';

 echo ' bichfe ';

    if (move_uploaded_file($_FILES["cin"]["tmp_name"],__DIR__."/uploads/".uniqid().$_FILES["cin"]["name"]))
    {
        $message = "CIN téléchargée avec succès";
        echo "<script type='text/javascript'>alert('$message');</script><br>";}
    else {
        $message = "CIN téléchargée avec succès";
        echo "<script type='text/javascript'>alert('$message');</script><br>";}

?>
</div>
</body>


</html>
