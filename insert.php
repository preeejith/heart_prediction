<?php
if (isset($_POST['Submit'])) {
    if (isset($_POST['Username']) && isset($_POST['Address']) &&
        isset($_POST['MobileNo']) && isset($_POST['Email']) &&
        isset($_POST['Age']) && isset($_POST['District']) && isset($_POST['Gender']) && 
        isset($_POST['Password'])) {
        
        $username = $_POST['Username'];
        $address = $_POST['Address'];
        $mobileno  = $_POST['MobileNo'];
        $email = $_POST['Email'];
        $age = $_POST['Age'];
         $district = $_POST['District'];
        $gender = $_POST['Gender'];
        $pwd = $_POST['Password'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "heart";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
                  die('Could not connect to the database.');
                       }
        else {
                  $Select = "SELECT email FROM register1 WHERE email = ? LIMIT 1";
                  $Insert = "INSERT INTO register1(Username, Address,Mobile,Email,Age,District,Gender,Password) values(?, ?, ?,?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssisisss",$username, $address,$mobileno,$email,$age,$district,$gender,$pwd);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                    header("Location: userlogin.html"); 
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>