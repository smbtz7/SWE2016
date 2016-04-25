<?php
    
    function Connect(){
        
        #Connect to Database
        $host = "localhost";
        $user = "root";
        $password = "Keldeb17!";
        $database = "Scheduling";

        $con = mysqli_connect($host,$user,$password,$database);
        if(mysqli_connect_errno())
        {
            return 0;
        }
        
        return $con;
    }

    function Get_Employee_ID($con){
            
        $stmt = $con->prepare("SELECT employee_ID FROM Contact_Information WHERE email = ?");
        $email = $_POST['email'];
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($currentID);
        $stmt->fetch();
        $stmt->close();
               
        
        #echo "Your Current ID is:" . $currentID . "<br><br>";
        
            
        return $currentID;
    }

    function Get_Stored_Password($con,$ID){
        
        $stmt = $con->prepare("SELECT password FROM Employee WHERE employee_ID = ?");
        $stmt->bind_param("s", $ID);
        $stmt->execute();
        $stmt->bind_result($HashedPass);
        $stmt->fetch();
               
        
        echo "Your hashed Password is: " . $HashedPass . "<br><br>";
        
            
        return $HashedPass;
        
    }

    function Compare_Passwords($pass,$Hashed){
        
        return password_verify($pass,$Hashed); 
        
    }

    function Snag_Session($con, $ID){
        
        session_start();
        
        #We have the user's email, we need to get the Employee ID based on that email
        $stmt = $con->prepare("SELECT first_name FROM Employee WHERE employee_ID = ?");
        $stmt->bind_param("s", $ID);
        $stmt->execute();
        $stmt->bind_result($_SESSION['first_name']);
        $stmt->fetch();
        $stmt->close();
        
        echo "Your First name is: " . $_SESSION['first_name'] . "<br>";
        
        $stmt = $con->prepare("SELECT position_IDs FROM Position WHERE employee_ID = ?");
        $stmt->bind_param("s", $ID);
        $stmt->execute();
        $stmt->bind_result($_SESSION['position_ID']);
        $stmt->fetch();
        $stmt->close();
        
        echo "Your Position ID is: " . $_SESSION['position_ID'] . "<br>";

        
        $_SESSION['ID'] = $ID;
        
    }

?>