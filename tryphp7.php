<?php
include 'connection1.php';
  	?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="pv.css">
    <title>Document</title>
</head>
<body style="background-color: brown;">
<button class="btn">HOME</button>
    <div style="display : flex ; background-color: rgb(236, 201, 155);">
       <div>
        <img src="images/menu.png"  width="50px" height="40px" style="margin-left: 40px;">
        <h1>Design.PV</h1>
       </div>
        <div style="margin-left : 600px">
            <img src="images/share.png" width="50px" height="40px">
        <p>share</p>
        <img src="images/download.png"  width="50px" height="40px">
        <p>download</p>
        </div>
    </div>

    <div style="background-color: rgb(212, 120, 120);">
            <div style="display : flex">
                <img src="images/timetable.png" width="60px" height="60px" style="margin-top: 33px;">
                <h2>-Date de reunion :</h2>
                <p class="p">
                
                	<?php
        $sql="SELECT date FROM test2";
        $res=mysqli_query($conn , $sql);
  		while($row=mysqli_fetch_assoc($res)) {  
          echo $row['date'] ; 
      } ;
      ?>  

                </p> <br>
            </div>
            <div style="display : flex">
                <img src="images/circular-clock.png" width="60px" height="60px" style="margin-top: 33px;">
                <h2>-Heure de debut de la reunion :</h2>
                <p class="p">
                	<?php
        $sql="SELECT debut FROM test2";
        $res=mysqli_query($conn , $sql);
  		while($row=mysqli_fetch_assoc($res)) {  
          echo $row['debut'] ; 
      } ;
      ?>  
                </p>
            </div>
            <div style="display : flex">
                <img src="images/circular-clock.png" width="60px" height="60px" style="margin-top: 33px;">
                <h2>-Heure de fin de la reunion :</h2>
                <p class="p">
                	<?php
        			$sql="SELECT fin FROM test2";
        			$res=mysqli_query($conn , $sql);
  					while($row=mysqli_fetch_assoc($res)) {  
         				 echo $row['fin'] ; 
      } ;
      ?>  
                </p>
            </div>
    </div>
    <div style="background-color: rgb(166, 112, 218); text-align: center;">
        <div>
            <img src="images/success.png"  width="60px" height="60px" style="margin-left: 400px;">
            <h2>But de la reunion :</h2>
        </div>
        <p style="font-size : 30px ; color : black ; font-weight: bold; padding-bottom: 30px;" >
        <?php
        $sql="SELECT * FROM test1";
        $res=mysqli_query($conn , $sql);
  		while($row=mysqli_fetch_assoc($res)) {  
          echo $row['but_reunion'] ; 
      } ;
      ?>  
  </p>
    </div>
    <div style="text-align: center; background-color: rgb(46, 125, 161);">
       <div style="top:0px ; margin-left : 400px ; text-align: center">
        <img src="images/members.png" width="60px" height="60px" >
        <h2>Membres presents</h2>
       </div>
        <ul>
            <li>
            	<?php
        $sql="SELECT * FROM test3";
        $res=mysqli_query($conn , $sql);
  		while($row=mysqli_fetch_assoc($res)) {  
          echo "-" . $row['person'] . "<br>" ; 
      } ;
      ?>
  </li>
        </ul>
    </div>

    <div style="background-color: rgb(31, 216, 102);" >
        <div style=" margin-left : 400px">
            <img src="images/notes.png" width="60px" height="60px">
            <h2>Points abordes</h2>
        </div>
            <ul>
                <li>
            	<?php
        $sql="SELECT * FROM test4";
        $res=mysqli_query($conn , $sql);
  		while($row=mysqli_fetch_assoc($res)) {  
          echo "-" . $row['point'] . "<br>" ; 
      } ;
      ?>
  </li>
            </ul>
       
    </div>
    <div style="background-color: rgb(202, 132, 144);" >
        <div style=" margin-left : 400px">
            <img src="images/decision-making.png" width="60px" height="60px">
            <h2>Points abordes</h2>
        </div>
            <ul>
                <li>
            	<?php
        			$sql="SELECT * FROM test5";
        			$res=mysqli_query($conn , $sql);
  					while($row=mysqli_fetch_assoc($res)) {  
         			 echo "-" . $row['decision'] . "<br>" ; 
      } ;
      ?>
  </li>
                
            </ul>
       
    </div>

    <div style="background-color: rgb(202, 132, 144);" >
        <div style=" margin-left : 400px">
            <img src="images/decision-making.png" width="60px" height="60px">
            <h2>Taches :</h2>
        </div>
           <div style="display : flex">
              <ul>
                <li class="person"> <?php
              $sql="SELECT * FROM test6";
              $res=mysqli_query($conn , $sql);
              $i=1;
               while($row=mysqli_fetch_assoc($res)) {  
               echo "-membre ${i} : " . $row['personne'] ."<br>" ; 
               $i=$i+1;
              } ;
            ?>
                  <ul>
                    <li class="tache">
                       <?php
                     $sql="SELECT * FROM test7";
                     $res=mysqli_query($conn , $sql);
                     $i=1;
                     while($row=mysqli_fetch_assoc($res)) {  
                     echo "-tache ${i} : " . $row['tache'] . " : " ; 

              $sql="SELECT * FROM test8";
              $res=mysqli_query($conn , $sql);
            while($row=mysqli_fetch_assoc($res)) {  
               echo "-" . $row['description'] ."<br>" ;
               $i=$i+1; 
      } ;
    
                     } ;
                  ?>
                    </li>
                  </ul>
             
                </li>
                
            </ul>
           </div>
       
    </div>
</body>

<style>
  .person {
    color : black;
    
  }

  .tache{
    color : brown;
    
    
  }
  .btn {
        background-color: orangered;
         color : white; border: none; 
          font-size: 28px; width: 200px;
          margin-left: 500px; margin-top: 50px;
          height: 80px;
          margin-bottom: 50px
  }

  .btn:hover {
    transform: scale(1.1);
  }
</style>

<script>
  document.querySelector('.btn').onclick= function() {
    location.href='pagehtml.html';
  }

</script>

</html>

