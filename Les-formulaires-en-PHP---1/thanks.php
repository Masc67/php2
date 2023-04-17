<?php
$errors = [];
if (isset($_POST["user_name"]) && $_POST["user_name"]== "") {
    $errors["user_name"] = "SVP met ton nom";
}
if (isset($_POST["user_lastname"]) && $_POST["user_lastname"]== "") {
    $errors["user_lastname"] = "SVP met ton prenom";
}
if (isset($_POST["user_email"]) && $_POST["user_email"]== "" && (filter_var("user_email", FILTER_VALIDATE_EMAIL) == false) ){
    $errors["user_email"] = "Manque e-mail" ;
}
if (isset($_POST["user_phone"]) && $_POST["user_phone"]== "") {
    $errors["user_number"] = "Rajoutes ton tel";
}
if (isset($_POST["animal"]) && $_POST["animal"]== "") {
    $errors["animal"] = "SVP rajoute ton animal";
}
if (isset($_POST["user_message"]) && $_POST["user_message"]== "") {
    $errors["user_message"] = "Svp met un message";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
    <li>Merci <span><?php echo  $_POST["user_lastname"];?></span><span><?php echo  $_POST["user_name"];?></span> de nous avoir contacté à propos de <span><?php echo  $_POST["animal"];?></span>.</li>
    <li>Un de nos conseillers vous contactera soit à l'addresse  <span><?php echo  $_POST["user_email"];?></span> ou par téléphone au <span><?php echo  $_POST["user_phone"];?></span> dans les brefs delais pour traiter votre demande: </li>
    <li></<span><?php echo  $_POST["user_message"];?></li>
</ul>
<?php
if(!empty($errors)){
    foreach( $errors as $error ){
        echo $error . "<br>";
         }
     }
?>
</body>
</html>






