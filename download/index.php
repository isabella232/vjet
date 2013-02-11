<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009 
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	$pageTitle 		= "VJET JavaScript IDE - Download";
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/default/style.css"/>');

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>

<h3>Installing latest release 0.9.1 (Released 2/8/2012) </h3>
<p><b>Update site:</b> http://download.eclipse.org/vjet/updates-0.9

<a href="http://marketplace.eclipse.org/marketplace-client-intro?mpc_install=46875" title="Drag and drop into a running Eclipse Indigo workspace to install VJET JavaScript IDE">
  <img src="http://marketplace.eclipse.org/sites/all/modules/custom/marketplace/images/installbutton.png"/>
</a><br />


<h3>Nightly Updates </h3>
<p><b>Update site:</b> http://download.eclipse.org/vjet/updates-nightly<br />


</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>