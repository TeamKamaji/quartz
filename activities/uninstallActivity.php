<?php
	$usestub = false;

	if( $usestub ) {
		include_once "modelstub.php";
	} else {
		include_once "model/model.php";
	}

	class UninstallActivity {
		var $context;
		var $model;
		var $rootPass;
		var $dbName = "quartz";
		var $emptyFlag;

		function __construct(){
			$this->model = new Model();

			if (isset($_POST['submit'])) {
				if ($_POST['uninstall']!="")
				{
					$this->context = 'submitting';
					$this->emptyFlag = "";
				} else {
					$this->emptyFlag = "Error: Are you sure you want to uninstall Quartz?";
					$this->context = "showingform";

				}
			} else {
				$this->context = 'showingform';
				$this->emptyFlag = "";
			}
		}
		
		
		function getInput() {
		}

		function show() {
			if($this->context=="showingform"){
				print("<html>
					<head>
						<title>Uninstall Quartz</title>
						<link rel='stylesheet' type='text/css' href='assets/css/layout.css'>
						<center>
							<div style='position: relative; 
								background: url(images/Header.jpg);
								width: 945px; height: 120px;'>
							</div>
						</center>
					</head>
					<body bgcolor='#EEEEEE'>
						<div id='header'></div>

						<div id='content'>
							<br><center><font color='FF0000'>$this->emptyFlag</font></center>
							<h1><center>Thanks for using Quartz!</center></h1>
							<p style:'margin-left: auto; margin-right: auto;'>
								 <center>Thank you for choosing the Quartz system to manage your professor and course information online. 
								  We're sad to see you go.  This page will walk you through uninstalling Quartz.<br><br>
								</center>

							<u>Have you backed up your data?</u> If you plan on reinstalling Quartz, you can create a backup of your professors' data 
							in the Admin Panel and install from that backup later.  Please back up your data before uninstalling Quartz.  Once you uninstall,
							 you will not be able to access your data again.<br><br> <br><br>
							<u> <center>Uninstalling will remove all professor data. </center> </u>
							
							<br><br>

								<!--creating the uninstall form-->

							<form method='post' action= 'uninstall.php' >
								Are you sure you want to uninstall Quartz? <br>
								<input type='radio' name='uninstall' value='yes'>	Yes<br>
								<input type='radio' name='uninstall' value='no'>	No<br>
								<p><input type='submit' name='submit'/></p>
							</form>
							</p>
						</div>

						<div id='footer'>
							<center>
								<div style='position: relative;
							background: url(images/Footer.jpg); 
							width: 945px; height: 100px;'>
								</div>
							</center>
						</div>
					</body>
				</html>");
			} else if ($this->context = "submitting") {
				if ($_POST['uninstall'] =='yes') {
				
				$model->deleteDatabase($this->dbName, "localhost://quartz");
				
				print("<html>
					<head>
					
					
					
					
					
						<title>Uninstall Quartz</title>
						<link rel='stylesheet' type='text/css' href='customCSS.css'>
						<center>
							<div style='position: relative; 
								background: url(images/Header.jpg);
								width: 945px; height: 120px;'>
							</div>
						</center>
					</head>
					<body bgcolor='#EEEEEE'>
						<div id='header'></div>

						<div id='content'>
							<br>
							<center>The Quartz database has successfully been deleted!<br><br> You may now exit your browser.
							</center>
						</div>

						<div id='footer'>
							<center>
								<div style='position: relative;
							background: url(images/Footer.jpg); 
							width: 945px; height: 100px;'>
								</div>
							</center>
						</div>
					</body>
				</html>");
				} else {
				print("This would take you back to the admin panel, which we previously demoed.");
				}		
			}
		}

		function process(){
			if($this->context=="submitting"){
			if ($_POST['uninstall'] =='yes') {
				$this->model->deleteDatabase($this->dbname);
				
			}
			}
		}

		function run() {
			$this->getInput();
			$this->show();
		}
	}
?>
