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
    <nav class="navbar navbar-expand-lg navbar-white bg-white">
        <div class="container-fluid">
            <!-- Логотип слева -->
            <a class="navbar-brand" href="{{ route('handyman') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="img-fluid">
            </a>
    
            <!-- Кнопка для отображения навигации на маленьких экранах -->
            <button class="navbar-toggler color-dark" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <!-- Контейнер навигации и текста -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <!-- Центрируемый блок навигации -->
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-flex flex-lg-row flex-column align-items-lg-center ">
                    <li class="nav-item">
                        <a class="nav-link active nav-link-style" aria-current="page" href="{{ route('handyman') }}">Handyman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-link-style" aria-current="page" href="{{ route('painting') }}">Painting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-link-style" aria-current="page" href="{{ route('plumbing') }}">Plumbing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-link-style" aria-current="page" href="{{ route('flooring') }}">Flooring</a>
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
    <div class="container-fluid bg-warning pt-5 pb-5 custom-base-text m-auto" id="form">
        <p class="start_text text-center">Get a Free Estimate Today!</p>

        <div class="custom-width text-center m-auto mb-5 mt-3 custom-base-text">Fill out this form as best you can. The
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
                <button type="submit">SUBMIT</button>
            </div>

        </form>
    </div>
    <!-- ----------------------------------footer----------------------------------------------------- -->
    <div class="container-fluid bg-dark">
        <div class="footer d-flex text-center custom-base-text">

            <div class="footer-content">

                <div class="footer-nav mt-5">
                    <a href="">Handyman</a>
                    <a href="">Painting</a>
                    <a href="">Plumbing</a>
                    <a href="">Flooring</a>
                </div>

                <div class="footer-contact mt-5">
                    <p>GET IN TOUCH</p>
                    <p>(818) 966-15-09</p>
                    <p>Email Us:info@handyteddy.com</p>
                </div>

                <div class="footer-comment mt-5 mb-5" >
                    Copyright © • Handy Teddy Professional Handyman Services • All Rights Reserved
All materials included on this site, including logos are property of Handy Teddy.
Made with ❤️ in Cheddar
                </div>
            </div>

        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const cards = document.querySelectorAll("#imageContainer .col");
            const toggleBtn = document.getElementById("toggleBtn");
            let showingAll = false;
    
            // Определить количество изображений для отображения в зависимости от ширины экрана
            function getVisibleCount() {
                if (window.innerWidth <= 575) {
                    return 2;
                } else if (window.innerWidth <= 767) {
                    return 4;
                } else if (window.innerWidth <= 991) {
                    return 6;
                } else {
                    return 8;
                }
            }
    
            // Показать только определенное количество изображений
            function showInitial() {
                const visibleCount = getVisibleCount();
                cards.forEach((card, index) => {
                    card.style.display = index < visibleCount ? "block" : "none";
                });
                toggleBtn.textContent = "Show all";
                showingAll = false;
            }
    
            // Показать все изображения
            function showAll() {
                cards.forEach(card => {
                    card.style.display = "block";
                });
                toggleBtn.textContent = "Hide";
                showingAll = true;
            }
    
            // Начальная настройка
            showInitial();
    
            // Обработчик клика для кнопки
            toggleBtn.addEventListener("click", function() {
                if (showingAll) {
                    showInitial();
                } else {
                    showAll();
                }
            });
    
            // Переключение видимости изображений при изменении размера окна
            window.addEventListener("resize", function() {
                if (!showingAll) {
                    showInitial();
                }
            });
        });
    </script>
    
    
</body>

</html>
