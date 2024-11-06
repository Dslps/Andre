@extends('layouts.app')
@section('content')
    <div class="container-fluid  bg-light">
        <div class="justify-content-center custom-width m-auto">
            <!-- start text -->
            <p class="pt-5 text-center start_text">Flooring Services in Los Angeles</p>
            <!-- brief information -->
            <div class="conteiner w-100 brief_information mt-5 custom-base-text">
                <p>Floor repair may seem like a daunting task, but our experienced craftsmen are ready to tackle it quickly
                    and efficiently. With over 12 years of experience in floor replacement and repair services, we can
                    guarantee that you'll be 100% satisfied with the quality of our work. We know all the intricacies of
                    flooring installation and adhere to them, so you can be sure that your new floor will serve you for many
                    years to come. The most sought-after types of flooring repairs include:</p>
                <!-- ----------------- -->
                <div class="mt-5 mb-5">
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
    {{-- ------------------------------------- --}}
    <div class="container-fluid bg-white  ">
        <div class=" m-auto custom-width">
            <p class="pt-5 text-center start_text">Flooring Prices in LA</p>

            <ul class="list-group list-group-flush mt-5 pb-5">
                <li class="list-group-item d-flex justify-content-between align-items-center mt-3 custom-list-text border-bottom">
                    <span class="d-flex flex-column">
                        <span class="small text-muted"></span>
                        <span>Flooring</span>
                    </span>
                    <span class="align-self-end"></span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center mt-3 custom-list-text border-bottom">
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
