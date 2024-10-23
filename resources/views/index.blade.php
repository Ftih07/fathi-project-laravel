<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naltlan Dealer - Supercars & Engines</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
<body class="m-0 p-0 bg-black text-white font-poppins">

    <!-- Header Section -->
    <header class="relative" style="background-image: url('assets/img/background/Group 287.png');">
    <nav class="flex justify-between items-center mx-[10%] p-[45px_50px] border-b-4 border-[#5C5857] pb-[5px] bg-transparent">
        <div class="flex w-[25px] h-[25px]">
            <img src="assets/img/logo/Group 72.png" alt="Naltlan Dealer Logo">
        </div>
        <ul class="flex gap-5">
    <li class="inline-block mr-2 relative">
        <a href="#" class="relative group">
            Home
            <span class="absolute left-0 right-0 bottom-0 top-9 h-1 bg-white transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
        </a>
    </li>
    <li class="inline-block mr-2 relative">
        <a href="#" class="relative group">
            About us
            <span class="absolute left-0 right-0 bottom-0 top-9 h-1 bg-white transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
        </a>
    </li>
    <li class="inline-block mr-2 relative">
        <a href="#" class="relative group">
            Supercar
            <span class="absolute left-0 right-0 bottom-0 top-9 h-1 bg-white transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
        </a>
    </li>
    <li class="inline-block mr-2 relative">
        <a href="#" class="relative group">
            Engine
            <span class="absolute left-0 right-0 bottom-0 top-9 h-1 bg-white transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
        </a>
    </li>
    <li class="inline-block mr-2 relative">
        <a href="#" class="relative group">
            Contact
            <span class="absolute left-0 right-0 bottom-0 top-9 h-1 bg-white transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
        </a>
    </li>
</ul>

        <div class="text-[24px] text-[#747474]">
        <a href="/" class="relative group">
            <i class="fas fa-user-circle"></i>
        </a>
        </div>
    </nav>
    <div class="flex flex-auto">
        <div class="text-left py-[15%] bg-cover bg-center ml-[13%]">
            <h1 class="text-[4.5em] m-0 font-bold">NALTLAN DEALER</h1>
            <p class="text-[2.9em] mt-[-5%] font-medium">Supercars & Engines</p>
        </div>
        <div class="horizontal-line"></div>
    </div>
</header>


    <div class="absolute top-[62%] right-0 transform -translate-y-1/2 flex items-center z-100">
        <div class="flex flex-col items-end mt-[30%]">
            <span class="text-white text-[35px] font-semibold">01</span>
            <span class="text-white text-[25px] font-semibold">02</span>
            <span class="text-white text-[20px] font-semibold">03</span>
        </div>
        <div class="flex-auto w-[180px] h-[2px] bg-white ml-[20px]"></div>
    </div>

    <div class="ml-[14%] flex justify-around w-[72%] pt-[35px] flex-wrap">
        <img src="assets/img/featured/steer.png" alt="Steering Wheel Icon" class="h-[40px] w-[40px] mt-[15px]">
        <div class="flex flex-col items-center max-w-[250px]">
            <h3 class="text-[10px] tracking-[1px] uppercase mb-[15px]">Where Does Beauty Come From?</h3>
            <p class="text-[11px]">This question has occupied the thoughts of philosophers, artists and scientists since the dawn of time. An enigma that continuously engages our thoughts as well.</p>
        </div>

        <img src="assets/img/featured/loading.png" alt="Empathy Icon" class="h-[40px] w-[40px] mt-[15px]">
        <div class="flex flex-col items-center max-w-[250px]">
            <h3 class="text-[10px] tracking-[1px] uppercase mb-[15px]">Empathy</h3>
            <p class="text-[11px]">Our visions embraced the desires and the fantasies of all the people who are part of the Pagani world — whether customers, collaborators, or enthusiasts — to forge a connection that enabled our latest creation to narrate the most important story: yours.</p>
        </div>

        <img src="assets/img/featured/kuas.png" alt="Craftsmanship Icon" class="h-[40px] w-[40px] mt-[15px]">
        <div class="flex flex-col items-center max-w-[250px]">
            <h3 class="text-[10px] tracking-[1px] uppercase mb-[15px]">Craftsmanship</h3>
            <p class="text-[11px]">The exquisite craftsmanship of the Utopia serves a precise purpose: to express the uniqueness of each owner through a car tailored to the smallest detail.</p>
        </div>
    </div>
    
    <div class="mx-[14%] my-[5%] border-b border-white"></div>



    <!-- Services Section -->
