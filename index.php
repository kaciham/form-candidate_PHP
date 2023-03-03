<?php
/*
require_once "connexion_bdd.php";
$connexion = cnx();

$sql="Select * FROM candidate_form";

$request= $connexion->prepare($sql);
$request -> execute();

$result = $request->fetchAll();
var_dump($result);*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Form</title>
</head>
<body>
    <div class="container">
        <form id="form" action="form.php" method="post">
            <div class="form-row">
                <label for="firstName"> First name</label>
                <input type="text" id="firstname" name="firstname">
                <div id="firstnameerror" class="error invisible">This field must contain characters</div>
            </div>    
            <div class="form-row">
                <label for="surname"> Surname</label>
                <input type="text" id="surname" name="surname"><br>
                <div id="surnameerror" class="error invisible">This field must contain characters</div>
            </div>
            <div class="form-row">
                <label for="email"> E-mail</label>
                <input type="email" id="email" name="email"><br>
            </div>
            <div class="form-row">
                
                    <label for="phone" id="phoneNumber"> Phone number</label>
                        <div id="phoneField">
                            <select name="prefix" id="optionList">
                                <option name="prefix" value="+32"selected>+32</option>
                                <option name="prefix" value="+33">+33</option>
                            </select>
                            <input type="tel" id="phone" name="phone" list="test">
                        </div>                    
            </div>
            <div id="bar" class="form-row"></div>
            <div class="form-row">
                <div class="eye">
                <label for="password"> Password </label>
                <input type="password" id="password" name="password">
                <div  id="passworderror" class="error invisible">This field must contain between at least: 6 letters - one capital letter - one lower letter - one number</div>
                <i class="far fa-eye" id="togglePassword"></i>
                </div>
                    <div class="subtitle">
                                <span>> 6 letters</span>
                                <span>1 capital</span>
                                <span>1 lower case</span>
                                <span>1 number</span>
                    </div>
            </div>
            <div class="form-row">
                <div class="eye2"> 
                <label for="confirmPassword"> Confirm password </label>
                <input type="password" id="confirmPassword" name="confirmpassword"><br>
                <div  id="samepassworderror" class="error invisible">This is not the same password</div>
                <i class="far fa-eye" id="togglePassword"></i>
                </div>
            </div>
                
            </div>
            <div id="buttonField" class="form-row">
                <input type="reset" value="CANCEL" id="buttonCancel" >
                <input type="submit" value="CREATE" id="buttonCreate" name="createform">
            </div>
        </form>
    </div>
    <!-- <script src="script.js"></script> -->
</body>
</html> 