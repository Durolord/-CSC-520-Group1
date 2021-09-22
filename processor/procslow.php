<div class="row mx-auto mb-3"><img src='images/computer_doctor.gif' alt='Doctor Diagnosis' width='200' /></div>
<div class="row">
  <div class="col-8 mb-2 mx-auto">    
    <div class="card shadow mx-3 border-dark">

        <div class="card-header text-center border-dark py-3">
          <h6 class="m-0 font-weight-bold text-primary">Questions</h6>
        </div>
      
        <div class="card-body">
        <form action="https://localhost/pcdoc/default.php?pid=procfailclips" method="POST" class="user">
	      <!-- Check Mem -->
		        <div class="form-group mx-auto">
		            <label>Have you recently added more memory to the system ?</label>
		            <div class="form-check">
		              <input class="form-check-input" type="radio" name="chk[memory]" id="chkMem1" value="Yes">
		              <label class="form-check-label" for="chkMem1">
		              Yes
		              </label>
		            </div>
		            <div class="form-check">
		              <input class="form-check-input" type="radio" name="chk[memory]" id="chkMem2" value="No">
		              <label class="form-check-label" for="chkMem2">
		              No
		              </label>
		            </div>          
		        </div>
	      <!-- Check Flicker -->
		        <div class="form-group mx-auto">
		            <label>Do you notice the hard disk light flickering when you load a lot of programs or does it say memory is low ?</label>
		            <div class="form-check">
		              <input class="form-check-input" type="radio" name="chk[lblink]" id="chkLflick1" value="Yes">
		              <label class="form-check-label" for="chkLflick1">
		              Yes
		              </label>
		            </div>
		            <div class="form-check">
		              <input class="form-check-input" type="radio" name="chk[lblink]" id="chkLflick2" value="No">
		              <label class="form-check-label" for="chkLflick2">
		              No
		              </label>
		            </div>          
		        </div>
          <input type="hidden" name="source" value="proc03">
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