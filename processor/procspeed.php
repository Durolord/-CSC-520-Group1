<div class="row mx-auto mb-3"><img src='images/computer_doctor.gif' alt='Doctor Diagnosis' width='200' /></div>
<div class="row">
  <div class="col-8 mb-2 mx-auto">    
    <div class="card shadow mx-3 border-dark">

        <div class="card-header text-center border-dark py-3">
          <h6 class="m-0 font-weight-bold text-primary">Questions</h6>
        </div>
      
        <div class="card-body">
        <form action="https://localhost/pcdoc/default.php?pid=procfailclips" method="POST" class="user">
        <!-- Check Led -->
            <div class="form-group mx-auto">
                <label>In considering the speed, are you referring to the LED readout on the case ?</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[led]" id="chkLed1" value="Yes">
                  <label class="form-check-label" for="chkLed1">
                  Yes
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[led]" id="chkLed2" value="No">
                  <label class="form-check-label" for="chkLed2">
                  No
                  </label>
                </div>          
            </div>
        <!-- Check RecBuy -->
            <div class="form-group mx-auto">
                <label>Was this system recently purchased ?</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[recbuy]" id="chkRecBuy1" value="Yes">
                  <label class="form-check-label" for="chkRecBuy1">
                  Yes
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[recbuy]" id="chkRecBuy2" value="No">
                  <label class="form-check-label" for="chkRecBuy2">
                  No
                  </label>
                </div>          
            </div>
        <!-- Check Slight -->
            <div class="form-group mx-auto">
                <label>Is the reported speed of the processor just off slightly (say a 2GHZ reported as 1.8GHZ) ?</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[offslightly]" id="chkSlight1" value="Yes">
                  <label class="form-check-label" for="chkSlight1">
                  Yes
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[offslightly]" id="chkSlight2" value="No">
                  <label class="form-check-label" for="chkSlight2">
                  No
                  </label>
                </div>          
            </div>
        <!-- Check NewChip -->
            <div class="form-group mx-auto">
                <label>Are you using a newer chip ?</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[newchip]" id="chkNewChip1" value="Yes">
                  <label class="form-check-label" for="chkNewChip1">
                  Yes
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="chk[newchip]" id="chkNewChip2" value="No">
                  <label class="form-check-label" for="chkNewChip2">
                  No
                  </label>
                </div>          
            </div>
        <input type="hidden" name="source" value="proc04">
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