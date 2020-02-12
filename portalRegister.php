<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="ourstyle3.css">
        </head>
        
        <body>
            <div class="whole">
                <header><h4>SCHOOL MANAGEMENT SYSTEM</h4></header>
                <div class="menu">
                    <span id="chosen">Registration</span>
                    <a href="portalPayment.php" class="link1">Payments</a>
                    <a href="portalResults.php" class="link1">Results</a>
                    <div class="links">
                      <button onclick="myFunction()" class="dropbutton">Profile</button>
                        <div id="dropList" class="dropcontent">
                            <a href="edit bio.php">Edit Bio</a>
                            <a href="application.php">Online Application</a>
                            <a href=#>Change Picture</a>
                            <a href="home.php">Logout</a>
                        </div>
                    </div>
                </div>
                <script>
                    
                        selectarray =  document.getElementsByName("course[]");
                    function paul(){
                       //alert("eem");
                       selectedProg = document.getElementById("programSelected");
                       selecting = selectedProg.options[selectedProg.selectedIndex].text;
                       //alert("dkkdk");
                       switch(selecting){
                        case "Masters of IT":
                            //alert("kdkk");
                             mit();
                             //alert("mit");
                             break;
                        case"Masters of Computing":
                            mic();
                            //alert("moc");
                            break;
                        case"Masters of IS":
                            mis();
                            //alert("is");
                            break;
                        case"Diploma in Software Engineering":
                            dse();
                            //alert("dise");
                            break;
                       }
                    }
                    function mic(){
                        for(i=0;i<selectarray.length;i++){                 
                            selectarray[i].innerHTML = "<option>none</option>\
	        <option>CS507:Machine Learning</option>\
			<option>TM500:Research Methods</option>\
			<option>SE500:Software Design & Modelling</option>\
			<option>CS505:Advanced Programming</option>\
            <option>CS506:Contemporary Issues in Computing</option>";
                        }
                    }
                    function mit(){
                        for(i=0;i<selectarray.length;i++){                 
                            selectarray[i].innerHTML = "<option>none</option><option>IT501:Electronic Commerce Technologies</option>\
            <option>CS508:Cell Phone Applications Development</option>\
			<option>CS509:Mobile Cloud Computing</option>\
			<option>CS510:Cryptosystems</option>\
			<option>NW500:Unified Communications Design</option>";
                        }
                    }
                    function mis(){
                        for(i=0;i<selectarray.length;i++){                 
                            selectarray[i].innerHTML = "<option>none</option><option >CS600:Advanced Programming</option>\
			<option>CS601:Conteporary Issues in Computing</option>\
			<option>CS602:Machine Learning</option>\
            <option>TM500:Research Methods</option>\
			<option>SE600:Software Design& Modelling</option>";
                        }
                    }
                    function dse(){
                        for(i=0;i<selectarray.length;i++){                 
                            selectarray[i].innerHTML = "<option>none</option><option>CS505:Advanced Programming</option>\
<option>CS506:Contemporary Issues in Computing</option>\
<option>CS511:Information Security</option>\
<option>TM500:Research Methods</option>";

                        }
                    }
                </script>
                <div class="info">
                    <form action="portalRegister.php" method="POST">
                    <select id = "programSelected" name ="program" onchange="paul();">
                        <option>Masters of IT</option>
                        <option>Masters of Computing</option>
                        <option>Masters of IS</option>
                        <option>Diploma in Software Engineering</option>
                    </select><br><br><br>
                   RegistrationNumber <input id="reg" type="text" name = "regNo"  required="true"><br><br><br>
         <p><label>Course Unit:</label>   
        <select name="course[]" >
			<option>none</option>
			<option >CS507:Machine Learning</option>
			<option >TM500:Research Methods</option>
			<option >SE500:Software Design & Modelling</option>
			<option >IT501:Electronic Commerce Technologies</option>
			<option >CS508:Cell Phone Applications Development</option>
			<option >CS509:Mobile Cloud Computing</option>
			<option >CS510:Cryptosystems</option>
			<option >NW500:Unified Communications Design</option>
			<option >CS600:Advanced Programming</option>
			<option >CS601:Conteporary Issues in Computing</option>
			<option >CS602:Machine Learning</option>
			<option >SE600:Software Design& Modelling</option>
			<option >CS505:Advanced Programming</option>
			<option >CS511:Information Security</option>
		</select></p><br><br>


		<p><label>Course Unit:</label>
		<select name="course[]" >
			<option>none</option>
			<option value="CS507:Machine Learning">CS507:Machine Learning</option>
			<option value="TM500:Research Methods">TM500:Research Methods</option>
			<option value="SE500:Software Design & Modelling">SE500:Software Design & Modelling</option>
			<option value="IT501:Electronic Commerce Technologies">IT501:Electronic Commerce Technologies</option>
			<option value="CS508:Cell Phone Applications Development">CS508:Cell Phone Applications Development</option>
			<option value ="CS509:Mobile Cloud Computing">CS509:Mobile Cloud Computing</option>
			<option value ="CS510:Cryptosystems">CS510:Cryptosystems</option>
			<option value ="NW500:Unified Communications Design">NW500:Unified Communications Design</option>
			<option value ="CS600:Advanced Programming">CS600:Advanced Programming</option>
			<option value ="CS601:Conteporary Issues in Computing">CS601:Conteporary Issues in Computing</option>
			<option value = "CS602:Machine Learning">CS602:Machine Learning</option>
			<option value = "SE600:Software Design& Modelling">SE600:Software Design& Modelling</option>
			<option value = "CS505:Advanced Programming">CS505:Advanced Programming</option>
			<option value = "CS511:Information Security">CS511:Information Security</option>
		</select></p><br><br>

	    <p><label>Course Unit:</label>
		<select name="course[]" >
			<option>none</option>
			<option value="CS507:Machine Learning">CS507:Machine Learning</option>
			<option value="TM500:Research Methods">TM500:Research Methods</option>
			<option value="SE500:Software Design & Modelling">SE500:Software Design & Modelling</option>
			<option value="IT501:Electronic Commerce Technologies">IT501:Electronic Commerce Technologies</option>
			<option value="CS508:Cell Phone Applications Development">CS508:Cell Phone Applications Development</option>
			<option value ="CS509:Mobile Cloud Computing">CS509:Mobile Cloud Computing</option>
			<option value ="CS510:Cryptosystems">CS510:Cryptosystems</option>
			<option value ="NW500:Unified Communications Design">NW500:Unified Communications Design</option>
			<option value ="CS600:Advanced Programming">CS600:Advanced Programming</option>
			<option value ="CS601:Conteporary Issues in Computing">CS601:Conteporary Issues in Computing</option>
			<option value = "CS602:Machine Learning">CS602:Machine Learning</option>
			<option value = "SE600:Software Design& Modelling">SE600:Software Design& Modelling</option>
			<option value = "CS505:Advanced Programming">CS505:Advanced Programming</option>
			<option value = "CS511:Information Security">CS511:Information Security</option>
		</select></p><br><br>

		<p><label>Course Unit:</label>
		<select name="course[]" >
			<option>none</option>
			<option value="CS507:Machine Learning">CS507:Machine Learning</option>
			<option value="TM500:Research Methods">TM500:Research Methods</option>
			<option value="SE500:Software Design & Modelling">SE500:Software Design & Modelling</option>
			<option value="IT501:Electronic Commerce Technologies">IT501:Electronic Commerce Technologies</option>
			<option value="CS508:Cell Phone Applications Development">CS508:Cell Phone Applications Development</option>
			<option value ="CS509:Mobile Cloud Computing">CS509:Mobile Cloud Computing</option>
			<option value ="CS510:Cryptosystems">CS510:Cryptosystems</option>
			<option value ="NW500:Unified Communications Design">NW500:Unified Communications Design</option>
			<option value ="CS600:Advanced Programming">CS600:Advanced Programming</option>
			<option value ="CS601:Conteporary Issues in Computing">CS601:Conteporary Issues in Computing</option>
			<option value = "CS602:Machine Learning">CS602:Machine Learning</option>
			<option value = "SE600:Software Design& Modelling">SE600:Software Design& Modelling</option>
			<option value = "CS505:Advanced Programming">CS505:Advanced Programming</option>
			<option value = "CS511:Information Security">CS511:Information Security</option>
		</select></p><br><br>
		<i><input  type="submit" name="submit" value="submit" id="submit"/></i>
           <?php
            $servername = "localhost";
            $username ="root";
            $password ="";
            $db = "sms";
            
            $course ="";
            if(isset($_POST['submit'])){
                $regNo = $_POST["regNo"];
            $courseArray =$_POST["course"];
            $conn = mysqli_connect($servername,$username,$password,$db);
            if(!$conn){
                echo "error when connecting to the database";
            }
            foreach($courseArray as $course){
            $query = "INSERT INTO registration(courseName,regNo) VALUES('".mysqli_real_escape_string($conn,$course)."',$regNo)";
            if(mysqli_query($conn,$query)){
                echo"<h1>your registered</h1>";
            }else{
                echo"fatal error";
            }
            }
            }
            ?>
                </form>
                </div>
                <div class="dash">
                    <p><a href="portalDash.php">Dashboard</a></p><br><br>
                    <p><a href="exam permit.pdf" target="_blank" class="space">Exam Permit</a></p>
                    <p><img src="calendar.png"><br>Date: <span id="date"><span></p>
                </div>
            </div>
            <script >
                                   //Toggle between hiding and showing the links content 
                function myFunction() {
                    document.getElementById("dropList").classList.toggle("show");
                }
                // Close the links onclicking outside of it
                window.onclick = function(event) {
                  if (!event.target.matches('.dropbutton')) {
                    var menu = document.getElementsByClassName("dropcontent");
                    for (var i = 0; i < menu.length; i++) {
                      var openDropdown = menu[i];
                      if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                      }
                    }
                  }
                }
                var cal= new Date();
                var d=cal.getDate();
                var m=cal.getMonth()+1;
                var y=cal.getFullYear();
                document.getElementById("date").innerHTML= d+"/"+m+"/"+y;
                 
            </script>
            
        </body> 
    </html>   
    
    
   