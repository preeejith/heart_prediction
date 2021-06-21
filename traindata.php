<!DOCTYPE html>
<html>
		<body>

			<?php

				$dname =$_POST['dname'];
				$age=$_POST['age'];
				$gender=$_POST['gender'];
				$cpain =$_POST['cpain'];
				$fbs=$_POST['fbs'];
				$re=$_POST['re'];
				$eia=$_POST['eia'];
				$slope=$_POST['slope'];
				$ca=$_POST['ca'];
				$thai=$_POST['thai'];
				$tbp=$_POST['tbp'];
				$sc=$_POST['sc'];
				$mhra=$_POST['mhra'];
				$peak=$_POST['peak'];


if(!empty($dname) || !empty($age) || !empty($gender) || !empty($cpain) || !empty($fbs) || !empty($re) || !empty($eia)|| !empty($slope) || !empty($ca) || !empty($thai) || !empty($tbp) || !empty($sc) || !empty($mhra)   || !empty($peak)   )


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
						 $INSERT ="INSERT Into traindata(dname,age,gender,cpain,fbs,re,eia,slope,ca,thai,tbp,sc,mhra,peak) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

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
   						 $stmt->bind_param("sisiiiiiiiiiii",$dname,$age,$gender,$cpain,$fbs,$re,$eia,$slope,$ca,$thai,$tbp,$sc,$mhra,$peak);


 						  $stmt->execute();

  										 echo "New record inserted succefully";

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
