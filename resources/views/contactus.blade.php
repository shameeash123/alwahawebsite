<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <div>
    <h1>Contact Us</h1>
    <form action="" method="get">
        <label style="width:140px ;display: inline-block;" for="">Name</label>
        <input type="text"><br><br>
        <label style="width:140px ;display: inline-block;" for="">email</label>
        <input type="email" name="" id=""><br><br>
        <label style="width:140px ;display: inline-block;" for="">Subject</label > 
        <input style="width: 300px;px ;height: 15px;" type="text"><br><br>
        <label style="width:140px ;display: inline-block;" for="">Your Message</label>
        <input style="width: 300px;px ;height: 200px;" type="text"><br><br>
        <input type="button" value="Submit">

    </form>
</div>
</body>
</html>
