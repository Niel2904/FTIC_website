<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aboutus.css') }}">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
@include('header/headerview')
<body class="cross" style=" background-image: url('{{ asset('assets/css/imgs/cross.png')}}');  background-repeat: repeat-y;">
    <div class="first_container">
        <div class="left_content"></div>
        <div class="right_content"></div>
    </div>

    <div class="second_container">
        <div class="mission">Mission
            <div>To create the next generation of nation builders by creating innovators, technologists, and entrepreneurs.</div>
        </div>

        <div class="vision">Vision
            <div>To be the Philippine’s most innovative and entrepreneurial academic institution.</div>
        </div>
    </div>

    <div class="offer_container">
        <div class="title1">What We Offer</div>
            <ul>
                <div class="first_col">
                    <div class="first_bar">
                        <div><img src="{{ asset('assets\css\imgs\1160358.png') }}"  class="picpic" alt="Image 1"></div>
                        <div><img src="{{ asset('assets\css\imgs\1160358.png') }}"  class="picpic" alt="Image 1"></div>
                        <div><img src="{{ asset('assets\css\imgs\1160358.png') }}"  class="picpic" alt="Image 1"></div>
                        <div><img src="{{ asset('assets\css\imgs\1160358.png') }}"  class="picpic" alt="Image 1"></div>
                    </div>
                    <div class="first_row">
                        <div class="offer">Access to the Innovation Center facilities</div>
                        <div class="offer">Access to Funding Opportunities</div>
                        <div class="offer">Access to Technical Expertise</div>
                        <div class="offer">Access to Shared Services</div>
                    </div>
                </div>

                <div class="second_col">
                    <div class="second_bar">
                        <div><img src="{{ asset('assets\css\imgs\1160358.png') }}"  class="picpic" alt="Image 1"></div>
                        <div><img src="{{ asset('assets\css\imgs\1160358.png') }}"  class="picpic" alt="Image 1"></div>
                        <div><img src="{{ asset('assets\css\imgs\1160358.png') }}"  class="picpic" alt="Image 1"></div>
                        
                    </div>
                    <div class="second_row">
                        <div class="offer">Access to the Innovation Center ecosystem partners</div>
                        <div class="offer">Access to Mentorship and Capacity-building Opportunities</div>
                        <div class="offer">Access to the Events and Activities of the Innovation Center</div>
                    </div>
                </div>
            </ul>
    </div>

    <div class="what_we_offer">
        <div></div>
        <div></div>
        <div></div>
    </div>

</body>
@include('footer/custom_footerview')
</html>
