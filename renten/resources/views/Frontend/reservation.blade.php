@extends('Frontend.Layout.main_layout')
@section('main_container')

  <!-- inner-apge-banner start -->
  <section class="inner-page-banner bg_img overlay-3" data-background="{{url('Frontend/assets/images/inner-page-bg.jpg')}}">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">reservation</h2>
          <ol class="page-list">
            <li><a href="index"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#0">car list</a></li>
            <li>reservation</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-apge-banner end -->

  <!-- reservation-section start -->
  <section class="reservation-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="reservation-details-area">
            <div class="thumb">
              <img src="{{url('Frontend/assets/images/cars/b1.jpg')}}" alt="images">
            </div>
            <div class="content">
              <div class="content-block">
                <h3 class="car-name">forester subar</h3>
                <span class="price">Start form $20 per day</span>
                <p>Lorem ipsum dolor sit amet, urna sit sociis lacus sem turpis magna, montes euismod eros nu dignsim etiam elementum sed tellus sed. Sollicitudin occaecati ut bibendum vitae vehicula adipiscing, partent justo labore, maecenas at aliquam eum. Eleifend suspendisse enim integer, ipsum mauris curabitur nulla ut sit, pede aenean, lacus sed. Dignissim wisi turpis pharetra sapien.</p>
              </div>
              <form class="reservation-form">
                <div class="content-block">
                  <h3 class="title">extra benifit and fee</h3>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">television   $05 per day</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">childen seat</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck3">
                        <label class="form-check-label" for="exampleCheck3">backfast & lunch $20 per day</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck4">
                        <label class="form-check-label" for="exampleCheck4">car insurances</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck5">
                        <label class="form-check-label" for="exampleCheck5">air-condition $35 per day</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck6">
                        <label class="form-check-label" for="exampleCheck6">security & safety</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <i class="fa fa-map-marker"></i>
                      <input class="form-control has-icon" type="text" placeholder="Pickup Location">
                    </div>
                    <div class="form-group col-md-6">
                      <i class="fa fa-map-marker"></i>
                      <input class="form-control has-icon" type="text" placeholder="Drop Off Location">
                    </div>
                    <div class="form-group col-md-6">
                      <i class="fa fa-calendar"></i>
                      <input type='text' class='form-control has-icon datepicker-here' data-language='en' placeholder="Pickup Date">
                    </div>
                    <div class="form-group col-md-6">
                      <i class="fa fa-clock-o"></i>
                      <input type="text" name="timepicker" class="form-control has-icon timepicker" placeholder="Pickup Time">
                    </div>
                    <div class="form-group col-md-6">
                      <i class="fa fa-calendar"></i>
                      <input type='text' class='form-control has-icon datepicker-here' data-language='en' placeholder="Drop Off Date">
                    </div>
                    <div class="form-group col-md-6">
                      <i class="fa fa-clock-o"></i>
                      <input type="text" name="timepicker" class="form-control has-icon timepicker" placeholder="Drop Off Time">
                    </div>
                  </div>
                </div>
                <div class="content-block">
                  <h3 class="title">personal information</h3>
                  <div class="row">
                    <div class="col-lg-6 form-group">
                      <input type="text" placeholder="Name">
                    </div>
                    <div class="col-lg-6 form-group">
                      <input type="email" placeholder="Email Address">
                    </div>
                    <div class="col-lg-6 form-group">
                      <input type="tel" placeholder="Phone">
                    </div>
                    <div class="col-lg-6 form-group">
                      <input type="text" placeholder="City">
                    </div>
                    <div class="col-lg-6 form-group">
                      <input type="text" placeholder="Zip Code">
                    </div>
                    <div class="col-lg-6 form-group">
                      <select>
                        <option>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="content-block">
                  <h3 class="title">payment method</h3>
                  <div class="row">
                    <div class="col-lg-6 form-group">
                      <select>
                        <option>Select Payment Methos</option>
                        <option>Paypal</option>
                        <option>Payoneer</option>
                        <option>Visa Card</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="content-block">
                  <h3 class="title">addisonal information</h3>
                  <div class="row">
                    <div class="col-lg-12 form-group">
                      <textarea placeholder="Write addisonal information in here"></textarea>
                    </div>
                    <div class="col-lg-12">
                      <button type="reset" class="cmn-btn bg-black">Cancel</button>
                      <button type="submit" class="cmn-btn">reservation</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <aside class="sidebar">
            <div class="widget widget-all-cars">
              <h4 class="widget-title">our all cars</h4>
              <ul class="cars-list">
                <li><a href="#0">mistubisshi</a></li>
                <li><a href="#0">forester subar</a></li>
                <li><a href="#0">subary liberty</a></li>
                <li><a href="#0">pajero range</a></li>
                <li><a href="#0">volkswagen</a></li>
              </ul>
            </div>
            <div class="widget widget-testimonial">
              <h4 class="widget-title">testimonial</h4>
              <div class="widget-body">
                <div class="testimonial-slider owl-carousel">
                  <div class="testimonial-item">
                    <div class="testimonial-item--header">
                      <div class="thumb"><img src="{{url('Frontend/assets/images/testimonial/1.jpg')}}" alt="image"></div>
                      <div class="content">
                        <h6 class="name">martin hook</h6>
                        <span class="designation">business man</span>
                      </div>
                    </div>
                    <div class="testimonial-item--body">
                      <p>Tristique consequat, lorem sed vivamus donec eget, nulla pharetra lacinia wisi diamaliquam velit nec.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- widget end -->
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!-- reservation-section end -->

  @endsection