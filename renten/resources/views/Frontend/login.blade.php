@extends('Frontend.Layout.main_layout')
@section('main_container')

  <!-- inner-apge-banner start -->
  <section class="inner-page-banner bg_img overlay-3" data-background="{{url('Frontend/assets/images/inner-page-bg.jpg')}}">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">login</h2>
          <ol class="page-list">
            <li><a href="index"><i class="fa fa-home"></i> Home</a></li>
            <li>login</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-apge-banner end -->

  <!-- login-section start -->
  <section class="login-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="login-block text-center">
            <div class="login-block-inner">
              <h3 class="title">login your account </h3>
              <form class="login-form">
                <div class="frm-group text-center">
                  <a href="#0" class="facebook">facebook</a>
                  <a href="#0" class="google">google plus</a>
                  <a href="#0" class="twitter">twitter</a>
                </div>
                <div class="frm-group text-center">
                  <span class="or">or</span>
                </div>
                <div class="frm-group">
                  <input type="text" name="f-name" id="f-name" placeholder="Your Name">
                </div>
                <div class="frm-group">
                  <input type="password" name="pass" id="pass" placeholder="Your Password">
                </div>
                <div class="frm-group">
                  <input type="submit" value="login account">
                </div>
              </form>
              <p><a href="#0">Haven't your any account in here?</a><a href="#0">Forget password?</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- login-section end -->

  @endsection