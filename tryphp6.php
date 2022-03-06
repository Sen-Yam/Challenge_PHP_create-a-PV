<!-- php des tache  +
le boutton de voir le pv dans la liste des PVs -->

<?php 
if(isset($_POST['boutton'])) {
	include'connection1.php';
	$tab1=$_POST['tab1'];
		foreach ($tab1 as $T) {
			$sql="INSERT INTO test6 VALUES('$T')";
			$res=mysqli_query($conn , $sql);
		}
	$tab2=$_POST['tab2'];
		foreach ($tab2 as $T) {
			$sql="INSERT INTO test7 VALUES('$T')";
			$res=mysqli_query($conn , $sql);
		}
	$tab3=$_POST['tab3'];
		foreach ($tab3 as $T) {
			$sql="INSERT INTO test8 VALUES('$T')";
			$res=mysqli_query($conn , $sql);
		}
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
	
    <link rel="stylesheet" href="pv.css">
    <title>Document</title>
</head>
<body>
	<a href="tryphp8.php"><button class="btn">go to list</button></a>

</body>
 <style>
 	.btn {
        background-color: orangered;
         color : white; border: none; 
          font-size: 28px; width: 200px;
          margin-left: 500px; margin-top: 50px;
          height: 80px;
    }
 </style>
 
 

</html>



