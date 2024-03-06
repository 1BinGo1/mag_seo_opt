<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
        .current_range_value {
            font-size: 20px;
            color: #005fee;
            display: inline-block;
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
                <div class="collapse navbar-collapse flex" style="justify-content: space-between;align-items: center" id="navbarNavDropdown">
                    <div>
                        <ul class="navbar-nav text-center" style="align-items: center">
                            <li class="nav-item active-link">
                                <a class="nav-link" href="#" style="color: white">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color: white">SEO-показатели</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color: white">Метрики Core Web Vitals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color: white">Показатели производительности</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                                    Продвинутые методы SEO-оптимизации
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Прогнозирование</a></li>
                                    <li><a class="dropdown-item" href="#">Оптимизация изображений</a></li>
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
    </div>
</div>

<div class="container-fluid" style="margin-top: 20px">
    <div class="container">
        <div id="main">
            <div id="calculate_seo_opt">
                <h1>Калькулятор SEO-производительности</h1>

                <div>
                    <form class="was-validated" id="form_seo_calc" method="post">
                        @csrf
                        <div class="accordion" id="metrics_for_seo_calc_opt">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_technical_metrics_add" aria-expanded="true" aria-controls="collapse_technical_metrics_add">
                                        Технические показатели
                                    </button>
                                </h2>
                                <div id="collapse_technical_metrics_add" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <div id="technical_metrics">
                                            <div>
                                                <div style="display: flex; align-items: center">
                                                    <p>Добавить новый показатель</p>
                                                    <button type="button" style="border: none; background-color: white; margin-bottom: 10px" data-bs-toggle="modal" data-bs-target="#modal_metrics" data-group="technical_metrics" class="start_modal_metrics">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                                                            <path d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div style="margin-bottom: 20px">
                                                    <input type="number" min="0" max="1" step="0.01" value="0" class="form-control range_max_metric_in_group" required>
                                                    <div class="form-text">Укажите, пожалуйста, вес группы от 0 до 1</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="lcp_calc_input" step="0.01" min="0" max="1" value="0" style="border-bottom: 0px; border-radius: 10px 10px 0 0; margin: 0;height: 50px" placeholder="0" required>
                                                    <div class="invalid-feedback">
                                                        Пожалуйста, введите число от 0 до 1
                                                    </div>
                                                    <label for="lcp_calc_input">LCP value</label>
                                                    <input type="range" class="form-range max-calc" data-range-group="technical_metrics" min="0" max="1" value="0" step="0.01" id="lcp_calc_range" style="margin-top: -15px;padding: 0">
                                                    <span class="current_range_value" data-range-value="lcp_calc_range"></span>
                                                    <div class="form-text" style="margin: 0">Укажите,пожалуйста приоритет показателя.</div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="fid_calc_input" step="0.01" min="0" max="1" value="0" style="border-bottom: 0px; border-radius: 10px 10px 0 0; margin: 0;height: 50px" placeholder="0" required>
                                                    <div class="invalid-feedback">
                                                        Пожалуйста, введите число от 0 до 1
                                                    </div>
                                                    <label for="fid_calc_input">FID value</label>
                                                    <input type="range" class="form-range max-calc" data-range-group="technical_metrics" min="0" max="1" value="0" step="0.01" id="fid_calc_range" style="margin-top: -15px;padding: 0">
                                                    <span class="current_range_value" data-range-value="fid_calc_range"></span>
                                                    <div class="form-text" style="margin: 0">Укажите,пожалуйста приоритет показателя.</div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="cls_calc_input" step="0.01" min="0" max="1" value="0" style="border-bottom: 0px; border-radius: 10px 10px 0 0; margin: 0;height: 50px" placeholder="0" required>
                                                    <div class="invalid-feedback">
                                                        Пожалуйста, введите число от 0 до 1
                                                    </div>
                                                    <label for="cls_calc_input">CLS value</label>
                                                    <input type="range" class="form-range max-calc" data-range-group="technical_metrics" min="0" max="1" value="0" step="0.01" id="cls_calc_range" style="margin-top: -15px;padding: 0">
                                                    <span class="current_range_value" data-range-value="cls_calc_range"></span>
                                                    <div class="form-text" style="margin: 0">Укажите,пожалуйста приоритет показателя.</div>
                                                </div>

                                                <div id="additional_technical_metrics"></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_seo_metrics_add" aria-expanded="false" aria-controls="collapse_seo_metrics_add">
                                        Показатели SEO
                                    </button>
                                </h2>
                                <div id="collapse_seo_metrics_add" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <div id="seo_metrics">
                                            <div>
                                                <div style="display: flex; align-items: center">
                                                    <p>Добавить новый показатель</p>
                                                    <button type="button" style="border: none; background-color: white; margin-bottom: 10px" data-bs-toggle="modal" data-bs-target="#modal_metrics" data-group="seo_metrics" class="start_modal_metrics">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                                                            <path d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div style="margin-bottom: 20px">
                                                    <input type="number" min="0" max="1" step="0.01" value="0" class="form-control range_max_metric_in_group" required>
                                                    <div class="form-text">Укажите, пожалуйста, вес группы от 0 до 1</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="number_of_visits_input" step="0.01" min="0" max="1" value="0" style="border-bottom: 0px; border-radius: 10px 10px 0 0; margin: 0;height: 50px" placeholder="0" required>
                                                    <div class="invalid-feedback">
                                                        Пожалуйста, введите число от 0 до 1
                                                    </div>
                                                    <label for="number_of_visits_input">Количество посещений</label>
                                                    <input type="range" class="form-range max-calc" data-range-group="seo_metrics" min="0" max="1" value="0" step="0.01" id="number_of_visits_range" style="margin-top: -15px;padding: 0">
                                                    <span class="current_range_value" data-range-value="number_of_visits_range"></span>
                                                    <div class="form-text" style="margin: 0">Укажите,пожалуйста приоритет показателя.</div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="position_of_the_site_in_the_search_query_input" step="0.01" min="0" max="1" value="0" style="border-bottom: 0px; border-radius: 10px 10px 0 0; margin: 0;height: 50px" placeholder="0" required>
                                                    <div class="invalid-feedback">
                                                        Пожалуйста, введите число от 0 до 1
                                                    </div>
                                                    <label for="position_of_the_site_in_the_search_query_input">Позиция сайта в поисковом запросе</label>
                                                    <input type="range" class="form-range max-calc" data-range-group="seo_metrics" min="0" max="1" value="0" step="0.01" id="position_of_the_site_in_the_search_query_range" style="margin-top: -15px;padding: 0">
                                                    <span class="current_range_value" data-range-value="position_of_the_site_in_the_search_query_range"></span>
                                                    <div class="form-text" style="margin: 0">Укажите,пожалуйста приоритет показателя.</div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="ctr_input" step="0.01" min="0" max="1" value="0" style="border-bottom: 0px; border-radius: 10px 10px 0 0; margin: 0;height: 50px" placeholder="0" required>
                                                    <div class="invalid-feedback">
                                                        Пожалуйста, введите число от 0 до 1
                                                    </div>
                                                    <label for="ctr_input">CTR в поисковой выдаче</label>
                                                    <input type="range" class="form-range max-calc" data-range-group="seo_metrics" min="0" max="1" value="0" step="0.01" id="ctr_range" style="margin-top: -15px;padding: 0">
                                                    <span class="current_range_value" data-range-value="ctr_range"></span>
                                                    <div class="form-text" style="margin: 0">Укажите,пожалуйста приоритет показателя.</div>
                                                </div>

                                                <div id="additional_seo_metrics"></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_audience_metrics_add" aria-expanded="false" aria-controls="collapse_audience_metrics_add">
                                        Показатели аудитории
                                    </button>
                                </h2>
                                <div id="collapse_audience_metrics_add" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <div id="audience_metrics">
                                            <div>
                                                <div>
                                                    <div style="display: flex; align-items: center">
                                                        <p>Добавить новый показатель</p>
                                                        <button type="button" style="border: none; background-color: white; margin-bottom: 10px" data-bs-toggle="modal" data-bs-target="#modal_metrics" data-group="audience_metrics" class="start_modal_metrics">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                                                                <path d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div style="margin-bottom: 20px">
                                                        <input type="number" min="0" max="1" step="0.01" value="0" class="form-control range_max_metric_in_group" required>
                                                        <div class="form-text">Укажите, пожалуйста, вес группы от 0 до 1</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="failure_rate_input" step="0.01" min="0" max="1" value="0" style="border-bottom: 0px; border-radius: 10px 10px 0 0; margin: 0;height: 50px" placeholder="0" required>
                                                    <div class="invalid-feedback">
                                                        Пожалуйста, введите число от 0 до 1
                                                    </div>
                                                    <label for="failure_rate_input">Коэффициент отказов</label>
                                                    <input type="range" class="form-range max-calc" data-range-group="audience_metrics" min="0" max="1" value="0" step="0.01" id="failure_rate_range" style="margin-top: -15px;padding: 0">
                                                    <span class="current_range_value" data-range-value="failure_rate_range"></span>
                                                    <div class="form-text" style="margin: 0">Укажите,пожалуйста приоритет показателя.</div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="average_time_on_site_input" step="0.01" min="0" max="1" value="0" style="border-bottom: 0px; border-radius: 10px 10px 0 0; margin: 0;height: 50px" placeholder="0" required>
                                                    <div class="invalid-feedback">
                                                        Пожалуйста, введите число от 0 до 1
                                                    </div>
                                                    <label for="average_time_on_site_input">Среднее время на сайте</label>
                                                    <input type="range" class="form-range max-calc" data-range-group="audience_metrics" min="0" max="1" value="0" step="0.01" id="average_time_on_site_range" style="margin-top: -15px;padding: 0">
                                                    <span class="current_range_value" data-range-value="average_time_on_site_range"></span>
                                                    <div class="form-text" style="margin: 0">Укажите,пожалуйста приоритет показателя.</div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="view_depth_input" step="0.01" min="0" max="1" value="0" style="border-bottom: 0px; border-radius: 10px 10px 0 0; margin: 0;height: 50px" placeholder="0" required>
                                                    <div class="invalid-feedback">
                                                        Пожалуйста, введите число от 0 до 1
                                                    </div>
                                                    <label for="view_depth_input">Глубина просмотра</label>
                                                    <input type="range" class="form-range max-calc" data-range-group="audience_metrics" min="0" max="1" value="0" step="0.01" id="view_depth_range" style="margin-top: -15px;padding: 0">
                                                    <span class="current_range_value" data-range-value="view_depth_range"></span>
                                                    <div class="form-text" style="margin: 0">Укажите,пожалуйста приоритет показателя.</div>
                                                </div>

                                                <div id="additional_audience_metrics"></div>

{{--                                                <div class="form-floating mb-3">--}}
{{--                                                    <input type="number" class="form-control" id="male_input" step="0.01" min="0" max="1" value="0" style="border-bottom: 0px; border-radius: 10px 10px 0 0; margin: 0;height: 50px" placeholder="0" required>--}}
{{--                                                    <div class="invalid-feedback">--}}
{{--                                                        Пожалуйста, введите число от 0 до 1--}}
{{--                                                    </div>--}}
{{--                                                    <label for="male_input">Мужской пол</label>--}}
{{--                                                    <input type="range" class="form-range max-calc" min="0" max="1" value="0" step="0.01" id="male_range" style="margin-top: -15px;padding: 0">--}}
{{--                                                    <span class="current_range_value" data-range-value="male_range"></span>--}}
{{--                                                    <div class="form-text" style="margin: 0">Укажите,пожалуйста приоритет показателя.</div>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-floating mb-3">--}}
{{--                                                    <input type="number" class="form-control" id="female_input" step="0.01" min="0" max="1" value="0" style="border-bottom: 0px; border-radius: 10px 10px 0 0; margin: 0;height: 50px" placeholder="0" required>--}}
{{--                                                    <div class="invalid-feedback">--}}
{{--                                                        Пожалуйста, введите число от 0 до 1--}}
{{--                                                    </div>--}}
{{--                                                    <label for="female_input">Женский пол</label>--}}
{{--                                                    <input type="range" class="form-range max-calc" min="0" max="1" value="0" step="0.01" id="female_range" style="margin-top: -15px;padding: 0">--}}
{{--                                                    <span class="current_range_value" data-range-value="female_range"></span>--}}
{{--                                                    <div class="form-text" style="margin: 0">Укажите,пожалуйста приоритет показателя.</div>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-floating mb-3 max-calc">--}}
{{--                                                    <div class="card border-primary mb-3">--}}
{{--                                                        <div class="card-header">Географическое положение</div>--}}
{{--                                                        <div class="card-body">--}}
{{--                                                            <h5 class="card-title">Primary card title</h5>--}}
{{--                                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" style="margin-top: 20px">Рассчитать</button>

                    </form>
                </div>

{{--                <div>--}}
{{--                    <div class="modal fade" id="technical_metrics_add" tabindex="-1" aria-labelledby="technical_metrics_add_label" aria-hidden="true">--}}
{{--                        <div class="modal-dialog modal-lg modal-dialog-centered">--}}
{{--                            <div class="modal-content">--}}
{{--                                <div class="modal-header">--}}
{{--                                    <h1 class="modal-title fs-5" id="technical_metrics_add_label">Технические показатели</h1>--}}
{{--                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                                </div>--}}
{{--                                <div class="modal-body">--}}
{{--                                    <nav>--}}
{{--                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">--}}
{{--                                            <button class="nav-link active" id="nav-base_templates_technical_metrics-tab" data-bs-toggle="tab" data-bs-target="#nav-base_templates_technical_metrics" type="button" role="tab" aria-controls="nav-base_templates_technical_metrics" aria-selected="true">Базовые шаблоны</button>--}}
{{--                                            <button class="nav-link" id="nav-custom-templates-tab" data-bs-toggle="tab" data-bs-target="#nav-custom_templates_technical_metrics" type="button" role="tab" aria-controls="nav-custom_templates_technical_metrics" aria-selected="true">Мои шаблоны</button>--}}
{{--                                            <button class="nav-link" id="nav-create_new_metric-tab" data-bs-toggle="tab" data-bs-target="#nav-create_new_metric" type="button" role="tab" aria-controls="nav-create_new_metric" aria-selected="false">Создать новый показатель</button>--}}
{{--                                        </div>--}}
{{--                                    </nav>--}}
{{--                                    <div class="tab-content" id="nav-tabContent" style="margin-top: 20px">--}}
{{--                                        <div class="tab-pane fade show active" id="nav-base_templates_technical_metrics" role="tabpanel" aria-labelledby="nav-base_templates_technical_metrics-tab" tabindex="0">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-4">--}}
{{--                                                    <div class="list-group" id="list_base_templates_technical_metrics" role="tablist">--}}
{{--                                                        <a class="list-group-item list-group-item-action active" id="item_base_templates_technical_metrics-ttfb-list" data-bs-toggle="list" href="#list-base_templates_technical_metrics-ttfb" role="tab" aria-controls="list-base_templates_technical_metrics-ttfb">TTBF</a>--}}
{{--                                                        <a class="list-group-item list-group-item-action" id="item_base_templates_technical_metrics-fcp-list" data-bs-toggle="list" href="#list-base_templates_technical_metrics-fcp" role="tab" aria-controls="list-base_templates_technical_metrics-fcp">FCP</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-8">--}}
{{--                                                    <div class="tab-content" id="nav-list_base_templates_technical_metrics-tabContent">--}}
{{--                                                        <div class="tab-pane fade show active" id="list-base_templates_technical_metrics-ttfb" role="tabpanel" aria-labelledby="item_base_templates_technical_metrics-ttfb-list">--}}
{{--                                                            <p>Время до первого байта (TTFB) — это основополагающий показатель для измерения времени установки соединения и скорости реагирования веб-сервера как в лаборатории, так и в полевых условиях. Это помогает определить, когда веб-сервер слишком медленно отвечает на запросы. В случае запросов навигации, то есть запросов HTML-документа, он предшествует любому другому значимому показателю производительности загрузки.</p>--}}
{{--                                                            <p>Минимальное значение: 0</p>--}}
{{--                                                            <p>Максимальное значение: 1</p>--}}
{{--                                                            <button type="button" data-data_additional_metric='{"type" : "ttfb","name": "TTFB значение", "group" : "technical_metrics"}' class="btn btn-outline-success btn_add_in_group">Добавить показатель</button>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="tab-pane fade" id="list-base_templates_technical_metrics-fcp" role="tabpanel" aria-labelledby="item_base_templates_technical_metrics-fcp-list">--}}
{{--                                                            <p>First Contentful Paint (FCP) — это важный, ориентированный на пользователя показатель для измерения воспринимаемой скорости загрузки . Он отмечает первую точку на временной шкале загрузки страницы, где пользователь может видеть что-либо на экране. Быстрый FCP помогает убедить пользователя в том, что что-то происходит .</p>--}}
{{--                                                            <p>Минимальное значение: 0</p>--}}
{{--                                                            <p>Максимальное значение: 1</p>--}}
{{--                                                            <button type="button" data-data_additional_metric='{"type" : "fcp","name": "FCP значение", "group" : "technical_metrics"}' class="btn btn-outline-success btn_add_in_group">Добавить показатель</button>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="tab-pane fade show" id="nav-custom_templates_technical_metrics" role="tabpanel" aria-labelledby="nav-custom-templates-tab" tabindex="0">--}}
{{--                                            ...--}}
{{--                                        </div>--}}
{{--                                        <div class="tab-pane fade" id="nav-create_new_metric" role="tabpanel" aria-labelledby="nav-create_new_metric-tab" tabindex="0">--}}
{{--                                            <form id="form_create_new_technical_metric" class="was-validated" method="post">--}}
{{--                                                @csrf--}}
{{--                                                <div class="form-floating mb-3">--}}
{{--                                                    <input type="text" class="form-control" id="new_metric_title" name="new_metric_title" placeholder="Введите название показателя" required>--}}
{{--                                                    <label for="new_metric_title">Введите название показателя</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-floating mb-3">--}}
{{--                                                    <input type="number" class="form-control" id="new_metric_min_value" name="new_metric_min_value" placeholder="Введите минимальное значение" required>--}}
{{--                                                    <label for="new_metric_min_value">Введите минимальное значение</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-floating mb-3">--}}
{{--                                                    <input type="number" class="form-control" id="new_metric_max_value" name="new_metric_max_value" placeholder="Введите максимальное значение" required>--}}
{{--                                                    <label for="new_metric_max_value">Введите максимальное значение</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-floating mb-3">--}}
{{--                                                    <textarea class="form-control" id="new_metric_description" name="new_metric_description" rows="5" style="height: 150px"></textarea>--}}
{{--                                                    <label for="new_metric_description">Введите описание показателя</label>--}}
{{--                                                </div>--}}
{{--                                                <button type="submit" class="btn btn-primary">Сохранить</button>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="modal-footer">--}}
{{--                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}




{{--                <div>--}}
{{--                    <div class="modal fade" id="seo_metrics_add" tabindex="-1" aria-labelledby="seo_metrics_add_label" aria-hidden="true">--}}
{{--                        <div class="modal-dialog modal-lg modal-dialog-centered">--}}
{{--                            <div class="modal-content">--}}
{{--                                <div class="modal-header">--}}
{{--                                    <h1 class="modal-title fs-5" id="seo_metrics_add_label">Modal title</h1>--}}
{{--                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                                </div>--}}
{{--                                <div class="modal-body">--}}
{{--                                    ...--}}
{{--                                </div>--}}
{{--                                <div class="modal-footer">--}}
{{--                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                                    <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    <div class="modal fade" id="audience_metrics_add" tabindex="-1" aria-labelledby="audience_metrics_add_label" aria-hidden="true">--}}
{{--                        <div class="modal-dialog modal-lg modal-dialog-centered">--}}
{{--                            <div class="modal-content">--}}
{{--                                <div class="modal-header">--}}
{{--                                    <h1 class="modal-title fs-5" id="audience_metrics_add_label">Modal title</h1>--}}
{{--                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                                </div>--}}
{{--                                <div class="modal-body">--}}
{{--                                    ...--}}
{{--                                </div>--}}
{{--                                <div class="modal-footer">--}}
{{--                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                                    <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


                <div class="modal fade" id="modal_metrics" tabindex="-1" aria-labelledby="modal_metrics_label" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modal_metrics_label">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                            </div>
                            <div class="modal-body">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-base_templates_metrics-tab" data-bs-toggle="tab" data-bs-target="#nav-base_templates_metrics" type="button" role="tab" aria-controls="nav-base_templates_metrics" aria-selected="true">Базовые шаблоны</button>
                                        <button class="nav-link" id="nav-custom-templates-tab" data-bs-toggle="tab" data-bs-target="#nav-custom_templates_metrics" type="button" role="tab" aria-controls="nav-custom_templates_metrics" aria-selected="true">Мои шаблоны</button>
                                        <button class="nav-link" id="nav-create_new_metric-tab" data-bs-toggle="tab" data-bs-target="#nav-create_new_metric" type="button" role="tab" aria-controls="nav-create_new_metric" aria-selected="false">Создать новый показатель</button>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent" style="margin-top: 20px">
                                    <div class="tab-pane fade show active" id="nav-base_templates_metrics" role="tabpanel" aria-labelledby="nav-base_templates_metrics-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="list-group" data-group="technical_metrics" id="list_base_templates_technical_metrics" role="tablist" style="display: none">
                                                    <a class="list-group-item list-group-item-action active" id="item_base_templates_technical_metrics-ttfb-list" data-bs-toggle="list" href="#list-base_templates_technical_metrics-ttfb" role="tab" aria-controls="list-base_templates_technical_metrics-ttfb">TTBF</a>
                                                    <a class="list-group-item list-group-item-action" id="item_base_templates_technical_metrics-fcp-list" data-bs-toggle="list" href="#list-base_templates_technical_metrics-fcp" role="tab" aria-controls="list-base_templates_technical_metrics-fcp">FCP</a>
                                                </div>
                                                <div class="list-group" data-group="seo_metrics" id="list_base_templates_seo_metrics" role="tablist" style="display: none">
                                                    <a class="list-group-item list-group-item-action active" id="item_base_templates_seo_metrics-test1-list" data-bs-toggle="list" href="#list-base_templates_seo_metrics-test1" role="tab" aria-controls="list-base_templates_seo_metrics-test1">Test1</a>
                                                    <a class="list-group-item list-group-item-action" id="item_base_templates_seo_metrics-test2-list" data-bs-toggle="list" href="#list-base_templates_seo_metrics-test2" role="tab" aria-controls="list-base_templates_seo_metrics-test2">Test2</a>
                                                </div>
                                                <div class="list-group" data-group="audience_metrics" id="list_base_templates_audience_metrics" role="tablist" style="display: none">
                                                    <a class="list-group-item list-group-item-action active" id="item_base_templates_audience_metrics-test3-list" data-bs-toggle="list" href="#list-base_templates_audience_metrics-test3" role="tab" aria-controls="list-base_templates_audience_metrics-test3">Test3</a>
                                                    <a class="list-group-item list-group-item-action" id="item_base_templates_audience_metrics-test4-list" data-bs-toggle="list" href="#list-base_templates_audience_metrics-test4" role="tab" aria-controls="list-base_templates_audience_metrics-test4">Test4</a>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="tab-content" data-group="technical_metrics" id="nav-list_base_templates_technical_metrics-tabContent" style="display: none">
                                                    <div class="tab-pane fade show active" id="list-base_templates_technical_metrics-ttfb" role="tabpanel" aria-labelledby="item_base_templates_technical_metrics-ttfb-list">
                                                        <p>Время до первого байта (TTFB) — это основополагающий показатель для измерения времени установки соединения и скорости реагирования веб-сервера как в лаборатории, так и в полевых условиях. Это помогает определить, когда веб-сервер слишком медленно отвечает на запросы. В случае запросов навигации, то есть запросов HTML-документа, он предшествует любому другому значимому показателю производительности загрузки.</p>
                                                        <p>Минимальное значение: 0</p>
                                                        <p>Максимальное значение: 1</p>
                                                        <button type="button" data-data_additional_metric='{"name": "TTFB значение", "group" : "technical_metrics"}' class="btn btn-outline-success btn_add_in_group">Добавить показатель</button>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-base_templates_technical_metrics-fcp" role="tabpanel" aria-labelledby="item_base_templates_technical_metrics-fcp-list">
                                                        <p>First Contentful Paint (FCP) — это важный, ориентированный на пользователя показатель для измерения воспринимаемой скорости загрузки . Он отмечает первую точку на временной шкале загрузки страницы, где пользователь может видеть что-либо на экране. Быстрый FCP помогает убедить пользователя в том, что что-то происходит .</p>
                                                        <p>Минимальное значение: 0</p>
                                                        <p>Максимальное значение: 1</p>
                                                        <button type="button" data-data_additional_metric='{"name": "FCP значение", "group" : "technical_metrics"}' class="btn btn-outline-success btn_add_in_group">Добавить показатель</button>
                                                    </div>
                                                </div>
                                                <div class="tab-content" data-group="seo_metrics" id="nav-list_base_templates_seo_metrics-tabContent" style="display: none">
                                                    <div class="tab-pane fade show active" id="list-base_templates_seo_metrics-test1" role="tabpanel" aria-labelledby="item_base_templates_seo_metrics-test1-list">
                                                        <p>Test1</p>
                                                        <p>Минимальное значение: 0</p>
                                                        <p>Максимальное значение: 1</p>
                                                        <button type="button" data-data_additional_metric='{"name": "Test1", "group" : "seo_metrics"}' class="btn btn-outline-success btn_add_in_group">Добавить показатель</button>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-base_templates_seo_metrics-test2" role="tabpanel" aria-labelledby="item_base_templates_seo_metrics-test2-list">
                                                        <p>Test2</p>
                                                        <p>Минимальное значение: 0</p>
                                                        <p>Максимальное значение: 1</p>
                                                        <button type="button" data-data_additional_metric='{"name": "Test2", "group" : "seo_metrics"}' class="btn btn-outline-success btn_add_in_group">Добавить показатель</button>
                                                    </div>
                                                </div>
                                                <div class="tab-content" data-group="audience_metrics" id="nav-list_base_templates_audience_metrics-tabContent" style="display: none">
                                                    <div class="tab-pane fade show active" id="list-base_templates_audience_metrics-test3" role="tabpanel" aria-labelledby="item_base_templates_audience_metrics-test3-list">
                                                        <p>Test3</p>
                                                        <p>Минимальное значение: 0</p>
                                                        <p>Максимальное значение: 1</p>
                                                        <button type="button" data-data_additional_metric='{"name": "Test3", "group" : "audience_metrics"}' class="btn btn-outline-success btn_add_in_group">Добавить показатель</button>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-base_templates_audience_metrics-test4" role="tabpanel" aria-labelledby="item_base_templates_audience_metrics-test4-list">
                                                        <p>Test4</p>
                                                        <p>Минимальное значение: 0</p>
                                                        <p>Максимальное значение: 1</p>
                                                        <button type="button" data-data_additional_metric='{"name": "Test4", "group" : "audience_metrics"}' class="btn btn-outline-success btn_add_in_group">Добавить показатель</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="nav-custom_templates_metrics" role="tabpanel" aria-labelledby="nav-custom-templates-tab" tabindex="0">
                                        <div id="tab_base_technical_metrics" data-group="technical_metrics" style="display: none"></div>
                                        <div id="tab_base_seo_metrics" data-group="seo_metrics" style="display: none"></div>
                                        <div id="tab_base_audience_metrics" data-group="audience_metrics" style="display: none"></div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-create_new_metric" role="tabpanel" aria-labelledby="nav-create_new_metric-tab" tabindex="0">
                                        <form id="form_create_new_metric" class="was-validated">
                                            @csrf
                                            <div class="mb-3">
                                                <span>Выберите группу показателя</span>
                                                <select class="form-select form-select-lg" aria-label="Group Metrics" style="margin-top: 10px" name="new_metric_group">
                                                    <option selected value="technical_metrics">Технические показатели</option>
                                                    <option value="seo_metrics">Показатели SEO</option>
                                                    <option value="audience_metrics">Показатели аудитории</option>
                                                </select>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="new_metric_title" name="new_metric_title" placeholder="Введите название показателя" required>
                                                <label for="new_metric_title">Введите название показателя</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="new_metric_min_value" name="new_metric_min_value" placeholder="Введите минимальное значение" required>
                                                <label for="new_metric_min_value">Введите минимальное значение</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="new_metric_max_value" name="new_metric_max_value" placeholder="Введите максимальное значение" required>
                                                <label for="new_metric_max_value">Введите максимальное значение</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" id="new_metric_description" name="new_metric_description" rows="5" style="height: 150px"></textarea>
                                                <label for="new_metric_description">Введите описание показателя</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Сохранить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>

    $(document).ready(function() {

        $('.start_modal_metrics').on('click', function (e){
            let group = $(this).attr('data-group');
            $("#modal_metrics").attr('data-group', group);
            $(`#modal_metrics div[data-group='${group}']`).css("display", "block");
        });

        $("#modal_metrics").on("hidden.bs.modal", function () {
            let group = $('#modal_metrics').attr('data-group');
            $(`#modal_metrics div[data-group='${group}']`).css("display", "none");
            $("#modal_metrics").removeAttr('data-group');
        });

        function initSlider(){
            $('.current_range_value').each(function (index, element){
                let slider = document.getElementById($(element).attr('data-range-value'));
                element.innerHTML = slider.value;
            });
        }

        initSlider();

        function editWeight(){
            let span = $('.current_range_value[data-range-value="' + $(this).attr('id') + '"]');
            let group = $(this).attr('data-range-group');
            let currentValue = parseFloat($(this).val());
            let sumOfOthers = 0.0;
            $('.max-calc[data-range-group="' + group + '"]').not(this).each(function() {
                sumOfOthers = sumOfOthers + parseFloat($(this).val());
            });
            $(this).attr('max', (1 - sumOfOthers).toFixed(2));
            if (sumOfOthers + currentValue > 1){
                span.html(1 - sumOfOthers);
            }
            else{
                span.html(currentValue);
            }
            return 0;
        }

        $('.max-calc').on('input', editWeight);

        $('.range_max_metric_in_group').on('input', function (){
            let sumOfOthers = 0.0;
            $('.range_max_metric_in_group').not(this).each(function() {
                sumOfOthers = sumOfOthers + parseFloat($(this).val());
            });
            $(this).attr('max', (1 - sumOfOthers).toFixed(2));
        });

        // $('#form_seo_calc_btn_sbtn').on("submit", function (e){
        //     e.preventDefault();
        // });

        $('#form_create_new_metric').on("submit",function (e){
            e.preventDefault();
            var formData = $(this).serializeArray();
            let group = formData[1]['value'];
            let title = formData[2]['value'];
            let minValue = formData[3]['value'];
            let maxValue = formData[4]['value'];
            let description = formData[5]['value'];
            let fakeId = Math.random().toString(16).slice(2);

            let list = `<a class="list-group-item list-group-item-action" id="item_base_templates_${group}-${fakeId}-list" data-bs-toggle="list" href="#list-base_templates_${group}-${fakeId}" role="tab" aria-controls="list-base_templates_${group}-test4">${title}</a>`;
            let html = `<div class="tab-pane fade" id="list-base_templates_${group}-${fakeId}" role="tabpanel" aria-labelledby="item_base_templates_${group}-${fakeId}-list"><p>${description}</p><p>Минимальное значение: ${minValue}</p><p>Максимальное значение: ${maxValue}</p><button type="button" data-data_additional_metric='{"name": "${title}", "group" : "${group}"}' class="btn btn-outline-success btn_add_in_group">Добавить показатель</button></div>`;

            if (group === "technical_metrics"){
                $('#list_base_templates_technical_metrics').append(list);
                $('#nav-list_base_templates_technical_metrics-tabContent').append(html);
            }
            if (group === "seo_metrics"){
                $('#list_base_templates_seo_metrics').append(list);
                $('#nav-list_base_templates_seo_metrics-tabContent').append(html);
            }
            if (group === "audience_metrics"){
                $('#list_base_templates_audience_metrics').append(list);
                $('#nav-list_base_templates_audience_metrics-tabContent').append(html);
            }

            $(`#list-base_templates_${group}-${fakeId} button.btn_add_in_group`).on('click', function (){
                addItemInGroup.call(this, this);
            });

        });

        function removeAdditionalMetric(el){
            el.prop('disabled', false);
            let parentId = $(this).parent().attr('id');
            $("#" + parentId).remove();
        }

        function addItemInGroup(el){
            let data = $(el).data('data_additional_metric');
            let btn = $(el);
            let technical_metrics_group = $('#additional_technical_metrics');
            let seo_metrics_group = $('#additional_seo_metrics');
            let audience_metrics_group = $('#additional_audience_metrics');
            let fakeId = Math.random().toString(16).slice(2);
            let html = `<div class="form-floating mb-3" id="${fakeId}_addional_item"> <input type="number" class="form-control" id="${fakeId}_input" step="0.01" min="0" max="1" value="0" style="border-bottom: 0px; border-radius: 10px 10px 0 0; margin: 0;height: 50px" placeholder="0" required> <div class="invalid-feedback">Пожалуйста, введите число от 0 до 1 </div> <label for="${fakeId}_input">${data['name']}</label> <input type="range" class="form-range max-calc" data-range-group="${data['group']}" min="0" max="1" value="0" step="0.01" id="${fakeId}_range" style="margin-top: -15px;padding: 0"> <span class="current_range_value" data-range-value="${fakeId}_range"></span> <div class="form-text" style="margin: 0">Укажите,пожалуйста приоритет показателя.</div> <button type="button" id="${fakeId}_btn_remove_additional_metric" class="btn btn-danger btn-sm remove_additional_metric">Исключить показатель</button> </div>`;

            if (data['group'] === "technical_metrics"){
                technical_metrics_group.append(html);
                $(el).prop('disabled', true);
            }
            if (data['group'] === "seo_metrics"){
                seo_metrics_group.append(html);
                $(el).prop('disabled', true);
            }
            if (data['group'] === "audience_metrics"){
                audience_metrics_group.append(html);
                $(el).prop('disabled', true);
            }
            initSlider();
            $(document).on("input", `#${fakeId}_range`, editWeight);
            $(document).on("click", `#${fakeId}_btn_remove_additional_metric`, function (){
                removeAdditionalMetric.call(this, $(btn));
            });
        }

        $('.btn_add_in_group').on('click', function (){
            // let data = $(this).data('data_additional_metric');
            // let btn = $(this);
            // let technical_metrics_group = $('#additional_technical_metrics');
            // let seo_metrics_group = $('#additional_seo_metrics');
            // let audience_metrics_group = $('#additional_audience_metrics');
            // let fakeId = Math.random().toString(16).slice(2);
            // let html = `<div class="form-floating mb-3" id="${fakeId}_addional_item"> <input type="number" class="form-control" id="${fakeId}_input" step="0.01" min="0" max="1" value="0" style="border-bottom: 0px; border-radius: 10px 10px 0 0; margin: 0;height: 50px" placeholder="0" required> <div class="invalid-feedback">Пожалуйста, введите число от 0 до 1 </div> <label for="${fakeId}_input">${data['name']}</label> <input type="range" class="form-range max-calc" data-range-group="${data['group']}" min="0" max="1" value="0" step="0.01" id="${fakeId}_range" style="margin-top: -15px;padding: 0"> <span class="current_range_value" data-range-value="${fakeId}_range"></span> <div class="form-text" style="margin: 0">Укажите,пожалуйста приоритет показателя.</div> <button type="button" id="${fakeId}_btn_remove_additional_metric" class="btn btn-danger btn-sm remove_additional_metric">Исключить показатель</button> </div>`;
            //
            // if (data['group'] === "technical_metrics"){
            //     technical_metrics_group.append(html);
            //     $(this).prop('disabled', true);
            // }
            // if (data['group'] === "seo_metrics"){
            //     seo_metrics_group.append(html);
            //     $(this).prop('disabled', true);
            // }
            // if (data['group'] === "audience_metrics"){
            //     audience_metrics_group.append(html);
            //     $(this).prop('disabled', true);
            // }
            // initSlider();
            // $(document).on("input", `#${fakeId}_range`, editWeight);
            // $(document).on("click", `#${fakeId}_btn_remove_additional_metric`, function (){
            //     removeAdditionalMetric.call(this, $(btn));
            // });
            addItemInGroup.call(this, this);
        })

    });

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
