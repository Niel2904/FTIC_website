<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('assets\css\custom-footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets\css\responsive.css') }}">
    </head>
    <body>
        {{-- <footer class="bg-extra-dark-green padding-five-tb sm-padding-30px-tb">
            <div>
                <div class="container">
                    <div class="row align-items-center">
                        
                        <div class="col-lg-4 col-md-2 text-small text-center sm-margin-15px-bottom">
                            <img class="fschool_logo logo" src="{{ asset('assets\css\imgs\feulogo.png') }}">
                            <img class="fschool_logo logo" src="{{ asset('assets\css\imgs\ftic-white.png') }}">
                        </div>
                        <div class="col-lg-4 col-md-5 text-center sm-margin-10px-bottom">
                            
                        </div>
                        <div class="col-lg-4 col-md-2 text-center sm-margin-10px-bottom">
                            <img class="fschool_logo logo" src="{{ asset('assets\css\imgs\ftic-white.png') }}">
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>  --}}
        <footer class="bg-extra-dark-green padding-20px-tb sm-padding-30px-tb" >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-3 text-center text-lg-start sm-margin-20px-bottom">
                        <img class="footer-logo logo" src="{{ asset('assets\css\imgs\feulogo.png') }}"><br>
                        <img class="footer-logo logo" src="{{ asset('assets\css\imgs\ftic-white.png') }}">
                    </div>
                    <div style="text-align: center;" class="col-lg-4 col-md-6 text-white-2 text-center text-small sm-margin-10px-bottom">
                        © 2024
                    </div>
                    <div style="text-align: right;" class="col-lg-4 col-md-3 text-center text-lg-end text-white-2">
                        <div class="text-small margin-10px-bottom font-weight-600 alt-font">
                            Contact Information
                        </div>
                        <p class="text-small margin-15px-bottom w-120 sm-w-100">
                            FEU Manila, 5th Floor Engineering Building<br>
                            Nicanor Reyes Sr. Street<br>
                            Sampaloc Manila 1018
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>