@extends('layouts.app')
@section('content')
    <div class="container-fluid  bg-light">
        <div class="justify-content-center custom-width m-auto">
            <!-- start text -->
            <p class="pt-5 text-center start_text">Painting Services in Los Angeles</p>
            <!-- brief information -->
            <div class="conteiner w-100 brief_information mt-5 custom-base-text">
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
                <div class="mt-5 mb-5">
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

                <p class="mt-5 mb-5">Fill out the application form, and we'll get back to you as soon as possible.</p>

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
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="img/images.jpg" class="card-img-top" alt="Image 1">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/images.jpg" class="card-img-top" alt="Image 2">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/images.jpg" class="card-img-top" alt="Image 3">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/images.jpg" class="card-img-top" alt="Image 4">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/images.jpg" class="card-img-top" alt="Image 5">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/images.jpg" class="card-img-top" alt="Image 6">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/images.jpg" class="card-img-top" alt="Image 7">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/images.jpg" class="card-img-top" alt="Image 8">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/images.jpg" class="card-img-top" alt="Image 9">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="iimg/images.jpg" class="card-img-top" alt="Image 10">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="iimg/images.jpg" class="card-img-top" alt="Image 11">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="iimg/images.jpg" class="card-img-top" alt="Image 12">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- --------------------------ptice----------------------------- --}}
    <div class="container-fluid bg-white  ">
        <div class=" m-auto custom-width">
            <p class="pt-5 text-center start_text">Painting Prices in LA</p>

            <ul class="list-group list-group-flush mt-5 pb-5">
                <li class="list-group-item d-flex justify-content-between align-items-center mt-3 custom-list-text border-bottom">
                    <span class="d-flex flex-column">
                        <span class="small text-muted">Info</span>
                        <span>Waals</span>
                    </span>
                    <span class="align-self-end">200$</span>
                </li>
                
                <li class="list-group-item d-flex justify-content-between align-items-center mt-3 custom-list-text border-bottom">
                    <span class="d-flex flex-column">
                        <span class="small text-muted">Info</span>
                        <span>Trim</span>
                    </span>
                    <span class="align-self-end">2$</span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center mt-3 custom-list-text border-bottom">
                    <span class="d-flex flex-column">
                        <span class="small text-muted">Info</span>
                        <span>Doors</span>
                    </span>
                    <span class="align-self-end">80$</span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center mt-3 custom-list-text border-bottom">
                    <span class="d-flex flex-column">
                        <span class="small text-muted">Info</span>
                        <span>Ceilings</span>
                    </span>
                    <span class="align-self-end">2$</span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center mt-3 custom-list-text border-bottom">
                    <span class="d-flex flex-column">
                        <span class="small text-muted">Info</span>
                        <span>Bathroom</span>
                    </span>
                    <span class="align-self-end">250$-300$</span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center mt-3 custom-list-text border-bottom">
                    <span class="d-flex flex-column">
                        <span class="small text-muted">Info</span>
                        <span>Bedrooms</span>
                    </span>
                    <span class="align-self-end">650$-800$</span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center mt-3 mb-5 custom-list-text border-bottom">
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
