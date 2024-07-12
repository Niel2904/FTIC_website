<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets\css\custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\gallery.css') }}">
    <title>Document</title>
</head>
@include('header/headerview')
<body class="cross" style=" background-image: url('{{ asset('assets/css/imgs/cross.png')}}');  background-repeat: repeat-y;">
    

    <div class="">
        <h2 style="text-align: center; font-size: 48px; font-weight: 800; margin-top: 30px;margin-bottom:20px">2024</h2>
    </div>

    <div class="eventgallery">

        <div class="eigthigallery">

            <div class="sixtyfivegallery">
                <img src="{{ asset('assets/css/imgs/event1.jpg') }}" style="" alt="Image 1">
            </div>
            
            <div class="thirtyfivegallery">
                <img src="{{ asset('assets/css/imgs/event2.jpg') }}" style="margin-top:20px" alt="Image 1">
                <img src="{{ asset('assets/css/imgs/event3.jpg') }}" alt="Image 1">
                <img src="{{ asset('assets/css/imgs/event4.jpg') }}" alt="Image 1">
            </div>
        </div>

        <div class="descripgallery">
            <p class="taytel">Shoutout to our amazing TechUP Inter-University Innovation Challenge Mentors! 🎉🙌🏻</p>
                <p class="descrepgal">The FEU Tech Innovation Center is beyond grateful to our mentors, Engr. Niño Pilueta (Computer Engineering    Department), Justine Pura (Computer Studies Department), and Ramir Ramirez (Information Technology Department) for their incredible    support and guidance to our student teams who are competing at the TechUP Inter-University Innovation Challenge. 🚀💡</p>
                <p class="descrepgal">From learning sessions, feedback, and consultations, their expertise truly made a difference in helping our student   teams refine their ideas and models. Here’s to many more successful collaborations and groundbreaking ideas! 💚💛</p>
        </div>
    </div>

    <div class="eventgallery">

        <div class="eigthigallery">
            
            <div class="sixtyfivegallery">
                <img src="{{ asset('assets/css/imgs/event 5.jpg') }}" style="" alt="Image 1">
            </div>
            
            <div class="thirtyfivegallery">
                <img src="{{ asset('assets/css/imgs/event6.jpg') }}" style="margin-top:20px" alt="Image 1">
                <img src="{{ asset('assets/css/imgs/event 7.jpg') }}" alt="Image 1">
                <img src="{{ asset('assets/css/imgs/event8.jpg') }}" alt="Image 1">
            </div>
        </div>

        <div class="descripgallery">
            <p class="taytel">The FEU Tech Innovation Center is honored to represent the FEU Institute of Technology at the National ICT Month 2024 Kick-Off Celebration led by the Department of Information and Communications Technology (DICT) at the PICC on June 3. With the theme “Bayang Digital ang Bagong Pilipinas”, the event showcased DICT’s vision of a digitally empowered Philippines by rallying every Filipino to work towards achieving a prosperous digital future.</p>
                <p class="descrepgal">Through our efforts at the FEU Tech Innovation Center, we're empowering the next generation of changemakers to innovate and create solutions by fostering entrepreneurial spirit, research excellence, and nurturing disruptive ideas from student-led startups.</p>
        </div>
    </div>

</body>
@include('footer/custom_footerview')
</html>