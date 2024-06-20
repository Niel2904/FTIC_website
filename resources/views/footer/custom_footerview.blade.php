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
        <footer class="bg-extra-dark-green padding-30px-tb sm-padding-30px-tb" >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 text-center text-lg-start sm-margin-20px-bottom">
                        <img class="footer-logo logo" src="{{ asset('assets\css\imgs\feulogo.png') }}"><br>
                        <img class="footer-logo logo" src="{{ asset('assets\css\imgs\ftic-white.png') }}">
                    </div>
                    {{-- <div class="col-lg-4 col-md-2 text-white-2 text-center text-small sm-margin-10px-bottom">
                        © 2024
                    </div> --}}
                    <div class="col-md-6 text-center text-bottom text-white-2 text-small sm-margin-10px-bottom">
                        © 2024
                    </div>
                    <div class="col-md-3-half text-center text-lg-end text-white-2">
                        <div class="text-medium margin-10px-bottom font-weight-600 alt-font border-width-5 border-bottom border-color-white">
                            Contact Information
                        </div>
                        <p class="text-small margin-15px-bottom w-120 sm-w-100">
                            FEU Manila, 5th Floor Engineering Building<br>
                            Nicanor Reyes Sr. Street<br>
                            Sampaloc Manila 1018
                        </p>
                        <div class="text-medium margin-10px-bottom font-weight-600 alt-font border-width-5 border-bottom border-color-white">
                            Social Networks
                        </div>
                        {{-- <p class="text-small margin-15px-bottom w-120 sm-w-100">
                            FEU Manila, 5th Floor Engineering Building<br>
                            Nicanor Reyes Sr. Street<br>
                            Sampaloc Manila 1018
                        </p> --}}
                        <ul class="small-icon mb-0">
                            <li><a class="" href="https://www.facebook.com/feutechinnovationcenter" target="_blank"><i class="sns fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li><a class="" href="innovate@fit.edu.ph" target="_blank"><i class="sns fa-solid fa-envelope"></i></a></li>
                                <li><a class="" href="https://www.feutech.edu.ph/" target="_blank"><i class="sns fa-brands fa-google-plus-g"></i></a></li>
                                <li><a class="" href="https://www.linkedin.com/company/feu-tech-innovation-center/" target="_blank"><i class="sns fa-brands fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
{{-- <div class="col-md-6 text-center text-white-2 text-small sm-margin-10px-bottom">
    &copy; 2024
</div> --}}