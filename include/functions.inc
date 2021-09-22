<?php
/*'**********************************************************************************
'* FUNCTIONS.INC
'* Author	: PCDOC Web Team
'* Date		: May 2008
'* Last Updated	: May 2008
'*
'* File houses shared procedures and functions. 
'***********************************************************************************

'Display message
'----------------------------------------------------------------*/
	function WriteMessage($strmessage, $inttype)
	{	
		Switch ($inttype)
		{ 
			Case 1:	//regular message
				echo "<p class=instructions>".$strmessage."</p>";
				break;

			Case 2:	//error message
				echo "<p class=warning><FONT COLOR=#FF3300>ERROR:".$strmessage."</FONT></p>";
				break;

			default:
				echo "<p>".$strmessage."</p>";
				break;
		}
	}


/*----------------------------------------------------------------
'Checks if value is empty
'----------------------------------------------------------------*/
	function isEmpty($str)
	{
		$bln = false;

		if (strlen(trim($str)) == 0)
		{
			$bln = true;
		}

		return ($bln); 
	}
/*----------------------------------------------------------------
'Checks if a table is empty
'----------------------------------------------------------------*/
	Function isEmptyTable($strTbl, $strField)
	{
		global $connection;
		$blnEmpty = false;
		$sqlc = "SELECT * FROM ".$strTbl;

		//check result of query and display error message
		$resultc=mysqli_query($connection,$sqlc);

		if(!$resultc)
		{
			echo("<P>[isEmptyTable] Error performing query: ".mysqli_error() . "</P>");  
			echo("<P>SQL Statement: ".$sqlc."</P>");
			exit();
		}

		//$resultc = mysqli_query($sqlc);
		$rowc = mysqli_num_rows($resultc);

		//no records found
		if ($rowc[0] <= 0)
		{
			$blnEmpty = true;
		}

		return $blnEmpty;
	}
?>