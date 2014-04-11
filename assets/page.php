<?php

	/*	page.php
	 *
	 *	Author: @alexandreaco
	 *	Date: 2/10/2014
	 *	
	 *	Notes: This document returns HTML code that will be duplicated across many
	 *		.php files within the project. 
	 *
	 *	Public Functions:
	 *		beginDoc() 
	 *		endDoc()
	 * 
	 */
	 
	 
	 class Page {
	 	
	 	// data members
	 	var $title;
	 	
	 	
	 	// constructor
	 	function __construct($title) {
	 	
	 		$this->title = $title;
	 		
	 		
	 	}
	 	
	 	
	 	// begin doc PUBLIC
	 	public function beginDoc() {
	 	
	 		print($this->getOpenHTML());
	 		
	 		print($this->getHead());
	 		
	 		print($this->getOpenBody());
	 		
	 		
	 	}
	 	
	 	
	 	// end doc PUBLIC
	 	public function endDoc() {
	 	
	 		print($this->getCloseBody());
	 		
	 		print($this->getCloseHTML());
	 	
	 	}
	 	
	 
	 	
	 	// get Open HTML
	 	private function getOpenHTML() {	
	 	
	 		$html ="<!doctype html>
							<html lang='en'>";
							
	 		return $html;
	 		
	 		
	 	}
	 	
	 	// get head	
	 	private function getHead() {		 	// requires a page title
	 	
	 		$html = "<head>
	 							<meta charset='utf-8'>
	 							
								<!--Stylesheet-->
								<link rel='stylesheet' href='assets/css/style.css'>
				
								<title>$this->title</title>
			
							</head>";
							
			return $html;
	 	
	 	
	 	}
	 	
	 	
	 	// get open body
	 	private function getOpenBody() {
	 	
	 		$html = "<body>";
	 		
	 		return $html;
	 		
	 		
	 	}
	 	
	 	
	 	// get close Body
	 	private function getCloseBody() {
	 	
	 		$html = "</body>";

	 		return $html;
	 		
	 		
	 	}
	 	
	 	
	 	// get close HTML
	 	private function getCloseHTML() {
	 	
	 		$html = "</HTML>";

	 		return $html;
	 		
	 		
	 	}
	 
		
	 }


?>