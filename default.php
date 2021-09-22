<?PHP
	//'Declare global variables
	global $strTbl;		//table name
	global $strID;		//to store ID
	global $result;		//main recordset
	global $blnEmptyTable;	//flag for empty table
	global $strMenu; //Menu Item
     
	global $prjID;
	global $strScript;
	global $strPath;
	global $strCallScript;
	global $strMenu;
	
	session_start();
	//Common functions
	require_once("include/functions.inc");
	//Common Constants
	require_once("include/constants.inc");

	//database connection script
	include ( "include/db_conn.inc");

	
	//Determine action 
	$strAction = $_GET['pid'];	

	//let default action be ACTION_ADD
	if (strlen($strAction) == 0)
	{
		$strAction = ACTION_VIEW;
	}
	
		//get page informmation and assign to script variables
		$sql = "SELECT * FROM tblpages WHERE pageID ='".$_GET['pid']."'";

		$result = mysqli_query($connection,$sql);
		$row = mysqli_fetch_assoc($result);
		$strScript = $row['pageID'];
		$strPath = $row['pageFolder'];

		if (strlen(trim($strAction)) <= 0)	//if no action then page is for viewing
		{
			$strPgTitle = $row['pageTitle'];
		}
		else
		{
			$strPgTitle = ucfirst($strAction)." ".$row['pageTitle'];
		}

		$strPgTitle = "CSC 520 Group 1's ".$strPgTitle;

		$strPgDesc = $row['pageDesc'];

		$strCallScript =  $row['pageScript'];  //script to be called after succesfull completion
		$strCallFilter = $row['filtermaster']; //filter option to be called
		$strMenu =  $row['pgmenu'];  //menu to be called
?>

<html>
<head>
<?php 
	echo "<title>".$strPgTitle."</title>";
?>

<META NAME="Author" CONTENT="CSC 520 Group 1">
<META NAME="robots" CONTENT="all">
<META NAME="Keywords" CONTENT="">
<?php echo "<META NAME='Description' CONTENT='".$strPgDesc."'>"; ?>
<link rel="stylesheet" type="text/css" href="include/main.css" />
<link rel="stylesheet" type="text/css" href="include/main2.css" />
<link rel="stylesheet" type="text/css" href="include/slimselect.css" />
<link rel="stylesheet" type="text/css" href="include/style.css" />
</head>

<body> 
  <div class="container py-5" style="min-height: 80vh;">
			   <div class="card border-success my-5">
			   	<div class="card-header bg-dark text-center">
			   				    <a class="h1 text-success" href="https://localhost/pcdoc/default.php?pid=selmain">PC Troublshooter Expert System</a>
			   				    <h3 class="text-primary"><?php echo $strPgTitle; ?></h3>


			   	</div>
				   	<div class="card-body">
				   					   		
					<!-- dynamically changing content -->
					<?php 
						
								
						//display title
						echo "<br/><br/><div class=heading >".$strPgTitle."</div></div><br/>";	

						switch ($strAction) {
							case 'loadquestions':
								// code...
								break;
							include "includes/view_all_posts.php";
							default:
								// code...
								break;
						}
						if ($strPath == "/")
						{
				      
					       		require_once($strScript.".php");
						}
						else
						{
							require_once($strPath."/".$strScript.".php");
						}		
					?>
				 </div>
			</div>
	</div>
  <footer class="pt-1 fixed-bottom bg-dark">
    <div class="container">
      <p class="text-center h6"><strong><em>Copyright &copy; CSC520  Group-1 <span id="year"></span></em></strong></p>
    </div>
    <!-- /.container -->
  </footer>

<script src="include/slimselect.js"></script>
<script>
  new SlimSelect({
  select: '#single',
  placeholder: `Select the component that's giving the problem:`,
  allowDeselectOption: true
})
</script>
</body>
</html>