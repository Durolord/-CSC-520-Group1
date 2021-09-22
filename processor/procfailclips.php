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

						switch ($source) {
							case 'proc01':
								echo "<lh class='h5 text-success'>Other important tips for troubleshooting processor failures include:</lh>";
								echo "<li class='mx-auto text-info'>Check to see if the <a href='default.php?pid=procheat'>processor is overheating</a>. After the PC has been running for a while, open it up, and turn it off. <br />";
								echo "Then ground yourself and touch the processor carefully, or part of the heat sink near the processor. <br />If you cannot leave your finger on the processor for more than a few seconds due to the heat, the chances are good that the <a href='default.php?pid=procheat'>processor is overheating</a>.</li>";
								echo "<li class='mx-auto text-info'>Try toning down the BIOS settings to conservative or default values and see if this solves the problem.<br/>";
								echo "Incorrect or overly aggressive BIOS settings can cause processors to behave strangely.</li>";
								echo "<li class='mx-auto text-info'>Try to reduce the speed of the processor to see if it fixes the problem.<br />";
								echo "If the problem goes away, then it's quite likely your problem was due to <a href='default.php?pid=procheat'>processor overheating</a>.</li>";
								echo "<li class='mx-auto text-info'>If the processor can only run at slower speeds, it's possible that you may have unfortunately purchased a re-marked CPU.</li>";
								break;
							case 'proc02':
								echo "<lh class='h5 text-success'>Other important tips for troubleshooting processor instability include:</lh>";
								echo "<li class='mx-auto text-info'> Also, scan for viruses. These are classic virus behavior.</li>";
								echo "<li class='mx-auto text-info'>If you have a network card set up, check your network settings.<br />";
								echo "Sometimes the built in Windows networking will use up system resources looking for a network.<br />";
								echo "If you are using TCP/IP or some other network protocol, try disabling it and see if it solves your problem. If so, you may need to contact the network card manufactuerer.</li>";
								echo "<li class='mx-auto text-info'>Make sure you also disable all power management options in the BIOS.</li>";
								echo "<li class='mx-auto text-info'>Scan the hard disk for file system corruption and bad sectors.</li>";
								echo "<li class='mx-auto text-info'>A badly written driver program can also cause random glitches and lockups. Try running the system with a default driver or one given to you by the manufactuerer.</li>";
								echo "<li class='mx-auto text-info'>Unreliable power can also cause all sorts of problems. If possible, try running your system off a UPS or swapping the power supply with a new one.<br />";
								echo "If this works you have a <a href='#'>power problem</a>.</li>";
								echo "<li class='mx-auto text-info'> Try using less aggressive BIOS settings for things like memory timing and hard disk timing.<br/>";
								echo "Set memory access settings to the lowest possible, disable any performance enhancing BIOS settings.</li>";
								echo "<li class='mx-auto text-info'>Check for resource conflicts.</li>";
								echo "<li class='mx-auto text-info'>Check for possible <a href='#'>memory problems</a>.</li>";
								break;
							case 'proc03':
								echo "<lh class='h5 text-success'>Other important tips for troubleshooting processor slowdowns include:</lh>";
								echo "<li class='mx-auto text-info'> Scan the system for viruses. This may be a contributary factor.</li>";
								echo "<li class='mx-auto text-info'>Double check BIOS settings to ensure they are in proper order.</li>";
								echo "<li class='mx-auto text-info'>On an older machine with a functioning turbo switch, make sure it is pressed and the light is on.</li>";
								echo "<li class='mx-auto text-info'>Try defragmenting the hard disk.</li>";
								echo "<li class='mx-auto text-info'>Check the amount of free space on the hard disk, as this may be low.</li>";
								echo "<li class='mx-auto text-info'>Update your Windows drivers.</li>";
								echo "<li class='mx-auto text-info'>Consider removing unnecessary programs from the system.</li>";
								echo "<li class='mx-auto text-info'>Check to make sure that the <a href='default.php?pid=procheat'>processor is not overheating</a>, and make sure the CPU fan is still running. <br />";
								echo "Some CPUs, especially OverDrive processors, will intentionally slow the CPU down if they detect a failed fan, in order to prevent heat buildup. </li>";
								break;
							case 'proc04':
								echo "<lh class='h5 text-success'>Important tips for troubleshooting incorrect processor speeds include:</lh>";
								echo "<li class='mx-auto text-info'>Double check that the processor is set up properly; check the motherboard jumper settings.<br />If it is misconfigured the BIOS may be reflecting an incorrect speed.</li>";
								break;
							case 'proc05':
								echo "<lh class='h5 text-success'>Important tips for troubleshooting processor overheating include:</lh>";
								echo "<li class='mx-auto text-info'>Test the temperature of the processor. Leave the machine running for an hour. Turn it off and unplug it, then open it up. <br />Touch the processor, or its heat sink near where it attaches to the processor.";
								echo " If it feels very hot, especially if it is hot enough that you cannot leave your finger on it for more than a couple of seconds, <br />the processor is probably running hotter than it should be. </li>";
								echo "<li class='mx-auto text-info'>Consult your motherboard manual and double-check all the jumper settings for the processor. Make sure it is set to the correct type and speed. <br/ >";
								echo "Make sure the processor is supported by the motherboard. Make sure the processor is inserted correctly into the board. </li>";
								echo "<li class='mx-auto text-info'>Verify the voltage requirements for the chip, and make sure they are set properly. Providing too much voltage to the CPU can overheat it. </li>";
								echo "<li class='mx-auto text-info'>Make sure you are using an appropriate cooling device for your processor. If you are using a Cyrix 6x86, make sure you use a heat sink and cooling fan designed for it. </li>";
								echo "<li class='mx-auto text-info'>Check your CPU fan to make sure it is still turning and ensure that it will not be obstructed by cables or hardware when the cover is put on the case. </li>";
								echo "<li class='mx-auto text-info'>There are many other parts of the system that can overheat. These can affect other components by increasing heat in the overall system. <br />";
								echo "Check <a href='#'>general overheating problems</a> for a look at some of these.</li>";
								echo "<li class='mx-auto text-info'>Increase your processor cooling level. Some typical ways to do this include using a cooling fan if you weren't before, using a stronger fan, or using a larger heat sink. <br />";
								echo "You can in some cases also install additional fans in the case that blow on the processor, but this is generally overkill.</li>";
								break;

							}




				?>
			</ul>
			</div>
		</div>
	</div>
</div>