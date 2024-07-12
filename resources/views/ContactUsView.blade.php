<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/contactus.css') }}">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
@include('header/headerview')
<body class="cross" style=" background-image: url('{{ asset('assets/css/imgs/cross.png')}}');  background-repeat: repeat-y;">

    <div class="map_container">
        <div class="left_container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.916514573815!2d120.98502697510624!3d14.603831485882916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cb4eff382343%3A0xc94e94e0c5093309!2sFEU%20Engineering%20Building!5e0!3m2!1sen!2sph!4v1717982418611!5m2!1sen!2sph" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="grid2x2">
            <div class="box1">
                <i class="fa-solid fa-envelope" style="color: red"></i>
                <p>Email</p>
                <p>innovate@fit.edu.ph</p>
            </div>
            <div class="box2">
                <i class="fa-solid fa-clock" style="color: green"></i>
                <p>Working Hours</p>
                <p>Monday to Friday: 7:00 AM to 5:00 PM</p>
            </div>
            <div class="box3">
                <a href="https://www.facebook.com/feutechinnovationcenter" target="_blank">
                    <i class="fa-brands fa-square-facebook" style="color: blue"></i>
                    <br></br>
                <p style="color: black">FEU TECH Innovation Center</p>
                </a>
            </div>
            <div class="box4">
                <a href="https://www.linkedin.com/company/feu-tech-innovation-center/?originalSubdomain=ph" target="_blank">
                    <i class="fa-brands fa-linkedin" style="color: #0075B5"></i>
                <br></br>
                <p style="color: black">FEU TECH Innovation Center</p>  
                </a>     
            </div>
        </div>
    </div>

</body>
@include('footer/custom_footerview')
</html>
