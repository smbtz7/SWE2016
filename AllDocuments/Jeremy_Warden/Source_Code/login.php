<?php

    #Include our Login Fuctions
    include 'Login_functions.php';

    #Logging in via email, we need to get their employee ID so we can get their password to compare to the input password
    
    $con = Connect();

    $ID = Get_Employee_ID($con);
    if($ID == 0){
        header ('Location: index.php');
    }

    echo "<br> Your Employee ID is:" . $ID . "<br>";

    #Use our ID to retrieve password
    $hashedPass = Get_Stored_Password($con,$ID);

    $Success_Check = Compare_Passwords($_POST['password'],$hashedPass);

    if($Success_Check == true){
        Snag_Session($con,$ID);
        header('Location: home.php');
    }else{
        header('Location: index.php');
    }

    

?>