

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
                      <a href="userpage.html" class="w3-bar-item w3-button">Heart Disease Prediction</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
                           <div class="w3-right w3-hide-small">
                            <a href="http://127.0.0.1:5000/" class="w3-bar-item w3-button">Heart Analysis</a>
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

 <!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
         <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Details</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Doctor Details by Search </h4>
                   </div>
            <div class="card-body">
          <div class="row">
         <div class="col-md-7">

                          <form action="" method="GET">
                                    <div class="input-group mb-3">

      <center>   <h1 > Search by District </h1>
                  <select   type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">>
                        <option value="nill">select</option>
                        <option value="ernakulam">Ernakulam</option>
                        <option value="thiruvananthapuram">Thiruvananthapuram</option>
                        <option value="thissur">Thissur</option>
                        <option value="kozhikodu">kozhikodu</option>
                        <option value="malapuram">Malapuram</option>    
                        <option value="kottayam">Kottayam</option>
                        <option value="kannur">Kannur</option>
                        <option value="kasarkodu">Kasarkodu</option>      
                        <option value="pathanamthitta">Pathanamthitta</option>
                        <option value="alapuzha">Alapuzha</option>
                        <option value="idukki">Idukki</option>
                        <option value="wayanad">Wayanad</option>     
                        <option value="kollam">Kollam</option>
                        <option value="palakkad">Palakkad</option>
                  </select>

          </br>        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
              </form>

                     <button><a href=doctordetails.php>Search by all </a></button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>User Id</th>
                                    <th>User Name</th>
                                    <th>Hospital</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Age</th>
                                    <th>District</th>
                                    <th>Gender</th>
                                     <th>Specification</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","heart");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM adddoctor WHERE CONCAT(Username,district,Email) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['username']; ?></td>
                                                    <td><?= $items['address']; ?></td>
                                                    <td><?= $items['phone']; ?></td>
                                                     <td><?= $items['email']; ?></td>
                                                     <td><?= $items['age']; ?></td>
                                                     <td><?= $items['district']; ?></td>
                                                      <td><?= $items['gender']; ?></td>
                                                      <td><?= $items['specification']; ?></td>
                                                        
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>



<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by team @heartcare <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">.com</a></p>
</footer>




</body>
</html>
        </body>
</html>

























	</body>
</html>