<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image gallery</title>
    <style>
       #id1{
        font: 3em sans-serif;
       }
       .A{
        width: 300px;
        height:300px;
        border: 5px;
       }
       
       
    </style>
   
</head>
<body>
<div style="border: none  ;width: 1450px;height: 80px ;background-color: rgb(37, 7, 102);">
<table  cellspacing ="15px" cellpadding ="20px">
    
   
<tr>
        <th style="background-color:rgb(79, 79, 239) ;"><a href="{{url('/home')}}">HOME</a></th>
        <th style="background-color:rgb(79, 79, 239) ;"><a href="{{url('/aboutus')}}">ABOUT US</a></th>
        <th style="background-color:rgb(79, 79, 239) ;"><a href="{{url('/imagegallery')}}">IMAGE GALLERY</a></th>
        <th style="background-color:rgb(79, 79, 239) ;"><a href="{{url('/contactus')}}">CONTACT US</a></th>
        
    </tr>
</table>

<div > 
    <h1 id="id1">Image Gallery</h1>
    <div id="id2" class="Gallery"></div>
    <img class="A" src="{{asset('images/1A.jpg')}}" alt="">
    <div class="desc"></div>
    <img class="A" src="{{asset('images/1B.jpeg')}}" alt="">
    <div class="desc"></div>
    <img class="A" src="{{asset('images/1C.jpg')}}" alt="" >
    <div class="desc"></div>
    <img class="A" src="{{asset('images/1D.jpg')}}" alt="">
    <div class="desc"></div>
    
    
</body>
</html>