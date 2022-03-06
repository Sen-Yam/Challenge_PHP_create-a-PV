<?php 

if(isset($_POST['boutton'])) {
	include'connection1.php';
	$person=$_POST['point'];
	foreach ($person as $p) {

		$sql="INSERT INTO test4 VALUES('$p')";
		$res=mysqli_query($conn , $sql);
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body style="background-color: rgb(231, 248, 243);">
    <div style="display : flex ; margin-left: 50px;margin-top: 50px;">
        <img src="images/menu.png" width="50px" height="40px">
        <div style="background-color:rgb(54, 71, 54) ; width: 530px;height: 5px; margin-left: 320px; margin-top: 100px;"></div>
        <div style="display : flex ; position : absolute ; margin-top: 60px; margin-left: 250px;">
            <div class="div"><p>1</p> </div>
            <div class="div"><p>2</p> </div>
            <div class="div"><p>3</p> </div>
            <div class="div"><p>4</p> </div>
        </div>
        
    </div>
    
    <img src="images/meeting.png" width="300px" length="300px" style="margin-left: 540px; margin-top: 100px;">
    <h1>Entrer les decisions prises dans la reunion</h1>
    <div class="perso" >
        <button id="h">Ajouter une decision</button>
       <form action="tryphp5.php" class="f" method="post">
        <button class="btn" name="boutton">Continuer</button>
        <div id="i1">
            <div style=" margin-top: 40px; ">
                <input type="text" placeholder="decision" name="decision[]">
            </div>
            
        </div>
       </form>
      
    </div>
    <style>

        .f{
            border : 2px solid rgb(44, 40, 40) ;
            margin-top : 100px;
            padding : 20px;
        }
        .div {
        
        color: white;
        background-color: rgb(54, 71, 54);
        margin-left: 100px;
        width: 70px;
        height: 70px;
        border-radius: 40px;
        
    }
        body div div div p {
        font-weight: bold;
        margin-left: 28px;
        font-size: 30px;
        margin-top: 20px;
    }
    
        #h {
            background-color: rgb(255, 187, 0);
            color : white; border: none; 
            padding: 13px; font-size: 25px; width: 210px;
            height :80px; 
            margin-left: 30px; margin-top: 50px;
            box-shadow: 3px 3px 10px rgba(0,0,0, .4);
        }
        #h:hover {
            color:black;
        }
        button:hover {
            transform : scale(1.1);
            color : black;
        }
        h1 {
        color : black;
        font-weight : bold;
        font-size : 50px ;
        margin-left: 200px;
        margin-top: 160px;
    }
    
    body div div div  input {
        padding: 20px;
        width: 350px;
        height: 40px;
        margin-left: 50px;
        margin-top: 50px;
        font-size: 30px;
        border: 1px solid black;
    }

    .oui {
        padding: 20px;
        width: 350px;
        height: 40px;
        margin-left: 50px;
        margin-top: 50px;
        font-size: 30px;
        border: 1px solid black;
    }
    .btn {
        background-color: orangered;
         color : white; border: none; 
          font-size: 28px; width: 200px;
          margin-left: 500px; margin-top: 50px;
          height: 80px;
    }

    </style>
</body>
<script>
        document.querySelector('#h').onclick= function(e) {
            e.preventDefault();
 		var newspace=document.createElement('input');
 		newspace.setAttribute("placeholder" , "decision");
 		newspace.setAttribute("type" , "text");
 		newspace.classList.add('oui'); 
 		newspace.setAttribute("name" , "decision[]");

 		document.querySelector('.f').appendChild(newspace);
         

        }
   

    
   
 

</script>
</html>