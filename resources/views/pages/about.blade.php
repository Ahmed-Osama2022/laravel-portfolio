@extends('layouts.master')

@section('content')
  <div class="container sora-font">
    {{-- NOTE: Don't forget to add the AOS animations --}}
    <div class="about-me d-flex align-items-center p-3 justify-content-center  justify-content-md-start"
         data-aos="fade-right">
      <h1>About me</h1>
    </div>

    <div class="row p-3">
      {{-- About me text --}}
      <div class="col-md-6 text-center text-md-start" data-aos="fade-right">
        <h1 class="fw-bold fs-1">Who am I?</h1>
        <p class="about-me-text pe-3 fw-bold">
          I’m a <span>full-stack web developer</span> passionate about building scalable, user-friendly, and secure web
          applications.
          My expertise spans ReactJS for modern front-end experiences, and PHP <span>(Laravel)</span> with MySQL for
          powerful
          back-end
          solutions.
        </p>
        <p class="text-muted-white">
          When I’m not coding, I’m usually exploring new technologies, refining my skills, or sharing
          knowledge with the community.
        </p>
      </div>

      {{-- Skills --}}
      <div class="col-md-6 text-center text-md-start p-2 mb-5 pb-4" data-aos="fade-left">
        <h1 class="fw-bold fs-1 text-decoration-underline">Skills</h1>
        <ul class="d-flex flex-row gap-3 align-items-center flex-wrap text-wrap p-0 fs-3">
          <span class="fs-5 text-start">Web development - </span>
          <li><i class="fa-brands fa-html5"></i></li>
          <li><i class="fa-brands fa-js"></i></li>
          <li><i class="fa-brands fa-css3"></i></li>
          <li><i class="fa-brands fa-react"></i></li>
          <li><i class="fa-brands fa-php"></i></li>
          <li><i class="fa-brands fa-laravel"></i></li>
          <i class="fa-solid fa-database"></i>
        </ul>
        <ul class="d-flex flex-row gap-3 align-items-center p-0 fs-3">
          <span class="fs-5 text-start">Other tools - </span>
          <li><i class="fa-brands fa-github"></i></li>
          <li><i class="fa-brands fa-linux"></i></li>
          <li><i class="fa-brands fa-figma"></i></li>
        </ul>


      </div>
    </div>


  </div>
@endsection
