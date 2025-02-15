@extends('layouts.app')

@section('title', 'Lãnh đạo tri thức')

@section('content')
    <!-- ========== Hero Style1 Start============= -->
    <div class="hero2">
        <div class="left-sidebar">
            <div class="swiper-pagination121"></div>
        </div>
        <div class="swiper hero2-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-wrapper">
                        <div class="container">
                            <div class="row align-items-center">

                                <div class="col-lg-6">
                                    <div class="banner-content">
                                        <h6>Hun đúc tư duy lãnh đạo</h6>
                                        <h1><span>Lãnh đạo</span> Kiến tạo tương lai vững bền.</h1>
                                        <div class="btn-group">
                                            <a class="primary-btn2" href="contact.html">Đặt chỗ</a>
                                            <a class="primary-btn3" href="about.html">Xem thêm </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex justify-content-center">
                                    <div class="hero-img">
                                        <img class="img-fluid" src="assets/images/slide/banner_1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-wrapper">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="banner-content">
                                        <h6>Hun đúc tư duy lãnh đạo</h6>
                                        <h1><span>Lãnh đạo</span> Kiến tạo tương lai vững bền.</h1>
                                        <div class="btn-group">
                                            <a class="primary-btn2" href="contact.html">Đặt chỗ</a>
                                            <a class="primary-btn3" href="about.html">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex justify-content-center">
                                    <div class="hero-img">
                                        <img class="img-fluid" src="assets/images/slide/banner_2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="right-sidebar">
            <div class="social-area">
                <ul>
                    <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                    <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                    <li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
                    <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>

                </ul>
            </div>
        </div>
    </div>
    <!-- ========== Hero Style1 end============= -->

    <!-- ========== H2 Services Area Start============= -->
    <div class="h2-services-area">
        <div class="services-top">
            <div class="services-section-card">
                <div class="card-vector">
                    <img class="services-card-vect-01" src="assets/images/bg/h2-services-title-rt.png" alt="">
                    <img class="services-card-vect-02" src="assets/images/bg/h2-services-title-lb.png" alt="">
                </div>
                <div class="services-title">
                    <h2>See Our All <span>Services.</span></h2>
                    <a class="primary-btn2" href="contact.html">Book Your Day</a>
                </div>
            </div>
            <div class="swiper h2-services-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="services-card daycare-card">
                            <div class="card-vector">
                                <img class="services-card-vect-01" src="assets/images/bg/services-card-vec.png"
                                    alt="">
                                <img class="services-card-vect-02" src="assets/images/bg/services-card-vec2.png"
                                    alt="">
                            </div>
                            <div class="services-icon">
                                <img src="assets/images/icon/daycare3.svg" alt="">
                            </div>
                            <div class="services-content">
                                <h3><a href="service-details.html">Daycare</a></h3>
                                <p>Pellentesque maximus augue orciquista uten aliquet risus In hac habitasse.</p>
                                <div class="more-btn">
                                    <a href="shop-details.html">More Details<img src="assets/images/icon/h2-btn-arrow.svg"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="services-card grooming-card">
                            <div class="card-vector">
                                <img class="services-card-vect-01" src="assets/images/bg/services-card-vec.png"
                                    alt="">
                                <img class="services-card-vect-02" src="assets/images/bg/services-card-vec2.png"
                                    alt="">
                            </div>
                            <div class="services-icon">
                                <img src="assets/images/icon/grooming3.svg" alt="">
                            </div>
                            <div class="services-content">
                                <h3><a href="service-details.html">Grooming</a></h3>
                                <p>Pellentesque maximus augue orciquista uten aliquet risus In hac habitasse.</p>
                                <div class="more-btn">
                                    <a href="service-details.html">More Details<img
                                            src="assets/images/icon/h2-btn-arrow.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="services-card boarding-card">
                            <div class="card-vector">
                                <img class="services-card-vect-01" src="assets/images/bg/services-card-vec.png"
                                    alt="">
                                <img class="services-card-vect-02" src="assets/images/bg/services-card-vec2.png"
                                    alt="">
                            </div>
                            <div class="services-icon">
                                <img src="assets/images/icon/bording3.svg" alt="">
                            </div>
                            <div class="services-content">
                                <h3><a href="service-details.html">Boarding</a></h3>
                                <p>Pellentesque maximus augue orciquista uten aliquet risus In hac habitasse.</p>
                                <div class="more-btn">
                                    <a href="service-details.html">More Details<img
                                            src="assets/images/icon/h2-btn-arrow.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="services-card vaterinary-card">
                            <div class="card-vector">
                                <img class="services-card-vect-01" src="assets/images/bg/services-card-vec.png"
                                    alt="">
                                <img class="services-card-vect-02" src="assets/images/bg/services-card-vec2.png"
                                    alt="">
                            </div>
                            <div class="services-icon">
                                <img src="assets/images/icon/vetenary3.svg" alt="">
                            </div>
                            <div class="services-content">
                                <h3><a href="service-details.html">Vaterinary</a></h3>
                                <p>Pellentesque maximus augue orciquista uten aliquet risus In hac habitasse.</p>
                                <div class="more-btn">
                                    <a href="service-details.html">More Details<img
                                            src="assets/images/icon/h2-btn-arrow.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-btm pt-120 mb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="services-img">
                            <div class="services-img-bg">
                                <img src="assets/images/icon/h2-services-img-bg.svg" alt="">
                            </div>
                            <img class="img-fluid" src="assets/images/slide/coaching.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="services-content">
                            <img src="assets/images/icon/section-sl-no.svg" alt="">
                            <h2>Huấn Luyện Lãnh Đạo Chuyên Nghiệp.</h2>
                            <p>Chúng tôi đã có nhiều năm kinh nghiệm trong việc đào tạo và huấn luyện lãnh đạo, giúp họ nâng
                                cao tư duy chiến lược, kỹ năng quản lý và khả năng dẫn dắt đội nhóm. Với phương pháp đào tạo
                                bài bản và thực tiễn, chúng tôi cam kết mang đến sự phát triển bền vững cho cá nhân và tổ
                                chức.</p>
                            <div class="author-area">
                                <div class="author-quat">
                                    <p><sup><img src="assets/images/icon/author-quat-icon.svg" alt=""></sup> "Lãnh
                                        đạo không chỉ là ra quyết định, mà còn là nghệ thuật truyền cảm hứng và xây dựng đội
                                        ngũ vững mạnh. Phương pháp huấn luyện của chúng tôi giúp bạn phát triển tư duy lãnh
                                        đạo hiện đại, tự tin và hiệu quả hơn."</p>
                                </div>
                                <div class="author-name-deg">
                                    <h4>Kash Prestonal</h4> <span>Nhà sáng lập, Scooby</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== H2 Services Area End============= -->

    <!-- ========== H2 Choose Area Start============= -->
    <div class="h2-choose-area mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title2 text-center">
                        <h2>Why Choose Us</h2>
                        <p>Enjoy Your Holiday We Can Keep Them Happy <a href="#">Your Pet Our Priority</a>
                            Happy Pets, Happy Humans We Are The Best Of This Country We Are Always Ready For your
                            pet.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pt-90 pb-90 g-4">
                <div class="col-lg-3 col-md-4 col-sm-6 col-10">
                    <div class="single-card">
                        <div class="icon">
                            <img src="assets/images/icon/care2.svg" alt="">
                        </div>
                        <div class="content">
                            <h4>Personalized care</h4>
                            <p>Pellentesque maximus augue orci, quis congue purus iaculison</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-10">
                    <div class="single-card">
                        <div class="icon">
                            <img src="assets/images/icon/team2.svg" alt="">
                        </div>
                        <div class="content">
                            <h4>Trusted Team</h4>
                            <p>Pellentesque maximus augue orci, quis congue purus iaculison</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-10">
                    <div class="single-card">
                        <div class="icon">
                            <img src="assets/images/icon/mind2.svg" alt="">
                        </div>
                        <div class="content">
                            <h4>Peace of mind</h4>
                            <p>Pellentesque maximus augue orci, quis congue purus iaculison</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-10">
                    <div class="single-card">
                        <div class="icon">
                            <img src="assets/images/icon/mind2.svg" alt="">
                        </div>
                        <div class="content">
                            <h4>Nice Environment</h4>
                            <p>Pellentesque maximus augue orci, quis congue purus iaculison</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="partner-area">
            <div class="container">
                <div class="row">
                    <div class="swiper h2-partner">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="partner-logo">
                                    <img src="assets/images/icon/partner/envato.svg" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partner-logo">
                                    <img src="assets/images/icon/partner/xidex.svg" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partner-logo">
                                    <img src="assets/images/icon/partner/arrow.svg" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partner-logo">
                                    <img src="assets/images/icon/partner/ozgeo.svg" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partner-logo">
                                    <img src="assets/images/icon/partner/avianca.svg" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partner-logo">
                                    <img src="assets/images/icon/partner/olinski.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== H2 Choose Area End============= -->

    <!-- ========== H2 Warking Process Area Start============= -->
    <div class="h2-working-process mb-120">
        <div class="container">
            <div class="row mb-60">
                <div class="col-lg-12">
                    <div class="section-title2 text-center">
                        <h2>Three Step And enjoy your day.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="work-process-area">
                        <div class="work-process-card">
                            <div class="sl-no">
                                <span>Step</span>
                                <h3>01</h3>
                            </div>
                            <div class="icon">
                                <img src="assets/images/icon/search2.svg" alt="">
                            </div>
                            <div class="work-content text-center">
                                <h3>Select Service</h3>
                                <p>Read verified reviews by pet owners like you and choose a sitter who’s a great
                                    match for you .</p>
                            </div>
                        </div>

                        <div class="work-proces-arrow">
                            <img class="img-fluid" src="assets/images/bg/h2-work-proces-arrow.png" alt="">
                        </div>

                        <div class="work-process-card two">
                            <div class="sl-no">
                                <span>Step</span>
                                <h3>02</h3>
                            </div>
                            <div class="icon">
                                <img src="assets/images/icon/appoinment2.svg" alt="">
                            </div>
                            <div class="work-content text-center">
                                <h3>Book Your Day</h3>
                                <p>Read verified reviews by pet owners like you and choose a sitter who’s a great
                                    match for you .</p>
                            </div>
                        </div>

                        <div class="work-proces-arrow">
                            <img class="img-fluid" src="assets/images/bg/h2-work-proces-arrow.png" alt="">
                        </div>

                        <div class="work-process-card three">
                            <div class="sl-no">
                                <span>Step</span>
                                <h3>03</h3>
                            </div>
                            <div class="icon">
                                <img src="assets/images/icon/relax2.svg" alt="">
                            </div>
                            <div class="work-content text-center">
                                <h3>Have Relax</h3>
                                <p>Read verified reviews by pet owners like you and choose a sitter who’s a great
                                    match for you .</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- ========== H2 Warking Process Area End============= -->
    <!-- ========== H2 Contact Area Start============= -->
    <div class="h2-contact-area mb-120">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="contact-wrap">
                                <div class="section-title">
                                    <h2>Contact</h2>
                                </div>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-inner user">
                                                <input type="text" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-inner email">
                                                <input type="text" placeholder="Enter your email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-inner querry">
                                                <input type="text" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-inner">
                                                <textarea placeholder="Your message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-inner">
                                                <button class="primary-btn3" type="submit">send Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-img">
                                <img class="img-fluid" src="assets/images/slide/banner_4.jpg" alt="contact-img">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="section-title">
                                <h2>FAQ</h2>
                            </div>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            01. In et finibus lectus. Donec scelerisque tortor?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Pellentesque maximus augue orci, quis congue purus iaculis id. Maecenas
                                            eudocl lorem quis massal
                                            molestie vulputate in sit amet diam. Cras eu odio sit amet ont tellus.
                                            Cras ut sollicitudin urna.
                                            Vivamus blandit, </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            02. Rhoncus turpis porta non Curabitur interdum?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Pellentesque maximus augue orci, quis congue purus iaculis id. Maecenas
                                            eudocl lorem quis massal
                                            molestie vulputate in sit amet diam. Cras eu odio sit amet ont tellus.
                                            Cras ut sollicitudin urna.
                                            Vivamus blandit, </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            03. Donec ac enim vitae ligula ultrices accum?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Pellentesque maximus augue orci, quis congue purus iaculis id. Maecenas
                                            eudocl lorem quis massal
                                            molestie vulputate in sit amet diam. Cras eu odio sit amet ont tellus.
                                            Cras ut sollicitudin urna.
                                            Vivamus blandit,
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            04. Donec ac enim vitae ligula ultrices accum?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Pellentesque maximus augue orci, quis congue purus iaculis id. Maecenas
                                            eudocl lorem quis massal
                                            molestie vulputate in sit amet diam. Cras eu odio sit amet ont tellus.
                                            Cras ut sollicitudin urna.
                                            Vivamus blandit,
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== H2 Contact Area End============= -->

    <!-- ========== H2 Testimonial Area End============= -->
    <div class="h2-testimonial-area mb-120">
        <div class="container">
            <div class="row mb-60">
                <div class="col-lg-12">
                    <div class="section-title2 text-center">
                        <h2>What Our Customer Say</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-50">
                <div class="col-lg-12">
                    <div class="client-review-area">
                        <div class="single-area">
                            <div class="icon">
                                <img src="assets/images/icon/truspilot.svg" alt="">
                                <p>Rating</p>
                            </div>
                            <div class="review">
                                <ul>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                                <span>190 reviews</span>
                            </div>
                        </div>
                        <div class="total-review">
                            <img src="assets/images/icon/total-review-star.svg" alt="">
                            <h3>4.9</h3>
                        </div>
                        <div class="single-area">
                            <div class="icon">
                                <img src="assets/images/icon/google.svg" alt="">
                                <p>Rating</p>
                            </div>
                            <div class="review">
                                <ul>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                                <span>390 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-50">
                <div class="swiper h2-testimonial-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-content text-center">
                                    <div class="quat-icon">
                                        <img class="left-quat" src="assets/images/icon/left-quat.svg" alt="">
                                        <img class="right-quat" src="assets/images/icon/right-quat.svg" alt="">
                                    </div>
                                    <div class="foot-vector">
                                        <img class="testimonial-vec-left"
                                            src="assets/images/icon/h2-testimonial-vec-left.svg" alt="">
                                        <img class="testimonial-vec-right"
                                            src="assets/images/icon/h2-testimonial-vec-right.svg" alt="">
                                    </div>
                                    <div class="author-name-deg">
                                        <h3>Sebastian Ethan</h3>
                                        <span>Customer</span>
                                    </div>
                                    <p>Pellentesque maximus augue orci, quisdal andosp
                                        Pellentesque maximus augue orci, quisoki congue
                                        Nullam egestas, nisi id mollis elementum.</p>
                                    <div class="review">
                                        <ul>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="testimonial-img">
                                    <img src="assets/images/bg/h2-testi-1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-content text-center">
                                    <div class="quat-icon">
                                        <img class="left-quat" src="assets/images/icon/left-quat.svg" alt="">
                                        <img class="right-quat" src="assets/images/icon/right-quat.svg" alt="">
                                    </div>
                                    <div class="foot-vector">
                                        <img class="testimonial-vec-left"
                                            src="assets/images/icon/h2-testimonial-vec-left.svg" alt="">
                                        <img class="testimonial-vec-right"
                                            src="assets/images/icon/h2-testimonial-vec-right.svg" alt="">
                                    </div>
                                    <div class="author-name-deg">
                                        <h3>Anthony Dylan</h3>
                                        <span>Customer</span>
                                    </div>
                                    <p>Pellentesque maximus augue orci, quisdal andosp
                                        Pellentesque maximus augue orci, quisoki congue
                                        Nullam egestas, nisi id mollis elementum.</p>
                                    <div class="review">
                                        <ul>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="testimonial-img">
                                    <img src="assets/images/bg/h2-testi-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-between">
                    <div class="slider-btn prev-btn-5">
                        <i class="bi bi-arrow-left"></i>
                    </div>
                    <div class="swiper-scrollbar"></div>

                    <div class="slider-btn next-btn-5">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== H2 Testimonial Area End============= -->

    <!-- ========== H2 Team Area Start============= -->
    <div class="h2-team-area mb-120">
        <div class="vector1">
            <img src="assets/images/bg/team/team-vector-1.png" alt="">
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center mb-60">
                <div class="col-lg-11">
                    <div class="section-title2 text-center">
                        <h2>Our best working team</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-11 justify-content-center">
                    <div class="swiper h2-team-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="team-card">
                                    <div class="team-card-inner">
                                        <div class="card-style-1">
                                            <div class="team-img">
                                                <img class="img-fluid" src="assets/images/bg/team/h2-team-1.png"
                                                    alt="">
                                            </div>
                                            <div class="team-content">
                                                <h3>Kash Preston</h3>
                                                <span>Co-Founder</span>
                                            </div>
                                        </div>

                                        <div class="card-style-2">
                                            <div class="team-content">
                                                <h3>Kash Preston</h3>
                                                <span>Co-Founder</span>

                                            </div>
                                            <div class="team-img">
                                                <img class="img-fluid" src="assets/images/bg/team/h2-team-1.png"
                                                    alt="">
                                                <div class="social-area">
                                                    <div class="share-icon">
                                                        <i class="bi bi-share-fill"></i>
                                                    </div>
                                                    <ul class="social-icons">
                                                        <li><a href="https://www.facebook.com/"><i
                                                                    class="bx bxl-facebook"></i></a></li>
                                                        <li><a href="https://twitter.com/"><i
                                                                    class="bx bxl-twitter"></i></a></li>
                                                        <li><a href="https://www.pinterest.com/"><i
                                                                    class="bx bxl-pinterest-alt"></i></a></li>
                                                        <li><a href="https://www.instagram.com/"><i
                                                                    class="bx bxl-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card">
                                    <div class="team-card-inner">
                                        <div class="card-style-1">
                                            <div class="team-img">
                                                <img class="img-fluid" src="assets/images/bg/team/h2-team-2.png"
                                                    alt="">
                                            </div>
                                            <div class="team-content">
                                                <h3>Scarlett Emily</h3>
                                                <span>Kennel Assistant</span>
                                            </div>
                                        </div>

                                        <div class="card-style-2">
                                            <div class="team-content">
                                                <h3>Scarlett Emily</h3>
                                                <span>Kennel Assistant</span>
                                            </div>
                                            <div class="team-img">
                                                <img class="img-fluid" src="assets/images/bg/team/h2-team-2.png"
                                                    alt="">
                                                <div class="social-area">
                                                    <div class="share-icon">
                                                        <i class="bi bi-share-fill"></i>
                                                    </div>
                                                    <ul class="social-icons">
                                                        <li><a href="https://www.facebook.com/"><i
                                                                    class="bx bxl-facebook"></i></a></li>
                                                        <li><a href="https://twitter.com/"><i
                                                                    class="bx bxl-twitter"></i></a></li>
                                                        <li><a href="https://www.pinterest.com/"><i
                                                                    class="bx bxl-pinterest-alt"></i></a></li>
                                                        <li><a href="https://www.instagram.com/"><i
                                                                    class="bx bxl-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card">
                                    <div class="team-card-inner">
                                        <div class="card-style-1">
                                            <div class="team-img">
                                                <img class="img-fluid" src="assets/images/bg/team/h2-team-3.png"
                                                    alt="">
                                            </div>
                                            <div class="team-content">
                                                <h3>Jackson Mateo</h3>
                                                <span>Veterinary Assistant</span>
                                            </div>
                                        </div>

                                        <div class="card-style-2">
                                            <div class="team-content">
                                                <h3>Jackson Mateo</h3>
                                                <span>Veterinary Assistant</span>
                                            </div>
                                            <div class="team-img">
                                                <img class="img-fluid" src="assets/images/bg/team/h2-team-3.png"
                                                    alt="">
                                                <div class="social-area">
                                                    <div class="share-icon">
                                                        <i class="bi bi-share-fill"></i>
                                                    </div>
                                                    <ul class="social-icons">
                                                        <li><a href="https://www.facebook.com/"><i
                                                                    class="bx bxl-facebook"></i></a></li>
                                                        <li><a href="https://twitter.com/"><i
                                                                    class="bx bxl-twitter"></i></a></li>
                                                        <li><a href="https://www.pinterest.com/"><i
                                                                    class="bx bxl-pinterest-alt"></i></a></li>
                                                        <li><a href="https://www.instagram.com/"><i
                                                                    class="bx bxl-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card">
                                    <div class="team-card-inner">
                                        <div class="card-style-1">
                                            <div class="team-img">
                                                <img class="img-fluid" src="assets/images/bg/team/h2-team-4.png"
                                                    alt="">
                                            </div>
                                            <div class="team-content">
                                                <h3>Madison Ellie</h3>
                                                <span>Groomer Manager</span>
                                            </div>
                                        </div>

                                        <div class="card-style-2">
                                            <div class="team-content">
                                                <h3>Madison Ellie</h3>
                                                <span>Groomer Manager</span>
                                            </div>
                                            <div class="team-img">
                                                <img class="img-fluid" src="assets/images/bg/team/h2-team-4.png"
                                                    alt="">
                                                <div class="social-area">
                                                    <div class="share-icon">
                                                        <i class="bi bi-share-fill"></i>
                                                    </div>
                                                    <ul class="social-icons">
                                                        <li><a href="https://www.facebook.com/"><i
                                                                    class="bx bxl-facebook"></i></a></li>
                                                        <li><a href="https://twitter.com/"><i
                                                                    class="bx bxl-twitter"></i></a></li>
                                                        <li><a href="https://www.pinterest.com/"><i
                                                                    class="bx bxl-pinterest-alt"></i></a></li>
                                                        <li><a href="https://www.instagram.com/"><i
                                                                    class="bx bxl-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card">
                                    <div class="team-card-inner">
                                        <div class="card-style-1">
                                            <div class="team-img">
                                                <img class="img-fluid" src="assets/images/bg/team/h2-team-5.png"
                                                    alt="">
                                            </div>
                                            <div class="team-content">
                                                <h3>Gorjona Hiller</h3>
                                                <span>Daycare Manager</span>
                                            </div>
                                        </div>

                                        <div class="card-style-2">
                                            <div class="team-content">
                                                <h3>Gorjona Hiller</h3>
                                                <span>Daycare Manager</span>
                                            </div>
                                            <div class="team-img">
                                                <img class="img-fluid" src="assets/images/bg/team/h2-team-5.png"
                                                    alt="">
                                                <div class="social-area">
                                                    <div class="share-icon">
                                                        <i class="bi bi-share-fill"></i>
                                                    </div>
                                                    <ul class="social-icons">
                                                        <li><a href="https://www.facebook.com/"><i
                                                                    class="bx bxl-facebook"></i></a></li>
                                                        <li><a href="https://twitter.com/"><i
                                                                    class="bx bxl-twitter"></i></a></li>
                                                        <li><a href="https://www.pinterest.com/"><i
                                                                    class="bx bxl-pinterest-alt"></i></a></li>
                                                        <li><a href="https://www.instagram.com/"><i
                                                                    class="bx bxl-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-area">
                            <div class="team-pagination"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ========== H2 Team Area End============= -->

    <!-- ========== H2 Blog Area Start============= -->
    <div class="h2-blog-area mb-120">
        <div class="container">
            <div class="row justify-content-center mb-60">
                <div class="col-lg-11">
                    <div class="section-title2 text-center">
                        <h2>Our Newest blogs</h2>
                    </div>
                </div>
            </div>
            <div class="row g-lg-4 gy-5 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="blog-card-2">
                        <div class="blog-img">
                            <img class="img-fluid" src="assets/images/blog/blog4.png" alt="blog">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="blog-grid.html">August 10, 2022</a></li>
                                    <li><a href="blog-grid.html">Grooming</a></li>
                                </ul>
                            </div>
                            <h4><a href="{{ route('blog.detail') }}">Donec venenatis exid nibah goramt iaculisoni or Clonal
                                    interdum.</a></h4>
                            <div class="more-btn">
                                <a href="{{ route('blog.detail') }}"><span>Re</span>ad More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="blog-card-2">
                        <div class="blog-img">
                            <img class="img-fluid" src="assets/images/blog/blog5.png" alt="blog">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="blog-grid.html">August 12, 2022</a></li>
                                    <li><a href="blog-grid.html">Grooming</a></li>
                                </ul>
                            </div>
                            <h4><a href="{{ route('blog.detail') }}">Cras a mattis sapien Duis efficituroi mollis enim
                                    dictum.</a></h4>
                            <div class="more-btn">
                                <a href="{{ route('blog.detail') }}"><span>Re</span>ad More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="blog-card-2">
                        <div class="blog-img">
                            <img class="img-fluid" src="assets/images/blog/blog6.png" alt="blog">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="blog-grid.html">August 14, 2022</a></li>
                                    <li><a href="blog-grid.html">Grooming</a></li>
                                </ul>
                            </div>
                            <h4><a href="{{ route('blog.detail') }}">Etiam fringilla consectetur nullaqul molestie neque
                                    volutpat.</a></h4>
                            <div class="more-btn">
                                <a href="{{ route('blog.detail') }}"><span>Re</span>ad More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 pt-30 d-flex justify-content-center">
                    <div class="view-details-btn">
                        <a class="primary-btn2 btn-lg" href="blog-grid.html">View All Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== H2 Blog Area End============= -->
@endsection
