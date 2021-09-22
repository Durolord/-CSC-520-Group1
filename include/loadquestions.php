<?php	
	$_SESSION['RecContent']="";
	
	$Tablename = "tblquestions";
	
	if(isset($_POST['cboComponent'])){
		$comp=$_POST['cboComponent'];
	}
	else{
		header("Location: index.php");
	}
	
	//echo "Com:".$_POST['cboComponent'];
	

		//echo $comp;
		?>
		<table class="table table-bordered text-center" id="department" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th class="text-capitalize">For problems related to the Computer <?php echo $comp;?></th>
					<th>Goto</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$query = "SELECT * FROM tblquestions WHERE qtype ='$comp'";
					$select = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($select )) {
					$qid = $row['qid'];
					$qdesc = $row['qdesc'];
						switch ($qid) {
							case 'proc01':  
							$location =  'procfail';
							break;

							case 'proc05':  
							$location =  'procheat';
							break;

							case 'proc02':  
							$location =  'proccrash';
							break;

							case 'proc04':  
							$location =  'procspeed';
							break;

							case 'proc03':  
							$location =  'procslow';
							break;

							case 'mem01':  
							$location =  'memfail';
							break;

							case 'mem02':  
							$location =  'memparity';
							break;

							case 'mem03':  
							$location =  'memnotrec';
							break;

							case 'mem04':  
							$location =  'memout';
							break;

							case 'mem05':  
							$location =  'memperform';
							break;

							case 'psupply01':  
							$location =  'psintdiagnosis';
							break;
						}
				?>	          
				<tr>
					<td><?php echo $qdesc; ?></td>
					<td><strong><a class="btn btn-user btn-primary" href="default.php?pid=<?php echo $location; ?>"data-toggle="tooltip" data-placement="top" title="Edit">&rarr;</a></strong></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>

