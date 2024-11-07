@extends('layouts.app')
@section('content')

<div class="position-relative start-content-box anchor-offset" id="start">
    <img src="{{ asset('/img/bg-1.jpg') }}" alt="" class="bg-image">
    <div class="position-absolute top-50 start-50 translate-middle">
        <p class=" start_text">Flooring Services in Los Angeles</p>
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
                <p>Floor repair may seem like a daunting task, but our experienced craftsmen are ready to tackle it quickly
                    and efficiently. With over 12 years of experience in floor replacement and repair services, we can
                    guarantee that you'll be 100% satisfied with the quality of our work. We know all the intricacies of
                    flooring installation and adhere to them, so you can be sure that your new floor will serve you for many
                    years to come. The most sought-after types of flooring repairs include:</p>
                <!-- ----------------- -->
                <div class="mt-list">
                    <ul class="p-0">
                        <li class="li">– Laminate</li>
                        <li class="li">– Hardwood</li>
                        <li class="li">– Carpeting</li>
                        <li class="li">– Baseboards, etc.</li>
                    </ul>
                </div>

                <div>
                    HandyTeddy is a local company providing floor replacement and repair services in Los Angeles. We value
                    our reputation and save our clients time and money. Fill out the form today, and we'll provide you with
                    an estimate for the work in no time.
                </div>

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
    {{-- ------------------------------------- --}}
    <div class="container-fluid bg-white anchor-offset" id="price">
        <div class=" m-auto custom-width">
            <p class="pt-lg-5 pt-md-4 pt-2  text-center start_text">Flooring Prices in LA</p>

            <ul class="list-group list-group-flush p-price">
                <li class="list-group-item d-flex justify-content-between align-items-center  custom-list-text border-bottom">
                    <span class="d-flex flex-column">
                        <span class="small text-muted"></span>
                        <span>Flooring</span>
                    </span>
                    <span class="align-self-end"></span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center  custom-list-text border-bottom">
                    <span class="d-flex flex-column">
                        <span class="small text-muted">
                            per sq. ft
                            *Removing old flooring can cost up to $70 per hour, but should take less than one day to complete.</span>
                        <span>Laminate installation</span>
                    </span>
                    <span class="align-self-end">$4</span>
                </li> 
            </ul>
        </div>
    </div>
@endsection
