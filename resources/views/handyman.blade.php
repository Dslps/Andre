@extends('layouts.app')
@section('content')
    <div class="position-relative start-content-box anchor-offset" id="start">
        <img src="{{ asset('/img/bg-1.jpg') }}" alt="" class="bg-image">
        <div class="position-absolute top-50 start-50 translate-middle">
            <p class=" start_text">HANDYMAN SERVICES IN LOS ANGELES</p>
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


            <!-- brief information -->
            <div class="conteiner w-100 brief_information pt custom-base-text">
                <p>We offer plumbing and electrical repair services, wall painting, parquet and laminate flooring
                    installation, drywall and plastering. We also assemble and install furniture. You can trust us with
                    installing curtain rods, faucets, or painting a child's room, as well as any other type of work.</p>
                <p>
                    We always arrive on time, carry out our work efficiently, and strive to do everything necessary to
                    ensure our customers are satisfied.
                </p>
                <!-- ----------------- -->
                <p>
                    Simply fill out the application and attach photos so we can assess the scope of work, and we will
                    contact you the same day!
                </p>

                <div class="mt-list">
                    <p>Order from us:</p>
                    <div class="row li-disc-padding">
                        <div class="col-md-6">
                            <ul class="list-with-bullet ps-3">
                                <li>Painting of living rooms, etc.</li>
                                <li>Painting of bedrooms</li>
                                <li>Painting of children's rooms</li>
                                <li>Painting of kitchens</li>
                                <li>Painting of bathrooms</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-with-bullet ps-3">
                                <li>Painting of offices</li>
                                <li>Painting of hallways</li>
                                <li>Painting of dining rooms</li>
                                <li>Painting of basements</li>
                                <li>Painting of garages</li>
                            </ul>
                        </div>
                    </div>
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
    
    

    {{-- --------------------------price----------------------------- --}}
    <div class="container-fluid bg-white anchor-offset" id="price">
        <div class="m-auto custom-width">
            <p class="pt-lg-5 pt-md-4 pt-2  text-center start_text">Handyman Services Prices in LA</p>

            <ul class="list-group list-group-flush p-price">
                <li
                    class="list-group-item d-flex justify-content-between align-items-center mt-3 custom-base-text border-bottom">
                    <span class="d-flex flex-column">
                        <span class="small text-muted">Info</span>
                        <span>Handyman services</span>
                    </span>
                    <span class="align-self-end">65$</span>
                </li>
            </ul>
        </div>
    </div>
@endsection
