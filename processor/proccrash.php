<div class="row mx-auto mb-3"><img src='images/computer_doctor.gif' alt='Doctor Diagnosis' width='200' /></div>
<div class="row">
  <div class="col-8 mb-2 mx-auto">    
    <div class="card shadow mx-3 border-dark">

        <div class="card-header text-center border-dark py-3">
          <h6 class="m-0 font-weight-bold text-primary">Questions</h6>
        </div>
      
        <div class="card-body">
        <form action="https://localhost/pcdoc/default.php?pid=procfailclips" method="POST" class="user">
        <!-- Check Error Message -->
            <div class="form-group mx-auto">
                <label>Are you getting error messages when the problem occurs?</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[errmessages]" id="chkErrMes1" value="Yes">
                  <label class="form-check-label" for="chkErrMes1">
                  Yes
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[errmessages]" id="chkErrMes2" value="No">
                  <label class="form-check-label" for="chkErrMes2">
                  No
                  </label>
                </div>          
            </div>
        <!-- Check Program -->
            <div class="form-group mx-auto">
                <label>Are you experiencing the problem only when running a specific program ?</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[appfail]" id="chkProgram1" value="Yes">
                  <label class="form-check-label" for="chkProgram1">
                  Yes
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[appfail]" id="chkProgram2" value="No">
                  <label class="form-check-label" for="chkProgram2">
                  No
                  </label>
                </div>          
            </div>
        <!-- Check Periph -->
            <div class="form-group mx-auto">
                <label>Does it only occur when using a particular peripheral ?</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[perproblem]" id="chkPeriph1" value="Yes">
                  <label class="form-check-label" for="chkPeriph1">
                  Yes
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[perproblem]" id="chkPeriph2" value="No">
                  <label class="form-check-label" for="chkPeriph2">
                  No
                  </label>
                </div>          
            </div>
        <!-- Check System warm -->
            <div class="form-group mx-auto">
                <label>Do you experience the problem only when the system is warmed up or only when the room is hot ?</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[overheating]" id="chkSysWarm1" value="Yes">
                  <label class="form-check-label" for="chkSysWarm1">
                  Yes
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[overheating]" id="chkSysWarm2" value="No">
                  <label class="form-check-label" for="chkSysWarm2">
                  No
                  </label>
                </div>          
            </div>
        <!-- Check VCard -->
            <div class="form-group mx-auto">
                <label>Are you running a VESA local bus video card on a motherboard that supports both VESA and PCI ?</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[vesa]" id="chkvesa1" value="Yes">
                  <label class="form-check-label" for="chkvesa1">
                  Yes
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[vesa]" id="chkvesa2" value="No">
                  <label class="form-check-label" for="chkvesa2">
                  No
                  </label>
                </div>          
            </div>
        <!-- Check Lean -->
            <div class="form-group mx-auto">
                <label>Does the problem occur only when you lean on the system box ?</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[lean]" id="chkLean1" value="Yes">
                  <label class="form-check-label" for="chkLean1">
                  Yes
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[lean]" id="chkLean2" value="No">
                  <label class="form-check-label" for="chkLean2">
                  No
                  </label>
                </div>          
            </div>
        <!-- Check Bios -->
            <div class="form-group mx-auto">
                <label>Have you changed the BIOS settings recently ?</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[nBios]" id="chkBios1" value="Yes">
                  <label class="form-check-label" for="chkBios1">
                  Yes
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[nBios]" id="chkBios2" value="No">
                  <label class="form-check-label" for="chkBios2">
                  No
                  </label>
                </div>          
            </div>

        <input type="hidden" name="source" value="proc02">
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
