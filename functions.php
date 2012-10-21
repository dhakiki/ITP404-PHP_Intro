<?php

function redirect($url) {
	header('Location: ' . $url);
}

function validateemail($email) {
	$domaincount = 0; 
	
	$_domains= array('yahoo.com', 'gmail.com', 'usc.edu', 'hotmail.com', 'aol.com');
	if(strpos($email, '@')===false) return false;
	foreach($_domains as $_domain) {
		if(strpos($email, $_domain)==false)
			$domaincount++;
		else break;
	}
	if ($domaincount<5) return true;
		else return false;
}

?>