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
                    <a href="registrarportalappl.php" class="link1">APPLICATIONS</a>
                    <a href="registrarportalaprv.php" class="link1">APPROVALS</a>
                    <a href="registrarportalmak.php" class="link1">MARKS</a>
                    <a href="registrarportalrep.php" class="link1">REPORTS</a>
                    <a href="loginregistrar.php" class="link1">Logout</a>
                </div>
                <div class="info">
                    <div id="welcome">
                        <h2>Welcome!</h2><br>
                        <p>Here is Your Activity Table</p><br><br>
                    </div><br><br>
                     <?php
                            $conn = mysqli_connect("localhost","root","","sms");
                            $sql = "SELECT * FROM semester_guide";
                            $query = mysqli_query($conn,$sql);
                            echo "<table><tr><th>Date</th><th>acitivity</th><th>location</th></tr>";
                            while($row=mysqli_fetch_assoc($query)){
                                
                            echo"<tr><td>".$row['Date']."</td><td>".$row['Activity']."</td><td>".$row['Location']."</td></tr>";
                            }
                            echo"</table>";
                        ?>
                   
                </div>
            </div>
        </body> 
    </html>   
    
    
   