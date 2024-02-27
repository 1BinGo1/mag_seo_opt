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
            background-color: #fce4e4 !important;
        }


        #cube-container {
            perspective: 1000px;
            background-color: #fce4e4;
        }


        .face.highlight {
            border: 3px dashed #fff;
        }


        #cube {
            width: 400px;
            height: 400px;
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
            cursor: pointer;
            background: rgba(112, 112, 112, 0.31);
        }


        .face {
            display: flex;
            flex-wrap: wrap;
            align-content: flex-start;
            position: absolute;
            width: 400px;
            height: 400px;
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


        /*.front  { transform: rotateY(0deg) translateZ(100px); }*/
        /*.back {transform: rotateY(180deg) translateZ(100px); }*/
        /*.left   { transform: rotateY(-90deg) translateZ(100px); }*/
        /*.right  { transform: rotateY(90deg) translateZ(100px); }*/
        /*.top    { transform: rotateX(90deg) translateZ(100px); }*/
        /*.bottom { transform: rotateX(-90deg) translateZ(100px); }*/


        /*.disassembled .front,*/
        /*.disassembled .back {*/
        /*    transform: rotateY(0deg) rotateZ(180deg) translateZ(-200px);*/
        /*}*/
        /*.disassembled .left,*/
        /*.disassembled .right,*/
        /*.disassembled .top,*/
        /*.disassembled .bottom {*/
        /*    transform: rotateY(180deg) rotateZ(180deg) translateZ(-200px);*/
        /*}*/

        .back   {transform: rotateY(-180deg) translateZ(200px);}
        .top    {transform: rotateX( 90deg)  translateZ(200px);}
        .front  {transform:                  translateZ(200px);}
        .bottom {transform: rotateX(-90deg)  translateZ(200px);}
        .left   {transform: rotateY(-90deg)  translateZ(200px);}
        .right  {transform: rotateY(90deg)  translateZ(200px);}

        .disassembled .back   {transform: rotateY(-180deg) translateZ(300px);}
        .disassembled .top    {transform: rotateX( 90deg)  translateZ(300px);}
        .disassembled .front  {transform:                  translateZ(300px);}
        .disassembled .bottom {transform: rotateX(-90deg)  translateZ(300px);}
        .disassembled .left   {transform: rotateY(-90deg)  translateZ(300px);}
        .disassembled .right  {transform: rotateY( 90deg)  translateZ(300px);}

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

        #metrics_control{
            position: absolute;
            display: flex;
            bottom: 10px;
        }

        #metrics{
            margin-left: 20px;
            border: 1px solid black;
            padding: 10px;
        }

        #metrics div{
            background: rgb(103, 21, 158, 0.5);
            cursor: pointer;
            margin: 10px;
            padding: 10px;
        }

        #metrics div:hover{
            background: lightgreen;
        }


        /*#metric-buttons {*/
        /*    position: absolute;*/
        /*    bottom: 10px;*/
        /*    left: 50%;*/
        /*    transform: translateX(-50%);*/
        /*    display: flex;*/
        /*    gap: 10px;*/
        /*}*/

        /*#metrics {*/
        /*    position: absolute;*/
        /*    right: 50px;*/
        /*    top: 50px;*/
        /*}*/


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

        #metric_info{
            position: absolute;
            display: flex;
            left: 10px;
            margin-bottom: 100px;
            border: 3px solid rgb(103, 21, 158, 0.5);
            border-radius: 10px ;
            padding: 10px;
            background-color: white;
            width: 1000px;
            height: 80%;
            overflow: scroll;
        }

        #period_info{
            display: flex;
        }

        #metric_info::-webkit-scrollbar{
            width: 12px;
        }

        #metric_info::-webkit-scrollbar-track{
            background: orange;
        }

        #metric_info::-webkit-scrollbar-thumb{
            background-color: blue;
            border-radius: 20px;
            border: 3px solid orange;
        }

    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/messages/messages.ru-ru.js" type="text/javascript"></script>

</head>
<body>

{{--<div class="container">--}}
{{--    <div>--}}
{{--        --}}
{{--    </div>--}}
{{--</div>--}}

