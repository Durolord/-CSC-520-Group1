<div class="row mx-auto mb-3"><img src='images/computer_doctor.gif' alt='Doctor Diagnosis' width='200' /></div>
<div class="row">
	<div class="col-8 mb-2 mx-auto">    
	  <div class="card shadow mx-3 border-dark">

	      <div class="card-header text-center border-dark py-3">
	        <h6 class="m-0 font-weight-bold text-primary">Questions</h6>
	      </div>
	    
	      <div class="card-body">
	      <form action="https://localhost/pcdoc/default.php?pid=memfailclips" method="POST" class="user">
	        <!-- Check Boot -->
	          <div class="form-group mx-auto">
	                <label>When the system boots up, does it report either 128 KB or 384 KB less memory than is in the system ?</label>
	                <div class="form-check">
	                  <input class="form-check-input" type="radio" name="chk[bootup]" id="chkbootup1" value="Yes">
	                  <label class="form-check-label" for="chkbootup1">
	                    Yes
	                  </label>
	                </div>
	                <div class="form-check">
	                  <input class="form-check-input" type="radio" name="chk[bootup]" id="chkbootup2" value="No">
	                  <label class="form-check-label" for="chkbootup2">
	                    No
	                  </label>
	                </div>          
	          </div>
	        <!-- Not Recodnized -->
	          <div class="form-group mx-auto">
	                <label>Are you noticing that not all of the memory you've installed is recognized ?</label>
	                <div class="form-check">
	                  <input class="form-check-input" type="radio" name="chk[notallrec]" id="chknotallrec1" value="Yes">
	                  <label class="form-check-label" for="chknotallrec1">
	                    Yes
	                  </label>
	                </div>
	                <div class="form-check">
	                  <input class="form-check-input" type="radio" name="chk[notallrec]" id="chknotallrec2" value="No">
	                  <label class="form-check-label" for="chknotallrec2">
	                    No
	                  </label>
	                </div>          
	          </div>
	        <input type="hidden" name="source" value="mem03">
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






