<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container-fluid{
            margin: 0;
            padding: 0;
        }
        #links .active-link{
            background: #005fee !important;
        }
        #links .navbar{
            margin: 0;
            padding: 0;
        }
        #links .nav-item{
            padding: 5px 0 5px 0;
        }
        #links .nav-item:hover{
            background: #005fee !important;
            transition: 0.5s ease;
        }
    </style>
</head>
<body>


<div class="container-fluid">
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="https://catherineasquithgallery.com/uploads/posts/2021-03/1614612233_137-p-fon-dlya-fotoshopa-priroda-209.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    Bootstrap
                </a>
                <div class="d-flex" style="align-items: center;" >
                    <div class="dropdown d-sm-block d-none" style="margin-right: 30px">
                        <a class="d-flex p-3 position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
                            </svg>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="margin-top: 10px">
                                99+
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-md shadow-sm">
                            <h5 class="fw-semibold px-3 py-2 m-0">Уведомления</h5>
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-start py-2">
                                    <div class="m-0">
                                        <p class="mb-1">Текст уведомления</p>
                                        <p class="small m-0 opacity-50">Сегодня, 07:30</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-start py-2">
                                    <div class="m-0">
                                        <p class="mb-1">Текст уведомления</p>
                                        <p class="small m-0 opacity-50">Сегодня, 08:00</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-start py-2">
                                    <div class="m-0">
                                        <p class="mb-1">
                                            Текст уведомления
                                        </p>
                                        <p class="small m-0 opacity-50">Сегодня, 09:30</p>
                                    </div>
                                </div>
                            </a>
                            <div class="d-grid p-3 border-top">
                                <div style="display: flex; justify-content: space-evenly">
                                    <div>
                                        <a href="#" class="btn btn-outline-primary">Посмотреть все</a>
                                    </div>
                                    <div style="margin-left: 5px">
                                        <button type="button" class="btn btn-outline-danger">Очистить</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown ms-2">
                        <a class="dropdown-toggle d-flex align-items-center user-settings" style="text-decoration: none;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="d-none d-md-block" style="color: black">Алексей</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="img-3x m-2 me-0 rounded-5" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                            </svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-sm shadow-sm gap-3">
                            <a class="dropdown-item d-flex align-items-center py-2" href="#"><i class="icon-smile fs-4 me-3"></i>Профиль</a>
                            <a class="dropdown-item d-flex align-items-center py-2" href="#"><i class="icon-settings fs-4 me-3"></i>Настройки</a>
                            <a class="dropdown-item d-flex align-items-center py-2" href="#"><i class="icon-log-out fs-4 me-3"></i>Выйти</a>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="margin-left: 20px">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

            </div>
        </nav>
    </div>
    <div style="background-color: #0d6efd;" id="links">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="collapse navbar-collapse flex" style="justify-content: space-between" id="navbarNavDropdown">
                    <div>
                        <ul class="navbar-nav">
                            <li class="nav-item active-link">
                                <a class="nav-link" href="#" style="color: white">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color: white">Прогнозирование</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color: white">Метрики Core Web Vitals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color: white">Показатели производительности</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                                    Методы SEO-оптимизации
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Введите что-нибудь..." aria-label="Введите что-нибудь...">
                            <button class="btn btn-success" type="submit">Поиск</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="container-fluid" style="background-color: rgba(124,123,123,0.09); padding-top: 20px">
    <div class="container">
        <div id="breadcrumbs">
            <div class="row">
                <div class="col-12 col-xl-6">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house" viewBox="0 0 20 20" style="margin-bottom: -5px; color: #0d6efd">
                                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                                </svg>
                                <a href="#" class="text-decoration-none">Главная</a>
                            </li>
                            <li class="breadcrumb-item">
                                Dashboards
                            </li>
                            <li class="breadcrumb-item">
                                Analytics
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div id="main">

        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
