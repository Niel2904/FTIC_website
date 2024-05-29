<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets\css\custom.css') }}">
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
    <h2 style="text-align: center; font-size: 48px; font-weight: 800; margin-top: 30px;margin-bottom:20px"> Our Student Start-up Portfolio </h2>

</body>
@include('footer/footerview')
</html>