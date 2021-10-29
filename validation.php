<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$email = $_GET['email'];
$pass = $_GET['pass'];
$pass_cnfm = $_GET['passConfirm']; 


if (strpos($email, "@") === false ){
    echo "Uneta neispravna e-mail adresa";
}
else{
    echo "mejl je dobar";
}

//probaj oba moela, posebno drugi
// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//    $emailErr = "Invalid email format";
//  }


  //da je lozinka i potvrda ista
if($pass == $pass_cnfm){
    echo"lozinka je potvrdjena";
}
else{ 
    echo "Lozinka nije identicna ";
}

if (strlen($pass) < 8){
    echo "lozinka mora imati najmanje 8  karaktera";
}
elseif( preg_match('/[a-zA-Z0-9]/', $pass)){
    echo "Uspesna registracija";
}
else{
    echo "Lozinka mora da sadrzi najmanje 8 karaktera,jedno veliko slovo, jedno malo slovo i broj  ";
}

?>
</body>
</html>