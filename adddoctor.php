<!DOCTYPE html>
<html>
<body>

<?php

$username =$_POST['username'];
$address=$_POST['address'];
$phone =$_POST['phone'];
$email=$_POST['email'];
$age=$_POST['age'];
  $district = $_POST['district'];
$gender=$_POST['gender'];
$specification=$_POST['specification'];

if(!empty($username) || !empty($address) || !empty($phone) || !empty($email) || !empty($age) || !empty($district)|| !empty($gender) || !empty($specification))


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
	$INSERT ="INSERT Into adddoctor(username,address,phone,email,age,district,gender,specification) values(?,?,?,?,?,?,?,?)";

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
   $stmt->bind_param("ssisisss",$username,$address,$phone,$email,$age,$district,$gender,$specification);


   $stmt->execute();

  header("Location: adddoctorsuccess.html"); 

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
