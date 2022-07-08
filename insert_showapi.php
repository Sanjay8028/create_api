 

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>insert show api</title>
 </head>
 <body>
 	


 	<?php
					include('connection.php');

					 $sql="SELECT * FROM account_details";
					
  
                     $data=mysqli_query($con,$sql);

                     // $json= array();
                     while($result=mysqli_fetch_array($data)) {
                     	$json=$result;
                     }
                     // echo "<pre>";
                     
                     echo  json_encode($json);


                 
                    ?>
				


			</table>
		</div>
 
 </body>
 </html>