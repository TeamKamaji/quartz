<?php

	/*	adminActivity.php
	 *
	 *	Author: 
	 *	Date:
	 * 
	 */

	 
	 class AdminActivity {
	 
	 	// data members
	 	var $page;
	 	var $model;
	 
	 
	 	// constructor
	 	function __construct() {
	 		
	 		$this->model = new Model();
	 		
	 		$this->page = new Page("Admin Dashboard");
	 		
	 		
	 	}
	 
	 
	 	// run
		function run() {
			
			$this->process();
			$this->show();
			
		}
	 
	 
	 	// get input
	 	function getInput() {
	 	
	 	}
	 	
	 	
	 	// process
	 	function process() {
	 	
	 	}
	 	
	 	
	 	// show
	 	function show() {
	 	
	 		$this->page->beginDoc();
	 		
	 		// enter code here

	 		
	 		$this->page->endDoc();
	 		
	 	
	 	}
	 
	 
	 }


?>