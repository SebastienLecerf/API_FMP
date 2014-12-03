<html>
<head>
<!-- declare charset as UTF-8 -->
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
/**
 * listLayouts.php
 * 
 * Copyright © 2005-2006, FileMaker, Inc. All rights reserved.
 * NOTE: Use of this source code is subject to the terms of the FileMaker
 * Software License which accompanies the code. Your use of this source code
 * signifies your agreement to such license terms and conditions. Except as
 * expressly granted in the Software License, no other copyright, patent, or
 * other intellectual property license or right is granted, either expressly or
 * by implication, by FileMaker.
 * 
 * Example PHP script to illustrate how to list layouts in a database.
 * 
 * Requirements:
 *   1. Working FileMaker Server installation
 *   2. 'FMPHP_Sample' database hosted in FileMaker Server
 *
 */
 
// Include FileMaker API
require_once ("FileMaker.php");

// Create a new connection to FMPHP_Sample database.
// Location of FileMaker Server is assumed to be on the same machine,
//  thus we assume hostspec is api default of 'http://localhost' as specified
//  in filemaker-api.php.
// If FMSA web server is on another machine, specify 'hostspec' as follows:
//   $fm = new FileMaker('FMPHP_Sample', 'http://10.0.0.1');

$FMbase = new FileMaker();
		//$server = 'http://91.90.103.107';
		//$server = 'http://localhost';
		
		$FMbase->setProperty('database', "GEODIAG_Rapports");
		//$FMbase->setProperty('hostspec', $server);
		$FMbase->setProperty('username', "Admin");
		$FMbase->setProperty('password', "symfony76");
		$FMfind = $FMbase->listLayouts();
		// $result = $FMfind->execute();
		if ($FMbase->isError($FMfind)) {
		    $records = "Accès non autorisé.";
		} else {
			$records = $FMfind;
		}

/*$fm = new FileMaker();
//$fm->setProperty('hostspec', 'http://localhost');
$fm->setProperty('hostspec', 'http://localhost');
$fm->setProperty('database', 'GEODIAG_Rapports');
$fm->setProperty('username', 'Sadmin');
$fm->setProperty('password', 'symfony76');*/

// Call listLayouts() to get array of layout names.



// If an error is found, return a message and exit.

// Print out layout names
foreach ($FMfind as $layout) {
    echo $layout . "<br>";
}

?>
</body>
</html>
