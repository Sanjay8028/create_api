if(isset($result['status'])){
   
      if($result['status']==true){
   

       echo '<pre>';
             print_r($result['data']);
         }

    else{
         print_r($result['data']);
      }
 

   }else {
    echo "api not work";
   }





<!-- 

<?php 
  
    $id=$_GET['id'];
    
    echo $id;
    die;

 ?>

 -->
  
 
<?php 

      include("connection.php"); 
      
  if(isset($_POST['submit'])){ 
    
    
     $banks=$_POST['Bank'];
     $PersNames=$_POST['PersName'];
      $type=$_POST['AccountType'];
      $A_No=$_POST['AccountNo'];
        $ifsc_code=$_POST['ifsc'];
    
//     $a = array("red", "green", "blue");
// print_r($a);

        if(!isset($submit)){
    if(isset($_POST['bank_name']) && (isset($_POST['holder_name']) && (isset($_POST['acc_type']) &&(isset($_POST['acc_no'])&& (isset($_POST['IFSC'])){

        $banks=mysql_real_escape_string($con,$_POST['Bank']);
         $PersNames=mysql_real_escape_string($con,$_POST['PersName']);
          $type=mysql_real_escape_string($con,$_POST['AccountType']);
           $A_No=mysql_real_escape_string($con,$_POST['AccountNo']);
            $ifsc_code=mysql_real_escape_string($con,$_POST['ifsc']);


         header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Credentials: true');
        // header('Access-Control-Max-Age: 86400'); 
        header('Access-Control-Allow-methods:POST');
        header('Access-Control-Allow-Header:*');
        // header('Content-type:application/Json');

        
 
$q = "select * from account_details where bank_name='$banks' && holder_name = '$PersNames' &&
acc_type = '$type' && acc_no = '$A_No' && IFSC = '$ifsc_code'";
// echo "after q";

// $a = array("red", "green", "blue");
print_r($q);



$res = mysqli_query($con,$q);
//  echo($res);
echo "$res ";
if(mysqli_num_rows($res)>0){
    echo("inside if");
        while ($row=mysqli_fetch_assoc($res)) {
            header('location: index.php');
        }

}
else{
  echo "failed";
}

}
?>

 
        $product_item=array(
            "id" => $id,
            "name" => $name,
            "description" => html_entity_decode($description),
            "price" => $price,
            "category_id" => $category_id,
            "category_name" => $category_name
 

		<!-- <div class="home-page"> -->
 
   <!--  <section class="">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <div class="create-partner-div">
              <div class="row">
                <div class="col-sm-12">
                  <h2 class="text-center heading">Create Distributer</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="create-partner-form">
                    <div class="partner">
                    <div class="partner-heading">
                      <h3 style="color: olivedrab;">Details :</h3>
                    </div>

                  </div>
                    <div class="partner-details">
                        
                      <form method="post" action=" ">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="name">Name:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Name" id="name" name="name">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="guardian">Father/Husband Name:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Father/Husband Name" id="guardian" name="guardian">
                            </div>
                          </div>
                       
                        
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="dob">Date of Birth:</label>
                              <input type="date" class="form-control form-control-sm" placeholder="Enter Name" id="dob" name="dob">
                            </div>
                          </div>


                          <div class="col-sm-4">
                               <div class="form-group">
                              <label for="Email_id">Email Id :</label>
                              <input type="email" class="form-control form-control-sm" placeholder="Enter Email" id="email" name="email">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="contactNo">Contact No. :</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Contact No." id="contactNo" name="contactNo" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" MaxLength="10">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="alternateNo">Alternate Phone No. :</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Alternate No." id="alternateNo" name="alternateNo">
                            </div>
                          </div>                       
                        
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="education">Education :</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Education" id="education" name="education">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="shop">Shop/Establishment Name:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Shop/Establishment Name" id="shop" name="shop">
                            </div>
                          </div>
                        
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="panNumber">Pan Number :</label>
                              <input type="text" class="form-control form-control-sm" MaxLength="10" onkeyup="pan_validate(this.value);" placeholder="Enter Pan Number" id="panNumber" name="panNumber">
                              <span id="panstatus"></span>
                            </div>
                          </div>                          

                          <div class="col-sm-4">
                            <div class="form-group row">
                              
                              <div class="col-sm-12">   
                            <div class="form-check-inline">
                               <label class="form-check-label">
                                  Gender : 
                               </label>
                            </div>
                          </div>
                          <div class="col-sm-6 col-4">
                            <div class="form-check-inline">
                               <label class="form-check-label">
                                  <input type="radio" class="form-check-input cheched" name="gender" value="male"> Male
                               </label>
                            </div>
                          </div>
                          <div class="col-sm-6 col-4">
                            <div class="form-check-inline">
                               <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="gender" value="female"> Female
                               </label>
                            </div>


                         
                          </div>
                          <br> -->
                          
                         <!--    <button type="submit" class="btn btn-primary text-center" name="submit"> Signup</button> -->
                      <!--       </div>
                          </div>
                        </div>
 -->
                   <!--  </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
</div>
 -->

<!-- 
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="partner">  
                            <div class="partner-heading">
                            <h3 style="color: olivedrab;">Address</h3>  
                            </div>
                          </div>
                          </div>                          
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="shopAddess">Office Address:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Office/Shop Address" id="shopAddess" name="OfficeAddess">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="Landmark">Landmark:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Landmark" id="Landmark" name="Landmark">
                            </div>
                            

                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="City">City:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter City" id="City" name="City">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              
                               <label for="Pincode">Pincode:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Pincode" id="Pincode" name="Pincode">

                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                                <label for="District">District:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter District" id="District" name="District"> -->
                                <!--Landmark  City Pincode District state-->
                          <!--    
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="State">State:</label> -->
                              <!--<input type="text" class="form-control form-control-sm" placeholder="Enter State" id="State" name="State">-->
                              
                           <!--      <select name="state" id="state" class="form-control form-control-sm">
                                    <option>Select your state</option>
                             
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">gujrat</option>
                                <option value="Daman and Diu">odisha</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">UP</option>
                                </select>
                            </div>
                          </div>
                        </div> -->
                        
                        <!-- -----Address section end--- -->

<!-- 
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-check-inline py-2">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="" id="sameRes" name="Res">Residence Address same as above
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="residenceAddress">Residence Address:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Residence Address" id="residenceAddress" name="resAdd">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="ResLandmark">Landmark:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Landmark" id="ResLandmark" name="resLandmark">
                            </div>
                            
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="resCity">City:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter City" id="resCity" name="resCity">
                            </div>
                          </div>
                          
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="resPincode">Pincode:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Pincode" id="resPincode" name="resPincode">
                            </div>
                          </div> -->
                          
                            <!--ResLandmark  resCity  resPincode  resDistrict  resState-->
                            
                          
                          
                       <!--    
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="resDistrict">District:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter District" id="resDistrict" name="resDistrict">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="resState">State:</label> -->
                              <!--<input type="text" class="form-control form-control-sm" placeholder="Enter State" id="resState">-->
                            <!--   <select name="resState" id="resState" class="form-control form-control-sm">
                                  <option>Select your state</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option> -->
                 <!--                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">gujrat</option>
                                <option value="Daman and Diu">odisha</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">UP</option>
                            
                                </select>
                            </div>
                          </div>
                          
                        </div>

                        <button type="button" class="btn-primary" name="submit"> Singup</button>




                         </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

</section> -->
<!-- 


  SELECT user_deatails.id,user_deatails.name,user_deatails.father,user_deatails.dob,user_deatails.email,user_deatails.contact,user_deatails.othe_no,user_deatails.education,user_deatails.shop,user_deatails.pan_no,user_deatails.gender,address.office,address.landmark,address.city,address.pincode,address.district,address.state,address.officAdd,address.resLandmark,address.resCity,address.resDistrict,address.resState,account_details.bank_name,account_details.holder_name,account_details.acc_type,account_details.IFSC,account_details.date FROM user_deatails INNER JOIN address ON user_deatails.id=address.id INNER JOIN account_details ON user_deatails.id=account_details.id; 


  
SELECT *
FROM user_deatails
INNER JOIN address
ON user_deatails.id=address.id
INNER JOIN account_details
ON user_deatails.id=account_details.id;

SELECT COLUMNS
FROM 
user_deatails p INNER JOIN address a 
ON p.address = a.id
INNER JOIN account_details ac 
ON p.account_details = ac.id; -->


     // $officeAdd=$_POST['OfficeAddess'];
     // $land=$_POST['Landmark'];
     // $cities=$_POST['City'];
     //  $code=$_POST['Pincode'];
     //   $jila=$_POST['District'];
     //    $raj=$_POST['state'];


     //     $ResofficeAdd=$_POST['resAdd'];
     // $Resland=$_POST['resLandmark'];
     // $Rescities=$_POST['resCity'];
     //  $Rescode=$_POST['resPincode'];
     //   $Resjila=$_POST['resDistrict'];
     //    $Resraj=$_POST['resState'];

     // $sql="INSERT INTO student ( name, email, mobile) VALUES ('$username','$email_id','mobile_n')";

     // $sql= "INSERT INTO details (`name`, `father`, `DOB`, `email`, `contact`, `alter_no`, `education`, `shop`, `pan`, `gender`,  `office`, `landmark`, `city`, `pincode`, `district`, `state`, `residental`, `res_landmark`, `res_city`, `res_pincode`, `res_district`, `res_state`,) VALUES ('$umane','$father','$birth','$emailid','$contact','$other_no','$edu','$shopper','$pan','$gen','$officeAdd','$land','cities','$code','$jila',' $raj','$ResofficeAdd','$Resland','$Rescode','$Rescities','$Resjila',' $Resraj')";


 <!--  SELECT user_deatails.id,user_deatails.name,user_deatails.father,user_deatails.dob,user_deatails.email,user_deatails.contact,user_deatails.othe_no,user_deatails.education,user_deatails.shop,user_deatails.pan_no,user_deatails.gender,address.office,address.landmark,address.city,address.pincode,address.district,address.state,address.officAdd,address.resLandmark,address.resCity,address.resDistrict,address.resState,account_details.bank_name,account_details.holder_name,account_details.acc_type,account_details.IFSC,
  account_details.date,address.pincode,address.district FROM user_deatails 
  INNER JOIN address ON user_deatails.id=address.id 
  INNER JOIN account_details ON user_deatails.id=account_details.id; --> 

     <!doctype>
	<!DOCTYPE html>
	<html>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>create_partner</title>

		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	</head>
    <?php 
    include('connection.php');

   if(isset($_POST['submit'])){

   	$umane=$_POST['name'];
    $father=$_POST['father_n'];
     $birth=$_POST['dob'];
     $emailid=$_POST['email'];
     $contact=$_POST['contactNo'];
     $other_no=$_POST['alternateNo'];
     $edu=$_POST['education'];
     $shopper=$_POST['shop'];
     $pan=$_POST['panNumber'];
     $gen=$_POST['gender'];
 
     $sql= "INSERT INTO user_deatails (`name`, `father`, `dob`, `email`, `contact`, `othe_no`, `education`, `shop`, `pan_no`, `gender`)  VALUES ('$umane','$father','$birth','$emailid','$contact','$other_no','$edu','$shopper','$pan','$gen')";

      $data=mysqli_query($con,$sql);

  
     {
        echo "<script>alert('sigup successfully.....');
                window.location='index.php';
              </script>"; 
     }
 
}
?>

<body>

	 <section class="">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <div class="create-partner-div">
              <div class="row">
                <div class="col-sm-12">
                  <h2 class="text-center heading">Create Distributer</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="create-partner-form">
                    <div class="partner">
                    <div class="partner-heading">
                      <h3 style="color: olivedrab;">Details :</h3>
                    </div>

                  </div>
<div class="partner-details">
                        
                      <form method="post" action="">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="name">Name:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Name" id="name" name="name">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="guardian">Father/Husband Name:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Father/Husband Name" id="guardian" name="father_n">
                            </div>
                          </div>
                       
                        
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="dob">Date of Birth:</label>
                              <input type="date" class="form-control form-control-sm" placeholder="Enter Name" id="dob" name="dob">
                            </div>
                          </div>


                          <div class="col-sm-4">
                               <div class="form-group">
                              <label for="Email_id">Email Id :</label>
                              <input type="email" class="form-control form-control-sm" placeholder="Enter Email" id="email" name="email">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="contactNo">Contact No. :</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Contact No." id="contactNo" name="contactNo" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="alternateNo">Alternate Phone No. :</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Alternate No." id="alternateNo" name="alternateNo">
                            </div>
                          </div>                       
                        
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="education">Education :</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Education" id="education" name="education">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="shop">Shop/Establishment Name:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Shop/Establishment Name" id="shop" name="shop">
                            </div>
                          </div>
                        
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="panNumber">Pan Number :</label>
                              <input type="text" class="form-control form-control-sm" maxlength="10" onkeyup="pan_validate(this.value);" placeholder="Enter Pan Number" id="panNumber" name="panNumber">
                              <span id="panstatus"></span>
                            </div>
                          </div>                          

                          <div class="col-sm-4">
                            <div class="form-group row">
                              
                              <div class="col-sm-12">   
                            <div class="form-check-inline">
                               <label class="form-check-label">
                                  Gender : 
                               </label>
                            </div>
                          </div>
                          <div class="col-sm-6 col-4">
                            <div class="form-check-inline">
                               <label class="form-check-label">
                                  <input type="radio" class="form-check-input cheched" name="gender" value="male"> Male
                               </label>
                            </div>
                          </div>
                          <div class="col-sm-6 col-4">
                            <div class="form-check-inline">
                               <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="gender" value="female"> Female
                               </label>
                            </div>
                          </div>
                            </div>
                          </div>
                        </div>
   <div class="submit-div d-flex justify-content-around mt-5">
                              <button type="submit" class="btn btn-success" name="submit">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>




 <?php

 include('connection.php');

         
 
 // $con=mysqli_connect('localhost','root','','create_partner') 
 // or die('mysql not connected');

 // $data=json_decode(file_get_contents("php://input"),true);
 

 //       $banks=$_data['Bank'];
 //       $PersNames=$_data['PersName'];
 //       $type=$_data['AccountType'];
 //       $A_No=$_data['AccountNo'];
 //        $ifsc_code=$_data['ifsc'];

if(!isset($submit)){
    if(isset($_POST['bank_name']) && (isset($_POST['holder_name']) && (isset($_POST['acc_type']) &&(isset($_POST['acc_no'])&& (isset($_POST['IFSC'])){

        $banks=mysql_real_escape_string($con,$_POST['Bank']);
         $PersNames=mysql_real_escape_string($con,$_POST['PersName']);
          $type=mysql_real_escape_string($con,$_POST['AccountType']);
           $A_No=mysql_real_escape_string($con,$_POST['AccountNo']);
            $ifsc_code=mysql_real_escape_string($con,$_POST['ifsc']);



//     }


// }



      $sql3="INSERT INTO account_details (`bank_name`, `holder_name`, `acc_type`, `acc_no`, `IFSC`) VALUES (' $banks','$PersNames','$type','$A_No',' $ifsc_code')";

      $data3=mysqli_query($con,$sql3);

      echo $data3;

      if($data3) 

      
            {
                $arr=['msg'=>'Record insert sucess','status'=>100];

               echo  json_encode($arr);
    
            }


            else{
               $arr=['msg'=>'Record not insert ','status'=>100];

               echo  json_encode($arr);
            }

}
}
    
      
 


?>


     // echo "<br>";
     //     echo $sql4;
     //      echo "<br>";
     //     $data4=mysqli_query($con,$sql4);


     //        print_r($data4);
        
         
            // die();
              // echo "<br>";

 
      if($data4==true)
      {  
       echo "insert successfully";
              
        header('location:insert_showapi.php');

        // header('location:index.php?id='$id.'name='.$name.'acc_type='.$type.);
 
     }
     else {    
       echo "create user Failed";
       } 

   }
}
 
 

  ?>




 