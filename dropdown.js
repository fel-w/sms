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