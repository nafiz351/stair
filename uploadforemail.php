
<?php
//include "../includes/up.php";

$uploadDir = 'uploads/'; 
	//mkdir($filename,0777,true);
if (!file_exists($uploadDir)){
   // echo $filename, " does not exist";
	mkdir($uploadDir,0777,true);
}
elseif (!is_dir($uploadDir)){
   // echo $filename, " is not a directory";
	mkdir($uploadDir,0777,true);
}
else{
   // echo "Directory ", $filename, " already exists";
   $uploadDir=$uploadDir;
}
$response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
); 
  
            $uploadStatus = 1; 
             
            // Upload file 
            $uploadedFile = ''; 
            if(!empty($_FILES["file"]["name"])){ 
                 
                // File path config 
                $fileName = basename($_FILES["file"]["name"]); 
                $targetFilePath = $uploadDir . $fileName; 
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                 
                // Allow certain file formats 
                $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg'); 
                if(in_array($fileType, $allowTypes)){ 
                    // Upload file to the server 
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                        $uploadedFile = $fileName; 
                    }else{ 
                        $uploadStatus = 0; 
                        $response['message'] = 'Sorry, there was an error uploading your file.'; 
                    } 
                }else{ 
                    $uploadStatus = 0; 
                    $response['message'] = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.'; 
                } 
            } 
             
            if($uploadStatus == 1){ 
             
                    $response['status'] = 1; 
                    $response['message'] = "".$uploadedFile; 
					$response['filepath'] =$targetFilePath;
					$response['filename'] =$uploadedFile;
               
            } 
    
echo json_encode($response);
?>