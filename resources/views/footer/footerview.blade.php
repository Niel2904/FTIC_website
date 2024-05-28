<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets\css\custom.css') }}">
    <title>Document</title>
</head>
<style>
*{
    margin: 0px;
    padding: 0px;
}
.footer{
    background-color: #004928; 
    padding-right: 15px; 
    padding-left: 15px;
}
</style>

<body>
    
<div class="footer" style="display: flex; align-items: center; gap:10%; justify-content: center; ">
    
    <div>
        <img src="{{ asset('assets\css\imgs\feulogo.png') }}" style="width:250px; max-height: 100%" class="pic" alt="Image 1">
    </div>

    <div>
        <img src="{{ asset('assets\css\imgs\ftic-white.png') }}" style="width: 250px; max-height: 100%" class="pic" alt="Image 1">
    </div>

    <div style="color:white">
        <div style="text-decoration: underline;    font-size: 35px; 
        font-weight: 600; ">
            Contact Us
        </div>
        
        <div>
            Innovate@fit.edu.ph
        </div>

        <div>
            FEU Institute of Technology
        </div>

    </div>


</div>

</body>
</html>