<div id="metric_info" style="display: flex; flex-direction: column; align-items: center">
    <div id="period_info" style="display: flex;">
        <div style="display: flex">
            <div style="margin-right: 20px; display: flex">
                <div style="margin-right: 10px; margin-top: 5px">
                    <label for="datepicker_from">От</label>
                </div>
                <div>
                    <input id="datepicker_from" width="276" />
                </div>
            </div>
            <div style="display: flex">
                <div style="margin-right: 10px; margin-top: 5px">
                    <label for="datepicker_until">До</label>
                </div>
                <div>
                    <input id="datepicker_until" width="276" />
                </div>
            </div>
        </div>
        <div style="margin-left: 20px">
            <button id="filter_metric_start" type="button" class="btn btn-success">Применить</button>
        </div>
    </div>
    <div id="filter_metric_alert">
        <div class="alert alert-warning" role="alert">
            A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
    </div>
    <div id="metric_data_view">
        <div id="frequently_viewed_pages"></div>
    </div>
</div>

<div id="cube-container">
    <div id="cube">
        <!-- 6 граней куба -->
        <div class="face back" data-metric="FCP">
            <div class="face-text no-select">FCP</div>
        </div>
        <div class="face top" data-metric="TBT">
            <div class="face-text no-select">TBT</div>
        </div>
        <div class="face front" data-metric="LCP">
            <div class="face-text no-select">LCP</div>
        </div>
        <div class="face bottom" data-metric="FID">
            <div class="face-text no-select">FID</div>
        </div>
        <div class="face left" data-metric="CLS">
            <div class="face-text no-select">CLS</div>
        </div>
        <div class="face right" data-metric="SI">
            <div class="face-text no-select">SI</div>
        </div>
    </div>




</div>


<div id="metric-description">
    <!-- отописание метрики -->
</div>

<div id="metrics_control">
    <div id="metric-buttons">
        <!-- переключения между метриками -->
        <button data-metric="FCP">FCP</button>
        <button data-metric="TBT">TBT</button>
        <button data-metric="LCP">LCP</button>
        <button data-metric="FID">FID</button>
        <button data-metric="CLS">CLS</button>
        <button data-metric="SI">SI</button>
        <button id="toggle-cube">Собрать/Разобрать Куб</button>
    </div>
    <div id="metrics">
        <!-- метрики -->
        <div class="metric" data-metric="TTI" draggable="true">TTI</div>
        <div class="metric" data-metric="TTFB" draggable="true">TTFB</div>
    </div>
    <div style="margin-left: 20px" id="sites_list">
        <select class="form-select" aria-label="Default select example" id="sites_select"></select>
    </div>
</div>

<script>
    var $datepicker_from = $('#datepicker_from').datepicker({
        uiLibrary: 'bootstrap5',
        locale: 'ru-ru',
        format: 'yyyy-mm-dd'
    });
    var $datepicker_until = $('#datepicker_until').datepicker({
        uiLibrary: 'bootstrap5',
        locale: 'ru-ru',
        format: 'yyyy-mm-dd'
    });
