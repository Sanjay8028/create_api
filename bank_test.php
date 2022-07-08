 

 <?php
 include('connection.php');
 
  if(isset($_POST['bank1']))
  {
   
         $banks=$_POST['Bank'];
       $PersNames=$_POST['PersName'];
       $type=$_POST['AccountType'];
       $A_No=$_POST['AccountNo'];
        $ifsc_code=$_POST['ifsc'];
 
  $sql4="INSERT INTO account_details(`bank_name`, `holder_name`, `acc_type`, `acc_no`, `IFSC`) VALUES ('$banks','$PersNames','$type','$A_No',' $ifsc_code')";

  $result=mysqli_query($con,$sql4);
  header('location:insert_showapi.php');
  die;

}
?>


   
 