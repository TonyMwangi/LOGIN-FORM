<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="login" onsubmit="return validateForm()" action="login.php" method="post">
        <div class="login_container">
            <h4 class="heading">Buy more</h4>
            <!-- <?php function errorMesssage(){ echo}?> -->
            <label>e-mail</label><br>
            <input type="email" name="email" autocomplete="off" autosave="off" autofocus="on"><br>
            <div id="email_error"> Please check your email or password. email must be atleast 8 characters containing @ symbol and .com extension</div>
            <label>password</label><br>
            <input type="password" name="password" autocomplete="off" autosave="off"><br>
            <div id="password_error">Please check your email or password.password must be atleast 5 characters  </div>
            <a class="forgotpswrd" href="#">forgotten password ?</a><br>
            <input type="submit" value="login">
            <h4>login with</h4>
            <div class="socialmedia_login">
                <button>Google</button>
                <button>facebook</button><br>
            </div>
            <span class="loginspan001">New to buy&nbspmore platform ? <a href="signup.html">sign&nbspup</a></span>       
        </div>
        </form>
        <script>
            var email= document.forms["login"]["email"];
            var password= document.forms["login"]["password"];
            
            var email_error = document.getElementById('email_error'); 
            var password_error = document.getElementById('password_error'); 

            email.addEventListener('textInput', email_verify());
            password.addEventListener('textInput', password_verify());
        function validateForm() {
            
            if(email.value.length==null || email.value.length=="" ||email.value.length<15){
                email.style.border = "1px solid red";
                email_error.style.display = "block";
                email.focus();
                return false;
            }
            
            if(password.value.length== null || password.value.length=="" || password.value.length<5){
                password.style.border = "1px solid red";
                password_error.style.display = "block";
                password.focus();
                return false;
            }

        }
        function email_verify(){
            if(email.value.length >= 15){
                email.style.border = "1px solid silver";
                email_error.style.display = "none";
                return true;
            }
        }
        function password_verify(){
            if(password.value.length >=5){
                password.style.border = "1px solid silver";
                password_error.style.display = "none";
                return true;
            }
        }
    </script>
</body>
</html>