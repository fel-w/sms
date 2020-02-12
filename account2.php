
<?php
$conn = mysqli_connect("localhost", "root", "", "ssm");
//select database
  $sql = " SELECT * FROM charges;";
    $result = $conn->query($sql);
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
                    <a href="account1.php" class="link1">Revenue</a>
                    <span class="chosen">All Payments</span>
                    <a href="home.php" class="link1">Logout</a>
                </div>
                <div class="info">
                    <table>
                         <tr>
                             <th>Program Name</th>
                             <th>Program Fee</th>
                             <th>Ict Fees</th>
                             <th>Library</th>
                             <th>Registration Fee</th>
                             <th>Guild Fee</th>
                            
                         </tr>
                     <?php
                     if($result->num_rows > 0){
                         while($row = $result->fetch_assoc()){
                             ?>
                     <tr>
                        <td><?php echo $row['ProgramName'];?></td>
                        <td><?php  echo $row['ProgramFee']; ?></td>
                        <td><?php echo $row['ictFees']; ?></td>
                        <td><?php  echo $row['Library']; ?> </td>
                        <td><?php  echo $row['Registration'];?> </td>
                        <td><?php  echo $row['Guild'];?> </td>
                       
                        
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
                     </table>
                   
                   
                </div>
            </div>
        </body> 
    </html>   
    
    
   