<?php
   if(isset($_POST['but'])) {
    include 'connection1.php';
    $but= ($_POST['but']); 
    $sql= "INSERT INTO test1 VALUES('$but')";
    $res= mysqli_query($conn , $sql);
    
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <div style="display : flex ; margin-left: 50px;margin-top: 50px;">
        <img src="images/menu.png" width="50px" height="40px">
        <div style="background-color:rgb(54, 71, 54) ; width: 530px;height: 5px; margin-left: 320px; margin-top: 100px;"></div>
        <div style="display : flex ; position : absolute ; margin-top: 60px; margin-left: 250px;">
            <div><p>1</p> </div>
            <div><p>2</p> </div>
            <div><p>3</p> </div>
            <div><p>4</p> </div>
        </div>
        <div style="background-color : rgba(223, 230, 228, 0.3) ; position : absolute ; margin-left: 690px; width: 170px ; height : 70px; margin-top: 60px;"></div>
        <div style="background-color : rgba(223, 230, 228, 0.3) ; position : absolute ; margin-left: 860px; width: 170px ; height : 70px; margin-top: 60px; "></div>
    </div>
    
    <img src="images/meeting.png" width="300px" length="300px" style="margin-left: 540px; margin-top: 100px;">
    <h1>Entrer la date et l'heure de la reunion</h1>
    <div style="flex-direction: column; margin-top: 80px;">
        <div style="display : flex">
            <p class="p" style="margin-left: 100px;">La date de la reunion</p>
            <p class="p" style="margin-left: 150px;" >Debut de la reunion</p>
            <p class="p"  style="margin-left: 200px;"> Fin de la reunion</p>
        </div>
       
            <form action="tryphp2.php" method="post">
                <div style="display: flex; margin-top: 0px;">
                <input type="text" placeholder="jj/mm/aa" class="in1" name="date" >
            <input type="text" placeholder="hh/min" class="in2" name="heure1">
            <input type="text" placeholder="hh/min" class="in3" name="heure2">
        </div>
            <button>Continuer</button>
            </form>
       
    </div>
    
</body>
<style>
    body div div div {
    color: white;
    background-color: rgb(54, 71, 54);
    margin-left: 100px;
    width: 70px;
    height: 70px;
    border-radius: 40px;
    
}
 .p {
    font-weight: bold;
    font-size: 30px;
    margin-top: 20px;
    
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

.in1 , .in2  , .in3 {
    padding: 20px;
    width: 350px;
    height: 40px;
    margin-left: 50px;
    margin-top: 50px;
    font-size: 40px;
    border: 1px solid black;
}
button {
    background-color: orangered;
     color : white; border: none; 
     padding: 17px; font-size: 28px; width: 250px;
      margin-left: 550px; margin-top: 70px;
}
body button:hover {
    transform : scale(1.1);
}
</style>
<script>
    document.querySelector('button').onkeyup= function (e) {
       
         e.preventDefault();
        var ok1=true;
        ok2=true;
        ok3=true;
        if(document.querySelector('.in1').value=="") {
            ok1=false;
            document.querySelector('.in1').style.border='1px solid red';
        }
        if(document.querySelector('.in2').value=="") {
            ok2=false;
            document.querySelector('.in2').style.border='1px solid red';
        }
        if(document.querySelector('.in3').value=="") {
            ok3=false;
            document.querySelector('.in3').style.border='1px solid red';
        }
        if(ok1==true && ok2==true && ok3==true) {
            location.href='tryphp2.php'
        }
}
    

</script>
</html>


