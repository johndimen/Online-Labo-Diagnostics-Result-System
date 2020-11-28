<?php


//dashboard table: Receive
$dashsql1 = "SELECT `r`.*, `p`.* FROM `request` AS `r` 
	        JOIN `patient_info` AS `p` ON `r`.`Patient_ID` = `p`.`Patient_ID`;"; 
$dashquery1 = mysqli_query($conn, $dashsql1);

//dashboard table: Release
$dashsql2 = "SELECT `patient_info`.`Patient_ID`, CONCAT(`patient_info`.`Patient_Fname`, ' ' , 
						`patient_info`.`Patient_Lname`) AS Patient_Name ,`result`.`Result`,`result`.`Date_Result` 
						FROM `result` JOIN `patient_info` ON `result`.`Patient_ID` = `patient_info`.`Patient_ID` "; 
$dashquery2 = mysqli_query($conn, $dashsql2);
$releasetable = mysqli_fetch_array($dashquery2);



?>