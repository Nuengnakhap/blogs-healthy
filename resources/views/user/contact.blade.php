@extends('user/app')

@section('title-page', 'Contact')

@section('main-content')
	<div class="container mt-3">
      <div class="row">
        @include('user/layouts/sidebar')

        <div class="col-md-8">
          <h1>Contact Me</h1>

          <div class="lead">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </div>

          <hr>
          <p>Facebook : <a href="https://www.facebook.com" target="blank">@onez</a></p>
          <p>Twitter : <a href="https://www.facebook.com" target="blank">@onez</a></p>
          <hr>

          <div class="row">
            <div class="col-md-9">
              <form>
                <h3>Send me a message</h3>
                <p>
                  <label class="sr-only">Your Name</label>
                  <input type="text" class="form-control" placeholder="Your Name" required autofocus>
                </p>
                <p>
                  <label class="sr-only">Your Message</label>
                  <textarea class="form-control" placeholder="Your Message" id=textarea" required></textarea>
                </p>
                <p><input type="submit" value="Send Message" class="btn btn-primary"></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('css')
  <link rel="stylesheet" href="{{asset('user/css/style.css')}}" type="text/css" media="all" />
<!-- Style-CSS -->
@endsection