<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        body {
            background-color: #000;
            margin: 0;
            font-family: Arial;
            min-width: 500px;
        }

        nav {
            display: flex;
            justify-content: space-around;
            padding: 10px 0 10px;
            border-bottom: solid 1px #90f9;
        }

        nav a {
            color: green;
            border-radius: 10px;
            padding: 0 10px;
            margin: 10px 10px;
        }

        .cube {
            width: 300px;
            height: 300px;
            position: absolute;
            top:  calc(50% - 300px / 2);
            left: calc(50% - 300px / 2);
            transform-style: preserve-3d;
            transform: perspective(700px)  rotateX(-36deg) rotateY(-27deg);
            transition: all 1s ease;
        }

        .cube > article {
            height: 100%;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
            position: absolute;
            transform-style: preserve-3d;
            background: linear-gradient(0deg, #070b0f, #111b29);
            color: #fff;
            line-height: 150%;
            letter-spacing: 0.05em;
            box-shadow:
                0 0 1px #f00,
                0 0 1px #f00,
                0 0 1px #f00,
                0 0 1px #f00,
                0 0 10px #d0e9 inset,
                0 0 35px #53d5;
        }

        .cube > article h2 {
            text-transform: uppercase;
            color: #900;
            font-size: 20px;
            font-weight: 600;

        }
        .cube > article p {
            font-weight: 200;
            font-size: 15px;
        }

        .cube > article img {
            width: 100%;
        }

        @font-face {
            font-family: 'Boxed';
            font-weight: 600;
            font-style: normal;
        }

        @font-face {
            font-family: 'Boxed';
            font-weight: 100;
            font-style: normal;
        }


        @font-face {
            font-family: 'Boxed';
            font-weight: 300;
            font-style: normal;
        }

        @font-face {
            font-family: 'Boxed';
            font-weight: bold;
            font-style: normal;
        }

        @font-face {
            font-family: 'Boxed';
            font-weight: 900;
            font-style: normal;
        }

        @font-face {
            font-family: 'Boxed';
            font-weight: 500;
            font-style: normal;
        }

        @font-face {
            font-family: 'Boxed';
            font-weight: 200;
            font-style: normal;
        }

        @font-face {
            font-family: 'Boxed';
            font-weight: 500;
            font-style: normal;
        }

        nav {
            background: linear-gradient(0deg, #90f3, #000, #f004);
            box-shadow: 0 0 35px #90f5;
        }

        nav a {
            color: #fffa;
            font-weight: 200;
            text-decoration: none;
            border-bottom: solid 1px #90f5;
            padding-bottom: 3px;
            position: relative;
            text-shadow: 0 0 20px #f00,0 0 20px #90f,0 0 10px #90f,0 0 5px #90f;
            white-space: nowrap;
            font-size: 15px;
        }

        nav a::before,
        nav a::after {
            content: '';
            display: block;
            position: absolute;
            top:0px;
            right:-5px;
            bottom:-5px;
            left:-5px;
            border-bottom:solid 1px #90f5;
            border-left:solid 1px #90f5;
            border-right:solid 1px #90f5;
            border-radius: 20px;
        }

        nav a::after {
            right:-9px;
            left:-9px;
            bottom:-9px;
            border-bottom:solid 1px #90f5;
            border-left:solid 1px #90f5;
            border-right:solid 1px #90f5;
        }

        nav a:hover {
            color: #f00;
        }

        @media (max-width:998px){
            nav {
                flex-wrap: wrap;
                justify-content: center;
            }
            nav a {
                font-size: 14px;
                margin: 10px 15px;
                text-align: center;
            }

        }

        .cube.animation {
            animation: rotation 30s ease-in-out infinite;
            animation-play-state: running;
        }

        .cube.paused-animation {
            animation-play-state: paused;
        }

        .cube > article {
            padding: 40px;
            transition: all 0.5s ease;
        }

        /*.cube > article::before {*/
        /*    content: '';*/
        /*    position: absolute;*/
        /*    left: 10px;*/
        /*    top: 10px;*/
        /*    right: 10px;*/
        /*    bottom: 10px;*/
        /*    box-shadow:*/
        /*        0 0 1px #f00,*/
        /*        0 0 1px #f00,*/
        /*        0 0 5px #d0e5,*/
        /*        0 0 10px #d0e5 inset;*/
        /*    transition: inherit;*/
        /*}*/

        /*.cube > article::after {*/
        /*    content: '';*/
        /*    position: absolute;*/
        /*    left: 20px;*/
        /*    top: 20px;*/
        /*    right: 20px;*/
        /*    bottom: 20px;*/
        /*    box-shadow:*/
        /*        0 0 1px #f00,*/
        /*        0 0 5px #d0e3,*/
        /*        0 0 5px #d0e5 inset;*/
        /*    transition: inherit;*/
        /*}*/

        /*.cube > article h2 {*/
        /*    text-shadow: 0 0 0px #90f,  0 0 20px #90f9;*/
        /*}*/
        /*.cube > article p {*/
        /*    text-shadow: 0 0 0px #90f,  0 0 20px #90f9;*/
        /*}*/

        .cube.distance {
            width: 240px;
            height: 240px;
            top:  calc(50% - 240px / 2);
            left: calc(50% - 240px / 2);
        }

        .cube.distance > article {
            border-radius: 25px;
            padding: 20px;
        }
        .cube.distance > article::before {
            border-radius: 20px;
            transform: rotateY(0deg) translateZ(-20px);
            background: linear-gradient(0deg, #000, #111b29);
        }
        .cube.distance > article::after {
            border-radius: 15px;
            background: linear-gradient(0deg, #0009, #111b2999);
            transform: rotateY(0deg) translateZ(-40px);
        }
        .cube.distance > article h2 {
            font-size: 18px;
        }
        .cube.distance > article p {
            font-size: 14px;
        }

        .back   {transform: rotateX(-180deg) translateZ(150px);}
        .top    {transform: rotateX( 90deg)  translateZ(150px);}
        .front  {transform:                  translateZ(150px);}
        .bottom {transform: rotateX(-90deg)  translateZ(150px);}
        .left   {transform: rotateY(-90deg)  translateZ(150px);}
        .right  {transform: rotateY( 90deg)  translateZ(150px);}

        .distance .back   {transform: rotateX(-180deg) translateZ(180px);}
        .distance .top    {transform: rotateX( 90deg)  translateZ(180px);}
        .distance .front  {transform:                  translateZ(180px);}
        .distance .bottom {transform: rotateX(-90deg)  translateZ(180px);}
        .distance .left   {transform: rotateY(-90deg)  translateZ(180px);}
        .distance .right  {transform: rotateY( 90deg)  translateZ(180px);}

        @keyframes rotation {
            50% {transform:perspective(700px) rotateX(360deg) rotateY(720deg);}
        }

        .actions {
            border:solid 1px #90f9;
            border-top:none;
            border-bottom:solid 1px #f003;
            padding:20px;
            bottom:30px;
            width: 450px;
            text-align: center;
            box-sizing: border-box;
            position: absolute;
            left: calc(50% - 225px);
            border-radius: 20px;
            background: radial-gradient(#f009, #0000 0%, #0000 85%, #f009);
        }
        .actions a {
            margin:0 20px;
            color: #fffa;
            text-decoration: none;
            font-weight: 200;
            text-shadow: 0 0 20px #f00,0 0 20px #90f,0 0 10px #90f,0 0 5px #90f;
            border-bottom: solid 1px #f003;
            padding-bottom: 5px;
            position: relative;
            z-index: 1;

        }

        .actions a:hover {
            color: #fff;
            border-bottom: solid 1px #f009;
        }


        .actions a.active {
            filter: grayscale(1);
            opacity: .5;
        }

        .actions a.active::before {
            content: 'в€љ';
            position: absolute;
            left: -20px;
        }

        .actions::before,
        .actions::after {
            content: '';
            display: block;
            position: absolute;
            top:0px;
            right:-5px;
            bottom:-5px;
            left:-5px;
            border-bottom:solid 1px #f003;
            border-left:solid 1px #f0f5;
            border-right:solid 1px #f0f5;
            border-radius: 20px;
        }
        .actions::after {
            right:-9px;
            left:-9px;
            bottom:-9px;
            border-bottom:solid 1px #f003;
            border-left:solid 1px #f055;
            border-right:solid 1px #f055;
        }

    </style>

</head>
<body>

<nav>
    <a href="#back">Задняя грань</a>
    <a href="#top">Верхняя грань</a>
    <a href="#front">Фронтальная грань</a>
    <a href="#bottom">Нижняя грань</a>
    <a href="#left">Левая грань</a>
    <a href="#right">Правая грань</a>
</nav>
<section class="cube animation">
    <article class="back">
        <p>back</p>
    </article>
    <article class="top">
        <p>top</p>
    </article>
    <article class="front">
        <p>front</p>
    </article>
    <article class="bottom">
        <p>bottom</p>
    </article>
    <article class="left">
        <p>left</p>
    </article>
    <article class="right">
        <p>right</p>
    </article>
</section>
<div class="actions">
    <a href="#animation">Остановить анимацию</a>
    <a href="#distance">Разобрать куб</a>
</div>

<script
    src="https://code.jquery.com/jquery-3.7.1.slim.js"
    integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc="
    crossorigin="anonymous">
</script>

<script>
    function selectEdge(){
        const cube = document.querySelector('.cube');
        const degs = {
            back:   {X: -180, Y:   0},
            top:    {X:   90, Y:   0},
            front:  {X:    0, Y:   0},
            bottom: {X:  -90, Y:   0},
            left:   {X:    0, Y: -90},
            right:  {X:    0, Y:  90},
        }

        const x = 0;
        const y = 0;

        document.querySelectorAll('nav a').forEach(elem => {
            elem.addEventListener('click', (e) => {
                cube.classList.remove('animation');
                e.preventDefault();
                let edgeName = e.target.hash.replace(/#/, '');
                document.querySelector('.actions a[href="#animation"]').innerText = 'Продолжить анимацию';
                setTimeout(() => {
                    cube.style.transform = 'perspective(700px) rotateX('+degs[edgeName].X+'deg) rotateY('+degs[edgeName].Y+'deg)';
                },100);
            })
        });
    }

    function animateCube(){
        const cube = document.querySelector('.cube');
        document.querySelector('.actions a[href="#animation"]').addEventListener('click', function(e){
            if(!cube.classList.value.includes('animation') && !cube.classList.value.includes('paused-animation')){
                cube.classList.add('animation');
                e.target.innerText = 'Остановить анимацию';
            }
            else{
                if(!cube.classList.value.includes('paused-animation')){
                    cube.classList.add('paused-animation');
                    e.target.innerText = 'Продолжить анимацмию';
                }else{
                    cube.classList.remove('paused-animation');
                    cube.classList.add('animation');
                    e.target.innerText = 'Остановить анимацию';
                }
            }
        });
    }

    function constructCube(){
        const cube = document.querySelector('.cube');
        document.querySelector('.actions a[href="#distance"]').addEventListener('click', function(e){
            if(cube.classList.value.includes('distance')){
                cube.classList.remove('distance');
                e.target.innerText = 'Разобрать куб';
            }else{
                cube.classList.add('distance');
                e.target.innerText = 'Собрать куб';
            }
        });
    }

    function rotateCube(e) {
        // var cube = document.getElementsByClassName('cube');
        // var x = e.clientX - window.innerWidth / 2;
        // var y = e.clientY - window.innerHeight / 2;
        // var q = 0.15;
        // var i;
        // x = x * q * 1.25;
        // y = -y * q * 1.25;
        // for (i = 0; i < cube.length; i++){
        //     cube[i].style.transform = "rotateY(" + x + "deg) rotateX(" + y + "deg)";
        // }

        // var cube = document.querySelector('.cube');
        // var mouseX = e.clientX;
        // var mouseY = e.clientY;
        // var rotateX = -(mouseY / window.innerHeight - 0.5) * 180;
        // var rotateY = (mouseX / window.innerWidth - 0.5) * 180;
        //
        // cube.style.transform = "rotateX(" + rotateX + "deg) rotateY(" + rotateY + "deg)";
    }

    document.addEventListener('DOMContentLoaded', () => {
        selectEdge();
        animateCube();
        constructCube();
    });

    //document.addEventListener("mousemove", rotateCube);

</script>


</body>
</html>
