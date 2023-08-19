<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
/*******************************/
/******* Testimonial CSS *******/
/*******************************/
.testimonial {
    position: relative;
    width: 100%;
    padding: 45px 0;
}

.testimonial .testimonials-carousel {
    position: relative;
    width: calc(100% + 30px);
    margin: 0 -15px;
}

.testimonial .testimonial-item {
    position: relative;
    width: 100%;
    padding: 0 15px;
    display: flex;
}

.testimonial .testimonial-item img {
    width: 80px;
    height: 80px;
    border-radius: 80px;
    transform: scale(.8);
    transition: 2s;
}

.testimonial .owl-item.center .testimonial-item img {
    transform: scale(1);
}

.testimonial .testimonial-text {
    width: calc(100% - 100px);
    padding-left: 20px;
}

.testimonial .testimonial-text h3 {
    font-size: 18px;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 5px;
}

.testimonial .testimonial-text h4 {
    color: #777777;
    font-size: 15px;
    font-weight: 400;
    font-style: italic;
    margin-bottom: 10px;
}

.testimonial .testimonial-text p {
    margin: 0;
}

.testimonial .testimonial-text p::before {
    content: "\f10d";
    font-size: 25px;
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    color: #E81C2E;
    margin-right: 10px;
}

.testimonial .owl-dots {
    margin-top: 15px;
    text-align: center;
}

.testimonial .owl-dot {
    display: inline-block;
    margin: 0 5px;
    width: 12px;
    height: 12px;
    border-radius: 10px;
    background: #dddddd;
}

.testimonial .owl-dot.active {
    background: #E81C2E;
}
</style>
</head>  
  <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header text-center">
                    <p>Testimonial</p>
                    <h2>What our clients say</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="img/testimonial-1.jpg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Client Name</h3>
                            <h4>Profession</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor auctor gravid
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-2.jpg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Client Name</h3>
                            <h4>Profession</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor auctor gravid
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-3.jpg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Client Name</h3>
                            <h4>Profession</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor auctor gravid
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-4.jpg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Client Name</h3>
                            <h4>Profession</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor auctor gravid
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
