<!DOCTYPE html>
<html>
<head>
    <title>3D Cube</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: white;
        }


        #metrics {
            position: absolute;
            right: 50px;
            top: 50px;
        }


        #cube-container {
            perspective: 1000px;
        }




        .face.highlight {
            border: 3px dashed #fff;
        }


        #cube {
            width: 200px;
            height: 200px;
            position: relative;
            transition: transform 0.2s;
            transform-style: preserve-3d;
        }


        .cell {
            width: 33.33%;
            height: 33.33%;
            color: white;
            font-size: 14px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #fff;
            box-sizing: border-box;
            opacity: 0;
            /* transition: opacity 0.3s; */
        }


        .cell:hover {
            outline: 1px solid white;
        }




        .face {
            display: flex;
            flex-wrap: wrap;
            align-content: flex-start;
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgb(103, 21, 158, 0.5);
            border: 2px solid white;
            opacity: 0.9;
            transition: background 0.3s, opacity 0.3s;
        }


        .face-text {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            color: white;
            pointer-events: none;
            transition: opacity 0.3s;
            z-index: 2;
            padding: 10px;
        }


        .face:hover .face-text {
            opacity: 0;
        }


        .face:hover .cell {
            opacity: 1;
        }


        .face:hover {
            background: lightblue;
            transition: background 0.3s, transform 0.5s;
        }






        .face.active {
            background: transparent !important;
            transition: none;
        }


        .front  { transform: rotateY(0deg) translateZ(100px); }
        .back {
            transform: rotateY(180deg) translateZ(100px);
        }


        .left   { transform: rotateY(-90deg) translateZ(100px); }
        .right  { transform: rotateY(90deg) translateZ(100px); }
        .top    { transform: rotateX(90deg) translateZ(100px); }
        .bottom { transform: rotateX(-90deg) translateZ(100px); }


        .disassembled .front,
        .disassembled .back {
            transform: rotateY(0deg) rotateZ(180deg) translateZ(-200px);
        }
        .disassembled .left,
        .disassembled .right,
        .disassembled .top,
        .disassembled .bottom {
            transform: rotateY(180deg) rotateZ(180deg) translateZ(-200px);
        }

        #metric-description {
            position: absolute;
            bottom: 10px;
            left: 10px;
            background: rgba(255, 255, 255, 0.9);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: none;
        }


        #metric-buttons {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
        }


        #metric-buttons button {
            padding: 5px 10px;
            background: rgb(103, 21, 158, 0.5);
            border: none;
            cursor: pointer;
        }


        #metric-buttons button:hover {
            background: lightgreen;
        }

        .no-select {
            -webkit-user-select: none; /* Safari */
            -moz-user-select: none; /* Firefox */
            -ms-user-select: none; /* IE10+/Edge */
            user-select: none; /* Standard */
        }

    </style>
</head>
<body>
<div id="metrics">
    <!-- метрики -->
    <div class="metric" draggable="true">TTI</div>
    <div class="metric" draggable="true">TTFB</div>
</div>

<div id="cube-container">
    <div id="cube">
        <!-- 6 граней куба -->
        <div class="face front" data-metric="LCP">
            <div class="face-text">LCP</div>
        </div>
        <div class="face back" data-metric="FCP">
            <div class="face-text">FCP</div>
        </div>
        <div class="face left" data-metric="CLS">
            <div class="face-text">CLS</div>
        </div>
        <div class="face right" data-metric="SI">
            <div class="face-text">SI</div>
        </div>
        <div class="face top" data-metric="TBT">
            <div class="face-text">TBT</div>
        </div>
        <div class="face bottom" data-metric="FID">
            <div class="face-text">FID</div>
        </div>
    </div>
</div>


<div id="metric-description">
    <!-- отописание метрики -->
</div>


<div id="metric-buttons">
    <!-- переключения между метриками -->
    <button data-metric="LCP" id="LCP">LCP</button>
    <button data-metric="FCP" id="FCP">FCP</button>
    <button data-metric="CLS" id="CLS">CLS</button>
    <button data-metric="SI" id="SI">SI</button>
    <button data-metric="TBT" id="TBT">TBT</button>
    <button data-metric="FID" id="FID">FID</button>
    <button id="toggle-cube">Собрать/Разобрать Куб</button>
</div>

