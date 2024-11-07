import './bootstrap';
import 'bootstrap';
import 'flowbite';

// -----------------------------модальное окно----------------------------
document.addEventListener('DOMContentLoaded', function () {
    const modalImage = document.getElementById('modalImage');
    
 
    document.querySelectorAll('.card-img-top').forEach(img => {
        img.addEventListener('click', function () {
            modalImage.src = this.src; 
        });
    });
});


// ------------------------опредиление количства изображений-----------------------------------------------
document.addEventListener("DOMContentLoaded", function() {
    const cards = document.querySelectorAll("#imageContainer .col");
    const toggleBtn = document.getElementById("toggleBtn");
    let showingAll = false;

    // Определить количество изображений для отображения в зависимости от ширины экрана
    function getVisibleCount() {
        if (window.innerWidth <= 575) {
            return 4;
        } else if (window.innerWidth <= 767) {
            return 4;
        } else if (window.innerWidth <= 991) {
            return 6;
        } else {
            return 12;
        }
    }

    // Показать только определенное количество изображений
    function showInitial() {
        const visibleCount = getVisibleCount();
        cards.forEach((card, index) => {
            card.style.display = index < visibleCount ? "block" : "none";
        });
        toggleBtn.textContent = "SHOW ALL";
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
// ---------------------------появление якоря------------------------------
window.addEventListener('scroll', function() {
    const scrollToTopButton = document.getElementById('scrollToTop');
    let scrollThreshold;

    if (window.innerWidth >= 1200) {
        scrollThreshold = 400;
    } else if (window.innerWidth >= 768) {
        scrollThreshold = 300;
    } else {
        scrollThreshold = 100;
    }

    if (window.scrollY >= scrollThreshold) {
        scrollToTopButton.classList.add('visible');
    } else {
        scrollToTopButton.classList.remove('visible');
    }
});



// ------------------------скрипт для смены цвета в админке -------------------------------- 
var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
    
});