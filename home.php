<!doctype html>
    <html>
        <head>
            <style>
            body, button,a, h1, h2, h3, h4, h5, h6, p, div,span{
               padding: 0px;
               margin: 0px;
               outline: 0;
               font-family: arial;
            }
            
            img{
               width: 100%;
               height: 775px;
            }
            #head{
                position: fixed;
                z-index: 1;
                border: solid 1px #899832;
                background-color: #acbf40;
                width: 100%;
            }
            #header{
                padding: 40px;
                color: #ecf8f8;
            }
            #header h4{
               font-size: 30px;
               line-height: 1.5;
               margin-left: 8px;
            }
            #apply a{
                left: 930px;
                position: absolute;
                top: 60px;  
            }
            .dropbutton::after{
               font-family: FontAwesome;
               content: '\v';
               display: inline-block;
               border-left: solid 1px #ecf8f8;
               margin-left: 10px;
               position: absolute;
               margin-top: -5px;
               padding: 8px 6px;
               font-size: 13px;
               cursor: pointer;
            }
            .links .dropbutton {
                top: -20px;
                position: absolute;
                left: 70px;
                padding-right: 30px;
            }
            #apply a, .dropbutton {
                color: white;
                font-size: 16px;
                border: none;
                cursor: pointer;
                border-left:1px solid #ecf8f8;
                border-right:1px solid #ecf8f8;
                padding: 8px 20px;
                background-color: #acbf40;
                text-decoration: none;
            }
            .links{
               margin-left: 700px;
               top:80px;
               font-size: 18px;
               display: inline-block;
               position: absolute;
            }
            .dropcontent {
                display: none;
                position: absolute;
                margin-top:15px;
                left: 69px;
                background-color: #f9f9f9;
                min-width: 160px;
                border: 1px solid #93BBC5;
            }
            .dropcontent a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }
             #apply a:hover, .dropbutton:hover{
               background-color: #d6df9f;
               border-left:1px solid #78862d;
               border-right:1px solid #78862d;
               color:#343913;
            }
            #apply a:focus, .dropbutton:focus, #apply a:active, .dropbutton:active{
               background-color:#78862d;
               border-left:1px solid #343913;
               border-right:1px solid #343913;
               color: #ecf8f8;
            }
            .links a:hover {background-color: #f1f1f1}
            
            .show {display:block;}
            </style>
        </head>  
        <body>
            <div id="divWrap">
                <div id="head">                     
                    <div id="header">
                       <h4>SCHOOL<br>MANAGEMENT SYSTEM</h4>
                    </div>
                        <div class="links">
                          <button onclick="myFunction()" class="dropbutton">Login</button>
                            <div id="dropList" class="dropcontent">
                                <a href="loginStud.php">Student</a>
                                <a href="loginRegistrar.php">Registrar</a>
                                <a href="loginAccount.php">Accountant</a>
                                <a href="loginAdmin.php">System Admin</a>
                            </div>
                        </div>
                        <div id="apply">
                            <a href="application.php">Online Application</a> 
                        </div>
                </div>
                    <img src="school.png" alt="school" class="pic">
            </div>
            <script src="dropdown.js"></script>
        </body>
    </html>