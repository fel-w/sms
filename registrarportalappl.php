<?php
session_start();
$_SESSION['x']= 0;
?>



<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="regi.css">
        </head>
        
        <body>
            <div class="whole">
                <header><h4>SCHOOL MANAGEMENT SYSTEM</h4></header>
                <div class="menu">
                    <a href="registrarportalhom.php" class="link2">HOME</a>
                    <span class="chosen">APPLICATIONS</span>
                    <a href="registrarportalaprv.php" class="link1">APPROVALS</a>
                    <a href="registrarportalmak.php" class="link1">MARKS</a>
                    <a href="registrarportalrep.php" class="link1">REPORTS</a>
                    <a href="loginregistrar.php" class="link1">Logout</a>
                </div>
                <div class="info">
                  <form action="" method="post"> 
                    <?php
$x =0;
$conn = mysqli_connect("localhost","root","","sms");
$sql = "SELECT * FROM biodata ORDER BY referenceNo";
$query = mysqli_query($conn,$sql);
$refNo = array('paul'=>'paul');
echo "<table  border='1px solid black'><tr><th>name</th><th>email</th><th>refNo</th><th>status</th>";
while($row= mysqli_fetch_assoc($query)){
	echo "<tr>";
	echo"<td>".$row['Surname']."</td>";
	echo"<td>".$row['Email']."</td>";
	echo"<td>".$row['referenceNo']."</td>";
	
	echo"<td>"."Accepted<input type='radio' name='status".$_SESSION['x']."' value= 'Accepted'>"."Rejected<input type='radio' name='status".$_SESSION['x']."' value= 'Rejected'>"."</td>";
	
	$refNo['status'.$_SESSION['x']] = $row['referenceNo'];
	$_SESSION['x']=$_SESSION['x']+1;
}
echo"</tr></table>";
	if(isset($_POST['submit'])){
	echo "whats wrong";
        for($i=0;$i<count($refNo);$i++){
           if(isset($_POST["status".$i])){
	            //echo($_POST['status'.$i]."<br>");
	            $ref = $refNo["status".$i];
				$query1 = "INSERT INTO students SELECT * FROM biodata WHERE referenceNo=".$ref;
				mysqli_query($conn,$query1);
				$query2 = "UPDATE students SET reference ='".$_POST['status'.$i]."'WHERE referenceNo=".$ref;
				if(mysqli_query($conn,$query2)){
					echo"it has occured"; 
				}else{
					echo"your wrong ";
				}
                $query3 = "UPDATE students SET RegistrationNo ='SMS/".$ref."'WHERE referenceNo=".$ref;
				if($_POST['status'.$i]=="Accepted"){
                if(mysqli_query($conn,$query3)){
					echo"regno set"; 
				}else{
					echo"regno not set ";
				}
                    $to = $row['Email'];
                    $subject = 'Admission Status';
                    $body = "This email is to inform you of you that you have been" .$_POST['status'.$i].". For the student account, your Registration Number is". $row['ReigistraionNo'] ."and password is your Surname.";
                    $headers = 'From: SMS <here@registration.com>';
                    
                    if (mail($to, $subject, $body, $headers)){
                    echo 'Email sent';
                    }else{
                    echo ' There was an error sending the email';
                    }
                }else{
                    $to = $row['Email'];
                        $subject = 'Admission Status';
                        $body = "Sorry your application has been rejected, incase of any queries you can follow up using your reference number.";
                        $headers = 'From: SMS <here@registration.com>';
                        
                        if (mail($to, $subject, $body, $headers)){
                            echo 'Reject Email sent';
                        }else{
                            echo ' There was an error sending the reject email';
                        }
                }
}
}
}

?>
<input type ='submit' name='submit' id="admit" value="Apply">
                    </form>
                </div>
            </div>
        </body> 
    </html>   
    
    
   