@extends('layouts.app')
@section('content')
    <!--------------------------------------- many content ------------------------------------------------>

    <div class="position-relative start-content-box anchor-offset" id="start">
        <img src="{{ asset('/img/bg-1.jpg') }}" alt="" class="bg-image">
        <div class="position-absolute top-50 start-50 translate-middle">
            <p class=" start_text">Plumbing Services in Los Angeles</p>
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
                <p>You can trust us to handle any plumbing job, whether it's installation, repair, or maintenance. Planned
                    replacements or emergencies—our experts are ready to get the job done quickly.</p>
                <!-- ----------------- -->
                <div>
                    You rely on your plumbing system every day for showers, brushing teeth, and doing laundry. A clogged or
                    broken
                    faucet can ruin your day, and a leak can cause serious damage to your property. That's why it's
                    important to
                    trust the installation and repair of plumbing to professionals. Our experts have all the necessary tools
                    to
                    get
                    the job done quickly and efficiently.
                </div>

                <div class="mt-list">
                    <p>We offer the following plumbing services in Los Angeles:</p>
                    <ul class="p-0">
                        <li class="li">– Faucet replacement.</li>
                        <li class="li">– Leak detection and repair.</li>
                        <li class="li">– Burst pipe repair.</li>
                        <li class="li">– Clearing clogs, and more.</li>
                    </ul>
                </div>

                <p>Submit a request on our website or give us a call for a cost estimate.</p>
            </div>

            <div class="d-flex justify-content-center">
                <a href="#form">
                    <button type="button" class="button-base">GET A FREE ESTIMATE</button>
                </a>
            </div>

        </div>
    </div>
    <!-- -------------------------------------Galery------------------------------------------------- -->
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
    <!-- ---------------------------Price---------------------------- -->
    <div class="container-fluid bg-white anchor-offset" id="price">
        <div class=" m-auto custom-width">
            <p class="pt-lg-5 pt-md-4 pt-2 text-center start_text">Plumbing Prices in LA</p>

            <ul class="list-group list-group-flush p-price">
                <ul class="list-group list-group-flush mt-5 pb-5">
                    <li class="list-group-item d-flex justify-content-between align-items-center custom-list-text border-bottom">
                        <span class="d-flex flex-column">
                            <span class="small text-muted"></span>
                            <span>Plumbing</span>
                        </span>
                        <span class="align-self-end"></span>
                    </li>
                    
                    <li class="list-group-item d-flex justify-content-between align-items-center custom-list-text border-bottom">
                        <span class="d-flex flex-column">
                            <span class="small text-muted">Info</span>
                            <span>Toilet installation</span>
                        </span>
                        <span class="align-self-end">From 250$</span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center custom-list-text border-bottom">
                        <span class="d-flex flex-column">
                            <span class="small text-muted">Info</span>
                            <span>Water heater installation/replacement</span>
                        </span>
                        <span class="align-self-end">From $850</span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center custom-list-text border-bottom">
                        <span class="d-flex flex-column">
                            <span class="small text-muted">Info</span>
                            <span>Fix the leak (Wall, Ceiling)</span>
                        </span>
                        <span class="align-self-end">From $170</span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center custom-list-text border-bottom">
                        <span class="d-flex flex-column">
                            <span class="small text-muted">Info</span>
                            <span>Fix the leak (Slab)</span>
                        </span>
                        <span class="align-self-end">From $900</span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center custom-list-text border-bottom">
                        <span class="d-flex flex-column">
                            <span class="small text-muted">Info</span>
                            <span>Faucet installation/replacement</span>
                        </span>
                        <span class="align-self-end">From $120</span>
                    </li>
            </ul>

        </div>
    </div>
@endsection
