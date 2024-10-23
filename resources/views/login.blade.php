<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>

<body class="flex justify-center items-center min-h-screen bg-[#1E1E1E]">

    <div class="relative w-[750px] h-[450px] border-2 border-white shadow-[0_0_25px_#fff] overflow-hidden bg-transparent">
        <span class="absolute top-[-4px] right-0 w-[850px] h-[600px] bg-gradient-to-br from-[#081b29] to-[#FABB41] border-b-2 border-white transform rotate-[10deg] skew-y-[40deg] origin-bottom-right transition-transform duration-[1.5s]"></span>
        <span class="absolute top-full left-[250px] w-[850px] h-[700px] bg-[#1E1E1E] border-t-2 border-[#FABB41] transition-transform duration-[1.5s]"></span>

        <div class="absolute top-0 w-1/2 h-full flex flex-col justify-center px-10 space-y-5">
            <h2 class="text-2xl text-white text-center">Login</h2>
            <form id="loginForm" class="space-y-4">

                <div class="relative w-full h-12">
                    <input type="text" name="username" id="username" required
                        class="peer w-full h-full bg-transparent border-b-2 border-white text-white font-medium focus:border-[#FABB41] outline-none pr-6"
                        placeholder=" ">
                    <label for="username"
                        class="absolute left-0 top-1/2 transform -translate-y-1/2 text-white transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-white peer-placeholder-shown:translate-y-0 peer-focus:-translate-y-10 peer-focus:text-[#FABB41]">
                        Username
                    </label>
                    <i class='bx bxs-user absolute right-0 top-1/2 transform -translate-y-1/2 text-white'></i>
                </div>
                <div class="relative w-full h-12">
                    <input type="password" name="password" id="password" required
                        class="peer w-full h-full bg-transparent border-b-2 border-white text-white font-medium focus:border-[#FABB41] outline-none pr-6"
                        placeholder=" ">
                    <label for="password"
                        class="absolute left-0 top-1/2 transform -translate-y-1/2 text-white transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-white peer-placeholder-shown:translate-y-0 peer-focus:-translate-y-10 peer-focus:text-[#FABB41]">
                        Password
                    </label>
                    <i class='bx bxs-lock-alt absolute right-0 top-1/2 transform -translate-y-1/2 text-white'></i>
                </div>

                <button type="submit"
                    class="relative w-full h-12 bg-transparent border-2 border-white rounded-full text-white font-semibold cursor-pointer overflow-hidden">
                    <span class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-black to-[#FABB41] transition-transform duration-500 transform -translate-y-full hover:translate-y-0"></span>
                    <span class="relative z-10">Login</span>
                </button>
                <div class="text-white text-center">
                    <p>Don't have an account? <a href="#" class="text-[#FABB41] font-semibold hover:underline">Sign Up</a></p>
                </div>
            </form>
        </div>

        <div class="absolute right-0 w-1/2 h-full flex flex-col justify-center text-right px-10 space-y-3">
            <h2 class="text-4xl text-white uppercase">Hi Welcome</h2>
            <p class="text-white ml-[4rem]">To Naltlan Dealer “Supercars & Engines”</p>
        </div>
    </div>

    <script src="assets/js/script.js"></script> 
</body>

</html>
