

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Surname = $_POST['lname'];
$Othernames = $_POST['othernames'];
$MobileNumber = $_POST['phone'];
$Email = $_POST['email'];
$Dateofbirth = $_POST['dob'];
$Religion = $_POST['religion'];
$Gender = $_POST['gender'];
$Nationality = $_POST['nationality'];
$Maritalstatus = $_POST['status'];
$Residence = $_POST['residence'];
$Name = $_POST['Kname'];
$EmailAddress = $_POST['Kemail'];
$Relationship = $_POST['relationship'];
$MobileNo = $_POST['Kphone'];
$PlaceofResidence = $_POST['residence'];
$Course = $_POST['Courses'];


$sql = "INSERT INTO biodata (Surname,Othernames,MobileNumber,Email,Dateofbirth,Religion,Gender,Nationality,Maritalstatus,Residence,Name,EmailAddress,Relationship,MobileNo,Placeofresidence,Courses)
VALUES ('$Surname','$Othernames','$MobileNumber','$Email','$Dateofbirth','$Religion','$Gender','$Nationality','$Maritalstatus','$Residence','$Name','$EmailAddress','$Relationship','$MobileNo','$PlaceofResidence','$Course')";
 


if ($conn->query($sql) === TRUE) {
    $sql = " SELECT MAX(referenceNo) AS referenceNo FROM biodata;";
                          //$result = $conn->query($sql);
                          if ($result1 = mysqli_query($conn, $sql)) {
                          } else {
                              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                          }
                         $number = mysqli_fetch_assoc($result1);
                         echo "<p>Please note down this number, it will be your reference number for follow up purposes!
                   
                  </p>".$number['referenceNo'];
  
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//checkes if files have beeen uploaded
if(!empty($_FILES['files']['name'][0])){
 $files = $_FILES['files'];
 $uploaded = array();
 $failed = array();
 $allowed = array('txt','png', 'jpg', 'pdf');
 foreach($files['name'] as $position => $file_name){
    $file_temp = $files['tmp_name'][$position];
   $file_size = $files['size'][$position];
   $file_error = $files['error'][$position];
   
   $file_ext = explode('.', $file_name);
   $file_ext = strtolower(end($file_ext));
   if(in_array($file_ext, $allowed)){
    
    if($file_error === 0){
        if($file_size <= 2097152){
            
            $file_name_new = uniqid('', true) . '.' . $file_ext;
            $file_destination = 'uploads/' . $file_name_new;
            if(move_uploaded_file($file_temp, $file_destination)){
                $uploaded[$position] = $file_destination;
            } else {
                $failed[$position] = "[{$file_name}] failed to upload";
            }
            
            
        } else {
            $failed[$position] = "[{$file_name}] is too large.";
        }
        
    }else {
        $failed[$position] = "[{$file_name}] error with code {$file_error}.";
    }
    
     } else {
        $failed[$position]="[{$file_name}] file extension '{$file_ext}' is not allowed. ";
     }
   
   }
   if(!empty($uploaded)){
    print_r($uploaded);
   }
   if(!empty($failed)){
    print_r($failed);
   }
}






?> 