<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="ourstyle3.css">
        </head>
        
        <body>
            <div class="whole">
                <header><h4>SCHOOL MANAGEMENT SYSTEM</h4></header>
                <div class="menu">
                    <a href="portalRegister.php" class="link1">Registration</a>
                    <span id="chosen">Payments</span>
                    <a href="portalResults.php" class="link1">Results</a>
                    <div class="links">
                      <button onclick="myFunction()" class="dropbutton">Profile</button>
                        <div id="dropList" class="dropcontent">
                            <a href="edit bio.html">Edit Bio</a>
                            <a href="application.php">Online Application</a>
                            <a href=#>Change Picture</a>
                            <a href="home.php">Logout</a>
                        </div>
                    </div>
                    
                </div>
                <div class="info">
                    <h4>Name</h4><br>
                        
                        <table class="table1">
                            <tr>
                                <th>DESCRPTION</th>
                                <th>DEBIT</th>
                                <th>CREDIT</th>
                            </tr>
                            <tr>
                                <td>REGISTRATION</td>
                                <td>50,000</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>LIBRARY</td>
                                <td>20,000</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>ICT FEES</td>
                                <td>10,000</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>GUILD</td>
                                <td>20,000</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>COURSE FEES</td>
                                <td>number</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td> 
                                <th>TOTAL</th>
                                <td></td>
                            </tr>
                        </table><br><br>
                        <a href="financial statement.pdf" id="print" target="_blank">Print Financial Statement</a>
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
    
    
   