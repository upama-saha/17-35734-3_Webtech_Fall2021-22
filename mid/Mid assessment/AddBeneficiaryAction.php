<?php 
    $BeneficiaryName = $_POST['BeneficiaryName']; 
    $MobileNo = $_POST['MobileNo'];
    
    if(empty($BeneficiaryName) or empty($MobileNo) ) {
        echo "Fill up the form properly";
    }
    else {
        $BeneficiaryName = sanitize($BeneficiaryName);
        $MobileNo = sanitize($MobileNo);
       


        $handle1 = fopen("data.json", "a");
        
		$arr1 = array( 'BeneficiaryName' =>$BeneficiaryName, 'MobileNo' =>$MobileNo);
		$encode = json_encode($arr1);

		$res = fwrite($handle1, $encode . "\n");

		if ($res) {
			echo "Successfully saved";
		}
		else {
			echo "Error while saving";
		}
	}

		function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
?>