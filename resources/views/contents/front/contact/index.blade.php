@extends('layouts.front.theme')

@section("content")
<div class="space"></div>

<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Contact Us<span></span></p>
            <h1 class="text-center mb-5">Get in Touch with LMS</h1>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary">Contact Information<span></span></p>
                <h1 class="mb-5">We'd Love to Hear from You</h1>
                <p>If you have any questions, feedback, or inquiries, feel free to reach out to us. Our team is here to help you with all your needs.</p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fa fa-map-marker-alt me-3"></i>123 Street, Colombo, Sri Lanka</li>
                    <li class="mb-3"><i class="fa fa-phone-alt me-3"></i>+94 11123456</li>
                    <li class="mb-3"><i class="fa fa-envelope me-3"></i>info@lms.com</li>
                </ul>
                <div class="d-flex pt-2">
                    <a class="btn btn-primary btn-square me-2" href="https://www.facebook.com/lmsSriLanka"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary btn-square me-2" href="https://www.linkedin.com/company/lmsSriLanka"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-primary btn-square me-2" href="https://www.twitter.com/lmsSriLanka"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <p class="section-title text-secondary">Send Us a Message<span></span></p>
                <h1 class="mb-5">We Are Here to Assist You</h1>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" rows="5" placeholder="Message" required></textarea>
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

@endsection