<section class="text-center py-[4em]">
    <h2 class="text-[36px] font-semibold mb-[10px]">OUR SERVICES</h2>
    <p class="text-[18px] text-gray-400 mb-10">You're our priority</p>
    <div class="flex justify-center gap-[20px] flex-wrap">
        <div class="service-card relative overflow-hidden rounded-lg shadow-lg transition-transform transform hover:scale-105">
            <img src="assets/img/our_services/drive.png" alt="Test Drive" class="w-[259px] h-[457px]">
            <div class="text-overlay absolute bottom-0 left-0 right-0 bg-opacity-50 p-4 text-white from-black to-transparent z-[100] hover:opacity-0 transition-opacity duration-1000">
                <h3 class="text-lg font-semibold">TEST DRIVES</h3>
                <p class="text-sm">Experience Ride Perfection</p>
            </div>
        </div>
        <div class="relative overflow-hidden rounded-lg shadow-lg transition-transform transform hover:scale-105">
            <img src="assets/img/our_services/car_sales.png" alt="Car Sales" class="w-[259px] h-[457px]">
            <div class="text-overlay absolute bottom-0 left-0 right-0 bg-opacity-50 p-4 text-white from-black to-transparent z-[100] hover:opacity-0 transition-opacity duration-1000">
                <h3 class="text-lg font-semibold">CAR SALES</h3>
                <p class="text-sm">Find your dream car</p>
            </div>
        </div>
        <div class="relative overflow-hidden rounded-lg shadow-lg transition-transform transform hover:scale-105">
            <img src="assets/img/our_services/Mechanic.png" alt="Maintenance and Repairs" class="w-[259px] h-[457px]">
            <div class="text-overlay absolute bottom-0 left-0 right-0 bg-opacity-50 p-4 text-white from-black to-transparent z-[100] hover:opacity-0 transition-opacity duration-1000">
                <h3 class="text-lg font-semibold">MAINTENANCE AND REPAIRS</h3>
                <p class="text-sm">Reliability and Professionalism</p>
            </div>
        </div>
        <div class="relative overflow-hidden rounded-lg shadow-lg transition-transform transform hover:scale-105">
            <img src="assets/img/our_services/images 2.png" alt="Customer Support" class="w-[259px] h-[457px]">
            <div class="text-overlay absolute bottom-0 left-0 right-0 bg-opacity-50 p-4 text-white from-black to-transparent z-[100] hover:opacity-0 transition-opacity duration-1000">
                <h3 class="text-lg font-semibold">CUSTOMER SUPPORT</h3>
                <p class="text-sm">With You Every Step of the Way</p>
            </div>
        </div>
    </div>
</section>

<!-- Dealer Locations Section -->
<div class="m-auto p-[10em] ml-16">
<div class="flex flex-col mb-[3rem]">
    <h1 class="text-[20px] m-0 text-[#A4A4A4] font-semibold">Naltlan Dealer</h1>
    <div class="flex items-start">
        <h2 class="text-[48px] font-semibold">Find Your Dealer</h2>
        <p class="text-[1.2em] text-[#aaa] ml-[13em]">Discover the worldwide Naltian Dealer<br>and service network</p>
    </div>
