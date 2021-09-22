<div class="row mx-auto mb-3"><img src='images/doctor_5.gif' alt='PC Doctor Recommendation' width='200' /></div>
<div class="row">
	<div class="col-8 mb-2 mx-auto">    
		<div class="card shadow mx-3 border-dark">
			<div class="card-header text-center border-dark py-3">
				<h6 class="m-0 font-weight-bold text-primary">Reccomendations</h6>
			</div>

			<div class="card-body text-justify">
			<ul>
				<?php
					$chk 	= $_POST['chk'];
					$source = $_POST['source'];
					$count	= 0;
					$recs 	= [];
						foreach ($chk as $key => $value) {
							if ($value == "Yes") {	

								$sql = "SELECT tblproblems.probId,tblproblems.qId,tblproblems.probDesc, tblrecommend.recDesc,tblrecommend.recHead FROM tblproblems,tblrecommend WHERE tblproblems.probId=tblrecommend.probId && tblproblems.qId='{$source}' && tblproblems.probDesc='{$key}' ORDER BY `tblrecommend`.`recHead` DESC";
								$result = mysqli_query($connection,$sql);
								while ($row = mysqli_fetch_assoc($result))
									{
										if ($row['recHead'] == 'Y')
											{
											echo "<lh class='h5 text-danger'>".$row['recDesc']."</lh>";
											}
										if ($row['recHead'] == 'N')
											{
											echo "<li class='mx-auto text-warning'>".$row['recDesc']."</li>";
											}	
									}
										echo "</br>";
							}
						}
						if (isset($chk['paritydisabled']) && $chk['paritydisabled'] == "No") {	

								$sql = "SELECT tblproblems.probId,tblproblems.qId,tblproblems.probDesc, tblrecommend.recDesc,tblrecommend.recHead FROM tblproblems,tblrecommend WHERE tblproblems.probId=tblrecommend.probId && tblproblems.qId='{$source}' && tblproblems.probDesc='parityenabled' ORDER BY `tblrecommend`.`recHead` DESC";
								$result = mysqli_query($connection,$sql);
								while ($row = mysqli_fetch_assoc($result))
									{
										if ($row['recHead'] == 'Y')
											{
											echo "<lh class='h5 text-danger'>".$row['recDesc']."</lh>";
											}
										if ($row['recHead'] == 'N')
											{
											echo "<li class='mx-auto text-warning'>".$row['recDesc']."</li>";
											}	
									}
										echo "</br>";
							}
						switch ($source) {
							case 'mem01':
								echo "<lh class='h5 text-success'>Other important tips for troubleshooting memory failures include:</lh>";
								echo "<li class='mx-auto text-info'>One good first step to try when encountering apparent memory failures is to try running a comprehensive memory test. <br />";
								echo "Using a diagnostic software tool, run a continuous loop memory test for a long period of time and see if it finds any problems with the memory. <br />If it does, this may give you a suggestion of where the problem in memory is.  </li>";
								echo "<li class='mx-auto text-info'>Make sure to carefully check the memory modules, which sometimes appear to be inserted correctly when they are not. <br/>";
								echo "Make sure they are all sticking up at the correct height from the motherboard.<br />Ensure that the modules have been pushed all the way into their sockets and that the spring clips have snapped into position </li>";
								echo "<li class='mx-auto text-info'>Check problems related to <a href='#'>overheating</a>.</li>";
								echo "<li class='mx-auto text-info'>Make sure that you have used the correct sockets. <br />";
								echo "Motherboards have multiple sockets and putting modules in the incorrect ones will often cause problems. <br/>";
								echo "For example, most Pentium motherboards have four SIMM sockets, which make up two banks. <br />If you put the SIMMs in the middle two sockets then you have accidentally put memory into half of the first bank and half of the second bank, and the PC will not boot. <br />Putting the memory into the full second bank instead of the first won't work on many motherboards either (but it will on some). </li>";
								echo "<li class='mx-auto text-info'>Ensure that the size of memory modules you have selected is supported. <br />";
								echo "Some motherboards will not support certain sizes of modules; in particular, 2 MB, 8 MB and 32 MB SIMMs are generally composite and will not work in some machines. <br />Consult your motherboard manual.  </li>";
								echo "<li class='mx-auto text-info'>Check the technology of the memory you are using.  <br />";
								echo "Whether a motherboard supports memory types such as EDO or SDRAM for example, depends on the chipset used on the motherboard, as well as how the motherboard itself was implemented. <br />Using EDO memory in many older machines will cause them to lock up.  </li>";
								echo "<li class='mx-auto text-info'>Some PCs use proprietary, special modules; for example IBM's PS/2 systems.  <br />";
								echo "Using industry standard memory in a machine that requires special modules, or vice-versa, will cause problems.  </li>";
								echo "<li class='mx-auto text-info'>There could be a problem with the relative speed of the memory modules compared to the timing settings (memory access timing or wait states) that were entered in the BIOS setup program.  <br />";
								echo "Double-check the speed of the modules you are using to make sure it is fast enough. <br />Some PCs will work with slower memory modules, but you may need to increase wait states or slow down the memory timing.</li>";
								echo "<li class='mx-auto text-info'>There could be something wrong the memory modules themselves.   <br />";
								echo "Note that bad memory will often pass the BIOS memory test at boot time, and will also often pass the tests performed by those small module testers that many vendors use.   <br />";
								echo "Those tests are very superficial and will not catch all memory problems. If you can, try the modules in another PC that uses the same kind of memory. <br />If you have performed all the checks listed in the points above, and the memory works in another PC, the memory itself may very well be bad. <br/> Try to replace the memory and see if the problem goes away.    </li>";
								echo "<li class='mx-auto text-info'>There could be a <a href='#'>power supply problem</a>, though this is unusual.<br />";
								echo "A bad power supply can cause strange memory errors that crop up because the memory is not getting enough power. </li>";
								echo "<li class='mx-auto text-info'>Make sure that your BIOS settings have not been changed. <br/>Double-check the ones that are related to the system memory and make sure that they are correct.</li>";
								echo "<li class='mx-auto text-info'>Something inside the PC may have come loose. Check for loose connections within the PC. </li>";

								break;
							case 'mem02':
								echo "<lh class='h5 text-success'>Other important tips for troubleshooting memory parity errors include:</lh>";
								echo "<hr/>";
								echo "<ul>";
								echo "<li class='mx-auto text-info'> Make sure that the modules you are using are appropriate for your board. <br />";
								echo "In particular, there are some motherboards that will not support the newer ECC-only modules. </li>";
								echo "<li class='mx-auto text-info'>You may be surprised to hear me say this, but if your system has been working well for a long time, you haven't changed anything recently, <br />and you only encountered a single parity error, I often recommend just ignoring it. <br />";
								echo "Well, don't <i>ignore</i> it, but don't take any action other than seeing if it happens again, and if so, under what circumstances. <br />";
								echo "The reason is that fluke corruptions of memory occur, sometimes due to stray radiation or odd power glitches. <br />You may have a single error and never another one. If the error recurs, of course, you have a problem that needs to be addressed. </li>";
								echo "<li class='mx-auto text-info'>There are many different possible causes of intermittent system lockups and glitches. <br />";
								echo "Many of the problems that manifest themselves as lockups, crashes or spontaneous reboots on a non-parity system will show up on a parity system as parity errors.</li>";
								break;
							case 'mem03':
								echo "<lh class='h5 text-success'>There are no other important tips related to \"Memory Not Recognized\" problems.</lh>";
								break;
							case 'mem04':
								echo "<lh class='h5 text-success'>There are no other important tips related to \"Out of Memory\" problems.</lh>";
								break;
							case 'mem05':
								echo "<lh class='h5 text-success'>There are no other important tips related to Memory Performance problems.</lh>";
								break;
							}




				?>
			</ul>
			</div>
		</div>
	</div>
</div>