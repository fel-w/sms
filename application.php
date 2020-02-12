


<!doctype html>
   
   <html>
      <head>
         <title></title>
         <link rel="stylesheet" type="text/css" href="ourStyle.css">
      </head>
      <body>
         <div id="divWrap">
            <header><h4>SCHOOL MANAGEMENT SYSTEM</h4></header>
               <div id="divOne"><p>
                  <strong>Important!</strong><br>
                  Please fill in your form Correctly. All fields marked <span class="red">*</span> are Mandatory<br>
                  Falsification of Information/Documents is PROHIBITED! This, if discovered, will lead to automatic disqualification!
               </p></div>
            <form id="form1" action="sms.php" method="post" enctype="multipart/form-data">
               <div id="divTwo">
                  <fieldset>
                     <legend><h4> Bio Information </h4></legend><br>
                     
                        <span class="label" >Surname</span> <input type="text" required name="lname" size="20" ><br><br>
                        
                        <span class="label">Other names</span>  <input type="text" required name="othernames" size="40"><br><br>
                        
                        <span class="label1">Mobile Number</span>  <input type="text" name="phone" size="20"><br><br>
                        
                        <span class="label">E-mail</span>  <input type="email" required name="email" size="20" ><br><br>
                        
                        
                        <span class="label">Date of birth</span><input type="date" required name="dob"><br><br>
                       
                        <span class="label">Religion</span>  <input type="text" required name="religion" size="20" ><br><br>
                        
                        <span class="label">Gender</span>  Male <input type="radio" required name="gender" value="male">   Female <input type="radio" name="gender" value="female"><br><br>
                        
                        <span class="label">Nationality</span>  <input type="text" required name="nationality" size="20" ><br><br>
                        
                        <span class="label">Marital status </span>  <input type="text" required name="status" size="20" ><br><br>
                        
                        <span class="label">Residence </span> <input type="text" required name="residence" size="20" ><br><br>
                        
                        <input type="text"  name="reference" size="10" hidden>
              </div>
                   </fieldset>  
               <div id="divFour">
                  <fieldset>
                  <legend><h4> Next of Kin </h4></legend><br>
                     
                     <span class="label">Name</span>  <input type="text" required name="Kname" size="20" ><br><br>
                     
                     <span class="label">E-mail Address</span>  <input type="email" required name="Kemail" size="20" ><br><br>
                     
                     <span class="label">Relationship</span>  <input type="text" required name="relationship" size="20" ><br><br>
                     
                     <span class="label">Mobile No</span> <input type="text" required name="Kphone" size="20" ><br><br>
                     
                     <span class="label">Place of Residence</span>  <input type="text" required name="residence" size="20" ><br><br>
                     
               </div>
                  </fieldset>
                              <div id="divFive">
                  <fieldset> 
                  <legend><h4 class="label2">Program Choice:</h4></legend><br><p>Please check the programs available and make a selection</p><br>
                     <select name="Courses" id="myBtn">
                       <option value="MASTERS IN COMPUTING">MASTERS IN COMPUTING</option>
                       <option value="MASTERS OF IT">MASTERS OF IT</option>
                       <option value="MASTERS OF IS">MASTERS OF IS</option>
                       <option value="DIPLOMA SOFTWARE ENGINEERING">DIPLOMA SOFTWARE ENGINEERING</option>
                       </select>
                    
                    <div id="myModal" class="modal">
                       <div class="modal-content">
                          <p id="modaltext"></p>
                          <span class="close"><button type="button" id="accept">I Accept</button> <button type="button" id="cancel">Cancel</button></span>
                       </div>
                    </div>
                    <div id="upload"></div><br><br><br><br><br>
               </div>
                 </fieldset>
         <div id="divSix"><input type="submit" value="Apply" name="submit" id="Btn2"></div>
            <div id="myModal2" class="modal2">
               <div class="content2">
                  <span class="close2"><button type="button">Okay</button></span>
                    <p>Please note down this number, it will be your reference number for follow up purposes!<?php></p>
               </div>
            </div>
        <script>
        // Gets the modal
        var modal = document.getElementById('myModal');
        
        // Opens the modal
        var btn = document.getElementById("myBtn");
        
        // Closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        //Gets the submit button
        var submit = document.getElementById("divSix");
        
        //Onclicking the button, the modal opens
        btn.onclick = function() {
          var course1 = btn.options[btn.selectedIndex].text;
                 var coursedetail =  document.getElementById("modaltext");
                switch(course1){
                    case "MASTERS OF COMPUTING":
                      coursedetail.innerHTML = course1 + " requires a bachelors degree of Computer Science, Information Technology, Information Systems, Information Science, Networks, Data communication, Software Engineering or Telecommunications Engineering<br> And an A and O level certificate. <br>Please accept and upload    provided you have the requirements if not cancel.";
                      break;
                    case "MASTERS OF IT":
                        coursedetail.innerHTML = course1 + " requires a bachelors degree of Computer Science, Information Technology, Information Systems, Information Science, Networks, Data communication, Software Engineering or Telecommunications Engineering<br> And an A and O level certificate.<br> Please accept and upload    provided you have the requirements if not cancel.";
                        break;
                    case "MASTERS OF IS":
                        coursedetail.innerHTML = course1 + " requires a bachelors degree of Computer Science, Information Technology, Information Systems, Information Science, Networks, Data communication, Software Engineering or Telecommunications Engineering<br> And an A and O level certificate. <br>Please accept and upload    provided you have the requirements if not cancel.";
                        break;
                    case "DIPLOMA SOFTWARE ENGINEERING":
                        coursedetail.innerHTML = course1 +  " requires an A and O level certificate. <br>Please accept and upload   provided you have the requirements if not cancel.";
                        break;
                }
            modal.style.display = "block";
        }
        
        // When the user clicks on <span> (accept or cancel) the modal closes
        span.onclick = function() {
            modal.style.display = "none";
        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        //For either masters or diploma options, return the corresponding uploading details
        document.getElementById("accept").onclick = function(){
                document.getElementById("upload").innerHTML='<br><h4>Upload your scanned documents here:<br><input type="file" name="files[]"  multiple>';
                submit.style.display = "block";
        }
            var modal2 = document.getElementById('myModal2');
            
            
            var btn2 = document.getElementById("Btn2");
            
            
            var span2 = document.getElementsByClassName("close2")[0];
            
            
            btn2.onclick = function() {
                modal2.style.display = "block";
            }
            
            
            span2.onclick = function() {
                modal2.style.display = "none";
            }
            
            
            window.onclick = function(event2) {
                if (event2.target == modal2) {
                    modal2.style.display = "none";
                }
            }
         </script>
      </body>
   </html>