<html>
        <head><title>Add Doctor</title>

            <style>
                body {font-family: Arial;}

/* Style the tab */
                  .tab {
                         overflow: hidden;
                         border: 1px solid #ccc;
                        background-color: #f1f1f1;
                      }

/* Style the buttons inside the tab */
                  .tab button {
                                 background-color: inherit;
                                  float: center;
                                  border: none;
                                   outline: none;
                                   cursor: pointer;
                                  padding: 14px 16px;
                                   transition: 0.3s;
                                   font-size: 17px;
                              }

/* Change background color of buttons on hover */
                  .tab button:hover {
                                       background-color: #ddd;
                                    }

/* Create an active/current tablink class */
                  .tab button.active {
                                         background-color: #ccc;
                                      }

/* Style the tab content */
                  .tabcontent {
                                    display: none;
                                    padding: 6px 12px;
                                    border: 1px solid #ccc;
                                    border-top: none;
                              }
        </style>

         <style>


                  h1 {
                         background-color: #ff0000;
                      }


        </style>

  </head>
      <body>
	       <hr>
              <img src="hearttop.jpg" alt="heart" style="width:1400px;height:300px;">
        <hr>
        <br>
            <div class="tab">
                 <a href="adddoctor.html"> <button class="tablinks" onclick="openCity(event, 'London')">Add Doctor</button></a>
                 <a href="traindata.html"> <button class="tablinks" onclick="openCity(event, 'Paris')">Add Training Data </button></a>
                 <a href="viewuser.html"> <button class="tablinks" onclick="openCity(event, 'Tokyo')">View User</button></a>
                 <a href="viewdoctor2.html"> <button class="tablinks" onclick="openCity(event, 'Tokyo')">View Doctor</button></a>
                 <a href="viewtraindata.php"> <button class="tablinks" onclick="openCity(event, 'Tokyo')">View Training Data</button></a>
                 <a href="feedback.php"> <button class="tablinks" onclick="openCity(event, 'Tokyo')">View Feedback</button></a>
                 <a href="heart1.html"> <button class="tablinks" onclick="openCity(event, 'Tokyo')">Logout</button></a>
          </div>

        <br>


          <center>
                 <h1 style="color:white;">--User Details--</h1>
          </center>

            <center>
            </center>





          <table border="1">

    <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
$dbname = "heart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, Username, Address,Mobile,Email,Age,Gender FROM register";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "  <tr><td> ID: ". $row["id"]. "   </td>
        <td>     - Name   : ". $row["Username"]. "  </td>
        <td>    -Address :".$row["Address"]."  </td> 
        <td>      -Phone :".$row["Mobile"]." </td> 
        <td>      -Email :".$row["Email"]." </td>  
        <td>   -Age    :".$row["Age"]."</td>  
        <td>     -Gender :".$row["Gender"]."</td>
             
             <td><button>Edit</button></td>
             <td><button>Delete</button></td></tr>";


    }



        
} else {
    echo "0 results";
}

$conn->close();
?>











</table>








</body>
</html>