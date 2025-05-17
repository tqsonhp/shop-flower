<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/mainlogin.css">
    
    <title>Login</title>
</head>
<body>

    
    <div class="login_container">

        <div class="login_item">

                <h2>Sign in</h2>

            <p class="login_p">Sign in to your account using email and password provided during registration.</p>

            <form action="">

                <label for="email">  📧 Email</label>
                <input type="email" id="email" name="email" placeholder="Nhập email của bạn:" required>


                <label for="password"> 🔒 Password</label>
                <input type="password" id="password" name="password" placeholder="Nhập password của bạn:" required>


                <div class="signed">
                    <div class="signed_item">
                        <input type="checkbox" name="signed" id="signed">
                        <label for="signed" class="oksigned" >Keep me signed in</label>
                    </div>
                    <div class="signed_item">
                         <a href="" class="signed_a">Forgot password?</a>
                    </div>
                </div>


               

                <button>Sign in</button>

                <div class="sign_in">
                    <p>Don't have an account?</p>
                    <a href="/logup" class="text_signin">Sign up</a>
                </div>
            </form>
        </div>
    </div>
   
</body> 
</html>