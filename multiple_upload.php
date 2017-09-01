<?php
// move multiple files
if(isset($_FILES['file_array'])){
    $name_array = $_FILES['file_array']['name'];
    $tmp_name_array = $_FILES['file_array']['tmp_name'];
    $type_array = $_FILES['file_array']['type'];
    $size_array = $_FILES['file_array']['size'];
    $error_array = $_FILES['file_array']['error'];
    for($i = 0; $i < count($tmp_name_array); $i++){
        if(move_uploaded_file($tmp_name_array[$i], "test_uploads/".$name_array[$i])){
            echo $name_array[$i]." upload is complete<br>";
        } else {
            echo "move_uploaded_file function failed for ".$name_array[$i]."<br>";
        }
    }
}	
// @@@@@@@@@ file upload in name array multiple input
if(isset($_FILES['attachments'])){
							$attachments = array();
							$attachments = $_FILES['attachments'];
						}else {
							$attachments = '';
						}											

if(!empty($attachments)){
				$name_img = $attachments['name'];
				$tmp_name_img = $attachments['tmp_name'];
				//$type_img = $image['type'];
				//$size_img = $image['size'];
				$error_img = $attachments['error'];
				}
				
					$name_img[0] = time().uniqid(rand()).'.'.$name_img[0];
					$name_img[1] = time().uniqid(rand()).'.'.$name_img[1];
					$name_img[2] = time().uniqid(rand()).'.'.$name_img[2];
					$name_img[3] = time().uniqid(rand()).'.'.$name_img[3];
					$name_img[4] = time().uniqid(rand()).'.'.$name_img[4];
					
				
				for($i = 0; $i < count($tmp_name_img); $i++){
					move_uploaded_file($tmp_name_img[$i], "../uploads/attachment/".$name_img[$i]);
				}
