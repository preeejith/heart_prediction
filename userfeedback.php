<!DOCTYPE html>
			<html>
				<body>

					<?php
					$name =$_POST['name'];
					$feedback=$_POST['feedback'];
							if(!empty($name) || !empty($feedback))


											{
	#code....

												$host ="localhost";
												$dbUsername="root";
												$dbPassword="";
												$dbname="heart";
												$conn = new mysqli($host,$dbUsername, $dbPassword, $dbname);
							if(mysqli_connect_error())
										{

														die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
										}

							else
										{
   											 $SELECT ="SELECT email From adddoctor Where email=? Limit 1";
											$INSERT ="INSERT Into userfeedback(name,feedback) values(?,?)";

	//Pepare Satement 
											$stmt =$conn->prepare($SELECT);
											$stmt->bind_param("s",$email);
											$stmt->execute();
											$stmt->bind_result($email);
											$stmt->store_result();
											$rnum =$stmt->num_rows;
							if($rnum==0){

   											$stmt->close();
 										    $stmt=$conn->prepare($INSERT);
   											$stmt->bind_param("ss",$name,$feedback);
   											$stmt->execute();

   											header("Location: userfeedbackerror.html"); 

										}



							else
										{
											echo" some one already registered using this mail";
										}
												$stmt->close();
												$conn->close();


										}}


							else{

									echo "All field are required";
									die();
								}

						?> 

			</body>
</html>
