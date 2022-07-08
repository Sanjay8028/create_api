
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<style> 
  .heading{
    border-bottom: ;
    padding: 2px;
    border-bottom: 2px solid;
    background-color: lightgray;
    border-radius: 25px;
    box-shadow: rgb(255, 233, 12);
    
     /*border-left: 50%;*/
  }
</style>
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

     // Address table


     $officeAdd=$_POST['shopAddess'];
     $land=$_POST['Landmark'];
     $cities=$_POST['City'];
      $code=$_POST['Pincode'];
       $jila=$_POST['District'];
        $raj=$_POST['state'];
        // same address
         $ResofficeAdd=$_POST['residenceAddress'];
     $Resland=$_POST['ResLandmark'];
     $Rescities=$_POST['resCity'];
      $Rescode=$_POST['resPincode'];
       $Resjila=$_POST['resDistrict'];
        $Resraj=$_POST['resState'];

// band details

         $banks=$_POST['Bank'];
     $PersNames=$_POST['PersName'];
      $type=$_POST['AccountType'];
       $A_No=$_POST['AccountNo'];
        $ifsc_code=$_POST['ifsc'];




       

 
     $sql= "INSERT INTO user_deatails (`name`, `father`, `dob`, `email`, `contact`, `othe_no`, `education`, `shop`, `pan_no`, `gender`)  VALUES ('$umane','$father','$birth','$emailid','$contact','$other_no','$edu','$shopper','$pan','$gen')";

      $data=mysqli_query($con,$sql);

        // print_r($data);

       $sql2= "INSERT INTO address(`office`, `landmark`, `city`, `pincode`, `district`, `state`, `officAdd`, `resLandmark`, `resCity`, `resPincode`, `resDistrict`, `resState`) VALUES ('$officeAdd','$land','$cities','$code','$jila','$raj','$ResofficeAdd','$Resland','$Rescities','$Rescode','$Resjila','$Resraj')";
       // echo $sql2;
       
       // echo $sql;

      $data2=mysqli_query($con,$sql2);

        $sql3="INSERT INTO account_details(`bank_name`, `holder_name`, `acc_type`, `acc_no`, `IFSC`) VALUES (' $banks','$PersNames','$type','$A_No',' $ifsc_code')";

         $data3=mysqli_query($con,$sql3);
 
     
      if($data==true && $data2==true && $data==true)
      {
        echo "<script>alert('sigup successfully.....');
                 window.location='index.php';
              </script>"; 

              // print_r($data);

     }
     else {    
       echo "create user Failed";
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

                  <h2 class="text-center heading" style="color: rebeccapurple;">Create Distributer</h2>
                  <!-- <hr style="color:red;"> -->
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="create-partner-form">
                    <div class="partner">
                    <div class="partner-heading">
                      <h3 style="color: rebeccapurple;">Details :</h3>
                    </div>

                  </div>
<div class="partner-details">
                        
                      <form method="post" id="myform" action="insert_api.php">

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
  <!--  <div class="submit-div d-flex justify-content-around mt-5">
                              <button type="submit" class="btn btn-success" name="submit">Sign Up</button>
                            </div>
                        </form>
                    </div> -->
                </div>
                        <!-- -----Address section start--- -->
                       
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="partner">  
                            <div class="partner-heading">
                           <h3 style="color:rebeccapurple">  Address</h3> 
                            </div>
                          </div>
                          </div>                          
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="shopAddess">Office/Shop Address:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Office/Shop Address" id="shopAddess" name="shopAddess">
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
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Pincode" id="Pincode" name="Pincode" onkeyup="getpincode();">

                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                                <label for="District">District:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter District" id="District" name="District">
                                <!--Landmark  City Pincode District state-->
                             
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="State">State:</label>
                              <!--<input type="text" class="form-control form-control-sm" placeholder="Enter State" id="State" name="State">-->
                              
                                <select name="state" id="state" class="form-control form-control-sm">
                                    <option>Select your state</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                              
                                </select>
                            </div>
                          </div>
                        </div>
                        
                        <!-- -----Address section end--- -->


                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-check-inline py-2">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="" id="sameRes" name="sameRes">Residence Address same as above
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="residenceAddress">Residence Address:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Residence Address" id="residenceAddress" name="residenceAddress">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="ResLandmark">Landmark:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Landmark" id="ResLandmark" name="ResLandmark">
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
                          </div>
                          
                            <!--ResLandmark  resCity  resPincode  resDistrict  resState-->
                            
                          
                      
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
                              <select name="resState" id="resState" class="form-control form-control-sm">
                                  <option>Select your state</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                
                                </select>
                            </div>
                          </div>
                          
                        </div>
                       
                     <!-- KYC Document Upload start -->
                        
                       

                        <!--  KYC Document Upload end -->
                        
                        
                      
                      
                        <!--  Bank Account Details start -->    
 
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="partner">
                            <div class="partner-heading">
                           <h3 style="color:rebeccapurple;">Bank Account Details</h3> 
                            </div>
                          </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="Bank">Bank Name:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Bank Name" id="Bank" name="Bank"required>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="persName">A/C Holder Name:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter A/C Holder Name" id="persName" name="PersName" required>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="AccountType">A/C Type:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter A/C Type" id="AccountType" name="AccountType">
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="AccountNo">A/C No. :</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter A/C No." id="AccountNo" name="AccountNo">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="ifsc">IFSC Code :</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter IFSC Code" id="ifsc" name="ifsc">
                            </div>
                        </div>
                          </div>



                        <div class="row">
                          <div class="col-sm-12">
                            <div class="d-flex justify-content-around mt-4">
                              <button type="submit" class="btn btn-success" name="submit">Sign Up</button>
                            </div>
                          </div>
                        </div>
                        
                      </form>
                    </div> 


  
</div> 

<script>
  $(document).ready(function() {
  // loader (after submit)
  $('button[type="submit"]').click(function(e) {
    let formValidity = $('#myform')[0].checkValidity();
    if (formValidity) {
      console.log('Submitted yep!');
    }
  });
});
</script>
	
	</body>
	</html>