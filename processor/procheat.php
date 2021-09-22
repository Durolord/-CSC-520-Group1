<div class="row mx-auto mb-3"><img src='images/computer_doctor.gif' alt='Doctor Diagnosis' width='200' /></div>
<div class="row">
  <div class="col-8 mb-2 mx-auto">    
    <div class="card shadow mx-3 border-dark">

        <div class="card-header text-center border-dark py-3">
          <h6 class="m-0 font-weight-bold text-primary">Questions</h6>
        </div>
      
        <div class="card-body">
        <form action="https://localhost/pcdoc/default.php?pid=procfailclips" method="POST" class="user">
        <!-- Check Comp -->
            <div class="form-group mx-auto">
                <label>Do you have heat sink compound between the processor and heat sink ?</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[nocompound]" id="chkComp1" value="Yes">
                  <label class="form-check-label" for="chkComp1">
                  Yes
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[nocompound]" id="chkComp2" value="No">
                  <label class="form-check-label" for="chkComp2">
                  No
                  </label>
                </div>          
            </div>
        <!-- Check Fan -->
            <div class="form-group mx-auto">
                <label>Is the CPU fan dirty, looking worn or close to failure ?</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[fanworn]" id="chkFan1" value="Yes">
                  <label class="form-check-label" for="chkFan1">
                  Yes
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[fanworn]" id="chkFan2" value="No">
                  <label class="form-check-label" for="chkFan2">
                  No
                  </label>
                </div>          
            </div>

        <input type="hidden" name="source" value="proc05">
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
