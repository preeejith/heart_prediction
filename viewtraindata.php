

<?php
    include_once 'database.php';
    $result = mysqli_query($conn,"SELECT * FROM adddoctor");
?>




<html>
          <head>
              <title>User Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">








                <style>

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
}








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







body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 1px;
}


table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 400%;
}

table {
  border-collapse: collapse;
  height: 30%;
}





      </style>




      </head>
        <body>









<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Heart Disease Prediction</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="adddoctor.html" class="w3-bar-item w3-button">Add Doctor</a>
       <a href="traindata.html" class="w3-bar-item w3-button">Train Data</a>
        <a href="viewuser3.php" class="w3-bar-item w3-button">Users</a>
         <a href="viewdoctor3.php" class="w3-bar-item w3-button">Doctors</a>
      <a href="viewtraindata.php" class="w3-bar-item w3-button">Trained Data  </a>
      <a href="feedback.php" class="w3-bar-item w3-button">FeedBacks</a>
      <a href="heart1.html" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="heartbackground.jpg" alt="Hamburger Catering" width="800" height="400">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">Know Your disease Save Your Life</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     
    

    <div class="w3-col m6 w3-padding-large">
      
            <center>   <h1 > User Details </h1></center>
              <i class="fa fa-user-md" style="font-size:48px;color:red"></i>
            <center>
            </center>
            <table id="customers">

<tr>
                  <th> ID</th>
                  <th>DISEASE NAME</th>
                  <th>AGE</th>
                  <th>GENDER</th>
                  <th>CHEST PAIN</th>
                  <th>FASTING BLOOD SUGAR</th>
                  <th>RESTING ELECTROGRAPHICS</th>
                  <th>EXERCISE INDUCED ANGINA</th>
                  <th>SLOPE</th>

                 <th>NO. OF MAJOR VESSEL(CA)</th>
                  <th>THAI</th>
                  <th>TREST BLOOD PRESSURE</th>
                  <th>SERUM CHOLESTROL</th>
                  <th>MAXIMUM HEART RATE ACHIEVE</th>
                  <th>PEAK</th>

                  <th>EDIT</th>
                  <th>Action</th>
                </tr>





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

                                                $sql = "SELECT id, dname, age,gender,cpain,fbs,re,eia,slope,ca,thai,tbp,sc,mhra,peak FROM traindata";
                                                $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
    // output data of each row
                                                    while($row = $result->fetch_assoc()) {
                                                                                           echo "  <tr><td> ". $row["id"]. "   </td>
                                                                                          <td>     ". $row["dname"]. "  </td>
                                                                                          <td>    ".$row["age"]."  </td> 
                                                                                           <td>      ".$row["gender"]." </td> 
                                                                                           <td>      ".$row["cpain"]." </td>  
                                                                                           <td>   ".$row["fbs"]."</td>  
                                                                                            <td>     ".$row["re"]."</td>


                                                                                            <td>  ". $row["eia"]. "   </td>
                                                                                             <td>     ". $row["slope"]. "  </td>
                                                                                             <td>    ".$row["ca"]."  </td> 
                                                                                              <td>      ".$row["thai"]." </td> 
                                                                                            <td>      ".$row["tbp"]." </td>  
                                                                                              <td>   ".$row["sc"]."</td>  
                                                                                             <td>     ".$row["mhra"]."</td>
 <td>     ".$row["peak"]."</td>


           
                                                                                               <td><button>Edit</button></td>
                                                                                              <td><button>Delete</button></td></tr>";


                          }



        
                          } 
                      else {
                                  echo "0 results";
                            }

                                  $conn->close();
                  ?>

    </table>
      
    </div>
  </div>
  
</div>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    
     
                </div>
    
    <div class="w3-col l6 w3-padding-large">
      
  
  </div>



  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by team @heartcare <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">.com</a></p>
</footer>




        </body>
</html>










































