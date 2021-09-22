<div class="row mx-auto mb-3"><img src='images/computer_doctor.gif' alt='Doctor Diagnosis' width='200' /></div>
<div class="row">
  <div class="col-8 mb-2 mx-auto">    
    <div class="card shadow mx-3 border-dark">

        <div class="card-header text-center border-dark py-3">
         	 <h6 class="m-0 font-weight-bold text-primary">Questions</h6>
        </div> 
        <div class="card-body">
	        <form action="https://localhost/pcdoc/default.php?pid=procfailclips" method="POST" class="user">
		        <!-- Check Upgrade -->
		            <div class="form-group mx-auto">
		                <label>Have you recently assembled this P.C. or performed an upgrade to it ?</label>
		                <div class="form-check">
		                  <input class="form-check-input" type="radio" name="chk[upgraded]" id="chkUpgrade1" value="Yes">
		                  <label class="form-check-label" for="chkUpgrade1">
		                  Yes
		                  </label>
		                </div>
		                <div class="form-check">
		                  <input class="form-check-input" type="radio" name="chk[upgraded]" id="chkUpgrade2" value="No">
		                  <label class="form-check-label" for="chkUpgrade2">
		                  No
		                  </label>
		                </div>          
		            </div>
		        <!-- Check Extra -->
		            <div class="form-group mx-auto">
		                <label>Do you have another processor available for a quick test ?</label>
		                <div class="form-check">
		                  <input class="form-check-input" type="radio" name="chk[extraproc]" id="chkExtra1" value="Yes">
		                  <label class="form-check-label" for="chkExtra1">
		                  Yes
		                  </label>
		                </div>
		                <div class="form-check">
		                  <input class="form-check-input" type="radio" name="chk[extraproc]" id="chkExtra2" value="No">
		                  <label class="form-check-label" for="chkExtra2">
		                  No
		                  </label>
		                </div>          
		            </div>
		        <!-- Check Insert -->
		            <div class="form-group mx-auto">
		                <label>Is the processor inserted improperly ?</label>
		                <div class="form-check">
		                  <input class="form-check-input" type="radio" name="chk[insimproprly]" id="chkInsert1" value="Yes">
		                  <label class="form-check-label" for="chkInsert1">
		                  Yes
		                  </label>
		                </div>
		                <div class="form-check">
		                  <input class="form-check-input" type="radio" name="chk[insimproprly]" id="chkInsert2" value="No">
		                  <label class="form-check-label" for="chkInsert2">
		                  No
		                  </label>
		                </div>          
		            </div>
		        <!-- Check Bios -->
		            <div class="form-group mx-auto">
		                <label>Is the BIOS settings correct ?</label>
		                <div class="form-check">
		                  <input class="form-check-input" type="radio" name="chk[bios]" id="chkBios1" value="Yes">
		                  <label class="form-check-label" for="chkBios1">
		                  Yes
		                  </label>
		                </div>
		                <div class="form-check">
		                  <input class="form-check-input" type="radio" name="chk[bios]" id="chkBios2" value="No">
		                  <label class="form-check-label" for="chkBios2">
		                  No
		                  </label>
		                </div>          
		            </div>
		        <!-- Check Volt -->
		            <div class="form-group mx-auto">
		                <label>Is the processor receiving the correct voltage ?</label>
		                <div class="form-check">
		                  <input class="form-check-input" type="radio" name="chk[voltage]" id="chkVolt1" value="Yes">
		                  <label class="form-check-label" for="chkVolt1">
		                  Yes
		                  </label>
		                </div>
		                <div class="form-check">
		                  <input class="form-check-input" type="radio" name="chk[voltage]" id="chkVolt2" value="No">
		                  <label class="form-check-label" for="chkVolt2">
		                  No
		                  </label>
		                </div>          
		            </div>
		        <!-- Check Support -->
		            <div class="form-group mx-auto">
		                <label>Is the processor supported by this motherboard ?</label>
		                <div class="form-check">
		                  <input class="form-check-input" type="radio" name="chk[incompatible]" id="chkSupport1" value="Yes">
		                  <label class="form-check-label" for="chkSupport1">
		                  Yes
		                  </label>
		                </div>
		                <div class="form-check">
		                  <input class="form-check-input" type="radio" name="chk[incompatible]" id="chkSupport2" value="No">
		                  <label class="form-check-label" for="chkSupport2">
		                  No
		                  </label>
		                </div>
		              </div>
		        <!-- Check SecCache -->
		            <div class="form-group mx-auto">
		                <label>Try disabling the secondary cache in the BIOS setup. Does this work ?</label>
		                <div class="form-check">
		                  <input class="form-check-input" type="radio" name="chk[seccache]" id="chkSecCache1" value="Yes">
		                  <label class="form-check-label" for="chkSecCache1">
		                  Yes
		                  </label>
		                </div>
		                <div class="form-check">
		                  <input class="form-check-input" type="radio" name="chk[seccache]" id="chkSecCache2" value="No">
		                  <label class="form-check-label" for="chkSecCache2">
		                  No
		                  </label>
		                </div>          
		            </div>
		        <input type="hidden" name="source" value="proc01">
		        <!-- Submit -->
		            <div class="form-group row">
		              <button type="submit"  class="btn btn-success btn-user float-right">Submit
		              </button>
		            </div>
	        </form>
        </div>
    </div>
  </div>
</div>
