<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets\css\custom.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="navdiv">
            <a href="/"><img style="margin-top: 5px; margin-bottom:5px;" src="{{ asset('assets\css\imgs\ftic-white.png') }}" class="icon">
            <div class="logo">

            </a>
            </div>
            
                <ul>
                    <li class="hider">
                    <a href="/aboutus">About <i class="arrow down"></i> </a>
                        <ul class="dropdown">
                            
                                <li><a href="/aboutus#story">Story</a></li>
                                <li><a href="/aboutus#missionvision">Mission and Goal</a></li>
                                <li><a href="/aboutus#offer">What We Offer</a></li>
                                <li><a href="/aboutus#team">Team</a></li>
                                
                        </ul>
                    </li>
                    
                    <li class="hider"><a href="/programs">Programs</a></li>
                    <li class="hider"><a href="/research">Research</a></li>
                    <li class="hider"><a href="/facilities">Facilities</a></li>
                    <li class="hider"><a href="/gallery">Gallery</a></li>
                    <li class="hider"><a href="/contactus">Contact Us</a></li>
                    

                   
              </ul>


        </div>


    </nav>
</body>
</html>