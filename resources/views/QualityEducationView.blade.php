<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets\css\custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\research.css') }}">
    <title>Document</title>
</head>
@include('header/headerview')
<body class="cross" style=" background-image: url('{{ asset('assets/css/imgs/cross.png')}}');  background-repeat: repeat-y;">
    <div class="forflex">
        <div class="firstterty">       
            <div class="sdgimahe">
                <a href="#"> <img src="{{ asset('assets/css/imgs/SDG-4.svg') }}" alt="sdg4"></a>
            </div>
            <div class="explanationsdg">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
        </div>
    
        <div class="secondseventy">
            <h1>2023</h1>

            <a href="#">
                <div class="rescontainers">
                    <p class="taytel"> Facilitating Group Learning Using an Apprenticeship Model: Which Master is More Effective in Programming Instruction?</p>
                    <p class="descipsdg">Garcia, M. B. (2023). Facilitating Group Learning Using an Apprenticeship Model: Which Master is More Effective in Programming  Instruction? Journal of Educational Computing Research, 61(6), 1207-1231. https://doi.org/10.1177/07356331231170382</p>
                </div>
            </a>

                <div class="rescontainers">
                    <p class="taytel"> A Playable 3D Virtual Tour for an Interactive Campus Visit Experience: Showcasing School Facilities to Attract Potential Enrollees</p>
                    <p class="descipsdg">Garcia, Manuel & Mansul, Danna & Pempina, Eymard & Perez, Maria & Adao, Rossana. (2023). A Playable 3D Virtual Tour for an Interactive Campus Visit Experience: Showcasing School Facilities to Attract Potential Enrollees. 461-466. 10.1109/ICVR57957.2023.10169768. </p>
                </div>
               


        </div>
    </div>
</body>
@include('footer/custom_footerview')
</html>