<script>
    // ограничение частоты вызова функции
    function throttle(func, limit) {
        let lastFunc;
        let lastRan;
        return function() {
            const context = this;
            const args = arguments;
            if (!lastRan) {
                func.apply(context, args);
                lastRan = Date.now();
            } else {
                clearTimeout(lastFunc);
                lastFunc = setTimeout(function() {
                    if ((Date.now() - lastRan) >= limit) {
                        func.apply(context, args);
                        lastRan = Date.now();
                    }
                }, limit - (Date.now() - lastRan));
            }
        };
    }


    document.addEventListener('DOMContentLoaded', function () {
        var cube = document.getElementById('cube');
        var rotX = 0, rotY = 0;
        var isDragging = false;
        var prevX, prevY;
        var isAssembled = true;


        function createCells() {
            document.querySelectorAll('.face').forEach(face => {
                if (face.querySelectorAll('.cell').length === 0) {
                    for (let i = 0; i < 9; i++) {
                        let cell = document.createElement('div');
                        cell.className = 'cell no-select';
                        face.appendChild(cell);
                    }
                }
            });
        }


        createCells();


        function rotateCube(e) {
            if (isDragging) {
                let deltaX = e.clientX - prevX;
                let deltaY = e.clientY - prevY;
                rotY += deltaX * 0.5;
                rotX -= deltaY * 0.5;
                requestAnimationFrame(function() {
                    cube.style.transform = `rotateX(${rotX}deg) rotateY(${rotY}deg)`;
                });
                prevX = e.clientX;
                prevY = e.clientY;
            }
        }


        var throttledRotateCube = throttle(rotateCube, 20);


        cube.addEventListener('mousedown', function(e) {
            isDragging = true;
            prevX = e.clientX;
            prevY = e.clientY;
        });


        document.addEventListener('mousemove', throttledRotateCube);


        document.addEventListener('mouseup', function() {
            isDragging = false;
        });


        document.querySelectorAll('.metric').forEach(function (metric) {
            metric.addEventListener('dragstart', function (e) {
                e.dataTransfer.setData("text/plain", metric.textContent);
            });
        });


        document.querySelectorAll('.face').forEach(function (face) {
            face.addEventListener('dragover', function (e) {
                e.preventDefault();
                face.classList.add('highlight');
            });


            face.addEventListener('dragleave', function (e) {
                face.classList.remove('highlight');
            });


            face.addEventListener('drop', function (e) {
                e.preventDefault();
                var data = e.dataTransfer.getData("text/plain");
                face.setAttribute('data-metric', data);
                var faceText = face.querySelector('.face-text');
                faceText.textContent = data;
                face.classList.remove('highlight');
            });


            face.addEventListener('click', function () {
                var metric = face.getAttribute('data-metric');
                var description = getMetricDescription(metric);
                var faceText = face.querySelector('.face-text');
                //faceText.textContent = description;
            });
        });


        document.querySelectorAll('.cell').forEach(function (cell) {
            cell.addEventListener('click', function () {
                var face = cell.parentElement;
                var metric = face.getAttribute('data-metric');
                var description = getMetricDescription(metric);
                //showMetricDescription(description);
            });
        });


        document.querySelectorAll('.cell, .face').forEach(element => {
            element.classList.add('no-drag');
        });

        const degs = {
            back:   {X: -180, Y:   0},
            top:    {X:   90, Y:   0},
            front:  {X:    0, Y:   0},
            bottom: {X:  -90, Y:   0},
            left:   {X:    0, Y: -90},
            right:  {X:    0, Y:  90},
        }


        document.querySelectorAll('#metric-buttons button').forEach(function (button) {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                var metrics = {
                    LCP: "Largest Contentful Paint is...",
                    FCP: "First Contentful Paint is...",
                    CLS: "Cumulative Layout Shift is...",
                    SI: "Speed Index is...",
                    TBT: "Total Blocking Time is...",
                    FID: "First Input Delay is...",
                    TTI: "Time to Interactive is...",
                    TTFB: "Time to First Byte is..."
                };

                if(e.target.id !== "toggle-cube"){
                    var name = "";
                    var id = e.target.id;
                    switch (id) {
                        case "LCP":
                            name = 'back';
                            break;
                        case "FCP":
                            name = 'top';
                            break;
                        case "CLS":
                            name = 'front';
                            break;
                        case "SI":
                            name = 'bottom';
                            break;
                        case "TBT":
                            name = 'left';
                            break;
                        case "FID":
                            name = 'right';
                            break;
                        case "TTI":
                            name = 'back';
                            break;
                        case "TTFB":
                            name = 'back';
                            break;
                        default:
                            name = 'back';
                    }
                    // setTimeout(() => {
                    //     cube.style.transform = 'perspective(700px) rotateX('+degs[name].X+'deg) rotateY('+degs[name].Y+'deg)';
                    // },100);
                }





                // var metric = e.target.dataset.metric;
                // if(e.target.id !== "toggle-cube"){
                //     if (metric) {
                //         var face = document.querySelector('.face[data-metric="' + metric + '"]');
                //         if (face) {
                //             var description = getMetricDescription(metric);
                //             //showMetricDescription(description);
                //             simulateClick(face);
                //         } else {
                //             console.error("Face not found for metric: " + metric);
                //         }
                //     }
                //     else {
                //         console.error("Metric is undefined");
                //     }
                // }
            });
        });


        function getMetricDescription(metric) {
            var descriptions = {
                LCP: "Largest Contentful Paint is...",
                FCP: "First Contentful Paint is...",
                CLS: "Cumulative Layout Shift is...",
                SI: "Speed Index is...",
                TBT: "Total Blocking Time is...",
                FID: "First Input Delay is...",
                TTI: "Time to Interactive is...",
                TTFB: "Time to First Byte is..."
            };
            return descriptions[metric] || "Description not available";
        }


        function showMetricDescription(description) {
            var metricDescription = document.getElementById('metric-description');
            metricDescription.textContent = description;
            metricDescription.style.display = 'block';
        }


        function simulateClick(element) {
            if (element) {
                var event = new MouseEvent('click', {
                    bubbles: true,
                    cancelable: true,
                    view: window
                });
                element.dispatchEvent(event);
            } else {
                console.error("Element not found");
            }
        }


        var autoRotate = true;
        var rotateInterval;


        document.getElementById('cube-container').addEventListener('mouseenter', function () {
            autoRotate = false;
            clearInterval(rotateInterval);
        });


        document.getElementById('cube-container').addEventListener('mouseleave', function () {
            autoRotate = true;
            rotateInterval = setInterval(function () {
                rotY += 0.1;
                rotX += 0.1;
                cube.style.transform = 'rotateX(' + rotX + 'deg) rotateY(' + rotY + 'deg)';
            }, 30);
        });

        document.getElementById('toggle-cube').addEventListener('click', function () {
            if (isAssembled) {
                disassembleCube();
            } else {
                assembleCube();
            }
            isAssembled = !isAssembled;
        });

        function disassembleCube() {
            cube.classList.add('disassembled');

            document.querySelector('.front').style.transform = 'rotateY(0deg) scaleX(-1) translateZ(-200px)';
            document.querySelector('.back').style.transform = 'rotateY(180deg) scaleX(-1) translateZ(-200px)';
            document.querySelector('.left').style.transform = 'rotateY(-90deg) scaleX(-1) translateZ(-200px)';
            document.querySelector('.right').style.transform = 'rotateY(90deg) scaleX(-1) translateZ(-200px)';
            document.querySelector('.top').style.transform = 'rotateX(90deg) scaleX(-1) translateZ(-200px)';
            document.querySelector('.bottom').style.transform = 'rotateX(-90deg) scaleX(-1) translateZ(-200px)';
        }

        function assembleCube() {
            cube.classList.remove('disassembled');
            document.querySelector('.front').style.transform = 'rotateY(0deg) translateZ(100px)';
            document.querySelector('.back').style.transform = 'rotateY(180deg) translateZ(100px)';
            document.querySelector('.left').style.transform = 'rotateY(-90deg) translateZ(100px)';
            document.querySelector('.right').style.transform = 'rotateY(90deg) translateZ(100px)';
            document.querySelector('.top').style.transform = 'rotateX(90deg) translateZ(100px)';
            document.querySelector('.bottom').style.transform = 'rotateX(-90deg) translateZ(100px)';
        }

        document.querySelectorAll('.no-drag').forEach(element => {
            element.addEventListener('dragstart', function(e) {
                e.preventDefault();
            });
        });
    });

</script>
</body>
</html>
