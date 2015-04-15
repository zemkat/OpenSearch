<?php
#
#	BibFormats/lookup.php - take a three digit tag as input, redirect
#		to the corresponding documentation in OCLC Bibliographic Formats
#		and Standards
#
#	(c)2013 Kathryn Lybarger. CC-BY-SA
#

if (isset($_REQUEST['tag']) && (preg_match("/^(\d)\d\d$/",$_REQUEST['tag'],$m))) {
	switch ($m[0]) {
		case "006";
			$url = "https://www.oclc.org/bibformats/en/fixedfield/006.html";
			break;
		case "007";
			$url = "https://www.oclc.org/bibformats/en/0xx.html";
			break;
		default:
			$url = "https://www.oclc.org/bibformats/en/${m[1]}xx/${m[0]}.html";
	}
	header("Location: $url");
} else {
	header("Location: https://www.oclc.org/bibformats/en.html");
}
