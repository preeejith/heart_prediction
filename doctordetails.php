
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
                                text-align: left;
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
                                      width: 500%;
                                  }

                            table {
                                     border-collapse: collapse;
                                     height: 50%;
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
                            <a href="heartanalysis.html" class="w3-bar-item w3-button">Heart Analysis</a>
                            <a href="doctordetails.php" class="w3-bar-item w3-button">View Doctor  </a>
                            <a href="userfeedback.html" class="w3-bar-item w3-button">Feed Back</a>
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
                   <div class="w3-row w3-padding-30" id="about">
                    <div class="w3-col m6 w3-padding-large w3-hide-small">
     
                       <div class="w3-col m6 w3-padding-small">
                          <center>   <h1 > Doctor Details </h1></center>
                                  <i class="fa fa-user-md" style="font-size:48px;color:red"></i>
                          <center>
                          </center>
            <table id="customers">
               <tr>
                  <th>User Id</th>
                  <th>First Name</th>
                  <th>Hospital</th>
                  <th>Phone</th>
                  <th>Email id</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Specification</th>
                 
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

                    $sql = "SELECT id, username, address,phone,email,age,gender,specification FROM adddoctor";
                    $result = $conn->query($sql);

            if ($result->num_rows > 0) {
    // output data of each row
                                          while($row = $result->fetch_assoc()) {
                                                                                 echo "  <tr><td> ID: ". $row["id"]. "   </td>
                                                                                <td>         ". $row["username"]. "  </td>
                                                                                 <td>     ".$row["address"]."  </td> 
                                                                                 <td>      ".$row["phone"]." </td> 
                                                                                 <td>       ".$row["email"]." </td>  
                                                                                 <td>     ".$row["age"]."</td>  
                                                                                 <td>     ".$row["gender"]."</td>
                                                                                <td>   ".$row["specification"]."</td>
                                                                                   </td></tr>";


                                                                              }



        
                                                                        } else {
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




