</div>
    <div>
        <div class="flex grid-cols-2 gap-4">
            <div class="relative cursor-pointer transform transition-transform duration-300 ease-in-out hover:scale-105 overflow-hidden rounded-lg shadow-lg">
            <img src="assets/img/dealer/dubai.png" alt="Dubai, UAE" class="w-full h-auto rounded-lg">
                <div class="ml-[10px] mb-[10px] absolute bottom-0 left-0 right-0 bg-black bg-opacity-10 p-2 rounded-bl-lg rounded-br-lg">
                    <h3 class="m-0 text-lg">Dubai, UAE</h3>
                    <p class="text-sm text-gray-400">Naltian Dealer دبي</p>
                </div>
            </div>
            <div class="relative cursor-pointer transform transition-transform duration-300 ease-in-out hover:scale-105 overflow-hidden rounded-lg shadow-lg">
                <img src="assets/img/dealer/singapore.png" alt="Singapore, SGP" class="w-full h-auto rounded-lg">
                <div class="ml-[10px] mb-[10px] absolute bottom-0 left-0 right-0 bg-black bg-opacity-10 p-2 rounded-bl-lg rounded-br-lg">
                    <h3 class="m-0 text-lg">Singapore, SGP</h3>
                    <p class="text-sm text-gray-400">Naltian Dealer Singapore</p>
                </div>
            </div>
        </div>

        <div class="flex grid-cols-2 gap-4 mt-[2em]">
            <div class="relative cursor-pointer transform transition-transform duration-300 ease-in-out hover:scale-105 overflow-hidden rounded-lg shadow-lg">
                <img src="assets/img/dealer/usa.png" alt="Washington, USA" class="w-full h-auto rounded-lg">
                <div class="ml-[10px] mb-[10px] absolute bottom-0 left-0 right-0 bg-black bg-opacity-10 p-2 rounded-bl-lg rounded-br-lg">
                    <h3 class="m-0 text-lg">Washington, USA</h3>
                    <p class="text-sm text-gray-400">Naltian Dealer America</p>
                </div>
            </div>
            <div class="relative cursor-pointer transform transition-transform duration-300 ease-in-out hover:scale-105 overflow-hidden rounded-lg shadow-lg">
                <img src="assets/img/dealer/moskow.png" alt="Moscow, Russia" class="w-full h-auto rounded-lg">
                <div class="ml-[10px] mb-[10px] absolute bottom-0 left-0 right-0 bg-black bg-opacity-10 p-2 rounded-bl-lg rounded-br-lg">
                     <h3 class="m-0 text-lg">Moscow, Russia</h3>
                    <p class="text-sm text-gray-400">Дилер Налтян Москва</p>
                 </div>
             </div>
            </div>


        <div class="flex grid-cols-2 gap-4 mt-[2em]">
            <div class="relative cursor-pointer transform transition-transform duration-300 ease-in-out hover:scale-105 overflow-hidden rounded-lg shadow-lg">
                <img src="assets/img/dealer/shanghai.png" alt="Shanghai, China" class="w-full h-auto rounded-lg">
                <div class="ml-[10px] mb-[10px] absolute bottom-0 left-0 right-0 bg-black bg-opacity-10 p-2 rounded-bl-lg rounded-br-lg">
                    <h3 class="m-0 text-lg">Shanghai, China</h3>
                    <p class="text-sm text-gray-400">Naltian 中国经销商</p>
                </div>
            </div>
            <div class="relative cursor-pointer transform transition-transform duration-300 ease-in-out hover:scale-105 overflow-hidden rounded-lg shadow-lg">
                <img src="assets/img/dealer/akibahara.png" alt="Akihabara, Japan" class="w-full h-auto rounded-lg">
                <div class="ml-[10px] mb-[10px] absolute bottom-0 left-0 right-0 bg-black bg-opacity-10 p-2 rounded-bl-lg rounded-br-lg">
                    <h3 class="m-0 text-lg">Akihabara, Japan</h3>
                    <p class="text-sm text-gray-400">ナルトラン・ディーラー・ジャパン</p>
                </div>
            </div>
        </div>

        <div class="flex grid-cols-2 gap-4 mt-[2em]">
            <div class="relative cursor-pointer transform transition-transform duration-300 ease-in-out hover:scale-105 overflow-hidden rounded-lg shadow-lg">
            <img src="assets/img/dealer/german.png" alt="Berlin, Germany" class="w-full h-auto rounded-lg">
                <div class="ml-[10px] mb-[10px] absolute bottom-0 left-0 right-0 bg-black bg-opacity-10 p-2 rounded-bl-lg rounded-br-lg">
                    <h3 class="m-0 text-lg">Berlin, Germany</h3>
                    <p class="text-sm text-gray-400">Naltian Händler Deutschland</p>
                </div>
            </div>
            <div class="relative cursor-pointer transform transition-transform duration-300 ease-in-out hover:scale-105 overflow-hidden rounded-lg shadow-lg">
                <img src="assets/img/dealer/pwt.png" alt="Purwokerto, Indonesia" class="w-full h-auto rounded-lg">
                <div class="ml-[10px] mb-[10px] absolute bottom-0 left-0 right-0 bg-black bg-opacity-10 p-2 rounded-bl-lg rounded-br-lg">
                    <h3 class="m-0 text-lg">Purwokerto, Indonesia</h3>
                    <p class="text-sm text-gray-400">Naltian Dealer Indonesia inc.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex flex-row md:flex-row w-[80%] ml-[10rem] items-center space-y-6 md:space-y-0 md:space-x-8 p-6">
    <div class="relative w-[100%] h-auto flex-1 text-center md:text-left">
        <img src="assets/img/v8.png" alt="V8 Engine" class="w-full md:w-auto rounded-lg shadow-md">
        <p class="absolute bottom-[10px] left-[10px] right-[10px] text-[14px] text-white bg-black bg-opacity-70 p-[10px] rounded-[5px]">
            One of our best sellers is the V8 engine, a very powerful engine at an affordable price.
        </p>
    </div>
    <div class="flex flex-1 p-[20px] justify-center flex-col">
    <h2 class="text-xl text-[#A4A4A4]">Why we have to choose</h2>
    <h1 class="text-5xl text-white mt-2">Naltlan Dealer?</h1>

    <!-- Exclusive Car Collections Feature -->
    <div class="flex rounded-[10px] mt-[30px] p-[15px] transition-shadow duration-300 ease hover:bg-[#222222] hover:shadow-[10px_8px_10px_rgba(255,255,255,0.7)]">
        <div class="flex h-[60px] items-center justify-center bg-[#2a2a2a] rounded-[10px] p-[10px] mr-[20px]">
            <img src="assets/img/car.png" alt="Car Icon" class="w-10 h-10">
        </div>
        <div class="flex-1">
            <h3 class="text-[20px] m-0 text-white font-medium">Exclusive Car Collections</h3>
            <p class="text-[12px] text-[#b3b3b3] mr-[40px] font-medium">As a top supercar dealer, we offer a collection of highly exclusive and rare cars, including luxury and high-performance cars that are hard to find elsewhere.</p>
        </div>
    </div>

    <!-- Proven Technology Feature -->
    <div class="flex rounded-[10px] mt-[30px] p-[15px] transition-shadow duration-300 ease hover:bg-[#222222] hover:shadow-[10px_8px_10px_rgba(255,255,255,0.7)]">
        <div class="flex h-[60px] items-center justify-center bg-[#2a2a2a] rounded-[10px] p-[10px] mr-[20px]">
            <img src="assets/img/performance.png" alt="Technology Icon" class="w-10 h-10">
        </div>
        <div class="flex-1">
            <h3 class="text-[20px] m-0 text-white font-medium">Proven Technology</h3>
            <p class="text-[12px] text-[#b3b3b3] mr-[40px] font-medium">As a reputable dealer, we provide supercars with the latest technology that is super sophisticated and still not widely sold in the market.</p>
        </div>
    </div>

    <!-- Top Performance Feature -->
    <div class="flex rounded-[10px] mt-[30px] p-[15px] transition-shadow duration-300 ease hover:bg-[#222222] hover:shadow-[10px_8px_10px_rgba(255,255,255,0.7)]">
        <div class="flex h-[60px] items-center justify-center bg-[#2a2a2a] rounded-[10px] p-[10px] mr-[20px]">
            <img src="assets/img/Speedometer.png" alt="Performance Icon" class="w-10 h-10">
        </div>
        <div class="flex-1">
            <h3 class="text-[20px] m-0 text-white font-medium">Top Performance</h3>
            <p class="text-[12px] text-[#b3b3b3] mr-[40px] font-medium">Almost all the cars we sell have performance equivalent to F1 racing cars and almost all the cars we sell are equipped with V6, V8, V10, and V12 engines.</p>
        </div>
    </div>

    <!-- Utility For Family Feature -->
    <div class="flex rounded-[10px] mt-[30px] p-[15px] transition-shadow duration-300 ease hover:bg-[#222222] hover:shadow-[10px_8px_10px_rgba(255,255,255,0.7)]">
        <div class="flex h-[60px] items-center justify-center bg-[#2a2a2a] rounded-[10px] p-[10px] mr-[20px]">
            <img src="assets/img/utility.png" alt="Family Icon" class="w-10 h-4">
        </div>
        <div class="flex-1">
            <h3 class="text-[20px] m-0 text-white font-medium">Utility For Family</h3>
            <p class="text-[12px] text-[#b3b3b3] mr-[40px] font-medium">We realize that most people buy cars not only for themselves but to be used as family cars as well, therefore we also provide many cars that are suitable for your family, one of which is the Audi RS6.</p>
        </div>
    </div>
