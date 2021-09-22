<div class="row">
<div class="col-8 mb-2 mx-auto">		
  <div class="card shadow mx-3 border-dark">

		  <div class="card-header text-center border-dark py-3">
		    <h6 class="m-0 font-weight-bold text-primary">Questions</h6>
		  </div>
    
	    <div class="card-body">
			<form action="https://localhost/pcdoc/default.php?pid=memfailclips" method="POST" class="user">
				<!-- Duplicate -->
				  <div class="form-group mx-auto">
				      <label>Do you have a duplicate set of Memory Modules ?</label>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[dupmem]" id="chkDuplicate1" value="Yes">
				        <label class="form-check-label" for="chkDuplicate1">
				          Yes
				        </label>
				      </div>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[dupmem]" id="chkDuplicate2" value="No">
				        <label class="form-check-label" for="chkDuplicate2">
				          No
				        </label>
				      </div>          
				  </div>
				<!-- OS Check -->
				    <div class="form-group mx-auto">
				        <label>Have you just installed a new 32-bit Operating System, and before you were using DOS ?</label>
				        <div class="form-check">
				          <input class="form-check-input" type="radio" name="chk[os]" id="chkOpSys1" value="Yes">
				          <label class="form-check-label" for="chkOpSys1">
				            Yes
				          </label>
				        </div>
				        <div class="form-check">
				          <input class="form-check-input" type="radio" name="chk[os]" id="chkOpSys2" value="No">
				          <label class="form-check-label" for="chkOpSys2">
				            No
				          </label>
				        </div>          
				    </div>
				<!-- Dusty Check -->
					<div class="form-group mx-auto">
					<label>Is the memory used, or the motherboard old and dusty</label>
					<div class="form-check">
					<input class="form-check-input" type="radio" name="chk[dust]" id="chkDusty1" value="Yes">
					<label class="form-check-label" for="chkDusty1">
					Yes
					</label>
					</div>
					<div class="form-check">
					<input class="form-check-input" type="radio" name="chk[dust]" id="chkDusty2" value="No">
					<label class="form-check-label" for="chkDusty2">
					No
					</label>
					</div>          
					</div>
				<!-- SIMM Check -->
				  <div class="form-group mx-auto">
				      <label>Are you using SIMM modules ?</label>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[simm]" id="chkSIMM1" value="Yes">
				        <label class="form-check-label" for="chkSIMM1">
				          Yes
				        </label>
				      </div>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[simm]" id="chkSIMM2" value="No">
				        <label class="form-check-label" for="chkSIMM2">
				          No
				        </label>
				      </div>          
				  </div>
				<!-- DIMM Check -->
				  <div class="form-group mx-auto">
				      <label>Are you using DIMM modules ?</label>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[dimm]" id="chkDIMM1" value="Yes">
				        <label class="form-check-label" for="chkDIMM1">
				          Yes
				        </label>
				      </div>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[dimm]" id="chkDIMM2" value="No">
				        <label class="form-check-label" for="chkDIMM2">
				          No
				        </label>
				      </div>          
				  </div>
				<!-- Match Check -->
				  <div class="form-group mx-auto">
				      <label>Are you using SIMM and DIMM Modules on the same board ?</label>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[memmis]" id="chkMisMatch1" value="Yes">
				        <label class="form-check-label" for="chkMisMatch1">
				          Yes
				        </label>
				      </div>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[memmis]" id="chkMisMatch2" value="No">
				        <label class="form-check-label" for="chkMisMatch2">
				          No
				        </label>
				      </div>          
				  </div>
				<!-- Old Check -->
				  <div class="form-group mx-auto">
				      <label>Are you using an older motherboard, say 486 or earlier ?</label>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[memold]" id="chkOld1" value="Yes">
				        <label class="form-check-label" for="chkOld1">
				          Yes
				        </label>
				      </div>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[memold]" id="chkOld2" value="No">
				        <label class="form-check-label" for="chkOld2">
				          No
				        </label>
				      </div>          
				  </div>
				<!-- Check Res -->
				  <div class="form-group mx-auto">
				      <label>Are you using a 486, Pentium or later, motherboard ?</label>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[restrict]" id="chkRes1" value="Yes">
				        <label class="form-check-label" for="chkRes1">
				          Yes
				        </label>
				      </div>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[restrict]" id="chkRes2" value="No">
				        <label class="form-check-label" for="chkRes2">
				          No
				        </label>
				      </div>          
				  </div>
				<!-- Check 430 -->
				  <div class="form-group mx-auto">
				      <label>Are you using a 430HX motherboard ?</label>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[hx]" id="chk4301" value="Yes">
				        <label class="form-check-label" for="chk4301">
				          Yes
				        </label>
				      </div>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[hx]" id="chk4302" value="No">
				        <label class="form-check-label" for="chk4302">
				          No
				        </label>
				      </div>          
				  </div>
				<!-- Check SDRAM -->
				  <div class="form-group mx-auto">
				      <label>Are you using SDRAM ?</label>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[sdram]" id="chkSdram1" value="Yes">
				        <label class="form-check-label" for="chkSdram1">
				          Yes
				        </label>
				      </div>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[sdram]" id="chkSdram2" value="No">
				        <label class="form-check-label" for="chkSdram2">
				          No
				        </label>
				      </div>          
				  </div>
				<!-- Check EDO -->
				  <div class="form-group mx-auto">
				      <label>Are you using EDO ?</label>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[edo]" id="chkEDO1" value="Yes">
				        <label class="form-check-label" for="chkEDO1">
				          Yes
				        </label>
				      </div>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[edo]" id="chkEDO2" value="No">
				        <label class="form-check-label" for="chkEDO2">
				          No
				        </label>
				      </div>          
				  </div>
				<!-- Check Diff memory -->
				  <div class="form-group mx-auto">
				      <label>Are you using different Memory Types (i.e EDO, SDRAM, FPM, etc.) on the same board ?</label>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[diffmtype]" id="chkDiffMem1" value="Yes">
				        <label class="form-check-label" for="chkDiffMem1">
				          Yes
				        </label>
				      </div>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[diffmtype]" id="chkDiffMem2" value="No">
				        <label class="form-check-label" for="chkDiffMem2">
				          No
				        </label>
				      </div>          
				  </div>
				<!-- Check SpecBIOS -->
				  <div class="form-group mx-auto">
				      <label>Are you using more than 64MB of memory ?</label>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[specbios]" id="chkSpecBIOS1" value="Yes">
				        <label class="form-check-label" for="chkSpecBIOS1">
				          Yes
				        </label>
				      </div>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[specbios]" id="chkSpecBIOS2" value="No">
				        <label class="form-check-label" for="chkSpecBIOS2">
				          No
				        </label>
				      </div>          
				  </div>
				<!-- Check MBoard -->
				  <div class="form-group mx-auto">
				      <label>Have you double checked all the settings and replaced the memory; does this fix the problem ?</label>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[mboard]" id="chkMBoard1" value="Yes">
				        <label class="form-check-label" for="chkMBoard1">
				          Yes
				        </label>
				      </div>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[mboard]" id="chkMBoard2" value="No">
				        <label class="form-check-label" for="chkMBoard2">
				          No
				        </label>
				      </div>          
				  </div>
				<!-- Check Metal -->
				  <div class="form-group mx-auto">
				      <label>Do the memory modules use the same metal as the sockets (e.g. gold, or tin) ?</label>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[metal]" id="chkMetal1" value="Yes">
				        <label class="form-check-label" for="chkMetal1">
				          Yes
				        </label>
				      </div>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="chk[metal]" id="chkMetal2" value="No">
				        <label class="form-check-label" for="chkMetal2">
				          No
				        </label>
				      </div>          
				  </div>
				<input type="hidden" name="source" value="mem01">
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




