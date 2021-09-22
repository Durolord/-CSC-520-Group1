
<form name=frmSelComp class="user mx-5" method="post" action="/pcdoc/default.php?pid=loadquestions">
	<div class="form-group row">
			<select name="cboComponent" id="single">
				<option data-placeholder="true"></option>
					<?php 
						include ( "include/db_conn.inc");
						$query = "SELECT DISTINCT qtype FROM tblquestions ";
						$select = mysqli_query($connection,$query);
						while($row = mysqli_fetch_assoc($select )) {
							$qid = $row['qtype'];
							$qdesc = $row['qtype'];
							echo "<option class='text-capitalize' value='{$qid}'>{$qdesc}</option>";
							}
					?>			
			</select>
	</div>
	<div class="form-group row">
		<button type="submit" na class="btn btn-success btn-user float-right">Submit
		</button>
	</div>
	<div class="form-group row">
		<img src="images/doctor_13.gif" class="mx-auto" alt="PC Doctor" height="150"/>
	</div>
</form>


