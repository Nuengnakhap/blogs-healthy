@extends('user/app')

@section('title-page', 'About')

@section('main-content')
    <div class="container mt-3">
      <div class="row">
        @include('user/layouts/sidebar')

        <div class="col-md-8">
          <h1>About</h1>
          <div class="lead">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet est placerat in egestas. Arcu ac tortor dignissim convallis aenean. Sit amet massa vitae tortor condimentum lacinia. At tellus at urna condimentum mattis pellentesque id nibh tortor. 
          </div>
          <hr>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet est placerat in egestas. Arcu ac tortor dignissim convallis aenean. Sit amet massa vitae tortor condimentum lacinia. At tellus at urna condimentum mattis pellentesque id nibh tortor. Cursus mattis molestie a iaculis. Donec ac odio tempor orci. Mauris nunc congue nisi vitae suscipit tellus mauris. 
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet est placerat in egestas. Arcu ac tortor dignissim convallis aenean. Sit amet massa vitae tortor condimentum lacinia. At tellus at urna condimentum mattis pellentesque id nibh tortor. Cursus mattis molestie a iaculis. Donec ac odio tempor orci. Mauris nunc congue nisi vitae suscipit tellus mauris. 
          </p>
        </div>
      </div>
    </div>
@endsection

@section('css')
  <link rel="stylesheet" href="{{asset('user/css/style.css')}}" type="text/css" media="all" />
<!-- Style-CSS -->
@endsection