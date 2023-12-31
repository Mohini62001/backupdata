@extends('Frontend.Layout.main_layout')
@section('main_container')

  <!-- inner-apge-banner start -->
  <section class="inner-page-banner bg_img overlay-3" data-background="{{url('Frontend/assets/images/inner-page-bg.jpg')}}">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">Create New account</h2>
          <ol class="page-list">
            <li><a href="index"><i class="fa fa-home"></i> Home</a></li>
            <li>Registration</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-apge-banner end -->

  <!-- registration-section start -->
  <section class="registration-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="registration-block text-center">
            <div class="registration-block-inner">
              <h3 class="title">create  your account</h3>
              <form class="registration-form">
                <div class="frm-group">
                  <input type="text" name="f-name" id="f-name" placeholder="First Name">
                </div>
                <div class="frm-group">
                  <input type="text" name="l-name" id="l-name" placeholder="Last Name">
                </div>
                <div class="frm-group">
                  <input type="email" name="name" id="name" placeholder="Your Email">
                </div>
                <div class="frm-group">
                  <input type="url" name="website" id="website" placeholder="Your Website">
                </div>
                <div class="frm-group">
                  <input type="password" name="pass" id="pass" placeholder="Your Password">
                </div>
                <div class="frm-group">
                  <input type="password" name="re-pass" id="re-pass" placeholder="Enter Re-Password">
                </div>
                <div class="frm-group">
                  <input type="submit" value="create new account">
                </div>
                <div class="frm-group">
                  <input type="checkbox" name="checkbox" id="checkbox" value="yes">
                  <label for="checkbox">I wish subscribe newslatter</label>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- registration-section end -->

  @endsection