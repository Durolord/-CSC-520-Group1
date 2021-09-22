
<div class="row mx-auto mb-3"><img src='images/computer_doctor.gif' alt='Doctor Diagnosis' width='200' /></div>
<div class="row">
	<div class="col-8 mb-2 mx-auto">    
	  <div class="card shadow mx-3 border-dark">

	      <div class="card-header text-center border-dark py-3">
	        <h6 class="m-0 font-weight-bold text-primary">Questions</h6>
	      </div>
	    
	      <div class="card-body">
	      <form action="https://localhost/pcdoc/default.php?pid=memfailclips" method="POST" class="user">
	        <!-- Check Run Progess -->
	          <div class="form-group mx-auto">
	                <label>Are you trying to run a program that only needs a few kilobytes to load, and you know you have enough memory, yet you are getting Out of Memory errors ?</label>
	                <div class="form-check">
	                  <input class="form-check-input" type="radio" name="chk[runprog]" id="chkrunprog1" value="Yes">
	                  <label class="form-check-label" for="chkrunprog1">
	                    Yes
	                  </label>
	                </div>
	                <div class="form-check">
	                  <input class="form-check-input" type="radio" name="chk[runprog]" id="chkrunprog2" value="No">
	                  <label class="form-check-label" for="chkrunprog2">
	                    No
	                  </label>
	                </div>          
	          </div>
			<!-- Check Out Mem -->
				<div class="form-group mx-auto">
				      <label>Are you running Windows, and getting "Out of Memory" errors, yet when you check the Program Manager, it says you have several megabytes free ?</label>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[win]" id="chkwin1" value="Yes">
				        <label class="form-check-label" for="chkwin1">
				          Yes
				        </label>
				      </div>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[win]" id="chkwin2" value="No">
				        <label class="form-check-label" for="chkwin2">
				          No
				        </label>
				      </div>          
				</div>

		        <input type="hidden" name="source" value="mem04">
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


