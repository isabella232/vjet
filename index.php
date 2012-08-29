<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2010 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "This is a new project";
	$pageKeywords	= "Nova, template, #midcolumn";
	$pageAuthor		= "Eclipse Foundation";
		
	# Paste your HTML content between the EOHTML markers!	
	ob_start();
	?>
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		
		<p>	This is a new Eclipse.org project.  You can see the proposal 
<a href="/proposals/webtools.vjet">here</a> </p>

        <p> Want to know more? <a href="/projects/project_summary.php?projectid=my.project">About This Project</a> </p>

		<p>If you're a committer on this project, simply connect to the website repository (:extssh:yourid@dev.eclipse.org:/cvsroot/org.eclipse under www/yourproject) and rename the template.php file to index.php, overwriting this page.</p>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="template.php">Home page template</a></li>
				<li><a href="midcolumn_example.php">Multi-column template</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>&lt;h6&gt; tag</h6>
				<div class="modal">
					Wrapping your content using a div.modal tag here will add the gradient background
				</div>
		</div>
	</div>

	
	<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage('Nova', $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
