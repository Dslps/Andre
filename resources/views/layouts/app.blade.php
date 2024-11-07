<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white">
    <!--------------------------------------- header nav panel ----------------------------------------------->
    <nav class="navbar navbar-expand-lg navbar-white bg-white container-fluid">
        <div class="container-fluid">
            <!-- Логотип слева -->
            <a class="navbar-brand" href="{{ route('handyman') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="img-fluid">
            </a>

            <!-- Кнопка для отображения навигации на маленьких экранах -->
            <button class="navbar-toggler small-navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <!-- Контейнер навигации и текста -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <!-- Центрируемый блок навигации -->
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-flex flex-lg-row flex-column align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link nav-link-style {{ request()->routeIs('handyman') ? 'active' : '' }}"
                            href="{{ route('handyman') }}">Handyman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-style {{ request()->routeIs('painting') ? 'active' : '' }}"
                            href="{{ route('painting') }}">Painting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-style {{ request()->routeIs('plumbing') ? 'active' : '' }}"
                            href="{{ route('plumbing') }}">Plumbing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-style {{ request()->routeIs('flooring') ? 'active' : '' }}"
                            href="{{ route('flooring') }}">Flooring</a>
                    </li>
                </ul>


                <!-- Текст справа на больших экранах, под навигацией на маленьких экранах -->
                <div class="d-flex flex-column align-items-lg-center mt-3 mt-lg-0">
                    <span class="navbar-text phone-link">(818) 966-15-09</span>
                    <span class="navbar-text work-time">Mon.–Sat. / 8:00 am – 6:00 pm</span>
                </div>
            </div>
        </div>
    </nav>





    @yield('content')

    <!--------------------------------------- register form ------------------------------------>
    <div class="container-fluid bg-warning pt-sm-5 pb-sm-2 pt-lg-5 pb-lg-5 pt-2 pb-2 custom-base-text m-auto"
        id="form">
        <p class="start_text text-center">Get a Free Estimate Today!</p>

        <div class="custom-width text-center m-auto mb-lg-5 mt-lg-3 mb-sm-5 mt-sm-2  mt-1 mb-4 custom-base-text">Fill
            out this form as best you can. The
            more details you can provide, the quicker we can give you a free estimate.</div>

        <form class="registration-form m-auto">
            <p>Name</p>
            <input type="text" name="username" required>
            <p>Phone</p>
            <input type="email" name="tel" required>
            <p>E-mail</p>
            <input type="email" name="email" required>


            <!-- Поле загрузки файла -->
            <p>Would you like to add photos to describe your project?</p>
            <label class="file-upload">
                <span>Add files</span>
                <input type="file" name="file_upload">
            </label>

            <p>How can HandyTeddy help you?</p>
            <textarea class="comment" name="text" rows="3"></textarea>

            <div class="d-flex">
                <button type="button" class="file-upload m-auto">Submit</button>
            </div>
        </form>
    </div>
    <!-- ----------------------------------footer----------------------------------------------------- -->
    <div class="container-fluid bg-dark">
        <div class="footer d-flex text-center custom-base-text">

            <div class="footer-content">

                <div class="footer-nav mt-lg-5 mt-3">
                    <a href="">Handyman</a>
                    <a href="">Painting</a>
                    <a href="">Plumbing</a>
                    <a href="">Flooring</a>
                </div>

                <div class="footer-contact mt-lg-5 mt-3">
                    <p>GET IN TOUCH</p>
                    <p>(818) 966-15-09</p>
                    <p>Email Us:info@handyteddy.com</p>
                </div>

                <div class="footer-comment mt-lg-5 mb-lg-5 mt-3 mb-3">
                    Copyright © • Handy Teddy Professional Handyman Services • All Rights Reserved
                    All materials included on this site, including logos are property of Handy Teddy.
                    Made with ❤️ in Cheddar
                </div>
            </div>

        </div>
    </div>
    {{-- -------------------------------------------------------- --}}
    <a style="color: #333" href="#start">
        <div class="anchor" id="scrollToTop">
            <svg aria-hidden="true" data-prefix="fal" data-icon="chevron-double-up" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                class="svg-inline--fa fa-chevron-double-up fa-w-14 fa-7x">
                <path fill="currentColor"
                    d="M4.5 413.5l211-211.1c4.7-4.7 12.3-4.7 17 0l211 211.1c4.7 4.7 4.7 12.3 0 17l-7.1 7.1c-4.7 4.7-12.3 4.7-17 0L224 242.1 28.5 437.5c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.6-4.6-4.6-12.2.1-16.9zm0-111l7.1 7.1c4.7 4.7 12.3 4.7 17 0L224 114.1l195.5 195.5c4.7 4.7 12.3 4.7 17 0l7.1-7.1c4.7-4.7 4.7-12.3 0-17l-211-211.1c-4.7-4.7-12.3-4.7-17 0L4.5 285.5c-4.7 4.7-4.7 12.3 0 17z"
                    class=""></path>
            </svg>
        </div>
    </a>

    {{-- -------------------------------------------------------- --}}


</body>

</html>