</div>

</div>


<div class="relative bg-cover bg-center h-screen flex flex-row items-center px-[5%] mt-[15%]" style="background-image: url('assets/img/footer/banner.png');">
    <div class="ml-[90px] max-w-[50%]">
        <h1 class="text-5xl font-medium mb-[50px]">FIND YOUR DREAM CAR AND A THUNDERING <br> ENGINE</h1>
        <div class="flex items-center mb-[50px] cursor-pointer">
            <div class="w-[50px] h-[50px] rounded-full flex items-center justify-center mr-[15px]">
                <img src="assets/img/footer/play.png" alt="Play Icon" class="w-[100%] h-auto">
            </div>
            <span class="text-lg font-semibold">WATCH THE VIDEO</span>
        </div>
        <p class="max-w-[70%] leading-[1.6] text-[13px] mb-[20px]">
            Designed to celebrate the harmony between art and science, these cars can catch the moment.
            Past and future meet at the perfect time, at the exact instant when the wind of creativity starts to blow.
            And that's how this car was born, a car of unique beauty, like a work of art made from a block of Carrara marble.
        </p>
        <p class="text-[14px] text-gray-500">&copy; Naltlan Dealer</p>
    </div>

    <div class="flex flex-wrap-reverse gap-[10px] justify-end mr-[-4.7em]">
        <img src="assets/img/footer/car5.png" alt="Car Image 1" class="w-auto h-[11em] cursor-pointer rounded-[10px] shadow-[0px_4px_10px_rgba(0,0,0,0.5)]">
        <img src="assets/img/footer/car2.png" alt="Car Image 2" class="w-auto h-[11em] cursor-pointer rounded-[10px] shadow-[0px_4px_10px_rgba(0,0,0,0.5)]">
        <img src="assets/img/footer/car6.png" alt="Car Image 3" class="w-auto h-[11em] cursor-pointer rounded-[10px] shadow-[0px_4px_10px_rgba(0,0,0,0.5)]">
        <img src="assets/img/footer/car3.png" alt="Car Image 4" class="w-auto h-[11em] cursor-pointer rounded-[10px] shadow-[0px_4px_10px_rgba(0,0,0,0.5)]">
        <img src="assets/img/footer/car1.png" alt="Car Image 5" class="w-auto h-[11em] cursor-pointer rounded-[10px] shadow-[0px_4px_10px_rgba(0,0,0,0.5)]">
        <img src="assets/img/footer/car4.png" alt="Car Image 6" class="w-auto h-[11em] cursor-pointer rounded-[10px] shadow-[0px_4px_10px_rgba(0,0,0,0.5)]">
    </div>
