<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .navbar{
            border-radius: 20px;
            background-color: #5bbef1;
        }
        .container{
            width: 2000px;
        }
    </style>
</head>
<body style="background-color: #e3f2fd;">

<div class="container" >

    <header style="margin-top: 20px">
        <div>
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#scrollsHome">
                        <img src="https://gas-kvas.com/uploads/posts/2023-02/1675483689_gas-kvas-com-p-fonovii-risunok-dlya-kompyutera-priroda-15.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                        Главная
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#scrollsTechnologies">Технологии</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#scrollsPossibilities">Возможности</a>
                            </li>
                        </ul>
                        <a class="btn btn-outline-primary me-2" href="{{ route('login') }}" role="button">Войти</a>
                        <a class="btn btn-primary" href="{{ route('register') }}" role="button">Регистрация</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>

        <div id="theme">
            <div class="px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="https://gas-kvas.com/uploads/posts/2023-02/1675483689_gas-kvas-com-p-fonovii-risunok-dlya-kompyutera-priroda-15.jpg" class="d-block mx-lg-auto img-fluid" alt="Photo" width="800" height="700" loading="lazy"  />
                    </div>
                    <div class="col-lg-6">
                        <h1 class="pb-2" id="scrollsHome">Исследование методов и разработка средств поисковой оптимизации интернет-ресурсов на основе показателей их производительности</h1>
                        <p class="lead">{{ __('System that easily adapts to any process. Create projects, schedule tasks, use agile boards, create documents and more...') }}</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            @auth
                                <a class="btn btn-primary btn-lg" href="{{ route('dashboard') }}">Продолжить работу</a>
                            @else
                                <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Начать работу</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <h1 class="pb-2 text-center" id="scrollsTechnologies">Технологии</h1>
            <div class="card-group">
                <div class="card" style="margin-right: 10px">
                    <img src="https://gas-kvas.com/uploads/posts/2023-02/1675483689_gas-kvas-com-p-fonovii-risunok-dlya-kompyutera-priroda-15.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card" style="margin-right: 10px">
                    <img src="https://gas-kvas.com/uploads/posts/2023-02/1675483689_gas-kvas-com-p-fonovii-risunok-dlya-kompyutera-priroda-15.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://gas-kvas.com/uploads/posts/2023-02/1675483689_gas-kvas-com-p-fonovii-risunok-dlya-kompyutera-priroda-15.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="card-group" style="margin-top: 20px">
                <div class="card" style="margin-right: 10px">
                    <img src="https://gas-kvas.com/uploads/posts/2023-02/1675483689_gas-kvas-com-p-fonovii-risunok-dlya-kompyutera-priroda-15.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card" style="margin-right: 10px">
                    <img src="https://gas-kvas.com/uploads/posts/2023-02/1675483689_gas-kvas-com-p-fonovii-risunok-dlya-kompyutera-priroda-15.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://gas-kvas.com/uploads/posts/2023-02/1675483689_gas-kvas-com-p-fonovii-risunok-dlya-kompyutera-priroda-15.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="px-4 py-5" id="features">
                <h1 class="pb-2 text-center" id="scrollsFeatures">{{ __('Opportunities') }}</h1>
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="https://gas-kvas.com/uploads/posts/2023-02/1675483689_gas-kvas-com-p-fonovii-risunok-dlya-kompyutera-priroda-15.jpg" class="d-block mx-lg-auto img-fluid" alt="Photo" width="700" height="500" loading="lazy">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold lh-1 mb-3">{{ __('Agile-boards') }}</h1>
                        <p class="lead">{{ __('Agile boards are a convenient and understandable tool for organizing collaboration or individual task planning. The system allows you to use Scrum or Kanban methodologies, depending on the goals of the project.') }}</p>
                    </div>
                </div>
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold lh-1 mb-3">{{ __('Documents') }}</h1>
                        <p class="lead">{{ __('The system allows you to create documents in a text editor, and generate them in PDF format.') }}</p>
                    </div>
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="https://gas-kvas.com/uploads/posts/2023-02/1675483689_gas-kvas-com-p-fonovii-risunok-dlya-kompyutera-priroda-15.jpg" class="d-block mx-lg-auto img-fluid" alt="Photo" width="700" height="500" loading="lazy">
                    </div>
                </div>
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="https://gas-kvas.com/uploads/posts/2023-02/1675483689_gas-kvas-com-p-fonovii-risunok-dlya-kompyutera-priroda-15.jpg" class="d-block mx-lg-auto img-fluid" alt="Photo" width="700" height="500" loading="lazy">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold lh-1 mb-3">{{ __('Statistics') }}</h1>
                        <p class="lead">{{ __('The system allows you to generate statistics data in the form of graphs and charts, as well as receive reports in the format PDF.') }}</p>
                    </div>
                </div>
            </div>
        </div>


    </main>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
