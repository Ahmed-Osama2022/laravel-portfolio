@extends('layouts.master')

@section('content')
  <div class="container sora-font">
    {{-- NOTE: Don't forget to add the AOS animations --}}
    <div class="services d-flex align-items-center p-3 justify-content-center  justify-content-md-start"
         data-aos="fade-down">
      <h1>My Services</h1>
    </div>

    <div class="row p-3">
      {{-- 1st row --}}
      <div class="col-md-4 text-center text-md-start my-services" data-aos="fade-up">
        <h1 class="fw-bold fs-1">What can I <span>do?</span></h1>
        <p class="text-muted-white">
          Developing conpceptual ideas for websites using any full-stack tools
        </p>
      </div>

      {{-- 2nd row --}}
      <div class="col-md-8 text-center text-md-start mb-5 pb-4" data-aos="fade-down">
        {{-- <h1 class="fw-bold fs-1 text-decoration-underline">ahmed</h1> --}}
        {{-- Cards --}}
        <div class="row flex-row gap-3 align-items-stretch">
          {{-- 1 --}}
          <div class="col-lg-3 col-md-4 rounded shadow services-card p-3 flex-fill">
            {{-- Icon --}}
            <i class="fa-solid fa-crop-simple fs-2"></i>
            {{-- Title --}}
            <h5 class="my-3">Branding</h5>
            {{-- text --}}
            <p class="text-muted-white">“Beatiful websites with keeping UX in mind customer value.”</p>
          </div>
          {{-- 2 --}}
          <div class="col-lg-3 col-md-4 rounded shadow services-card p-3 flex-fill">
            {{-- Icon --}}
            <i class="fa-solid fa-users fs-2"></i>
            {{-- Title --}}
            <h5 class="my-3">User Experience</h5>
            {{-- text --}}
            {{-- <p class="text-muted-white">
              Understanding user behaviors, needs, and preferences to create interfaces that are intuitive, efficient, and
              enjoyable to use.</p> --}}
            <p class="text-muted-white">“Designing interfaces that are simple, efficient, and enjoyable by focusing on
              user needs.”</p>
          </div>
          {{-- 3 --}}
          <div class="col-lg-3 col-md-4 rounded shadow services-card p-3 flex-fill">
            {{-- Icon --}}
            <i class="fa-solid fa-gem fs-2"></i>
            {{-- Title --}}
            <h5 class="my-3">Unique code</h5>
            {{-- text --}}
            <p class="text-muted-white">“Custom solutions, no copy-paste code — every project, unique.”</p>
          </div>

        </div>
      </div>
    </div>


  </div>
@endsection
