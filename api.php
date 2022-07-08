 

<?php 
include('connection.php');

$q = "SELECT * FROM account_details";
$res = mysqli_query($con,$q);
 
  $count=mysqli_num_rows($res);
  header('content-type:application/json');
  if($count>0){
        while ($row=mysqli_fetch_assoc($res)) {
                $arr[]=$row;
                // echo "<pre>";
                print_r($row);
                
 

        }
        

                echo json_encode(['status'=>'true','data'=>$arr,'result'=>'found']); 
        }
        
        else{
                  
                // echo "not search";
                 echo json_encode(['status'=>'false','data'=>$arr,'result'=>' not found']); 

        }


        
?>

