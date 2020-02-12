<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="admin.css">
        </head>
        
        <body>
            <div class="whole">
                <header><h4>SCHOOL MANAGEMENT SYSTEM</h4></header>
                <div class="menu">
                <a href="admin.php" class="link2">HOME</a>
                    <a href="admin1.php" class="link1">Registrar</a>
                    <a href="admin2.php" class="link1">Accountant</a>
                    <a href="home.php" class="link1">Logout</a>
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
    
    
   