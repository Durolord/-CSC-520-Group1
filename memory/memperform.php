
<div class="row mx-auto mb-3"><img src='images/computer_doctor.gif' alt='Doctor Diagnosis' width='200' /></div>
<div class="row">
  <div class="col-8 mb-2 mx-auto">    
    <div class="card shadow mx-3 border-dark">

        <div class="card-header text-center border-dark py-3">
          <h6 class="m-0 font-weight-bold text-primary">Questions</h6>
        </div>
      
        <div class="card-body">
        <form action="https://localhost/pcdoc/default.php?pid=memfailclips" method="POST" class="user">
		      <!-- Check No Improvement -->
					<div class="form-group mx-auto">
					    <label>Have you installed additional memory, and seen no improvement in performance ?</label>
					    <div class="form-check">
					      <input class="form-check-input" type="radio" name="chk[noimprov]" id="chkNoImp1" value="Yes">
					      <label class="form-check-label" for="chkNoImp1">
					      Yes
					      </label>
					    </div>
					    <div class="form-check">
					      <input class="form-check-input" type="radio" name="chk[noimprov]" id="chkNoImp2" value="No">
					      <label class="form-check-label" for="chkNoImp2">
					      No
					      </label>
					    </div>          
					</div>
		      <!-- Check Worse -->
					<div class="form-group mx-auto">
					    <label>Have you installed additional memory, and the performance got worse ?</label>
					    <div class="form-check">
					      <input class="form-check-input" type="radio" name="chk[worse]" id="chkWorse1" value="Yes">
					      <label class="form-check-label" for="chkWorse1">
					      Yes
					      </label>
					    </div>
					    <div class="form-check">
					      <input class="form-check-input" type="radio" name="chk[worse]" id="chkWorse2" value="No">
					      <label class="form-check-label" for="chkWorse2">
					      No
					      </label>
					    </div>          
					</div>
		      <!-- Check CertAmt -->
					<div class="form-group mx-auto">
					    <label>Have you installed enough memory to take you over a certain amount (say from 256MB to 400MB) ?</label>
					    <div class="form-check">
					      <input class="form-check-input" type="radio" name="chk[more256]" id="chkCertAmt1" value="Yes">
					      <label class="form-check-label" for="chkCertAmt1">
					      Yes
					      </label>
					    </div>
					    <div class="form-check">
					      <input class="form-check-input" type="radio" name="chk[more256]" id="chkCertAmt2" value="No">
					      <label class="form-check-label" for="chkCertAmt2">
					      No
					      </label>
					    </div>          
					</div>
		      <!-- Check Slow -->
					<div class="form-group mx-auto">
					    <label>Is the additional memory slower in speed or uses a slower technology ?</label>
					    <div class="form-check">
					      <input class="form-check-input" type="radio" name="chk[slow]" id="chkSlow1" value="Yes">
					      <label class="form-check-label" for="chkSlow1">
					      Yes
					      </label>
					    </div>
					    <div class="form-check">
					      <input class="form-check-input" type="radio" name="chk[slow]" id="chkSlow2" value="No">
					      <label class="form-check-label" for="chkSlow2">
					      No
					      </label>
					    </div>          
					</div>
		      <!-- Check 430hx -->
			        <div class="form-group mx-auto">
			            <label>Are you using an Intel Triton II 430HX motherboard, and your PC still slows down with more than 64 MB RAM ?</label>
			            <div class="form-check">
			              <input class="form-check-input" type="radio" name="chk[hx]" id="chk430hx1" value="Yes">
			              <label class="form-check-label" for="chk430hx1">
			              Yes
			              </label>
			            </div>
			            <div class="form-check">
			              <input class="form-check-input" type="radio" name="chk[hx]" id="chk430hx2" value="No">
			              <label class="form-check-label" for="chk430hx2">
			              No
			              </label>
			            </div>          
			        </div>
          	  <input type="hidden" name="source" value="mem05">
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


