@extends('layouts.app')
@section('content')

<div class="position-relative start-content-box anchor-offset" id="start">
    <img src="{{ asset('/img/bg-1.jpg') }}" alt="" class="bg-image">
    <div class="position-absolute top-50 start-50 translate-middle">
        <p class=" start_text">Painting Services in Los Angeles</p>
        <div class="d-flex">
            <a class="m-auto" href="#price">
                <button class=" button-star-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="4vw" height="4vw" fill="currentColor"
                        class="bi bi-chevron-double-down text-dark" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                        <path fill-rule="evenodd"
                            d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                    </svg>
                </button>
            </a>
        </div>
    </div>
</div>

    <div class="container-fluid  bg-light">
        <div class="justify-content-center custom-width m-auto">
            <div class="conteiner w-100 brief_information pt custom-base-text">
                <p>Looking to add some coziness to your home but not sure where to start? A fresh coat of paint can help
                    refresh any interior. Our team of professional technicians has all the tools and skills necessary for
                    interior painting jobs.</p>
                <!-- ----------------- -->
                <div>
                    We offer various options for interior painting and can meet the needs of any customer. Whether you want
                    to highlight an accent wall, do a cosmetic overhaul in the living room, or spruce up the exterior of
                    your weather-worn home, painting is an excellent and economical way to update your interior and add
                    personality to it.
                </div>
                <div class="mt-list">
                    <p>Order from us:</p>
                    <ul class="p-0">
                        <li class="li">– Painting of living rooms, etc.</li>
                        <li class="li">– Painting of bedrooms</li>
                        <li class="li">– Painting of children's rooms</li>
                    </ul>
                </div>

                <div>
                    We offer painting services for walls, ceilings and doors. We know what makes painting great; we do the
                    job with quality and in a timely manner. You'll be able to enjoy the room the very next day after the
                    job is done.
                </div>

                <p class="pt-form">Fill out the application form, and we'll get back to you as soon as possible.</p>

            </div>

            <div class="d-flex justify-content-center">
                <a href="#form">
                    <button type="button" class="button-base">GET A FREE ESTIMATE</button>
                </a>
            </div>

        </div>
    </div>
    {{-- -------------------Galery------------------------ --}}
    <div class="container-fluid bg-light">
        <div class="container-fluid py-1">
            <div class="row row-cols-4 row-cols-sm-5 row-cols-md-6 row-cols-lg-8 g-2" id="imageContainer">
                
                <!-- Карточки с изображениями -->
                <div class="col">
                    <div class="card h-100">
                        <img src="img/images.jpg" class="card-img-top" alt="Image 1" data-bs-toggle="modal" data-bs-target="#imageModal">
                    </div>
                </div>

        </div>
    </div>



    <!-- Единое модальное окно -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen"> <!-- Используем modal-fullscreen для полноэкранного отображения -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center align-items-center">
                    <img id="modalImage" src="" alt="Image Preview" class="full-width-image">
                </div>
            </div>
        </div>
    </div>
    {{-- --------------------------ptice----------------------------- --}}
    <div class="container-fluid bg-white anchor-offset" id="price">
        <div class=" m-auto custom-width">
            <p class="pt-lg-5 pt-md-4 pt-2  text-center start_text">Painting Prices in LA</p>

            <ul class="list-group list-group-flush p-price">
                <li class="list-group-item d-flex justify-content-between align-items-center custom-list-text border-bottom">
                    <span class="d-flex flex-column">
                        <span class="small text-muted">Info</span>
                        <span>Waals</span>
                    </span>
                    <span class="align-self-end">200$</span>
                </li>
                
                <li class="list-group-item d-flex justify-content-between align-items-center custom-list-text border-bottom">
                    <span class="d-flex flex-column">
                        <span class="small text-muted">Info</span>
                        <span>Trim</span>
                    </span>
                    <span class="align-self-end">2$</span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center custom-list-text border-bottom">
                    <span class="d-flex flex-column">
                        <span class="small text-muted">Info</span>
                        <span>Doors</span>
                    </span>
                    <span class="align-self-end">80$</span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center custom-list-text border-bottom">
                    <span class="d-flex flex-column">
                        <span class="small text-muted">Info</span>
                        <span>Ceilings</span>
                    </span>
                    <span class="align-self-end">2$</span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center custom-list-text border-bottom">
                    <span class="d-flex flex-column">
                        <span class="small text-muted">Info</span>
                        <span>Bathroom</span>
                    </span>
                    <span class="align-self-end">250$-300$</span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center custom-list-text border-bottom">
                    <span class="d-flex flex-column">
                        <span class="small text-muted">Info</span>
                        <span>Bedrooms</span>
                    </span>
                    <span class="align-self-end">650$-800$</span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center mb-5 custom-list-text border-bottom">
                    <span class="d-flex flex-column">
                        <span class="small text-muted">Info</span>
                        <span>Master Bedrooms</span>
                    </span>
                    <span class="align-self-end">1400$</span>
                </li>
            </ul>

        </div>
    </div>
@endsection
