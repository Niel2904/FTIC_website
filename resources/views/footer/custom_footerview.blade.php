<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('assets\css\custom-footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets\css\responsive.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <footer class="bg-extra-dark-green padding-20px-tb sm-padding-30px-tb" >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4 text-center text-lg-start sm-margin-20px-bottom">
                        <img class="footer-logo logo" src="{{ asset('assets\css\imgs\feulogo.png') }}"><br>
                        <img class="footer-logo logo" src="{{ asset('assets\css\imgs\ftic-white.png') }}">
                    </div>
                    {{-- <div class="col-lg-4 col-md-2 text-white-2 text-center text-small sm-margin-10px-bottom">
                        © 2024
                    </div> --}}
                    <div class="col-lg-4 col-md-3 text-center text-lg-end text-white-2 border-right">
                        <div class="text-medium margin-10px-bottom font-weight-600 alt-font border-width-5 border-bottom border-color-white">
                            Contact Information
                        </div>
                        <p class="text-small margin-15px-bottom w-120 sm-w-100">
                            FEU Manila, 5th Floor Engineering Building<br>
                            Nicanor Reyes Sr. Street<br>
                            Sampaloc Manila 1018
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-4 text-center text-lg-end text-white-2 padding-two-half-left">
                        <div class="text-medium margin-10px-bottom font-weight-600 alt-font border-width-5 border-bottom border-color-white">
                            Social Networks
                        </div>
                        <div class="row">
                            <p class="text-small text-white-2 margin-15px-bottom w-40 sm-w-10">
                                <i class="fa-regular fa-envelope padding-two-half-right"></i>  innovate@fit.edu.ph
                            </p>
                            <p class="text-small text-white-2 margin-15px-bottom padding-twelve-left sm-w-20">
                                <i class="fa-solid fa-globe"></i>  FEU Tech Innovation Center
                            </p>
                        </div>
                        <div class="row">
                            <p class="text-small text-white-2 margin-15px-bottom w-45 sm-w-10">
                                FEU Institute of Technology
                            </p>
                            <p class="text-small text-white-2 margin-15px-bottom sm-w-10">
                                FEU Tech Innovation Center
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>