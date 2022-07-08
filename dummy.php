  

<?php 

include('connection.php');

if(isset($_POST['key'])){
	// $key=mysql_real_escape_string($con,$get_['key']);
        $key=$_POST['key'];
	$checkRow=mysqli_query($con,"SELECT status from token where token='$key'");
	if(mysqli_num_rows($checkRow)>0){

	$checkRos=mysqli_fetch_assoc($checkRow);
	echo "<pre>";
	print_r($checkRos); 
        die();

$q = "SELECT * FROM account_details";
$res = mysqli_query($con,$q);
 
  $count=mysqli_num_rows($res);
  header('content-type:application/json');

  if($count>0){
        while ($row=mysqli_fetch_assoc($res)) {
                $arr[]=$row;
               
                print_r($row);


        }
        

                echo json_encode(['status'=>'true','data'=>$arr,'result'=>'found']); 
        }

        
        else{
                  
                // echo "not search";
                 echo json_encode(['status'=>'false','data'=>$arr,'result'=>' not found']); 

        }
    }
}
        else{

        	 // echo json_encode(['status'=>'false','data'=>$arr,'result'=>' not found']); 
        	 echo " please provide api key";

        }



        
?>
