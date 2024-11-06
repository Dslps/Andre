@extends('layouts.app')
@section('content')
<div class="container-fluid  bg-light">
    <div class="justify-content-center custom-width m-auto">
        <!-- start text -->
        <p class=" text-center start_text">HANDYMAN SERVICES IN LOS ANGELES</p>
        <!-- brief information -->
        <div class="conteiner w-100 brief_information mt-5 custom-base-text">
            <p>We offer plumbing and electrical repair services, wall painting, parquet and laminate flooring installation, drywall and plastering. We also assemble and install furniture. You can trust us with installing curtain rods, faucets, or painting a child's room, as well as any other type of work.</p>
            <p>
                We always arrive on time, carry out our work efficiently, and strive to do everything necessary to ensure our customers are satisfied.
            </p>
            <!-- ----------------- -->
            <p>
                Simply fill out the application and attach photos so we can assess the scope of work, and we will contact you the same day!
            </p>

            <div class="mt-5 mb-5">
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
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4" id="imageContainer">
            <!-- Карточки с изображениями -->
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
                    <img src="img/images.jpg" class="card-img-top" alt="Image 10">
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/images.jpg" class="card-img-top" alt="Image 11">
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/images.jpg" class="card-img-top" alt="Image 12">
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <button class="button-galery" id="toggleBtn">Показать больше</button>
        </div>
    </div>
</div>
{{-- --------------------------price----------------------------- --}}
<div class="container-fluid bg-white">
    <div class="m-auto custom-width">
        <p class="pt-5 text-center start_text">Handyman Services Prices in LA</p>

        <ul class="list-group list-group-flush mt-5 pb-5">
            <li class="list-group-item d-flex justify-content-between align-items-center mt-3 custom-base-text border-bottom">
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