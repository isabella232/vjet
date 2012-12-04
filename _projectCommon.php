<?php

/*******************************************************************************
 * Copyright (c) 2009-2010 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	# Set the theme for your project's web pages.
	# See http://eclipse.org/phoenix/
	$theme = "Nova";
	

	# Define your project-wide Navigation here
	# This appears on the left of the page if you define a left nav
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	
	# If you want to override the eclipse.org navigation, uncomment below.
	# $Nav->setLinkList(array());
	
	# Break the navigation into sections
	$Nav->addNavSeparator("MyProject", 	"/default");
	$Nav->addCustomNav("Download", "/vjet/download.php", "_self", 3);
	$Nav->addCustomNav("Documentation", "/vjet/documentation.php", "_blank", 3);
	$Nav->addCustomNav("Support", "/vjet/support.php", "_blank", 3);
	$Nav->addCustomNav("Getting Involved", "/vjet/developers", "_blank", 3);

	# Define keywords, author and title here, or in each PHP page specifically
	$pageKeywords	= "javascript ide static analysis code assist semantic validation";
	$pageAuthor		= "Justin Early";
	# $pageTitle 		= "VJET";


	# top navigation bar
	# To override and replace the navigation with your own, uncomment the line below.
	# $Menu->setMenuItemList(array());
	# $Menu->addMenuItem("Home", "/vjet", "_self");
	# $Menu->addMenuItem("Download", "/vjet/download.php", "_self");
	# $Menu->addMenuItem("Documentation", "/vjet/documentation.php", "_self");
	# $Menu->addMenuItem("Support", "/vjet/support.php", "_self");
	# $Menu->addMenuItem("Developers", "/vjet/developers", "_self");
	
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="style.css"/>' . "\n\t");
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="style2.css"/>' . "\n\t");
	
	# To enable occasional Eclipse Foundation Promotion banners on your pages (EclipseCon, etc)
	$App->Promotion = TRUE;
	
	# If you have Google Analytics code, use it here
	# $App->SetGoogleAnalyticsTrackingCode("UA-34809342-1");
?>