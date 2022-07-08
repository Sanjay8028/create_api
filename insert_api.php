 
 
 <?php 

 include('connection.php');
    $banks=$_POST['bank_name'];
       $PersNames=$_POST['holder_name'];
       $type=$_POST['acc_type'];
       $A_No=$_POST['acc_no'];
        $ifsc_code=$_POST['IFSC'];

      $sql3="INSERT INTO account_details (`bank_name`, `holder_name`, `acc_type`, `acc_no`, `IFSC`) VALUES (' $banks','$PersNames','$type','$A_No',' $ifsc_code')";

      $data3=mysqli_query($con,$sql3);
      header('location:insert_showapi.php');

      // echo $data3;
      print_r($data3);


      if($data3) 

         
 
  {

                $arr=['msg'=>'Record insert sucess','status'=>200];

               echo  json_encode($arr);
    
            } 


            else{
               $arr=['msg'=>'Record not insert ','status'=>200];

               echo  json_encode($arr);
            } 

?>


 