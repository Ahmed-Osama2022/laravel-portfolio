@extends('layouts.master')

@section('content')
  <div class="container sora-font" id="my-work">
    {{-- NOTE: Don't forget to add the AOS animations --}}
    <div class="work d-flex align-items-center p-3 justify-content-center justify-content-md-start" data-aos="fade-down">
      <h1>Projects <span>&</span> Work</h1>
      {{-- NOTE: This button will open a modal... --}}
      @if (Auth::check())
        <a href="#" class="btn btn-outline-info px-3 py-2 mt-4 ms-4 my-auto">
          <i class="fa-solid fa-pencil"></i>
        </a>
      @endif
    </div>

    <div class="row p-3">
      {{-- 1st row --}}
      <div class="col-md-3 text-center text-md-start my-work" data-aos="fade-up">
        <h1 class="fw-bold fs-1">My work<span>.</span></h1>
        <p class="text-muted-white">
          As a <span>full-stack web developer</span>, I try to be advanced with my websites and I hope you like It.
        </p>
      </div>

      {{-- 2nd row --}}
      <div class="col-md-9 text-center text-md-start mb-5 pb-4" data-aos="fade-down">
        {{-- Work Cards --}}
        <div class="row flex-row gap-3 align-items-center">
          {{-- 1 --}}
          {{-- Repeat this NOTE: and don't forget to use pagination! --}}
          <a href="#" class="col-md-4 rounded-3 shadow work-card p-3 flex-fill position-relative overflow-hidden">
            {{-- Image --}}
            <img src="{{ asset('assets/images/mk-gym.vercel.app-old.png') }}" alt="Work Image"
                 class="img-fluid w-100 h-100 object-fit-cover opacity-50">

            {{-- Title overlay --}}
            <div class="position-absolute top-50 start-50 translate-middle fw-bold fs-4 text-center">
              Restaurant App
            </div>
          </a>

          <a href="#" class="col-md-4 rounded-3 shadow work-card p-3 flex-fill position-relative overflow-hidden">
            {{-- Image --}}
            <img src="{{ asset('assets/images/mk-gym.vercel.app-old.png') }}" alt="Work Image"
                 class="img-fluid w-100 h-100 object-fit-cover opacity-50">

            {{-- Title overlay --}}
            <div class="position-absolute top-50 start-50 translate-middle fw-bold fs-4 text-center">
              Restaurant App
            </div>
          </a>

          <a href="#" class="col-md-4 rounded-3 shadow work-card p-3 flex-fill position-relative overflow-hidden">
            {{-- Image --}}
            <img src="{{ asset('assets/images/mk-gym.vercel.app-old.png') }}" alt="Work Image"
                 class="img-fluid w-100 h-100 object-fit-cover opacity-50">

            {{-- Title overlay --}}
            <div class="position-absolute top-50 start-50 translate-middle fw-bold fs-4 text-center">
              Restaurant App
            </div>
          </a>

          <a href="#" class="col-md-4 rounded-3 shadow work-card p-3 flex-fill position-relative overflow-hidden">
            {{-- Image --}}
            <img src="{{ asset('assets/images/mk-gym.vercel.app-old.png') }}" alt="Work Image"
                 class="img-fluid w-100 h-100 object-fit-cover opacity-50">

            {{-- Title overlay --}}
            <div class="position-absolute top-50 start-50 translate-middle fw-bold fs-4 text-center">
              Restaurant App
            </div>
          </a>

          <a href="#" class="col-md-4 rounded-3 shadow work-card p-3 flex-fill position-relative overflow-hidden">
            {{-- Image --}}
            <img src="{{ asset('assets/images/mk-gym.vercel.app-old.png') }}" alt="Work Image"
                 class="img-fluid w-100 h-100 object-fit-cover opacity-50">

            {{-- Title overlay --}}
            <div class="position-absolute top-50 start-50 translate-middle fw-bold fs-4 text-center">
              Restaurant App
            </div>
          </a>

          <a href="#" class="col-md-4 rounded-3 shadow work-card p-3 flex-fill position-relative overflow-hidden">
            {{-- Image --}}
            <img src="{{ asset('assets/images/mk-gym.vercel.app-old.png') }}" alt="Work Image"
                 class="img-fluid w-100 h-100 object-fit-cover opacity-50">

            {{-- Title overlay --}}
            <div class="position-absolute top-50 start-50 translate-middle fw-bold fs-4 text-center">
              Restaurant App
            </div>
          </a>
        </div>
      </div>


    </div>
  </div>
@endsection
