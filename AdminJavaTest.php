<?php
include 'header.php';
?>

<head>
        <title>
            Admin Login
        </title>
    </head>
    <body style="text-align: center;">
        <h1 style="color: black;">
            Admin Login
        </h1>
        <p>
              Login with your email and password
        </p>
        <button onClick="GFG_Fun()">
            click here
        </button>
        <p id="GFG_DOWN"></p>
        <script>
            var down = document.getElementById("GFG_DOWN");
            function GFG_Fun() {
               
                
                var form = document.createElement("form");
                form.setAttribute("method", "post");
                form.setAttribute("action", "submit.php");
 
                
                var ID = document.createElement("input");
                ID.setAttribute("type", "text");
                ID.setAttribute("name", "emailID");
                ID.setAttribute("placeholder", "E-Mail ID");
 
                
                var PWD = document.createElement("input");
                PWD.setAttribute("type", "password");
                PWD.setAttribute("name", "password");
                PWD.setAttribute("placeholder", "Password");
 
                
                var s = document.createElement("input");
                s.setAttribute("type", "submit");
                s.setAttribute("value", "Submit");
 
                
                form.append(ID);
               
                
                form.append(PWD);
               
                
                form.append(s);
 
                document.getElementsByTagName("body")[0]
               .appendChild(form);
            }
        </script>
    </body>

<?php
include 'footer.php';
?>