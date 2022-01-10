<!DOCTYPE html>
<html>
    <head>
        <title>Signup Multitech</title>
        <link href="signup.css" rel="Stylesheet">
    </head>
    <body>
        <h1 style="color: white;">MULTITECH-BARAMULLA-KASHMIR</h1>
        <div id="clr">
        <form onsubmit="return check()" action="login.html">
            <fieldset>
                <legend>Signup here</legend>
                <label class="align">Name</label><input type="text"><br><br>
                <label class="align" >Email</label><input type="email" id="email"><br><br>
                <label class="align" >Password</label><input type="password"><br><br>
                <label class="align">Confirm Password</label><input type="password"><br><br>
                <label class="align">Mobile Number</label><input type="number"><br><br>
                <input type="reset" value="RESET" id="res"><button style="margin-left: 40px; " id="sinup">Sign up</button><br>
                <h2 id="specl">Sign up with</h2>
                <label id="l">----------0----------</label>
                <div id="lsti">
                <a href="https://www.facebook.com/"><img src="photo/facebook (2).png" height="40px width=40px" style="margin-right: 20px;"></a>
                <a href="https://accounts.google.com/signin"><img src="photo/google.png" height="40px width=40px"></a>
              <br><br> <a href="Login.html"><label>Already signed up</label></a>
                </div>
                <!-- <input type="submit" value="send data"> -->
            </fieldset>
        </form>
    </div>
    <script src="Jquery/jquery-3.6.0.js"></script>
    <script src="Jquery/WebsiteJquery"></script>
    <script> 
    // alert("hey");
        function check()
    {
        if(document.getElementById('email').value=="")
        {
            alert("Please fill all the fields\n");
            return false;
        }
        else{
            alert("Sucessfully created your account")
            return true;
        }
    }

    </script>
    </body>
</html>