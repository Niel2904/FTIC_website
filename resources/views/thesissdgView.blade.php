<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets\css\custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\thesissdg.css') }}">
    <title>Document</title>
</head>
@include('header/headerview')
<body class="cross" style=" background-image: url('{{ asset('assets/css/imgs/cross.png')}}');  background-repeat: repeat-y;">

    <div class="journalres">
        <p>Journal of Educational Computing Research</p>
    </div>

    <div class="titleres">
        <p>Facilitating Group Learning Using an Apprenticeship Model: Which Master is More Effective in Programming Instruction?</p>
    </div>

    <div class="authorres">
        <p>Manuel B. Garcia</p>
        <p><i class="fa-duotone fa-envelope"></i>mbgarcia@feutech.edu.ph</p>
    </div>

</body>
</body>
@include('footer/custom_footerview')
</html>