</script>

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
        var metrics = document.querySelectorAll('.metric');
        var throttledRotateCube = throttle(rotateCube, 20);
        $('#filter_metric_alert').hide();

        const degs = {
            back:   {X: 0, Y:   180},
            top:    {X:   -90, Y:   0},
            front:  {X:    0, Y:   0},
            bottom: {X:  90, Y:   0},
            left:   {X:    0, Y: 90},
            right:  {X:    0, Y:  -90},
        };
        var allMetrics = {
            LCP: "front",
            FCP: "back",
            CLS: "left",
            SI: "right",
            TBT: "top",
            FID: "bottom",
            TTI: "none",
            TTFB: "none"
        };
        var allDataMetric = {
            LCP: {
                data : {},
                side : "front"
            },
            FCP: {
                data : {},
                side : "back"
            },
            CLS: {
                data : {},
                side : "left"
            },
            SI: {
                data : {},
                side : "right"
            },
            TBT: {
                data : {},
                side : "top"
            },
            FID: {
                data : {},
                side : "bottom"
            },
            TTI: {
                data : {},
                side : "none"
            },
            TTFB: {
                data : {},
                side : "none"
            }
        };

        var autoRotate = true;
        rotateInterval = setInterval(function () {
            rotY += 0.5;
            rotX += 0.5;
            cube.style.transform = 'rotateX(' + rotX + 'deg) rotateY(' + rotY + 'deg)';
        }, 30);
        var rotateInterval;
        var sites_select = document.getElementById('sites_select');

        function loadCounters(){
            $.ajax({
                type: "get",
                url: "http://localhost:8000/counters_short",
                success: function(data) {
                    if (data['data'].length > 0){
                        for (let i = 0; i < data['data'].length; i++){
                            let option = document.createElement('option');
                            option.value = data['data'][i]['id'];
                            option.textContent = data['data'][i]['site'];
                            if (i === 0){
                                option.setAttribute('selected', true);
                            }
                            sites_select.appendChild(option);
                        }
                        loadData(sites_select.value.trim());
                        getMetricData(sites_select.value.trim(), new Date().toISOString().split('T')[0] , new Date().toISOString().split('T')[0]);
                    }
                }
            });
        }

        function loadData(site = ''){
            $.ajax({
                type: "get",
                url: "http://localhost:8000/load_data",
                data : {
                    site: site
                },
                success: function(data) {
                    document.querySelectorAll('.face').forEach(face => {
                        let cells = face.querySelectorAll('.cell');
                        let face_value = face.querySelector('.face-text').parentElement.getAttribute('data-metric');
                        allDataMetric['LCP']['data'] = data['LCP'];
                        allDataMetric['FCP']['data'] = data['FCP'];
                        allDataMetric['CLS']['data'] = data['CLS'];
                        allDataMetric['SI']['data'] = data['SI'];
                        allDataMetric['TBT']['data'] = data['TBT'];
                        allDataMetric['FID']['data'] = data['FID'];
                        allDataMetric['TTI']['data'] = data['TTI'];
                        allDataMetric['TTFB']['data'] = data['TTFB'];
                        if (cells.length === 0) {
                            if(face_value === "LCP"){
                                for (let i = 0; i < 9; i++){
                                    let cell = document.createElement('div');
                                    cell.className = 'cell no-select';
                                    cell.textContent = data['LCP'][`${i}`]
                                    face.appendChild(cell);
                                }
                            }
                            if(face_value === "FCP"){
                                for (let i = 0; i < 9; i++){
                                    let cell = document.createElement('div');
                                    cell.className = 'cell no-select';
                                    cell.textContent = data['FCP'][`${i}`]
                                    face.appendChild(cell);
                                }
                            }
                            if(face_value === "CLS"){
                                for (let i = 0; i < 9; i++){
                                    let cell = document.createElement('div');
                                    cell.className = 'cell no-select';
                                    cell.textContent = data['CLS'][`${i}`]
                                    face.appendChild(cell);
                                }
                            }
                            if(face_value === "SI"){
                                for (let i = 0; i < 9; i++){
                                    let cell = document.createElement('div');
                                    cell.className = 'cell no-select';
                                    cell.textContent = data['SI'][`${i}`]
                                    face.appendChild(cell);
                                }
                                allDataMetric['SI']['data'] = data['SI'];
                            }
                            if(face_value === "TBT"){
                                for (let i = 0; i < 9; i++){
                                    let cell = document.createElement('div');
                                    cell.className = 'cell no-select';
                                    cell.textContent = data['TBT'][`${i}`]
                                    face.appendChild(cell);
                                }
                            }
                            if(face_value === "FID"){
                                for (let i = 0; i < 9; i++){
                                    let cell = document.createElement('div');
                                    cell.className = 'cell no-select';
                                    cell.textContent = data['FID'][`${i}`]
                                    face.appendChild(cell);
                                }
                            }
                            if(face_value === "TTI"){
                                for (let i = 0; i < 9; i++){
                                    let cell = document.createElement('div');
                                    cell.className = 'cell no-select';
                                    cell.textContent = data['TTI'][`${i}`]
                                    face.appendChild(cell);
                                }
                            }
                            if(face_value === "TTFB"){
                                for (let i = 0; i < 9; i++){
                                    let cell = document.createElement('div');
                                    cell.className = 'cell no-select';
                                    cell.textContent = data['TTFB'][`${i}`]
                                    face.appendChild(cell);
                                }
                            }
                        }
                        else{
                            if(face_value === "LCP"){
                                cells.forEach((cell, index) => {
                                    cell.textContent = data['LCP'][`${index}`]
                                });
                            }
                            if(face_value === "FCP"){
                                cells.forEach((cell, index) => {
                                    cell.textContent = data['FCP'][`${index}`]
                                });
                            }
                            if(face_value === "CLS"){
                                cells.forEach((cell, index) => {
                                    cell.textContent = data['CLS'][`${index}`]
                                });
                            }
                            if(face_value === "SI"){
                                cells.forEach((cell, index) => {
                                    cell.textContent = data['SI'][`${index}`]
                                });
                            }
                            if(face_value === "TBT"){
                                cells.forEach((cell, index) => {
                                    cell.textContent = data['TBT'][`${index}`]
                                });
                            }
                            if(face_value === "FID"){
                                cells.forEach((cell, index) => {
                                    cell.textContent = data['FID'][`${index}`]
                                });
                            }
                            if(face_value === "TTI"){
                                cells.forEach((cell, index) => {
                                    cell.textContent = data['TTI'][`${index}`]
                                });
                            }
                            if(face_value === "TTFB"){
                                cells.forEach((cell, index) => {
                                    cell.textContent = data['TTFB'][`${index}`]
                                });
                            }
                        }
                    });
                }
            });
        }

        function getMetricData(site, date1, date2){
            $.ajax({
                type: "get",
                url: "http://localhost:8000/metric_data",
                data : {
                    site: site,
                    date1: date1,
                    date2: date2
                },
                success: function(data) {
                    console.log(data);
                }
            });
        }

        loadCounters();

        sites_select.addEventListener('change',function(){
            let sites_list_value = sites_select.value.trim();
            let options = sites_select.querySelectorAll('option');
            options.forEach((option, index) => {
                option.removeAttribute('selected');
                if (option.value === sites_list_value){
                    option.setAttribute('selected', true);
                }
            });
            loadData(sites_list_value);
            getMetricData(sites_list_value, new Date().toISOString().split('T')[0] , new Date().toISOString().split('T')[0]);
        });

        metrics.forEach(el => el.addEventListener('dragstart', event => {
            autoRotate = false;
            clearInterval(rotateInterval);
        }));

        metrics.forEach(el => el.addEventListener('dragend', event => {
            autoRotate = true;
            rotateInterval = setInterval(function () {
                rotY += 0.5;
                rotX += 0.5;
                cube.style.transform = 'rotateX(' + rotX + 'deg) rotateY(' + rotY + 'deg)';
            }, 30);
        }));

        function editData(metric){
            let face = document.getElementById('cube').querySelector(`[data-metric="${metric}"]`);
            let cells = face.querySelectorAll('.cell');
            cells.forEach((cell, index) => {
                cell.textContent = allDataMetric[metric]['data'][`${index}`];
            });
        }


        function createCells() {
            let sites_list_value = document.getElementById('sites_select').value.trim();
            document.querySelectorAll('.face').forEach(face => {
                let cells = face.querySelectorAll('.cell');
                let face_value = face.querySelector('.face-text').parentElement.getAttribute('data-metric');
                if (cells.length === 0) {
                    if (sites_list_value === "site_#1") {
                        if(face_value === "FCP"){
                            for (let i = 0; i < 9; i++){
                                let cell = document.createElement('div');
                                cell.className = 'cell no-select';
                                cell.textContent = 'site_#1_fcp_' + i.toString();
                                face.appendChild(cell);
                            }
                        }
                        if(face_value === "TBT"){
                            for (let i = 0; i < 9; i++){
                                let cell = document.createElement('div');
                                cell.className = 'cell no-select';
                                cell.textContent = 'site_#1_tbt_' + i.toString();
                                face.appendChild(cell);
                            }
                        }
                        if(face_value === "LCP"){
                            for (let i = 0; i < 9; i++){
                                let cell = document.createElement('div');
                                cell.className = 'cell no-select';
                                cell.textContent = 'site_#1_lcp_' + i.toString();
                                face.appendChild(cell);
                            }
                        }
                        if(face_value === "FID"){
                            for (let i = 0; i < 9; i++){
                                let cell = document.createElement('div');
                                cell.className = 'cell no-select';
                                cell.textContent = 'site_#1_fid_' + i.toString();
                                face.appendChild(cell);
                            }
                        }
                        if(face_value === "CLS"){
                            for (let i = 0; i < 9; i++){
                                let cell = document.createElement('div');
                                cell.className = 'cell no-select';
                                cell.textContent = 'site_#1_cls_' + i.toString();
                                face.appendChild(cell);
                            }
                        }
                        if(face_value === "SI"){
                            for (let i = 0; i < 9; i++){
                                let cell = document.createElement('div');
                                cell.className = 'cell no-select';
                                cell.textContent = 'site_#1_si_' + i.toString();
                                face.appendChild(cell);
                            }
                        }
                    }
                    if (sites_list_value === "site_#2") {
                        if(face_value === "FCP"){
                            for (let i = 0; i < 9; i++){
                                let cell = document.createElement('div');
                                cell.className = 'cell no-select';
                                cell.textContent = 'site_#2_fcp_' + i.toString();
                                face.appendChild(cell);
                            }
                        }
                        if(face_value=== "TBT"){
                            for (let i = 0; i < 9; i++){
                                let cell = document.createElement('div');
                                cell.className = 'cell no-select';
                                cell.textContent = 'site_#2_tbt_' + i.toString();
                                face.appendChild(cell);
                            }
                        }
                        if(face_value === "LCP"){
                            for (let i = 0; i < 9; i++){
                                let cell = document.createElement('div');
                                cell.className = 'cell no-select';
                                cell.textContent = 'site_#2_lcp_' + i.toString();
                                face.appendChild(cell);
                            }
                        }
                        if(face_value === "FID"){
                            for (let i = 0; i < 9; i++){
                                let cell = document.createElement('div');
                                cell.className = 'cell no-select';
                                cell.textContent = 'site_#2_fid_' + i.toString();
                                face.appendChild(cell);
                            }
                        }
                        if(face_value === "CLS"){
                            for (let i = 0; i < 9; i++){
                                let cell = document.createElement('div');
                                cell.className = 'cell no-select';
                                cell.textContent = 'site_#2_cls_' + i.toString();
                                face.appendChild(cell);
                            }
                        }
                        if(face_value === "SI"){
                            for (let i = 0; i < 9; i++){
                                let cell = document.createElement('div');
                                cell.className = 'cell no-select';
                                cell.textContent = 'site_#2_si_' + i.toString();
                                face.appendChild(cell);
                            }
                        }
                    }
                    if (sites_list_value === "site_#3") {
                        if(face_value === "FCP"){
                            for (let i = 0; i < 9; i++){
                                let cell = document.createElement('div');
                                cell.className = 'cell no-select';
                                cell.textContent = 'site_#3_fcp_' + i.toString();
                                face.appendChild(cell);
                            }
                        }
                        if(face_value === "TBT"){
                            for (let i = 0; i < 9; i++){
                                let cell = document.createElement('div');
                                cell.className = 'cell no-select';
                                cell.textContent = 'site_#3_tbt_' + i.toString();
                                face.appendChild(cell);
                            }
                        }
                        if(face_value === "LCP"){
                            for (let i = 0; i < 9; i++){
                                let cell = document.createElement('div');
                                cell.className = 'cell no-select';
                                cell.textContent = 'site_#3_lcp_' + i.toString();
                                face.appendChild(cell);
                            }
                        }
                        if(face_value === "FID"){
                            for (let i = 0; i < 9; i++){
                                let cell = document.createElement('div');
                                cell.className = 'cell no-select';
                                cell.textContent = 'site_#3_fid_' + i.toString();
                                face.appendChild(cell);
                            }
                        }
                        if(face_value === "CLS"){
                            for (let i = 0; i < 9; i++){
                                let cell = document.createElement('div');
                                cell.className = 'cell no-select';
                                cell.textContent = 'site_#3_cls_' + i.toString();
                                face.appendChild(cell);
                            }
                        }
                        if(face_value === "SI"){
                            for (let i = 0; i < 9; i++){
                                let cell = document.createElement('div');
                                cell.className = 'cell no-select';
                                cell.textContent = 'site_#3_si_' + i.toString();
                                face.appendChild(cell);
                            }
                        }
                    }
                }
                else{
                    if (sites_list_value === "site_#1") {
                        cells.forEach((cell, index) => {
                            if(face_value === "FCP"){
                                cell.textContent = 'site_#1_fcp_' + index.toString();
                            }
                            if(face_value === "TBT"){
                                cell.textContent = 'site_#1_tbt_' + index.toString();
                            }
                            if(face_value === "LCP"){
                                cell.textContent = 'site_#1_lcp_' + index.toString();
                            }
                            if(face_value === "FID"){
                                cell.textContent = 'site_#1_fid_' + index.toString();
                            }
                            if(face_value === "CLS"){
                                cell.textContent = 'site_#1_cls_' + index.toString();
                            }
                            if(face_value === "SI"){
                                cell.textContent = 'site_#1_si_' + index.toString();
                            }
                        });
                    }
                    if (sites_list_value === "site_#2") {
                        if(face_value === "FCP"){
                            cells.forEach((cell, index) => {
                                cell.textContent = 'site_#2_fcp_' + index.toString();
                            });
                        }
                        if(face_value === "TBT"){
                            cells.forEach((cell, index) => {
                                cell.textContent = 'site_#2_tbt_' + index.toString();
                            });
                        }
                        if(face_value === "LCP"){
                            cells.forEach((cell, index) => {
                                cell.textContent = 'site_#2_lcp_' + index.toString();
                            });
                        }
                        if(face_value === "FID"){
                            cells.forEach((cell, index) => {
                                cell.textContent = 'site_#2_fid_' + index.toString();
                            });
                        }
                        if(face_value === "CLS"){
                            cells.forEach((cell, index) => {
                                cell.textContent = 'site_#2_cls_' + index.toString();
                            });
                        }
                        if(face_value === "SI"){
                            cells.forEach((cell, index) => {
                                cell.textContent = 'site_#2_si_' + index.toString();
                            });
                        }

                    }
                    if (sites_list_value === "site_#3") {
                        if(face_value === "FCP"){
                            cells.forEach((cell, index) => {
                                cell.textContent = 'site_#3_fcp_' + index.toString();
                            });
                        }
                        if(face_value === "TBT"){
                            cells.forEach((cell, index) => {
                                cell.textContent = 'site_#3_tbt_' + index.toString();
                            });
                        }
                        if(face_value === "LCP"){
                            cells.forEach((cell, index) => {
                                cell.textContent = 'site_#3_lcp_' + index.toString();
                            });
                        }
                        if(face_value === "FID"){
                            cells.forEach((cell, index) => {
                                cell.textContent = 'site_#3_fid_' + index.toString();
                            });
                        }
                        if(face_value === "CLS"){
                            cells.forEach((cell, index) => {
                                cell.textContent = 'site_#3_cls_' + index.toString();
                            });
                        }
                        if(face_value === "SI"){
                            cells.forEach((cell, index) => {
                                cell.textContent = 'site_#3_si_' + index.toString();
                            });
                        }
                    }
                }
            });
        }


        //createCells();


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
                e.dataTransfer.setData("text/plain", metric.getAttribute('data-metric'));
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
                var faceText = face.querySelector('.face-text');
                let elemMetric = document.getElementById('metrics').querySelector(`[data-metric="${data}"]`);
                elemMetric.textContent = faceText.textContent;
                elemMetric.setAttribute('data-metric', face.getAttribute('data-metric'));
                let metricButton = document.getElementById('metric-buttons').querySelector(`[data-metric="${elemMetric.getAttribute('data-metric')}"]`);
                metricButton.textContent = data;
                metricButton.setAttribute('data-metric', data);
                faceText.textContent = data;
                allDataMetric[data]["side"] = allDataMetric[face.getAttribute('data-metric')]["side"];
                allDataMetric[face.getAttribute('data-metric')]["side"] = "none";
                face.setAttribute('data-metric', data);
                face.classList.remove('highlight');

                editData(data);
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
            cell.addEventListener('dblclick', function () {

            });
        });


        document.querySelectorAll('.cell, .face').forEach(element => {
            element.classList.add('no-drag');
        });


        document.querySelectorAll('#metric-buttons button').forEach(function (button) {
            button.addEventListener('click', function (e) {
                e.preventDefault();


                if(e.target.id !== "toggle-cube"){
                    autoRotate = false;
                    clearInterval(rotateInterval);
                    var buttonMetric = e.target.getAttribute('data-metric');
                    // setTimeout(() => {
                    //     cube.style.transform = 'perspective(1000px) rotateX('+degs[allMetrics[buttonMetric]].X+'deg) rotateY('+degs[allMetrics[buttonMetric]].Y+'deg)';
                    // },100);
                    // rotY = degs[allMetrics[buttonMetric]].Y;
                    // rotX = degs[allMetrics[buttonMetric]].X;

                    setTimeout(() => {
                        cube.style.transform = 'perspective(1000px) rotateX('+degs[allDataMetric[buttonMetric]["side"]].X+'deg) rotateY('+degs[allDataMetric[buttonMetric]["side"]].Y+'deg)';
                    },100);
                    rotY = degs[allDataMetric[buttonMetric]["side"]].Y;
                    rotX = degs[allDataMetric[buttonMetric]["side"]].X;

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


        document.getElementById('cube-container').addEventListener('mouseenter', function () {
            autoRotate = false;
            clearInterval(rotateInterval);
        });


        document.getElementById('cube-container').addEventListener('mouseleave', function () {
            autoRotate = true;
            rotateInterval = setInterval(function () {
                rotY += 0.5;
                rotX += 0.5;
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
            document.querySelector('.back').style.transform = 'rotateY(-180deg) translateZ(300px)';
            document.querySelector('.top').style.transform = 'rotateX(90deg) translateZ(300px)';
            document.querySelector('.front').style.transform = 'rotateY(0deg) translateZ(300px)';
            document.querySelector('.bottom').style.transform = 'rotateX(-90deg)  translateZ(300px)';
            document.querySelector('.left').style.transform = 'rotateY(-90deg) translateZ(300px)';
            document.querySelector('.right').style.transform = 'rotateY(90deg) translateZ(300px)';
        }

        function assembleCube() {
            cube.classList.remove('disassembled');
            document.querySelector('.back').style.transform = 'rotateY(-180deg) translateZ(200px)';
            document.querySelector('.top').style.transform = 'rotateX(90deg) translateZ(200px)';
            document.querySelector('.front').style.transform = 'rotateX(0deg) translateZ(200px)';
            document.querySelector('.bottom').style.transform = 'rotateX(-90deg) translateZ(200px)';
            document.querySelector('.left').style.transform = 'rotateY(-90deg) translateZ(200px)';
            document.querySelector('.right').style.transform = 'rotateY(90deg) translateZ(200px)';
        }

        document.querySelectorAll('.no-drag').forEach(element => {
            element.addEventListener('dragstart', function(e) {
                e.preventDefault();
            });
        });

        var filter_metric_start = document.getElementById('filter_metric_start');
        filter_metric_start.addEventListener('click', function (e){
            let date1 = $datepicker_from.value();
            let date2 = $datepicker_until.value();
            if (date1 <= date2){
                $('#filter_metric_alert').hide();
                getMetricData(sites_select.value,  date1, date2);
            }
            else{
                $('#filter_metric_alert').show();
            }
        });

    });

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
