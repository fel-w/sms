<!DOCTYPE html>
    <html>
        <head>
            <style>
                 body, h1, h2, h3, h4, h5, h6, p, div{
                    padding: 0px;
                    margin: 0px;
                    font: 18px Verdana;     /*Declares all the elements' paddings and margins to zero
                                            to enable custom editting*/
                }
                form {
                    margin: 80px auto;
                    border: 4px  #414158 solid;   /*CSS for positioning coloring and bordering the form*/
                    background-color: 	#d3d3de;
                    margin-left: 32px;
                    margin-right: 72px;
                   
                }
                
                .whole{
                    border: none;             
                    margin: 5px auto;       /*CSS for positioning the contents below header*/
                    width: 1000px;
                }
                .wrapper {
                    padding: 20px;      /*CSS for spacing the form fields*/
                }
                
                .image{
                    text-align:center;          /*CSS for positioning image class*/
                    margin-top:15px; 
                }
                .container{
                    border: none;
                    width: 1000px;
                    margin: 5px auto;
                    background-color: #ffffff;
                }
                img.icon {
                    padding: 5px;               /*CSS for bordering and positioning image itself*/
                    border-radius: 49%;
                    border: 2px solid #414158;
                    background-color: #ffffff;
                }
                header {
                    background-color: #414158;
                    text-align: center;
                    color: white;
                    font-size: 20px;                /*CSS for customizing the header*/
                    font-weight: 200;
                    padding-top: 40px;
                    padding-bottom: 40px;
                    border: 1px solid #001a1a;
                    margin-top:20px;
                    
                }
                
                h2 {
                    margin:30px;
                    color:#414158;
                }
                input[type=text], input[type=password] {
                    padding: 12px 24px;
                    width: 90%;                         /*CSS for customizing the form fields*/
                    margin: 8px 4px;
                    
                }
                input[type=submit] {
                    color: white;
                    background-color:  #414158;
                    border-radius: 4px;                 /*CSS for customizing the submit button*/
                    border:none;
                    padding: 8px;
                    width: 140px;
                    text-align: center;
                    margin-top: 10px;
                    margin-left: 600px;
                    cursor: pointer;
                }
                label {
                    font-weight: bold; 
                }
                
            </style>
        </head>
        
        <body>
            <div class="container">
            <header><h4>SCHOOL MANAGEMENT SYSTEM</h4></header>
            <div class="whole">
                <form>
                    <h2>Welcome!</h2>
                    <div class="image">
                        <img src="icon.png" alt="avatar" class="icon">
                    </div>
                    <div class="wrapper">
                        <label>Username</label><br>
                        <input type=text name=uname placeholder="Enter Username" required><br>
                        <label>Password</label><br>
                        <input type="password" name="pass" placeholder="Enter Password" required><br>
                        
                        <input type="submit" value="Login"> 
                    </div> 
                </form>
            </div>
            </div>
        </body> 
       
    </html>
    
   