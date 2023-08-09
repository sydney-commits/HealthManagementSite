@extends('layout')

@section('content')
 <!-- Blog Start -->
 <div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Medical Equipments</h5>
            <h1 class="display-4">Equipments</h1>
            <h6>            At  Home Care provides a comprehensive selection of home medical equipment, products and services.</h6>
        </div>

        <div class="row g-5">

            <div class="col-xl-4 col-lg-6">
                <div class="bg-light rounded overflow-hidden">
                    <img class="img-fluid w-100" src="https://goldenhomecare.co.ke/wp-content/uploads/2023/05/Backrest.jpg" alt="">
                    <div class="p-4">
                        <a class="h3 d-block mb-3" href=""> Hospital Beds</a>
                        <p class="m-0">
                            Experience the utmost comfort and support in the familiar surroundings of your own home as we bring you the option to rent or purchase our
                             top-quality hospital beds, specifically designed to aid patients in their recovery journey from illness or injury.</p>
                    </div>
                    {{-- <div class="d-flex justify-content-between border-top p-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-2" src="img/user.jpg" width="25" height="25" alt="">
                            <small>John Doe</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                            <small class="ms-3"><i class="far fa-comment text-primary me-1"></i>123</small>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="bg-light rounded overflow-hidden">
                    <img class="img-fluid w-100" src="https://goldenhomecare.co.ke/wp-content/uploads/2023/05/KM-8022STD-1050x960-L.png" alt="">
                    <div class="p-4">
                        <a class="h3 d-block mb-3" href="">WheelChairs</a>
                        <p class="m-0">Enhance daily independence and embrace unparalleled comfort with our exceptional range of high-quality wheelchairs, meticulously designed to cater to individuals facing mobility challenges. Experience effortless
                             maneuverability and enjoy newfound freedom as we provide you with the perfect solution to enhance your everyday life.</p>
                    </div>
                    {{-- <div class="d-flex justify-content-between border-top p-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-2" src="img/user.jpg" width="25" height="25" alt="">
                            <small>John Doe</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                            <small class="ms-3"><i class="far fa-comment text-primary me-1"></i>123</small>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="bg-light rounded overflow-hidden">
                    <img class="img-fluid w-100" src="https://goldenhomecare.co.ke/wp-content/uploads/2023/05/VW-Health-v1-The-8-Best-Portable-Oxygen-Concentrators-of-2021-0328568b645b4950bcfb302c408de971.jpg" alt="">
                    <div class="p-4">
                        <a class="h3 d-block mb-3" href="">Oxygen Concentrator</a>
                        <p class="m-0">
                            Elevate patient comfort and well-being with our advanced oxygen concentrators, ensuring a convenient and dependable source of oxygen therapy for individuals suffering from respiratory conditions. Our cutting-edge solutions are specifically tailored to 
                            provide a seamless experience, empowering patients to prioritize their health and enjoy enhanced peace of mind.</p>
                    </div>
                    {{-- <div class="d-flex justify-content-between border-top p-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-2" src="img/user.jpg" width="25" height="25" alt="">
                            <small>John Doe</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                            <small class="ms-3"><i class="far fa-comment text-primary me-1"></i>123</small>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="bg-light rounded overflow-hidden">
                    <img class="img-fluid w-100" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTsOmsZr_rCHblvI9MssjSwpbyP-ld0gZTDWtyjtoyw8_OPc1vg" alt="">
                    <div class="p-4">
                        <a class="h3 d-block mb-3" href="">Bed Pan (regular/fracture bed pan)</a>
                        <p class="m-0">A bedpan, an essential tool in healthcare facilities, serves as a receptacle for the toileting needs of bedridden patients. Crafted from durable materials such as metal, glass, ceramic,
                             or plastic, it provides a hygienic and efficient solution for both urinary and fecal discharge.</p>
                    </div>
                    {{-- <div class="d-flex justify-content-between border-top p-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-2" src="img/user.jpg" width="25" height="25" alt="">
                            <small>John Doe</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                            <small class="ms-3"><i class="far fa-comment text-primary me-1"></i>123</small>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="bg-light rounded overflow-hidden">
                    <img class="img-fluid w-100" src="https://t3.gstatic.com/images?q=tbn:ANd9GcRT4PnmPIN0GzD5_vwemlQc7n5zLIa5-iUYsXm1f55rXDaPJIk1" alt="">
                    <div class="p-4">
                        <a class="h3 d-block mb-3" href="">Ripple mattress</a>
                        <p class="m-0">Ripple mattresses, known as alternating air pressure mattresses or replacement mattress systems, employ a cyclical inflation and deflation mechanism within their air cells. 
                            This intelligent design effectively alleviates pressure on the body, promoting optimal comfort and pressure redistribution.</p>
                    </div>
                
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="bg-light rounded overflow-hidden">
                    <img class="img-fluid w-100" src="https://lh3.googleusercontent.com/eHsQRujPMOonAAxpQat0s0TYyVL-PYWjjOd11JcZu-byIBd9ziS_6aj_-V2s7yBOoMgXgtygpDbmFVKfUHHQJ3B0FRohfi5wjpf8QiVYnw" alt="">
                    <div class="p-4">
                        <a class="h3 d-block mb-3" href="">Crutches</a>
                        <p class="m-0">Crutches are a form of walking aids that effectively expand an individual's base of support, facilitating weight transfer from the lower extremities to the upper body. They are commonly utilized by
                             individuals who are unable to bear weight on their legs, either due to temporary injuries or long-term disabilities.</p>
                    </div>
                 
                </div>
            </div>

            {{-- <div class="col-xl-4 col-lg-6">
                <div class="bg-light rounded overflow-hidden">
                    <img class="img-fluid w-100" src="img/blog-3.jpg" alt="">
                    <div class="p-4">
                        <a class="h3 d-block mb-3" href="">Dolor clita vero elitr sea stet dolor justo  diam</a>
                        <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                            rebum clita rebum dolor stet amet justo</p>
                    </div>
                    <div class="d-flex justify-content-between border-top p-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-2" src="img/user.jpg" width="25" height="25" alt="">
                            <small>John Doe</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                            <small class="ms-3"><i class="far fa-comment text-primary me-1"></i>123</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="bg-light rounded overflow-hidden">
                    <img class="img-fluid w-100" src="img/blog-1.jpg" alt="">
                    <div class="p-4">
                        <a class="h3 d-block mb-3" href="">Dolor clita vero elitr sea stet dolor justo  diam</a>
                        <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                            rebum clita rebum dolor stet amet justo</p>
                    </div>
                    <div class="d-flex justify-content-between border-top p-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-2" src="img/user.jpg" width="25" height="25" alt="">
                            <small>John Doe</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                            <small class="ms-3"><i class="far fa-comment text-primary me-1"></i>123</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="bg-light rounded overflow-hidden">
                    <img class="img-fluid w-100" src="img/blog-2.jpg" alt="">
                    <div class="p-4">
                        <a class="h3 d-block mb-3" href="">Dolor clita vero elitr sea stet dolor justo  diam</a>
                        <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                            rebum clita rebum dolor stet amet justo</p>
                    </div>
                    <div class="d-flex justify-content-between border-top p-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-2" src="img/user.jpg" width="25" height="25" alt="">
                            <small>John Doe</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                            <small class="ms-3"><i class="far fa-comment text-primary me-1"></i>123</small>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-12 text-center">
                <button class="btn btn-primary py-3 px-5">For more inquiries about more equipments for rent or hire contact us </button>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

@endsection