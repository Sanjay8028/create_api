 
 
<br>

 
                           <h3 style="color:rebeccapurple;">Bank Account Details</h3> 
                      <form method="post" action="bank_test.php">
                            <div class="form-group">
                              <label for="Bank">Bank Name:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter Bank Name" id="Bank" name="Bank">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="persName">A/C Holder Name:</label>
                              <input type="text" class="form-control form-control-sm" placeholder="Enter A/C Holder Name" id="persName" name="PersName">
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
                              <input type="text" class="form-control form-control-sm" placeholder="Enter A/C No." id="AccountNo" name="AccountNo" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" minlength="10" maxlength="16">
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
                              <button type="submit" class="btn btn-success" name="bank1">Sign Up</button>
                            </div>
                          </div>
                        </div>
                        
                      </form>
                    </div> 
                  </form>


  
</div> 