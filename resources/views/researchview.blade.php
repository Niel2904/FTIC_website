<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets\css\custom.css') }}">
    <title>Research</title>
</head>
@include('header/headerview')
<body class="cross" style=" background-image: url('{{ asset('assets/css/imgs/cross.png')}}');  background-repeat: repeat-y;">
    
    <img src="{{ asset('assets/css/imgs/res_banner.png') }}">
<div>
    <!-- 1st column after the banner -->
    <div class="rescolumn" style="margin-bottom:25px">
        <div class="rcol1">
            <img src="{{ asset('assets/css/imgs/sdg.png') }}" width="40%" style="" >
        </div>

        <div class="rcol2" >
            <p>
                FEU Institute of Technology aligns its research efforts in support of seven (7) priority Sustainable Development Goals, the latest CHED National Higher Education Research Agenda, and the Harmonized National Research and Development Agenda. We aim to contribute significantly to the attainment of these SDGs by 2030. Aligning with the latest NHERA and HNRDA also ensures that our efforts are in harmony with the national goals and aspirations.
            </p>
            <p>
                At FEU Tech, we believe in the transformative power of technology in creating real-world impact. Harnessing the expertise of our faculty and through research and collaboration, we strive to develop innovative solutions that address the needs of the nation and other global challenges.
            </p>
        </div>
    </div>

    <!-- 2nd col -->
    <div class="resarea">
        <h2>Research Areas</h2>
        <div class="resflex">
            <div class="resicons">
                <img src="{{ asset('assets/css/imgs/RA-quality education.png') }}" width="200px" height="200px">
                <p>Quality Education in Engineering, Computer Studies and Multimedia Arts</p>
            </div>


            <div class="resicons">
                <img src="{{ asset('assets/css/imgs/RA-sustainable energy.png') }}" width="200px" height="200px">
                <p>Sustainable Energy and Infrastructure Development</p>
            </div>
            <div class="resicons">
                <img src="{{ asset('assets/css/imgs/RA-smart cities.png') }}" width="200px" height="200px">
                <p>Smart Cities</p>
            </div>

            <div class="resicons">
                <img src="{{ asset('assets/css/imgs/RA-disaster risk.png') }}" width="200px" height="200px">
                <p>Disaster Risk Reduction and Management</p>
            </div>

            <div class="resicons">
                <img src="{{ asset('assets/css/imgs/RA-ict.png') }}" width="200px" height="200px">
                <p>Information and Communication Technology (ICT) for Development</p>
            </div>
        </div>
        
    </div>


    <!-- 3rd col -->
    <div class="ressdg">

        <div class="sdg-container">
            <div class="image-grid">
                <div class="sdgrow">
                    <a class="sdgimgs" href="#"> <img src="{{ asset('assets/css/imgs/SDG-3.svg') }}" alt="Image 1"></a>
                    <a class="sdgimgs" href="/qesdg4"> <img src="{{ asset('assets/css/imgs/SDG-4.svg') }}" alt="Image 2"></a>
                    <a class="sdgimgs" href="#"> <img src="{{ asset('assets/css/imgs/SDG-7.svg') }}" alt="Image 3"></a>
                    <a class="sdgimgs" href="#"> <img src="{{ asset('assets/css/imgs/SDG-8.svg') }}" alt="Image 4"></a>
                </div>
                <div class="sdgrow bottom-row">
                    <a class="sdgimgs" href="#"> <img src="{{ asset('assets/css/imgs/SDG-11.svg') }}" alt="Image 5"></a>
                    <a class="sdgimgs" href="#"> <img src="{{ asset('assets/css/imgs/SDG-12.svg') }}" alt="Image 6"></a>
                    <a class="sdgimgs" href="#"> <img src="{{ asset('assets/css/imgs/SDG-17.svg') }}" alt="Image 7"></a>
                </div>
            </div>
        </div>
    </div>
    





</div>


</body>
@include('footer/custom_footerview')
</html>