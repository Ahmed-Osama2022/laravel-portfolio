@extends('layouts.master')

@section('content')
  <div class="container sora-font">
    <div class="contact d-flex align-items-center p-3 justify-content-center  justify-content-md-start"
         data-aos="fade-down">
      <h1>Contact me</h1>
    </div>

    <div class="row p-3">
      {{-- 1st row --}}
      <div class="col-md-6 text-center text-md-start my-services" data-aos="fade-up">
        <h1 class="fw-bold fs-1">Let's work together on your <span>next project...</span></h1>
        <p class="text-muted-white">
          Collaboration is key!<br>
          Let's join forces and combine our skills to tackle your next project with a powerful
          synergy that guarantees success.
        </p>
      </div>

      {{-- 2nd row --}}
      <div class="col-md-6 text-center text-md-start mt-3 mb-5 pb-4" data-aos="fade-down">
        {{-- Cards --}}
        <div class="row flex-row gap-3 align-items-stretch justify-content-center justify-content-md-start">
          {{-- 1 --}}
          <a href="#" class="col-3 border rounded-3 shadow contact-card position-relative text-center">
            {{-- Title --}}
            <h5 class="contact-title position-absolute top-50 start-50 translate-middle ">Github</h5>
            {{-- Icon --}}
            <i class="fa-brands fa-github fs-2 contact-icon position-absolute top-50 start-50 translate-middle"></i>
          </a>

          {{-- 2 --}}
          <a href="#" class="col-3 border rounded-3 shadow contact-card position-relative text-center">
            {{-- Title --}}
            <h5 class="contact-title position-absolute top-50 start-50 translate-middle">Facebook</h5>
            {{-- Icon --}}
            <i class="fa-brands fa-facebook fs-2 contact-icon position-absolute top-50 start-50 translate-middle"></i>
          </a>
          {{-- 3 --}}
          <a href="#" class="col-3 border rounded-3 shadow contact-card position-relative text-center">
            {{-- Title --}}
            <h5 class="contact-title position-absolute top-50 start-50 translate-middle">Whatsapp</h5>
            {{-- Icon --}}
            <i class="fa-brands fa-whatsapp fs-2 contact-icon position-absolute top-50 start-50 translate-middle"></i>
          </a>

          {{-- 4 --}}
          <a href="#" class="col-3 border rounded-3 shadow contact-card position-relative text-center ">
            {{-- Title --}}
            <h5 class="contact-title position-absolute top-50 start-50 translate-middle">LinkedIn</h5>
            {{-- Icon --}}
            <i class="fa-brands fa-linkedin fs-2 contact-icon position-absolute top-50 start-50 translate-middle"></i>
          </a>

        </div>
      </div>
    </div>



  </div>
@endsection
