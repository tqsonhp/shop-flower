<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/mainlogup.css">
    
    <title>Logup</title>
</head>
<body>

    
    <div class="logup_container">

        <div class="logup_item">

                <h2>Sign up</h2>

            <p class="logup_p">Registration takes less than a minute but gives you full control over your orders.</p>

            <form action="/logup" method="POST">

                @csrf <!-- Token bảo mật Laravel -->

                @if ($errors->any())
                        <div style="color: rgb(77, 164, 207);">
                            <strong>❌ Ngu vãi l*n:</strong>
                            <ol>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ol>
                        </div>
                            @endif


                <label for="name">Họ và Tên</label>
                <input type="text" id="name" name="name" placeholder="Full Name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Emai" required>

                <label for="password">Password</label>
                <input type="password" id="pass" name="password" placeholder="Passwrod" required>


                <label for="comfirm pass">Xác nhận Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                {{-- cần đặt id là id="password_confirmation" để j ấy quên mất nhưng cần đặt id thế nào nhớ cmt lại ở đây --}}

                <button type="submit">Sign in</button>

                <div class="sign_up">
                    <p>Already have an account?</p>
                    <a href="/login" class="text_signup">Sign in</a>
                </div>
            </form>
        </div>
    </div>
   
</body> 
</html>