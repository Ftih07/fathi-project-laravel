<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #1E1E1E;
}

.wrapper {
    position: relative;
    width: 750px;
    height: 450px;
    background: transparent;
    border: 2px solid #FFF;
    box-shadow: 0 0 25px #FFF;
    overflow: hidden;
}


.wrapper .form-box{
    position: absolute;
    top: 0;
    width: 50%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.wrapper .form-box.login{
    left: 0;
    padding: 0 60px 0 40px;
}

.wrapper .form-box.login .animation{
    transform: translateX(0);
    opacity: 1;
    filter: blur(0);
    transition: .7s ease;
    transition-delay: calc(.1s * var(--j));
}
.wrapper.active .form-box.login .animation{
    transform: translateX(-120%);
    opacity: 0;
    filter: blur(10px);
    transition-delay: calc(.1s * var(--i));
}
.wrapper .form-box.register{
    right: 0;
    padding: 0 40px 0 60px; 
    pointer-events: none;
}

.wrapper.active .form-box.register{
    pointer-events: auto;
}

.wrapper .form-box.register .animation{
    transform: translateX(120%);
    opacity: 0;
    filter: blur(10px);
    transition: .7s ease;
    transition-delay: calc(.1s * var(--j));
}
.wrapper.active .form-box.register .animation{
    transform: translateX(0);
    opacity: 1;
    filter: blur(0);
    transition-delay: calc(.1s * var(--i));
}

.form-box h2{
    font-size: 32px;
    color: #fff;
    text-align: center;
}

.form-box .input-box{
    position: relative;
    width: 100%;
    height: 50px;
    margin: 13px 0;
}
.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 2px solid #fff;
    padding-right: 23px;
    font-size: 16px;
    color: #fff;
    font-weight: 500;
    transition: .5s;
}
.input-box input:focus,
.input-box input:valid{
    border-bottom-color: #FABB41;
}
.input-box label{
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
}
.input-box input:focus~label,
.input-box input:valid~label {
    top: -5px;
    color: #FABB41;
}
.input-box i{
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    font-size: 18px;
    color: #fff;
    transition: .5s;
}

.input-box input:focus~i,
.input-box input:valid~i {
    color: #FABB41;
}
.btn{
    position: relative;
    width: 100%;
    height: 45px;
    background: transparent;
    border: 2px solid #FFF;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 16px;
    color: #fff;
    font-weight: 600;
    z-index: 1;
    overflow: hidden;
}
.btn::before {
    content: '';
    position: absolute;
    top: -100%;
    left: 0;
    width: 100%;
    height: 300%;
    background: linear-gradient(#000, #FABB41, #000, #FABB41);
    z-index: -1;
    transition: .5s;
}
.btn:hover::before{
    top: 0;
}

.form-box .logreg-link{
    font-size: 14.5px;
    color: #fff;
    text-align: center;
    margin: 20px 0 10px;
}

.logreg-link p a {
    color: #FABB41;
    text-decoration: none;
    font-weight: 600;
}
.logreg-link p a:hover{
    text-decoration: underline;
}

.wrapper .info-text {
    position: absolute;
    top: 0;
    width: 50%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.wrapper .info-text.login{
    right: 0;
    text-align: right;
    padding: 0 40px 60px 100px;
}
.wrapper .info-text.login .animation{
    transform: translateX(0);
    opacity: 1;
    filter: blur(0);
    transition: .7s ease;
    transition-delay: calc(.1s * var(--j));
}

.wrapper.active .info-text.login .animation{
    transform: translateX(120%);
    opacity: 0;
    filter: blur(10px);
    transition-delay: calc(.1s * var(--i));
}

.wrapper .info-text.register{
    left: 0;
    text-align: left;
    padding: 0 150px 60px 40px;
    pointer-events: none;
}

.wrapper.active .info-text.register{
    pointer-events: auto;
}

.wrapper .info-text.register .animation{
    transform: translateX(-120%);
    opacity: 0;
    filter: blur(10px);
    transition: .7s ease;
    transition-delay: calc(.1s * var(--j));
}

.wrapper.active .info-text.register .animation{
    transform: translateX(0);
    opacity: 1;
    filter: blur(0);
    transition-delay: calc(.1s * var(--i));
}
.info-text h2{
    font-size: 36px;
    color: #ffff;
    line-height: 1.3;
    text-transform: uppercase;
}
.info-text p{
    font-size: 16px;
    color: #fff;
}

.wrapper .bg-animate {
    position: absolute;
    top: -4px;
    right: 0;
    width: 850px;
    height: 600px;
    background: linear-gradient(45deg, #081b29, #FABB41);
    border-bottom: 3px solid #FFF;
    transform: rotate(10deg) skewY(40deg);
    transform-origin: bottom right;
    transition: 1.5s ease;
    transition-delay: 1.6s;
}

.wrapper.active .bg-animate {
    transform: rotate(0) skewY(0);
    transition-delay: .5s;
}

.wrapper .bg-animate2 {
    position: absolute;
    top: 100%;
    left: 250px;
    width: 850px;
    height: 700px;
    background: #1E1E1E;
    border-top: 3px solid #FABB41 ;
    transform: rotate(0) skewY(0);
    transform-origin: bottom left;
    transition: 1.5s ease;
    transition-delay: .5s;
}

.wrapper.active .bg-animate2{
    transform: rotate(-11deg) skewY(-41deg);
    transition-delay: 1.2s;
}




@media  (max-width: 400px ) {
    .wrapper {
    height: 50vh;
    width: 50vh;
    }
    .wrapper .info-text.login{
        display: none;
    }
    .wrapper .bg-animate{
        width: 900px;
        height: 400px;
    }
    .wrapper .form-box.login{
        align-items: center;
        justify-content: center;
        text-align: center;
        
    }
    .wrapper form{ align-items: center; }


    
    
}
</style>

<body>

    <div class="wrapper">
        <span class="bg-animate"></span>
        <span class="bg-animate2"></span>

        <div class="form-box login">
            <h2 class="animation" style="--i:0; --j:21;">Login</h2>
            <form action="#" id="loginForm">
                <div class="input-box animation" style="--i:1; --j:22">
                    <input type="text" name="username" id="username" required>
                    <label for="username">Username</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:2; --j:23">
                    <input type="password" name="password" id="password" required>
                    <label  for="password">Password</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn animation" style="--i:3; --j:24">Login</button>
                <div class="logreg-link animation" style="--i:4; --j:25">
                    <p>Don't have an account? <a href="#" class="register-link">Sign Up</a></p>
                </div>
            </form>
        </div>
        <div class="info-text login">
            <h2 class="animation" style="--i:0; --j:20;">HI WELCOME</h2>
            <p class="animation" style="--i:1; --j:21;">To Naltlan Dealer “Supecars & Engines”</p>
        </div>


        <div class="form-box register">
            <h2 class="animation" style="--i:17; --j:0;">Sign Up</h2>
            <form action="#">
                <div class="input-box animation" style="--i:18; --j:1">
                    <input type="text" required>
                    <label>Username</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:19; --j:2">
                    <input type="text" required>
                    <label>Email</label>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box animation" style="--i:20; --j:3">
                    <input type="password" required>
                    <label>Password</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn animation" style="--i:21; --j:4">Sign Up</button>
                <div class="logreg-link animation" style="--i:22; --j:5">
                    <p>Allready have an account? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>

        <div class="info-text register">
            <h2 class="animation" style="--i:17; --j:0;">WELCOME BACK</h2>
            <p class="animation" style="--i:18; --j:1;">We always waiting for you</p>
        </div>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>