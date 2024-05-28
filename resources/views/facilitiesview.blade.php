<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets\css\custom.css') }}">
    <title>Document</title>
</head>
<body class="cross" style=" background-image: url('{{ asset('assets/css/imgs/cross.png')}}');  background-repeat: repeat-y;">
    
    @include('header/headerview')


<div>
    <h1 class="faci" style="text-align: center; margin-top: 10px; margin-bottom: 10px;">FACILITIES</h1>


    <div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="{{ asset('assets\css\imgs\csroom.jpg') }}"  class="pic" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets\css\imgs\csroom.jpg') }}" class="pic" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets\css\imgs\csroom.jpg') }}"  class="pic" alt="Image 3">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets\css\imgs\csroom.jpg') }}" class="pic" alt="Image 4">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets\css\imgs\csroom.jpg') }}" class="pic" alt="Image 5">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets\css\imgs\csroom.jpg') }}" class="pic" alt="Image 6">
            </div>
        </div>
    </div>
</div>



<div class="containercol">

    <!-- Lounge -->
    <div class="column column-1">
        <img class="lounge" src="{{ asset('assets\css\imgs\lounge.jpg') }}" style="width: 95%; align-items: center; object-fit: cover;border-radius: 5px;" alt="lounge">
        <h2 style="margin-bottom: 5px;font-size: 22px; margin-top:8px; margin-bottom:8px;">Lounge</h2>
        <p style="text-align: justify; width: 95%;font-size: 15px; margin-bottom: 15px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

        <div class="column  drow3">
        
            <!-- CS ROOM -->
            <div class="subcol1" >
                <img class="lounge" src="{{ asset('assets\css\imgs\csroom.jpg') }}" style="height: 400px; margin-top: 12px; object-fit: cover; width: 95%;; align-items: center; border-radius: 5px;" >
                <h2 style="margin-bottom: 5px;  font-size: 18px; width: 95%;margin-top:8px; margin-bottom:8px;">Computer Science Project Room</h2>
                <p style="text-align: justify; font-size: 13px; width: 95%;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley. </p>
            </div>

            <!-- ENGR ROOM -->
            <div class="subcol2">
                <img class="lounge" src="{{ asset('assets\css\imgs\engineering-room.jpg') }}" style=" height: 400px; object-fit: cover; margin-top: 12px; width: 95%;; align-items: center; border-radius: 5px;" >
                <h2 style="margin-bottom: 5px;  font-size: 18px; width: 95%;margin-top:8px; margin-bottom:8px;">Engineering Project Room</h2>
                <p style="text-align: justify; font-size: 13px; width: 95%;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley. </p>
            </div>
            
        </div>
    


    </div>

    <!-- right side -->
    <div class="column column-2">

        <!-- LOBBY -->
        <div class="img1">
        <img class="lounge" src="{{ asset('assets\css\imgs\lobby.webp') }}" style="height: 200px;object-fit: cover; width: 100%;align-items: center; border-radius: 5px;" alt="lobby">
        <h2 style="margin-bottom: 5px;  font-size: 18px; width: 100%;  margin-top:5px; margin-bottom:5px;  ">Lobby</h2>
        <p style="text-align: justify; font-size: 13px; width: 100%; margin-bottom:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting. </p>
        </div>

        <!-- Discussion Room -->
        <div class="img1" style="">
            <img class="lounge" src="{{ asset('assets\css\imgs\disroom.jpg') }}" style="height: 200px; object-fit: cover;margin-top: 12px; width: 100%;overflow: hidden; align-items: center; border-radius: 5px;" alt="disroom">
            <h2 style="margin-bottom: 5px;  font-size: 18px; width: 100%; margin-top:5px; margin-bottom:5px;">Discussion Room</h2>
            <p style="text-align: justify; font-size: 13px; width: 100%; margin-bottom:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting. </p>
        </div>

        <!-- Conference Room -->
        <div class="img1" style="">
            <img class="lounge" src="{{ asset('assets\css\imgs\confroom.jpg') }}" style="height: 200px; object-fit: cover;margin-top: 12px; width: 100%;overflow: hidden; align-items: center; border-radius: 5px;" alt="confroom">
            <h2 style="margin-bottom: 5px;  font-size: 18px; width: 100%; margin-top:5px; margin-bottom:5px;">Conference Room</h2>
            <p style="text-align: justify; font-size: 13px; width: 100%; margin-bottom:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting. </p>
        </div>
        
        <!-- Presentation Room -->
        <div class="img1" style="">
            <img class="lounge" src="{{ asset('assets\css\imgs\prroom.jpg') }}" style="height: 200px; object-fit: cover;margin-top: 12px; width: 100%;overflow: hidden; align-items: center; border-radius: 5px;" alt="prroom">
            <h2 style="margin-bottom: 5px;  font-size: 18px; width: 100%; margin-top:5px; margin-bottom:5px;">Presentation Room</h2>
            <p style="text-align: justify; font-size: 13px; width: 100%; margin-bottom:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting. </p>
        </div>

    </div>


</div>




</body>
    
@include('footer/footerview')


</html>