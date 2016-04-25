<?php

function Check_Code($con,$code){
    
$query = "SELECT * FROM Code_Keep WHERE code =\"" . $code  . "\";";
$result = mysqli_query($con,$query);
$ass = mysqli_fetch_assoc($result);
$currentID = $ass['employee_ID'];

    if($ass['code'] == $code){
        return $ass['position_ID'];
    }else{
        return -1;
    }

    
}

function Secure_Page(){
    
    if(isset($_POST['Code']) || isset($_SESSION['Code'])){ #CHECKS TO SEE IF ONE IS SET        
                
        $con = Connect_DB();
        if($con == 0){
            session_destroy(); #AT ANYTIME WE REVERY BACK TO START OF REGISTER, WE DESTROY SESSION
            header("Location: register.php");
        }
        
        
        if(isset($_POST['Code'])){ #POST IS SET
                    
            $code = $_POST['Code'];
            $result = Check_Code($con,$code);
            
            if($result != -1){
                echo "CORRECT CODE!!<br>";
                $_SESSION['Code'] = $code;
                $_SESSION['Position_ID'] = $result;
                #echo $result . " POSITION ID<br>";
            }else{
                session_destroy(); #AT ANYTIME WE REVERY BACK TO START OF REGISTER, WE DESTROY SESSION
                header("Location: register.php");
            }
            
                   
        }else{ #POST IS NOT SET
                   
           
        }
        
        
    }else{ #Paits with first if statement
        session_destroy(); #AT ANYTIME WE REVERY BACK TO START OF REGISTER, WE DESTROY SESSION
        header("Location: register.php");
    }
}