</div>

<!-- Footer Section -->
<div class="flex justify-center items-center py-[20px] bg-black mt-[10em]">
    <img src="assets/img/footer/discord.png" alt="Discord" class="m-0 mx-[20px] w-auto h-[20px] opacity-70 hover:opacity-100 cursor-pointer">
    <img src="assets/img/footer/youtube.png" alt="YouTube" class="m-0 mx-[20px] w-auto h-[20px] opacity-70 hover:opacity-100 cursor-pointer">
    <img src="assets/img/footer/linkedin.png" alt="LinkedIn" class="m-0 mx-[20px] w-auto h-[20px] opacity-70 hover:opacity-100 cursor-pointer">
    <img src="assets/img/footer/instagram.png" alt="Instagram" class="m-0 mx-[20px] w-auto h-[20px] opacity-70 hover:opacity-100 cursor-pointer">
    <img src="assets/img/footer/x.png" alt="Twitter" class="m-0 mx-[20px] w-auto h-[20px] opacity-70 hover:opacity-100 cursor-pointer">
    <img src="assets/img/footer/MasterCard.png" alt="MasterCard" class="m-0 mx-[20px] w-auto h-[20px] opacity-70 hover:opacity-100 cursor-pointer">
    <img src="assets/img/footer/visa.png" alt="Visa" class="m-0 mx-[20px] w-auto h-[20px] opacity-70 hover:opacity-100 cursor-pointer">
    <img src="assets/img/footer/PayPal.png" alt="PayPal" class="m-0 mx-[20px] w-auto h-[20px] opacity-70 hover:opacity-100 cursor-pointer">
</div>

<p class="mt-[4em] mb-[4em] text-center text-[14px]"">&copy; 2024 Naltlan Dealer Inc. All rights reserved.</p>


</body>
</html>
