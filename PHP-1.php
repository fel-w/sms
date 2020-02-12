<?php
$conn = mysqli_connect("localhost", "root", "", "sms");
//select database
  $sql = " SELECT * FROM biodata LIMIT 1;";
    $result = $conn->query($sql);

                     if($result->num_rows > 0){
                         while($row = $result->fetch_assoc()){
                              echo $row['referenceNo']; 
                         }
                     }
                   
                     
                     
?>