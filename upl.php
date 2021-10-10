<!DOCTYPE html>
<html>
<head>
	<title>upl</title>
</head>
<body>
<?php 
$name=$_POST["name"];
$lastname=$_POST['lastname'];
$ddn=$_POST["ddn"];
$address=$_POST["address"];
$numt=$_POST["numt"];
$mail=$_POST["mail"];
$fac=$_POST["fac"];
$twi=$_POST["twi"];
$li=$_POST["li"];
$nive=$_POST["nive"];
// 11 12 13 
$b1=$_POST["b1"];
$b2=$_POST["b2"];
$b3=$_POST["b3"];
$b4=$_POST["b4"];
$c1=$_POST["c1"];
$c2=$_POST["c2"];
$c3=$_POST["c3"];
$c4=$_POST["c4"];
$c5=$_POST["c5"];
$c6=$_POST["c6"];
$dome=$_POST["dome"];
$desc=$_POST["desc"];
$formation=$_POST["formation"];
$exp=$_POST["exp"];
$s1=$_POST["s1"];
$s2=$_POST["s2"];
$s3=$_POST["s3"];
$s4=$_POST["s4"];
$s5=$_POST["s5"];
$s6=$_POST["s6"];
$s7=$_POST["s7"];

?>

<?php

if ($_SERVER["REQUEST_METHOD"]=="POST" && isset($_FILES['my_image'])) {
	include "bdc.php";
	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: cv.php?error=$em");
			echo $em;
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uplo/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);


				// Insert into Database
                
				$req = "INSERT INTO `tab`(`image_url`, `name`, `lastname`, `ddn`, `address`, `numt`, `mail`, `fac`, `twi`, `li`, `nive`, `b1`, `b2`, `b3`, `b4`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `dome`, `desc`, `formation`, `exp`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`) 
						VALUES ('$new_img_name','$name','$lastname','$ddn','$address','$numt','$mail','$fac','$twi','$li','$nive','$b1','$b2','$b3','$b4','$c1','$c2','$c3','$c4','$c5','$c6','$dome','$desc','$formation','$exp','$s1','$s2','$s3','$s4','$s5','$s6','$s7')";
				mysqli_query($conn,$req) or die("mysqli_error()");
				echo "hello";
				header("Location: affi.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: cv.php?error=$em");
				echo $em;
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: cv.php?error=$em");
		echo $em;
	}

}else {
	header("Location: cv.php");
	echo $em;
}
?>

</body>
</html>