<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="ourstyle2.css">
        </head>
        
        <body>
            <div class="whole">
                <header><h4>SCHOOL MANAGEMENT SYSTEM</h4></header>
                <div class="menu">
                    <a href="portalRegister.php" class="link1">Registration</a>
                    <a href="portalPayment.php" class="link1">Payments</a>
                    <a href="portalResults.php" class="link1">Results</a>
                    <div class="links">
                      <button onclick="myFunction()" class="dropbutton">Profile</button>
                        <div id="dropList" class="dropcontent">
                            <a href="edit bio.php">Edit Bio</a>
                            <a href=#>Change Picture</a>
                            <a href="home.php">Logout</a>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <img src="icon.png" alt="avatar" class="icon">
                    <p class="welcome">Hello </p><br>  
                    <p>Welcome to your dashboard!</p>
                </div>
                <div class="dash">
                    <p><a href="portalDash.php">Dashboard</a></p><br><br>
                    <p><a href="exam permit.pdf" target="_blank" class="space">Exam Permit</a></p>
                    <p><img src="calendar.png"><br>Date: <span id="date"><span></p>
                </div>
            </div>
            <script src="portal.js"></script>
        </body> 
    </html>   
    
    
   