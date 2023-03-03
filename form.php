<?php

require_once "connexion_bdd.php";
require_once "security.php";

if(isset($_POST["createform"])){
    echo "success";
    if(isset($_POST["firstname"],$_POST["surname"],$_POST["email"],$_POST["phone"],$_POST["password"])
     && !empty($_POST["firstname"]) && !empty($_POST["surname"]) && !empty($_POST["email"])&& !empty(["phone"]) && !empty(["password"])){


        $firstname = security($_POST["firstname"]);
        $surname = security($_POST["surname"]);
        $email = security($_POST["email"]);
        // $prefixe = security($_POST["prefixe"]);
        $phone = security($_POST["phone"]);
        $password = security($_POST["password"]);

        $connexion=cnx();

        $sql="INSERT INTO `candidate_form`(`firstname`, `surname`, `email`, `phone`, `password`) 
        VALUES (:firstname,:surname,:email,:phone,:pwd)";

        $req=$connexion->prepare($sql);
        $req->bindValue(":firstname",$firstname);
        $req->bindValue(":surname",$surname);
        $req->bindValue(":email",$email);
        // $req->bindValue(":prefixe,$prefixe");
        $req->bindValue(":phone",$phone);
        $req->bindValue(":pwd",$password);

        $req->execute();
        
    }
    else{
        echo "vous n'avez pas rempli tout le formulaire";
    }
}
?>

