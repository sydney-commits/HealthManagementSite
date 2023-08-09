@extends('layout')

@section('content')
   <!-- Contact Start -->
   <div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Reach Us On</h5>
            <h1 class="display-4">Please Feel Free To Contact Us</h1>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: 200px;">
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 100px; height: 70px; transform: rotate(-15deg);">
                        <i class="fa fa-2x fa-location-arrow text-white" style="transform: rotate(15deg);"></i>
                    </div>
                    <h6 class="mb-0">Nairobi, Kenya</h6>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: 200px;">
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 100px; height: 70px; transform: rotate(-15deg);">
                        <i class="fa fa-2x fa-phone text-white" style="transform: rotate(15deg);"></i>
                    </div>
                    <h6 class="mb-0">+254 710 594 161</h6>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: 200px;">
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 100px; height: 70px; transform: rotate(-15deg);">
                        <i class="fa fa-2x fa-envelope-open text-white" style="transform: rotate(15deg);"></i>
                    </div>
                    <h6 class="mb-0">info@example.com</h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="height: 500px;">
                <div class="position-relative h-100">

                    <iframe class="position-relative w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d111861.93891421621!2d36.89111940198373!3d-1.227103106012539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ske!4v1681633730766!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    {{-- <iframe class="position-relative w-100 h-100"
                        src="<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d111861.93891421621!2d36.89111940198373!3d-1.
                        227103106012539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ske!4v1681633614624!5m2!1sen!2ske" width="600" height="450"
                         style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe> --}}
                </div>
            </div>
        </div>
        <div class="row justify-content-center position-relative" style="margin-top: -200px; z-index: 1;">
            <div class="col-lg-8">
                <div class="bg-white rounded p-5 m-5 mb-0">
                    <form action="{{ route('save_contact') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;" name="name">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;" name="email">
                            </div>
                            <div class="col-12">
                                <input type="tel" class="form-control bg-light border-0" placeholder="Contact" style="height: 55px;" name="phone">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-light border-0" rows="5" placeholder="Message" name="message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection