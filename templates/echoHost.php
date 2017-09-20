<?php 


	require('system/config/localconfig.php');


    $Host = $GLOBALS['TL_CONFIG']['dbHost'];
    $User = $GLOBALS['TL_CONFIG']['dbUser'];
    $Pass = $GLOBALS['TL_CONFIG']['dbPass'];
    $Database = $GLOBALS['TL_CONFIG']['dbDatabase'];
    $db = mysqli_connect($Host, $User, $Pass, $Database);

 

    
     
      echo "
    	<h2>Database</h2>
		Host: $Host <br/>
		User: $User <br/>
		Pass: $Pass <br/>
		Database: $Database <br/>
		 <br/>
    ";




    $request = "SELECT firstname, lastname FROM tl_member ";
    $result = mysqli_query($db, $request);

    //print_r($array); 


    while($row = mysqli_fetch_object($result))
     {


      echo $row->firstname . "<br>"; 
      echo $row->lastname . "<br>"; 
      echo "<br>";


     }

    //print_r($array);



    


    ?> 
