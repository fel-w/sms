
<?php
$conn = mysqli_connect("localhost", "root", "", "sms");
//select database
  $sql = " SELECT * FROM diploma_softawre_engineering;";
    $result = $conn->query($sql);
    $conn->close();
?>

<?php
$connn = mysqli_connect("localhost", "root", "", "sms");
//select database
  $sqls = " SELECT * FROM masters_of_computing;";
    $results = $connn->query($sqls);
    $connn->close();
?>

<?php
$w = mysqli_connect("localhost", "root", "", "sms");
//select database
  $s = " SELECT * FROM masters_of_is;";
    $m = $w->query($s);
    $w->close();
?>

<?php
$connection = mysqli_connect("localhost", "root", "", "sms");
//select database
  $msql = " SELECT * FROM masters_of_it;";
    $re = $connection->query($msql);
    $connection->close();
?>

<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="account.css">
        </head>
        
        <body>
            <div class="whole">
                <header><h4>SCHOOL MANAGEMENT SYSTEM</h4></header>
                <div class="menu">
                <a href="account.php" class="link2">HOME</a>
                    <span class="chosen">Revenue</span>
                     <a href="account2.php" class="link1">All Payments</a>
                    <a href="home.php" class="link1">Logout</a>
                </div>
                <div class="info">
                    
                    <div id="t1"><table>
                         <p>Diploma Software Engineering</p>
                         <tr>
                            <th>Other names</th>
                             <th>Last Name</th>
                             <th>Registration Number</th>
                             <th>Payment</th>
                            
                            
                         </tr>
                     <?php
                     if($result->num_rows > 0){
                         while($row = $result->fetch_assoc()){
                             ?>
                     <tr>
                        <td><?php echo $row['Othernames'];?></td>
                        <td><?php  echo $row['LastName']; ?></td>
                        <td><?php echo $row['RegistrationNo']; ?></td>
                        <td><?php  echo $row['Payment']; ?> </td>
                    
                       
                     </tr>
                     <?php 
                         }
                     }
                     else
                     {
                         ?>
                         <?php
                     }
                     
                     ?>
                     </table></div><br>
                    
                      <div id="t2"><table>
                         <p>Masters of computing </p>
                         <tr>
                            <th>Other names</th>
                             <th>Last Name</th>
                             <th>Registration Number</th>
                             <th>Payment</th>
                            
                            
                         </tr>
                     <?php
                     if($results->num_rows > 0){
                         while($rows = $results->fetch_assoc()){
                             ?>
                     <tr>
                        <td><?php echo $rows['OtherNames'];?></td>
                        <td><?php  echo $rows['LastName']; ?></td>
                        <td><?php echo $rows['RegistrationNo']; ?></td>
                        <td><?php  echo $rows['Payment']; ?> </td>
                    
                       
                     </tr>
                     <?php 
                         }
                     }
                     else
                     {
                         ?>
                         <?php
                     }
                     
                     ?>
                     </table></div><br>
                      
                        <div id="t3"><table>
                         <p>Masters of IS </p>
                         <tr>
                            <th>Other names</th>
                             <th>Last Name</th>
                             <th>Registration Number</th>
                             <th>Payment</th>
                            
                            
                         </tr>
                     <?php
                     if($m->num_rows > 0){
                         while($k = $m->fetch_assoc()){
                             ?>
                     <tr>
                        <td><?php echo $k['OtherNames'];?></td>
                        <td><?php  echo $k['LastName']; ?></td>
                        <td><?php echo $k['RegistrationNo']; ?></td>
                        <td><?php  echo $k['Payment']; ?> </td>
                    
                       
                     </tr>
                     <?php 
                         }
                     }
                     else
                     {
                         ?>
                         <?php
                     }
                     
                     ?>
                     </table></div><br>
                        <div id="t4"><table>
                         <p>Masters of IT </p>
                         <tr>
                            <th>Other names</th>
                             <th>Last Name</th>
                             <th>Registration Number</th>
                             <th>Payment</th>
                            
                            
                         </tr>
                     <?php
                     if($re->num_rows > 0){
                         while($ro = $re->fetch_assoc()){
                             ?>
                     <tr>
                        <td><?php echo $ro['OtherNames'];?></td>
                        <td><?php  echo $ro['LastName']; ?></td>
                        <td><?php echo $ro['RegistrationNo']; ?></td>
                        <td><?php  echo $ro['Payment']; ?> </td>
                    
                       
                     </tr>
                     <?php 
                         }
                     }
                     else
                     {
                         ?>
                         <?php
                     }
                     
                     ?>
                     </table></div><br>
                   
                   
                 
                </div>
            </div>
        </body> 
    </html>   
    
    
   