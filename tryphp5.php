<?php 

if(isset($_POST['boutton'])) {
	include'connection1.php';
	$person=$_POST['decision'];
	foreach ($person as $p) {

		$sql="INSERT INTO test5 VALUES('$p')";
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
	<h1>Les taches</h1>
	<button id="h">Ajouter des taches</button>
	<form action="tryphp6.php" class="f" method="post">
        <button class="btn" name="boutton">Creer le PV</button>
        <div id="i1">
            <div style=" margin-top: 40px;">
                <div style="display : flex" >
				<input class="p" type="text" placeholder="personne" name="tab1[]" >
				<input type="text" placeholder="tache a attribuer" name="tab2[]">
				</div>
				<div style="display : flex">
				<div class="membre">
				<ul>
					<li>
						<button class="b">
                        <?php
                        include'connection1.php';
                        $sql="SELECT * FROM test3";
                        $res=mysqli_query($conn , $sql);
                        while($row=mysqli_fetch_assoc($res)) {  
                         echo "-" . $row['person'] . "<br>" ; 
                                 } ;
                         ?>
                     </button>
					</li>

				</ul>
				</div>
				<input class="membre" placeholder="description" name="tab3[]">
			</div>
            </div>
            
        </div>
       </form>
</body>

<style>
	.membre {
		padding: 20px;
        width: 350px;
        height: 300px;
        margin-left: 50px;
        margin-top: 50px;
        font-size: 30px;
        border: 1px solid black;
		background-color:white;
	}
	li {
		list-style-type: none;
	}
    .b{
        border : none ;font-size: 28px; height : 60px  width : 320px ; background-color: white;
    }
	
	.f{
            border : 2px solid rgb(44, 40, 40) ;
            margin-top : 100px;
            padding : 20px;
        }
	body form div div  input {
        padding: 20px;
        width: 350px;
        height: 40px;
        margin-left: 50px;
        margin-top: 50px;
        font-size: 30px;
        border: 1px solid black;
    }
    .p {
        padding: 20px;
        width: 350px;
        height: 40px;
        margin-left: 50px;
        margin-top: 50px;
        font-size: 30px;
        border: 1px solid black;
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
	h1 {
        color : black;
        font-weight : bold;
        font-size : 50px ;
        margin-left: 200px;
        margin-top: 160px;
    }
	.btn {
        background-color: orangered;
         color : white; border: none; 
          font-size: 28px; width: 200px;
          margin-left: 500px; margin-top: 50px;
          height: 80px;
    }
</style>
<script>
	document.querySelector('#h').onclick= function () {

        var newspace1=document.createElement('input');
        newspace1.setAttribute("placeholder" , "personne");
        newspace1.setAttribute("type" , "text");
        newspace1.classList.add('p'); 
        newspace1.setAttribute("name" , "tab1[]");

         var newspace2=document.createElement('input');
        newspace2.setAttribute("placeholder" , "tache a attribuer");
        newspace2.setAttribute("type" , "text");
        newspace2.classList.add('p'); 
        newspace2.setAttribute("name" , "tab2[]");

         var newspace3=document.createElement('input');
        newspace3.setAttribute("placeholder" , "description");
        newspace3.setAttribute("type" , "text");
        newspace3.classList.add('membre'); 
        newspace3.setAttribute("name" , "tab3[]");
        document.querySelector('.f').appendChild(newspace1);
        document.querySelector('.f').appendChild(newspace2);
        document.querySelector('.f').appendChild(newspace3);
         
        
    }

</script>
</html>
