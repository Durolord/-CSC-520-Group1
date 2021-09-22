<div class="row mx-auto mb-3"><img src='images/computer_doctor.gif' alt='Doctor Diagnosis' width='200' /></div>
<div class="row">
  <div class="col-8 mb-2 mx-auto">    
    <div class="card shadow mx-3 border-dark">

        <div class="card-header text-center border-dark py-3">
          <h6 class="m-0 font-weight-bold text-primary">Questions</h6>
        </div>
      
        <div class="card-body">
        <form action="https://localhost/pcdoc/default.php?pid=memfailclips" method="POST" class="user">
			<!-- Check Boot Error -->
				<div class="form-group mx-auto">
						<label>Are you getting parity errors booting up ?</label>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="chk[errboot]" id="chkErrBoot1" value="Yes">
							<label class="form-check-label" for="chkErrBoot1">
							Yes
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="chk[errboot]" id="chkErrBoot2" value="No">
							<label class="form-check-label" for="chkErrBoot2">
							No
							</label>
						</div>          
				</div>
      <!-- Check Bios Boot Error -->
        <div class="form-group mx-auto">
            <label>Are you getting parity errors when the BIOS tries to boot, or consistently failing at memory address "0000" ?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="chk[errbios]" id="chkBiosBoot1" value="Yes">
              <label class="form-check-label" for="chkBiosBoot1">
              Yes
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="chk[errbios]" id="chkBiosBoot2" value="No">
              <label class="form-check-label" for="chkBiosBoot2">
              No
              </label>
            </div>          
        </div>
 	    <!-- Check ITS Error -->
        <div class="form-group mx-auto">
            <label>Are you using an Abit IT5H motherboard ?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="chk[it5h]" id="chkIT5H1" value="Yes">
              <label class="form-check-label" for="chkIT5H1">
              Yes
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="chk[it5h]" id="chkIT5H2" value="No">
              <label class="form-check-label" for="chkIT5H2">
              No
              </label>
            </div>          
        </div>
      <!-- Check ECC Error -->
        <div class="form-group mx-auto">
            <label>Are you using a motherboard that supports both parity and ECC, and you are running with ECC enabled ?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="chk[ecc]" id="chkECC1" value="Yes">
              <label class="form-check-label" for="chkECC1">
              Yes
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="chk[ecc]" id="chkECC2" value="No">
              <label class="form-check-label" for="chkECC2">
              No
              </label>
            </div>          
        </div>
      <!-- Check Add Same Error -->
        <div class="form-group mx-auto">
            <label>Does the parity error occur at the same address each time it is encountered ?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="chk[erraddr]" id="chkAddSame1" value="Yes">
              <label class="form-check-label" for="chkAddSame1">
              Yes
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="chk[erraddr]" id="chkAddSame2" value="No">
              <label class="form-check-label" for="chkAddSame2">
              No
              </label>
            </div>          
        </div>
      <!-- Check New Hardware Error -->
        <div class="form-group mx-auto">
            <label>Have you just added new hardware to the system ?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="chk[addnewhd]" id="chkAddHd1" value="Yes">
              <label class="form-check-label" for="chkAddHd1">
              Yes
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="chk[addnewhd]" id="chkAddHd2" value="No">
              <label class="form-check-label" for="chkAddHd2">
              No
              </label>
            </div>          
        </div>
      <!-- Check Parity diasbled Error -->
        <div class="form-group mx-auto">
            <label>Are you running with parity checking disabled ?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="chk[paritydisabled]" id="chkParDis1" value="Yes">
              <label class="form-check-label" for="chkParDis1">
              Yes
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="chk[paritydisabled]" id="chkParDis2" value="No">
              <label class="form-check-label" for="chkParDis2">
              No
              </label>
            </div>          
        </div>
			<!-- Submit -->
				<div class="form-group row">
					<button type="submit"  class="btn btn-success btn-user float-right">Submit
					</button>
				</div>
			<input type="hidden" name="source" value="mem02">
        </form>
        </div>
    </div>
  </div>
</div>

