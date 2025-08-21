@extends('layouts.master')

@section('content')
  <div class="container sora-font">
    {{-- NOTE: Don't forget to add the AOS animations --}}
    <div class="about-me d-flex align-items-center p-3 justify-content-center  justify-content-md-start"
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
        <div class="d-flex flex-row gap-3 align-items-stretch">
          {{-- Cards --}}

          <div class="rounded shadow services-card p-3 flex-fill">
            {{-- Icon --}}
            <i class="fa-brands fa-html5 fs-2"></i>
            {{-- Title --}}
            <h3></h3>
            {{-- text --}}
            <p class="text-muted-white">Beatiful websites with keeping UX in mind customer value.</p>
          </div>

          <div class="rounded shadow services-card p-3 flex-fill">
            {{-- Icon --}}
            <i class="fa-brands fa-html5 fs-2"></i>
            {{-- Title --}}
            <h3></h3>
            {{-- text --}}
            <p class="text-muted-white">Changing the old ways of static and CSR concepts.</p>
          </div>

          <div class="rounded shadow services-card p-3 flex-fill">
            {{-- Icon --}}
            <i class="fa-brands fa-html5 fs-2"></i>
            {{-- Title --}}
            <h3></h3>
            {{-- text --}}
            <p class="text-muted-white">Beatiful websites with keeping UX in mind customer value.</p>
          </div>

        </div>
      </div>
    </div>


  </div>
@endsection