function passingVariablesTest(){
     
    
    #We have to account for the face that the user could have been directed back to this page and tehse variables will be Session or POST
    
    
    #Do all of our POST tests
    if(isset($_POST['first_name'])){
        
        if(strlen(trim($_POST['first_name'])) != 0){
            echo "<br>YOUR FIRST NAME IS: <br>" . $_POST['first_name'];
        }else{
            header("Location: register_basic.php");
            echo "HERE 1a";
        } 
        
        
    #Do all of our SESSION tests    
    }else{
        
        if(isset($_SESSION['first_name'])){
            if(strlen(trim($_SESSION['first_name'])) != 0){
                echo "<br>YOUR FIRST NAME IS: <br>" . $_SESSION['first_name'];
            }else{
                header("Location: register_basic.php");
                echo "HERE 1b";
            } 
        }else{
             header("Location: register_basic.php");
             echo "HERE 2";
        }
        
    }
    
        
    #Do all of our POST tests
    if(isset($_POST['birthday'])){
        
        if(strlen(trim($_POST['birthday'])) != 0){
            echo "<br>YOUR BIRTHDAY IS: <br>" . $_POST['birthday'];
        }else{
            header("Location: register_basic.php");
            echo "HERE 1a";
        } 
        
        
    #Do all of our SESSION tests    
    }else{
        
        if(isset($_SESSION['birthday'])){
            if(strlen(trim($_SESSION['birthday'])) != 0){
                echo "<br>YOUR BIRTHDAY IS: <br>" . $_SESSION['birthday'];
            }else{
                header("Location: register_basic.php");
                echo "HERE 1b";
            } 
        }else{
             header("Location: register_basic.php");
             echo "HERE 2";
        }
        
    }
    
    #Do all of our POST tests
    if(isset($_POST['last_name'])){
        
        if(strlen(trim($_POST['last_name'])) != 0){
            echo "<br>YOUR LAST NAME IS: <br>" . $_POST['last_name'];
        }else{
            header("Location: register_basic.php");
            echo "HERE 1a";
        } 
        
        
    #Do all of our SESSION tests    
    }else{
        
        if(isset($_SESSION['last_name'])){
            if(strlen(trim($_SESSION['last_name'])) != 0){
                echo "<br>YOUR LAST NAME IS: <br>" . $_SESSION['last_name'];
            }else{
                header("Location: register_basic.php");
                echo "HERE 1b";
            } 
        }else{
             header("Location: register_basic.php");
             echo "HERE 2";
        }
        
    }
    
    
    
     #Do all of our POST tests
    if(isset($_POST['password'])){
        
        if(strlen(trim($_POST['password'])) != 0){
            echo "<br>YOUR PASSWORD IS: <br>" . $_POST['password'];
        }else{
            header("Location: register_basic.php");
            echo "HERE 1a";
        } 
        
        
    #Do all of our SESSION tests    
    }else{
        
        if(isset($_SESSION['password'])){
            if(strlen(trim($_SESSION['password'])) != 0){
                echo "<br>YOUR PASSWORD IS: <br>" . $_SESSION['password'];
            }else{
                header("Location: register_basic.php");
                echo "HERE 1b";
            } 
        }else{
             header("Location: register_basic.php");
             echo "HERE 2";
        }
        
    }
    
    
     #Do all of our POST tests
    if(isset($_POST['password_confirmation'])){
        
        if(strlen(trim($_POST['password_confirmation'])) != 0 && $_POST['password_confirmation'] == $_POST['password']){
            echo "<br>YOUR CONFIRMED PASSWORD IS: <br>" . $_POST['password_confirmation'];
        }else{
            header("Location: register_basic.php");
            echo "HERE 1a";
        } 
        
        
    #Do all of our SESSION tests    
    }else{
        
        if(isset($_SESSION['password_confirmation'])){
            if(strlen(trim($_SESSION['password_confirmation'])) != 0 && $_SESSION['password_confirmation'] == $_SESSION['password']){
                echo "<br>YOUR CONFIRMED PASSWORD IS: <br>" . $_SESSION['password_confirmation'];
            }else{
                header("Location: register_basic.php");
                echo "HERE 1b";
            } 
        }else{
             header("Location: register_basic.php");
             echo "HERE 2";
        }
        
    }

    
    #They have made it this far, if a single post variable is set that means they all are, assign to session
    if(isset($_POST['first_name'])){
        $_SESSION['first_name'] = $_POST['first_name'];
        $_SESSION['last_name'] = $_POST['last_name'];
        $_SESSION['birthday'] = $_POST['birthday'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['password_confirmation'] = $_POST['password_confirmation'];  
    }
}

function passingVariablesTest2(){
            
    #CODE 
     if(strlen(trim($_SESSION['Code'])) != 0){
        echo "<br>YOUR CODE IS: <br>" . $_SESSION['Code'];
    }else{
        header("Location: register_contact.php");
        echo "TEST 1 FAILED";
    }
    
    
    #FIRST NAME CHECK
    if(strlen(trim($_SESSION['first_name'])) != 0){
        echo "<br>YOUR FIRST NAME IS: <br>" . $_SESSION['first_name'];
    }else{
        header("Location: register_contact.php");        
        echo "TEST 2 FAILED";
    }
    
    
    #LAST NAME CHECK
    if(strlen(trim($_SESSION['last_name'])) != 0){
    echo "<br>YOUR LAST NAME IS: <br>" . $_SESSION['last_name'];
    }else{
        header("Location: register_contact.php");        
        echo "TEST 3 FAILED";
    }
    
    #PASSWORD CHECK
    if(strlen(trim($_SESSION['password'])) != 0){
    echo "<br>YOUR PASSWORD IS: <br>" . $_SESSION['password'];
    }else{
        header("Location: register_contact.php");        
        echo "TEST 4 FAILED";
    }
    
    #PASSWORD CONFIRMATION CHECK
    if(strlen(trim($_SESSION['password_confirmation'])) != 0){
        
        if($_SESSION['password'] !=$_SESSION['password_confirmation']){
                    header("Location: register_basic.php");
        }
        echo "<br>YOUR CONFIRMED PASSWORD IS: <br>" . $_SESSION['password_confirmation'];
    }else{
        header("Location: register_contact.php");        
        echo "TEST 5 FAILED";
    }
    
    
    
    # ------------------------------------NEW FORM SUBMISSION (POST) ------------------------------------------------------------
    
    #Email Check
    if(strlen(trim($_POST['email'])) != 0){        
    echo "<br>YOUR EMAIL IS: <br>" . $_POST['email'];
    }else{
        header("Location: register_contact.php");        
        echo "TEST 6 FAILED";
    }
    
    
    #Email 2 Check
    if(strlen(trim($_POST['email2'])) != 0){        
    echo "<br>YOUR EMAIL2 IS: <br>" . $_POST['email2'];
    }else{
        header("Location: register_contact.php");        
        echo "TEST 7 FAILED";
    }
    
    #CHECK THAT THE DAMN EMAILS MATCH!!!!
    if($_POST['email'] != $_POST['email2']){
        echo"EMAILS DIDNT MATCH!!!";
        header("Location: register_contact.php");        
    }
    
    #Phone Number Check
    if(strlen(trim($_POST['phone'])) != 0){        
    echo "<br>YOUR PHONE # IS: <br>" . $_POST['phone'];
    }else{
        header("Location: register_contact.php");        
        echo "TEST 8 FAILED";
    }
    
    #Zip Code Check
    if(strlen(trim($_POST['zipcode'])) != 0){        
    echo "<br>YOUR ZIPCODE IS: <br>" . $_POST['zipcode'];
    }else{
        header("Location: register_contact.php");        
        echo "TEST 9 FAILED";
    }
    
    #State Check
    if(strlen(trim($_POST['state'])) != 0){        
    echo "<br>YOUR STATE IS: <br>" . $_POST['state'];
    }else{
        header("Location: register_contact.php");        
        echo "TEST 10 FAILED";
    }
    
    //SWITCH ALL TO POST ABOVE NOT SESSION
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['email2'] = $_POST['email2'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['zipcode'] = $_POST['zipcode'];
    $_SESSION['region'] = $_POST['state'];
}

function passingVariablesTest3(){  
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';
}

function CheckAvailability(){
    
    $_SESSION['Monday'] = $_POST['Monday'];
    $_SESSION['Tuesday'] = $_POST['Tuesday'];
    $_SESSION['Wednesday'] = $_POST['Wednesday'];
    $_SESSION['Thursday'] = $_POST['Thursday'];
    $_SESSION['Friday'] = $_POST['Friday'];
    $_SESSION['Saturday'] = $_POST['Saturday'];
    $_SESSION['Sunday'] = $_POST['Sunday'];
    
    if( $_SESSION['Monday'] != "N/A"){
        echo "You're availible Monday starting at: " . $_SESSION['Monday'] . "<br>";
    }
    
    if( $_SESSION['Tuesday'] != "N/A"){
        echo "You're availible Tuesday starting at: " . $_SESSION['Tuesday'] . "<br>";
    }
    
    if( $_SESSION['Wednesday'] != "N/A"){
        echo "You're availible Wednesday starting at: " . $_SESSION['Wednesday'] . "<br>";        
    }
    
    if( $_SESSION['Thursday'] != "N/A"){
        echo "You're availible Thursday starting at: " . $_SESSION['Thursday'] . "<br>";
    }
    
    if( $_SESSION['Friday'] != "N/A"){
        echo "You're availible Friday starting at: " . $_SESSION['Friday'] . "<br>";
    }
    
    if( $_SESSION['Saturday'] != "N/A"){
        echo "You're availible Saturday starting at: " . $_SESSION['Saturday'] . "<br>";
    }
    
    if( $_SESSION['Sunday'] != "N/A"){
        echo "You're availible Sunday starting at: " . $_SESSION['Sunday'] . "<br>";
    }
}

function Connect_DB(){
    
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

function Update_Employee_Table($con){
    
    #Insert Employee information
    $stmt = $con->prepare("INSERT INTO Employee (first_name, last_name, birthday, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstname, $lastname, $birthday, $password);

    //Assign Variables
    $firstname = $_SESSION['first_name'];
    $lastname = $_SESSION['last_name'];
    $birthday = $_SESSION['birthday'];
    $password = password_hash($_SESSION['password'], PASSWORD_DEFAULT);
    $stmt->execute();
    $stmt->close();
  
}

function Get_New_Employee_ID($con){
    #LETS GET THE NEW EMPLOYEE ID TO USE TO REGISTER FOR THE OTHER TABLES
            $query = "SELECT employee_ID FROM Employee WHERE first_name =\"" . $_SESSION['first_name']  . "\" AND last_name =\"" . $_SESSION['last_name']  . "\" AND birthday =\"" . $_SESSION['birthday']  . "\";";
    
    $result = mysqli_query($con,$query);
    $ass = mysqli_fetch_assoc($result);
    $currentID = $ass['employee_ID'];
    return $currentID;
}

function Update_Contact_Table($con,$ID){
    
    #Insert into Contact
    $stmt = $con->prepare("INSERT INTO Contact_Information (employee_ID, phone_number, email, zip, region) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $employee_ID ,$phone, $email, $zip, $region);

    //Assign Variables
    $employee_ID = $ID;
    $phone =  $_SESSION['phone'];
    $email = $_SESSION['email'];
    $zip = $_SESSION['zipcode'];
    $region = $_SESSION['region'];
    
    $stmt->execute();
    $stmt->close();
    
}

function Update_Availability_Table($con, $ID){

$stmt = $con->prepare("INSERT INTO Availability (employee_ID,Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday) VALUES (?,?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss",$employee_ID , $Mon, $Tue, $Wed, $Thur, $Fri, $Sat, $Sun);

    //Assign Variables
    $employee_ID = $ID;
    $Mon =  $_SESSION['Monday'];
    $Tue = $_SESSION['Tuesday'];
    $Wed = $_SESSION['Wednesday'];
    $Thur = $_SESSION['Thursday'];
    $Fri = $_SESSION['Friday'];
    $Sat = $_SESSION['Saturday'];
    $Sun = $_SESSION['Sunday'];
    
    $stmt->execute();
    $stmt->close();
    
}

function Redirect_Home_Page(){
    header("Location: home.php");
}

function Update_Position_table($con,$ID){
    
    $Position_ID = $_SESSION['Position_ID']; 
    echo $Position_ID . "POSITION ID<br>";
    
    #INSERT INTO Position (employee_ID,position_IDs) VALUES (1,2);
    $stmt = $con->prepare("INSERT INTO Position (employee_ID, position_IDs) VALUES (?,?)");
    $stmt->bind_param("ss", $employee_ID, $Position_ID);

    //Assign Variables
    $employee_ID = $ID;
    $Position_ID = $_SESSION['Position_ID']; 
    
    echo $Position_ID . "POSITION ID<br>";
    
    $stmt->execute();
    $stmt->close();  
}

function Delete_Registration_Code($con,$code){
    
    #$sql = "DELETE FROM Code_Keep WHERE code ="\".$code\". ";";
    $stmt = $con->prepare("DELETE FROM Code_Keep WHERE code = (?)");
    
    $stmt->bind_param("s", $code);
    $stmt->execute();
    $stmt->close();  
    
    
    $con->close();
}

function Register_User(){
    
    $con = Connect_DB();
    
    if($con == 0){
        echo "There was an error when attempting to connect to the Database";
    }else{
        echo "<br>Your Position ID is: " . $_SESSION['Position_ID'] . "<br>";
    }
    
    #Add Information from form into our employee table
    Update_Employee_Table($con);
    
    #Sleep, well to give our Database time to update before we run a query on it
    sleep(3);
    
    #Retrieve the Auto generated Employee ID
    $Emp_ID = Get_New_Employee_ID($con);
        
    echo "<br><br>Your employee ID is: ". $Emp_ID . "<br><br>";
    
    ##Contact Table Update
    Update_Contact_Table($con, $Emp_ID);
    
    #Availability Table Update
    Update_Availability_Table($con, $Emp_ID);
    
    #Insert Position ID based on employee ID
    Update_Position_table($con, $Emp_ID);
    
    #Delete Code
    Delete_Registration_Code($con,$_SESSION['Code']);
    
    Redirect_Home_Page();
}

?> 