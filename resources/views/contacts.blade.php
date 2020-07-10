<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
@include('includes.navbar')
<div class="book">
            <div class="bookCover">
                <img src="{{ asset('images/logo.jpg') }}" width="500px" height="600px">
            </div>
            <div class="pages">
                <h2>Content</h2>
                <p>
                   Call us at:+254 711 653 717 <br>
                   Email: customercare@ke-simbisa.com
                   <h1>Our branches</h1> 
                   *Bellevue(south C, Along Mombasa road)
*Capital center (Along Mombasa road)
*Lusaka Road (DT. Dobie)
*Mbingu (Along Muindi Mbingu street CBD)
*Union Towers (Moi Avenue CBD)
*Forest Edge (Next to galleria mall)
*Langata Road
*Highview (Mbagathi way)
*Rongai
*Milele Mall (Ngong Town)
*Ananas Mall (Thika town)
*Thika Road (TRM Mall)
*Thika Bazaar (Thika town)
*Ridgeways Mall (Kiambu Road)
*Gardencity Mall (Along Thika Road)
                </p>
            </div>
               <style>
                @import url('https://fonts.googleapis.com/css?family=Lacquer&display=swap');

.book{
   width: 500px; 
   height: 600px;
   position: absolute;
   background:#fff;
   top: 50%;
   left: 50%;
   transform: translate(-50%,-50%)perspective(2000px);
   transform-style: preserve-3d;
   box-shadow: inset 300px 0 50px rgba(0,0,0,.5),0 20px 100px rgba(0,0,0,.5);
   transition:1s ;
}
.book:hover{
    transform: translate(-50%,-50%) perspective(2000px) rotate(-10deg);
    box-shadow: inset 20px 0 50px rgba(0,0,0,.5),0 10px 100px rgba(0,0,0,.5);
}
.book:before{
    content: ' ';
    position: absolute;
    top: -5px;
    left: 0;
    width:100%;
    height: 5px;
    background: #475b02;
    transform-origin: bottom;
    transform:skewX(-45deg);
}
.book:after{
    content: ' ';
    position: absolute;
    top: -5px;
    right: -5px;
    width:5px;
    height:100%;
    background: #7ea301;
    transform-origin: left;
    transform:skewY(-45deg)
}
.book .bookCover{
    width: 100%;
    height: 100px;
    position: relative;
    transform-origin: left;
    transition: 1s;
    z-index: 100000;
}
.book:hover .bookCover{
    transform: rotateY(-135deg);
}
.book .pages{
    position: absolute;
    top: 0;
    left: 0;
    box-sizing: border-box;
    padding:20px ;
    z-index: -1200;
}
            </style>

</body>
</html>
