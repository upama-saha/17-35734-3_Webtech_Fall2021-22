<?php 
    $Religion = $_POST['Religion']; 
    $value = $_POST['value'];
    $Amount = $_POST['Amount'];
    if(empty($Religion) or empty($value) or empty($Amount)) {
        echo "Fill up the form properly";
    }
    else {
        $Religion = sanitize($Religion);
        $value = sanitize($value);
        $Amount = sanitize($Amount);


        $handle1 = fopen("data.json", "a");
        
		$arr1 = array( 'Religion' =>$Religion, 'value' =>$value, 'Amount' =>$Amount);
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