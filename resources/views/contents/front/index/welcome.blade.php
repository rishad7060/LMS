@extends('layouts.front.theme')

@section("content")
@php($path = 8)
@svg($path)
<div class="container-xxl bg-primary hero-header">
    <div class="container px-lg-5">
        <div class="row g-5 align-items-end">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white mb-4 animated slideInDown">Welcome to LMS from Esoft</h1>
                <p class="text-white pb-3 animated slideInDown">Learning with LMS is efficient and effective. With structured, bite-sized lessons, You can access courses, notes, online assessments, and quizzes which will be uploaded here.</p>
                <a href="" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Read More</a>
                <a href="{{ route('front.courses') }}" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Courses</a>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <img class="img-fluid animated zoomIn" src="front/img/hero.png" alt="">
            </div>
        </div>
    </div>
</div>

<!-- Department Start -->
@if(count($departments) > 0)
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="row g-4">
            @forelse ($departments as $department)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{ $loop->iteration }}s">
                    <div class="service-item d-flex flex-column text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-{{ $department->icon }} fa-2x"></i>
                        </div>
                        <h5 class="mb-3">{{ $department->title }}</h5>
                        <p class="m-0">{{ $department->description }}</p>
                        <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
</div>
@endif
<!-- Department End -->


<!-- University Overview Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary">University Overview<span></span></p>
                <h1 class="mb-5">What Makes Our University Special?</h1>
                
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2">Cutting-edge research opportunities with global impact</p>
                        <p class="mb-2">85%</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2">Diverse and inclusive learning environment</p>
                        <p class="mb-2">90%</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2">Hands-on learning experiences with industry leaders</p>
                        <p class="mb-2">95%</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <a href="" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Discover More</a>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="front/img/about.png">
            </div>
        </div>
    </div>
</div>
<!-- University Overview End -->


<!-- University Facts Start -->
<div class="container-xxl bg-primary fact py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-certificate fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2">5+</h1>
                <p class="text-white mb-0">Years of Academic Excellence</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-users-cog fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2">256+</h1>
                <p class="text-white mb-0">Dedicated Faculty Members</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2">1000+</h1>
                <p class="text-white mb-0">Successful Graduates</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-check fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2">100+</h1>
                <p class="text-white mb-0">Research Projects Completed</p>
            </div>
        </div>
    </div>
</div>
<!-- University Facts End -->



<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Why LMS<span></span></p>
            <h1 class="text-center mb-5">Why you’ll love learning with LMS</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-search fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Effective and efficient</h5>
                    <p class="m-0">Our courses effectively and efficiently teach reading, listening, and speaking skills. Check out our latest research!</p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-laptop-code fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Personalized learning</h5>
                    <p class="m-0">Combining the best of AI and language science, lessons are tailored to help you learn at just the right level and pace.</p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fab fa-facebook-f fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Stay motivated</h5>
                    <p class="m-0">We make it easy to form a habit of language learning, reminders from our friendly mascot, Duo the owl.</p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-users fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Real-life practice</h5>
                    <p class="m-0">Lessons include video of real-life situations where With subtitles , you can learn from context.</p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <p class="section-title text-secondary justify-content-center"><span></span>Testimonial<span></span></p>
        <h1 class="text-center mb-5">What Say Our Graduates!</h1>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item bg-light rounded my-4">
                <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>I glad that LMS support during my college day had huge part in my degree programe</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="front/img/testimonial-1.jpg" style="width: 65px; height: 65px;">
                    <div class="ps-4">
                        <h5 class="mb-1">Najma Riyaz</h5>
                        <span>BSc Computer Science</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded my-4">
                <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>LMS best part in my college days help to get notes,contact lecturer, doing practise and etc,Thank You LMS</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="front/img/testimonial-2.jpg" style="width: 65px; height: 65px;">
                    <div class="ps-4">
                        <h5 class="mb-1">Kasun Vijaythunga</h5>
                        <span>BSc Social Science</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded my-4">
                <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Best practice for course track and check anytime LMS help lots Thank you</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="front/img/testimonial-3.jpg" style="width: 65px; height: 65px;">
                    <div class="ps-4">
                        <h5 class="mb-1">Disal Kumara</h5>
                        <span>BSc IIT</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Our Team<span></span></p>
            <h1 class="text-center mb-5">Faculty Dean</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light rounded">
                    <div class="text-center border-bottom p-4">
                        <img class="img-fluid rounded-circle mb-4" src="front/img/team-1.jpg" alt="">
                        <h5>Arjun Ranathunga</h5>
                        <span>Faculty of Computing and Technology</span>
                    </div>
                    <div class="d-flex justify-content-center p-4">
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded">
                    <div class="text-center border-bottom p-4">
                        <img class="img-fluid rounded-circle mb-4" src="front/img/team-2.jpg" alt="">
                        <h5>Amani Vithursha</h5>
                        <span>Faculty of Commerce & Management Studies</span>
                    </div>
                    <div class="d-flex justify-content-center p-4">
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item bg-light rounded">
                    <div class="text-center border-bottom p-4">
                        <img class="img-fluid rounded-circle mb-4" src="front/img/team-3.jpg" alt="">
                        <h5>Amal Devis</h5>
                        <span>Faculty of Science</span>
                    </div>
                    <div class="d-flex justify-content-center p-4">
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


{{-- <!-- FAQ Start -->
<div class="container-xxl bg-primary py-5">
    <div class="container py-5 px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="text-white mb-4">Frequently Asked Questions</h2>
                <div id="accordion" class="accordion">
                    @foreach ($faqs as $faq)
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.{{ $loop->iteration }}s">
                            <h2 class="accordion-header" id="heading{{ $loop->iteration }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->iteration }}" aria-expanded="true" aria-controls="collapse{{ $loop->iteration }}">
                                    {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="collapse{{ $loop->iteration }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $loop->iteration }}" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    {{ $faq->answer }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="front/img/faq.png">
            </div>
        </div>
    </div>
</div>
<!-- FAQ End --> --}}


<!-- Newsletter Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5 bg-light rounded-3">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="mb-4">Subscribe to our Newsletter</h2>
                <p>Subscribe to our newsletter and get latest news and updates from LMS directly to your inbox.</p>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <form action="#" class="row g-3">
                    <div class="col-md-8">
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Enter your email...">
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary btn-block">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter End -->
@endsection
