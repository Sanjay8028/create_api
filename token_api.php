<?php
// $url="http://localhost/create_retailer/create_partner/api.php?key=wqieowpieoidkfjjfjk";
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL,json_encode($url));
// // curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
// $result = curl_exec($ch);

// $result1=json_decode($result,true);
// $fff['fff']=array_values($result1);
//  echo "<pre>";
//  print_r($fff);
//  exit;
// if(isset($fff['status'])){	 
// 	if($fff['status']==true){
// 		if(isset($fff['result'])){
// 			if($fff['result']==true){
//      			$faa=$fff['data'];
// 				foreach ($faa as $faa) {
// 					echo json_encode($faa);
// 				}
// 			}
// 			else{
// 		    // echo $result['data'];
// 		}
// 	}
// 	else {
// 	 	   // echo $result['data'];
// 	 	}
// 	}
// }else{
// 		echo "api not work";
// 	}
// curl_close($ch); 



?>

<?php

// if (isset($_POST['submit'])) {
	// $banks=$_POST['key'];
  
// 
// $url='http://localhost/create_retailer/create_partner/api.php';
// echo $url;
// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => $url,
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'POST',
// ));

// $response = curl_exec($curl);
	// echo $response;
	// echo "<pre>";
	// print_r($response);
// 	$response;
	
	
// curl_close($curl);


     // ?>  

  <?php 

  include('connection.php');


  $q = "SELECT * FROM account_details";
  $res = mysqli_query($con,$q);

   $count=mysqli_num_rows($res);

          while ($row=mysqli_fetch_assoc($res)){
 
    // echo "<pre>";
    // print_r($row);

  }
 

  ?> 
 



 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 	<title>Token</title>
 </head>
 <body>
 	<div class="container mt-4">
 		<div class="row">
 			<div class="col-sm-6 bg-light">
 		    <form method="post" action="search.php">
  <div class="form-group">
    <!-- <label for="exampleInputEmail1">BANK</label> -->
    <input type="text" class="form-control" id="exampleInput" placeholder="search..." name="key" oninput = "search(this.value)">
  </div>
</form>
<br>

<ul id="bit">
  
    <?php foreach ($res as $key) { ?>
      <li><?php echo $key["bank_name"];?></li>

    <?php } ?>
    
    
   
</ul>
   
  
   
  <!-- <button type="submit" class="btn btn-primary" name="submit">Submit</button> -->
<!-- </form> -->
 	</div>
 </div>
</div>
<script src="min.js"></script>
 	
 </body>
 </html>


