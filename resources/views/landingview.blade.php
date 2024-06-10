<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets\css\custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\landing.css') }}">
    <title>FEU Tech Innovation Center</title>
</head>
@include('header/headerview')
<body class="cross" style=" background-image: url('{{ asset('assets/css/imgs/cross.png')}}');  background-repeat: repeat-y;">
    
    <div>
        <img src="{{ asset('assets\css\imgs\banner1.jpg') }}" alt="" style="max-width: 100%">
    </div>

    <!-- VIDEO -->
    <div style="position:relative; max-width:100%; height:500px; margin: 0 auto; margin-top:35px; margin-bottom:35px">      
        <iframe allow="fullscreen;autoplay" allowfullscreen height="100%" src="https://streamable.com/e/a8b0tp?autoplay=1&muted=0" width="65%" style="border:none; width:100%; height:100%; position:absolute; left:0px; top:0px; overflow:hidden;"></iframe>
    </div>


    <!-- WHAT WE DO -->
    <h2 style="text-align: center; font-size: 48px; font-weight: 800; margin-top: 30px;margin-bottom:20px"> What We Do </h2>
    <div style="margin: 0 auto; display: flex; align-items: center; justify-content: center; ">
        <img src="{{ asset('assets\css\imgs\wwd.png') }}" alt="" style="max-width: 100%; width: 65%; ">
    </div>
    <div style="width: 80%; margin: 0 auto; text-align: center; margin-bottom:20px;">
    <h5 style="font-size: 24px; margin-top: 20px;">The FEU Tech Innovation CenterVenture Building Model enables students to build and develop innovative solutions and turn them into commercial opportunities.</h5>
    </div>


    <!-- Portfolio -->
    <div class="stuport">
    <h2 style="text-align: center; font-size: 48px; font-weight: 800; margin-top: 30px;margin-bottom:20px"> Our Student Start-up Portfolio </h2>
    </div>


    <!-- Espasyo -->
    <div class="portfolio1">

        <div class="porti">
            <img src="{{ asset('assets\css\imgs\port1.png') }}" alt="" style="max-width: 63%">
        </div>

        <div class="sixti">

            <div class="psix">
                Espasyo aims to revolutionize the utilization of warehouse spaces and empower business owners with an advanced multi-platform application that will allow users to find vacant spaces, check them out, reserve, pay, and rent them as their own storage spaces. 
            </div>
            <br>
            <div class="psix">
                Espasyo is using the Internet of Things (IoT) as its main technology for the system monitoring and integrating Cloud computing services as the main platform for all the data that the system will gather. Espasyo envisions becoming the go-to platform for companies seeking to maximize the business potential of spaces. 
            </div>         
        </div>      
    </div>


        <!-- dwarm -->
        <div class="portfolio1">

            <div class="porti">
                <img src="{{ asset('assets\css\imgs\port2.png') }}" alt="" style="max-width: 63%">
            </div>
    
            <div class="sixti">
    
                <div class="psix">
                    Espasyo aims to revolutionize the utilization of warehouse spaces and empower business owners with an advanced multi-platform application that will allow users to find vacant spaces, check them out, reserve, pay, and rent them as their own storage spaces. 
                </div>
                <br>
                <div class="psix">
                    Espasyo is using the Internet of Things (IoT) as its main technology for the system monitoring and integrating Cloud computing services as the main platform for all the data that the system will gather. Espasyo envisions becoming the go-to platform for companies seeking to maximize the business potential of spaces. 
                </div>         
            </div>      
        </div>
    

        <!-- vehic -->
        <div class="portfolio1">

            <div class="porti">
                <img src="{{ asset('assets\css\imgs\port3.png') }}" alt="" style="max-width: 63%">
            </div>
    
            <div class="sixti">
    
                <div class="psix">
                    Espasyo aims to revolutionize the utilization of warehouse spaces and empower business owners with an advanced multi-platform application that will allow users to find vacant spaces, check them out, reserve, pay, and rent them as their own storage spaces. 
                </div>
                <br>
                <div class="psix">
                    Espasyo is using the Internet of Things (IoT) as its main technology for the system monitoring and integrating Cloud computing services as the main platform for all the data that the system will gather. Espasyo envisions becoming the go-to platform for companies seeking to maximize the business potential of spaces. 
                </div>         
            </div>      
        </div>
    

        <!-- parterns -->
        <h2 style="text-align: center; font-size: 48px; font-weight: 800; margin-top: 30px;margin-bottom:20px">Our Partners</h2>

        <div class="carouselpartner">
            <div class="carouselpartner-inner">
                <div class="carouselpartner-item">
                    <img src="{{ asset('assets\css\imgs\phildev.png') }}"  class="pic" alt="Image 1">
                </div>
                <div class="carouselpartner-item">
                    <img src="{{ asset('assets\css\imgs\qbo.png') }}" class="pic" alt="Image 2">
                </div>
                <div class="carouselpartner-item">
                    <img src="{{ asset('assets\css\imgs\aim.png') }}"  class="pic" alt="Image 3">
                </div>
                <div class="carouselpartner-item">
                    <img src="{{ asset('assets\css\imgs\accenture.png') }}" class="pic" alt="Image 4">
                </div>
                <div class="carouselpartner-item">
                    <img src="{{ asset('assets\css\imgs\dap.png') }}" class="pic" alt="Image 5">
                </div>
                <div class="carouselpartner-item">
                    <img src="{{ asset('assets\css\imgs\phildev.png') }}"  class="pic" alt="Image 1">
                </div>
                <div class="carouselpartner-item">
                    <img src="{{ asset('assets\css\imgs\qbo.png') }}" class="pic" alt="Image 2">
                </div>
                <div class="carouselpartner-item">
                    <img src="{{ asset('assets\css\imgs\aim.png') }}"  class="pic" alt="Image 3">
                </div>
                <div class="carouselpartner-item">
                    <img src="{{ asset('assets\css\imgs\accenture.png') }}" class="pic" alt="Image 4">
                </div>
                <div class="carouselpartner-item">
                    <img src="{{ asset('assets\css\imgs\dap.png') }}" class="pic" alt="Image 5">
                </div>
                <div class="carouselpartner-item">
                    <img src="{{ asset('assets\css\imgs\phildev.png') }}"  class="pic" alt="Image 1">
                </div>
                <div class="carouselpartner-item">
                    <img src="{{ asset('assets\css\imgs\qbo.png') }}" class="pic" alt="Image 2">
                </div>
                <div class="carouselpartner-item">
                    <img src="{{ asset('assets\css\imgs\aim.png') }}"  class="pic" alt="Image 3">
                </div>
                <div class="carouselpartner-item">
                    <img src="{{ asset('assets\css\imgs\accenture.png') }}" class="pic" alt="Image 4">
                </div>
                <div class="carouselpartner-item">
                    <img src="{{ asset('assets\css\imgs\dap.png') }}" class="pic" alt="Image 5">
                </div>
                <div class="carouselpartner-item">
                    <img src="{{ asset('assets\css\imgs\phildev.png') }}"  class="pic" alt="Image 1">
                </div>
                <div class="carouselpartner-item">
                    <img src="{{ asset('assets\css\imgs\qbo.png') }}" class="pic" alt="Image 2">
                </div>
                <div class="carouselpartner-item">
                    <img src="{{ asset('assets\css\imgs\aim.png') }}"  class="pic" alt="Image 3">
                </div>
                <div class="carouselpartner-item">
                    <img src="{{ asset('assets\css\imgs\accenture.png') }}" class="pic" alt="Image 4">
                </div>
                <div class="carouselpartner-item">
                    <img src="{{ asset('assets\css\imgs\dap.png') }}" class="pic" alt="Image 5">
                </div>
            </div>
        </div>


</body>
@include('footer/footerview')
</html>