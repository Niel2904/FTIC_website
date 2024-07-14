<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aboutus.css') }}">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
@include('header/headerview')
<body class="cross" style=" background-image: url('{{ asset('assets/css/imgs/cross.png')}}');  background-repeat: repeat-y;">

    <div class="first_container" id="story">
        <div class="left_content">
            <div>
                <img src="{{ asset('assets\css\imgs\1160358.png') }}"  class="picture1" alt="Image 1">
            </div>
        </div>
        <div class="right_content">
                <div>
                    <h3>How We Started</h3>
                </div>
                <div>
                    <p>In line with the FEU Institute of Technology’s (FEU TECH) mission to produce students that will bring significant contributions to the society, the FEU Tech Innovation Center (FTIC) was created to be the first academe-based venture builder in the country with the purpose of creating the next generation of nation-builders by creating innovators, technologists and entrepreneurs.</p>
                </div>
        </div>
    </div>

    <div class="second_container" id="missionvision">
        <div class="description1">
            <div class="missioncontainer">
            <h4 class="mission">Mission</h4>
            <p>To create the next generation of nation builders by creating innovators, technologists, and entrepreneurs.</p>
            </div>
            <div class="visioncontainer">
            <h4 class="vision">Vision</h4>
            <p>To be the Philippine's most innovative and entrepreneurial academic institution.</p>
            </div>
        </div>
    </div>

    <div class="offer_container" id="offer">
        <div class="title1">What We Offer</div>
            <ul>
                <div class="first_col">
                    <div class="first_bar">
                        <div><img src="{{ asset('assets\css\imgs\ICONS-facilities.png') }}"  class="picture3" alt="Image 1"></div>
                        <div><img src="{{ asset('assets\css\imgs\ICONS-funding.png') }}"  class="picture3" alt="Image 1"></div>
                        <div><img src="{{ asset('assets\css\imgs\ICONS-expertise.png') }}"  class="picture3" alt="Image 1"></div>
                        <div><img src="{{ asset('assets\css\imgs\ICONS-shared services.png') }}"  class="picture3" alt="Image 1"></div>
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
                        <div><img src="{{ asset('assets\css\imgs\ICONS-ecosystem.png') }}"  class="picture3" alt="Image 1"></div>
                        <div><img src="{{ asset('assets\css\imgs\ICONS-mentoring.png') }}"  class="picture3" alt="Image 1"></div>
                        <div><img src="{{ asset('assets\css\imgs\ICONS-events.png') }}"  class="picture3" alt="Image 1"></div>
                        
                    </div>
                    <div class="second_row">
                        <div class="offer">Access to the Innovation Center ecosystem partners</div>
                        <div class="offer">Access to Mentorship and Capacity-building Opportunities</div>
                        <div class="offer">Access to the Events and Activities of the Innovation Center</div>
                    </div>
                </div>
            </ul>
    </div>

    <div class="innovation_team" id="team">
        <div class="innov_title">MEET THE FEU TECH INNOVATION TEAM</div>
        <div class="innov_welcome">Welcome to FEU Tech Innovation Center, where innovation takes center stage! Behind every groundbreaking idea and revolutionary solution, there’s a dedicated team that fuels the engine of creativity. Allow us to introduce you to the passionate minds that make up our innovative force.</div>
        <div class="associate">
            <!-- Team member cards -->
            <div class="card">
                <img src="{{ asset('assets\css\imgs\1160358.png') }}" alt="Team Member 1">
                <h3>Gianina Napo</h3>
                <i>Director for Innovation Program</i>
                <br></br>
                <p class="email1">glnapo@feutech.edu.ph</p>
            </div>
            <div class="card">
                <img src="{{ asset('assets\css\imgs\1160358.png') }}" alt="Team Member 2">
                <h3>Engr. Mylen J. Gomez</h3>
                <i>Director for Research</i>
                <br></br>
                <p class="email1">mdgomez@feutech.edu.ph</p>
            </div>
            <div class="card">
                <img src="{{ asset('assets\css\imgs\1160358.png') }}" alt="Team Member 3">
                <h3>Engr. Ian B. Benitez</h3>
                <i>Research Faculty</i>
                <br></br>
                <p class="email1">ibbenitez@feutech.edu.ph</p>
            </div>
            <div class="card">
                <img src="{{ asset('assets\css\imgs\1160358.png') }}" alt="Team Member 4">
                <h3>Engr. Melodia D. Pahati</h3>
                <i>Research Faculty</i>
                <br></br>
                <p class="email1">mdpahati@feutech.edu.ph</p>
            </div>
            </div>
        <div class="associate1">
            <div class="card">
                <img src="{{ asset('assets\css\imgs\1160358.png') }}" alt="Team Member 5">
                <h3>Raphael Marc R. Tiongson</h3>
                <i>Marketing and Creative Lead</i>
                <br></br>
                <p class="email1">rrtiongson@feutech.edu.ph</p>
            </div>
            <div class="card">
                <img src="{{ asset('assets\css\imgs\1160358.png') }}" alt="Team Member 6">
                <h3>Lady Mesias</h3>
                <i>Innovation Program Associate</i>
                <br></br>
                <p class="email1">lbmesias@feutech.edu.ph</p>
            </div>
            <div class="card">
                <img src="{{ asset('assets\css\imgs\1160358.png') }}" alt="Team Member 7">
                <h3>Mikah E. Gaviola</h3>
                <i>Innovation Program Associate</i>
                <br></br>
                <p class="email1">megaviola@feutech.edu.ph</p>
            </div>
            <div class="card">
                <img src="{{ asset('assets\css\imgs\1160358.png') }}" alt="Team Member 8">
                <h3>Maria Dhia A. Jarabe</h3>
                <i>Admin Associate</i>
                <br></br>
                <p class="email1">majarabe@feutech.edu.ph</p>
        </div>
        </div>
    </div>

</body>
@include('footer/custom_footerview')
</html>
