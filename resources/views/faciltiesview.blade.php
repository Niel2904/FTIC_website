<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets\css\custom.css') }}">
    <title>Document</title>
</head>
<body style=" background-image: url({{ asset('assets\css\imgs\cross.png')}});  background-repeat: repeat-y;">
<div class="yellow-bg"></div> <!-- for border purposes only -->


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
    
    <div class="column column-1">
        <img class="lounge" src="imgsrc/lounge.jpg" style="width: 95%; align-items: center; border-radius: 5px;" alt="lounge">
        <h2 style="margin-bottom: 5px;font-size: 22px;">Lounge</h2>
        <p style="text-align: justify; width: 95%;font-size: 15px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>


    <div class="column column-2">

        <div class="img1">
        <img class="lounge" src="imgsrc/disroom.jpg" style="width: 90%;align-items: center; border-radius: 5px;" alt="lounge">
        <h2 style="margin-bottom: 5px;  font-size: 18px; width: 90%;   ">Conference Room</h2>
        <p style="text-align: justify; font-size: 13px; width: 90%;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting. </p>
        </div>

        <div class="img1">
            <img class="lounge" src="imgsrc/disroom.jpg" style="margin-top: 12px; width: 90%;; align-items: center; border-radius: 5px;" alt="lounge">
            <h2 style="margin-bottom: 5px;  font-size: 18px; width: 90%;">Discussion Room</h2>
            <p style="text-align: justify; font-size: 13px; width: 90%;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting. </p>
        </div>

    </div>


</div>

<div class="containercol">

    <div class="column column-1 drow3">
        
        <div class="subcol1" >
            <img class="lounge" src="imgsrc/disroom.jpg" style="margin-top: 12px; width: 90%;; align-items: center; border-radius: 5px;" >
            <h2 style="margin-bottom: 5px;  font-size: 18px; width: 90%;">Discussion Room</h2>
            <p style="text-align: justify; font-size: 13px; width: 90%;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley. </p>
        </div>

        <div class="subcol2">
            <img class="lounge" src="imgsrc/disroom.jpg" style="margin-top: 12px; width: 90%;; align-items: center; border-radius: 5px;" >
            <h2 style="margin-bottom: 5px;  font-size: 18px; width: 90%;">Discussion Room</h2>
            <p style="text-align: justify; font-size: 13px; width: 90%;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley. </p>
        </div>
        
    </div>


    <div class="column column-2 drow3">

        <div class="subcol1" >
            <img class="lounge" src="imgsrc/disroom.jpg" style="margin-top: 12px; width: 90%;; align-items: center; border-radius: 5px;" >
            <h2 style="margin-bottom: 5px;  font-size: 18px; width: 90%;">Discussion Room</h2>
            <p style="text-align: justify; font-size: 13px; width: 90%;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>
        </div>

        <div class="subcol2">
            <img class="lounge" src="imgsrc/disroom.jpg" style="margin-top: 12px; width: 90%;; align-items: center; border-radius: 5px;" >
            <h2 style="margin-bottom: 5px;  font-size: 18px; width: 90%;">Discussion Room</h2>
            <p style="text-align: justify; font-size: 13px; width: 90%;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>
        </div>

    </div>

</div>


</body>
    



</html>