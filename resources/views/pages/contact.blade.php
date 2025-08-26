@extends('layouts.master')

@section('content')
  <div class="container sora-font">
    <!-- Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content sora-font">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Contact information details:</h1>
            <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-1">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>


              {{-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div> --}}

              {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}

              <div class="modal-footer my-3">
                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn cv_btn">Save changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="contact d-flex align-items-center p-3 justify-content-center  justify-content-md-start"
         data-aos="fade-down">
      <h1>Contact me</h1>

      {{-- NOTE: This button will open a modal... --}}
      @if (Auth::check())
        <a href="#" class="btn btn-outline-info px-3 py-2 mt-4 ms-4 my-auto" data-bs-toggle="modal"
           data-bs-target="#contactModal">
          <i class="fa-solid fa-pencil"></i>
        </a>
      @endif
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
          <a href="https://github.com/ahmed-osama2022" target="_blank"
             class="col-4 col-md-4 col-lg-3 flex-fill border rounded-3 shadow contact-card position-relative text-center">
            {{-- Title --}}
            <h5 class="contact-title position-absolute top-50 start-50 translate-middle ">Github</h5>
            {{-- Icon --}}
            <i class="fa-brands fa-github fs-4 contact-icon position-absolute top-50 start-50 translate-middle"></i>
          </a>

          {{-- 2 --}}
          <a href="https://www.facebook.com/share/1AXDGvbJzC/" target="_blank"
             class="col-4 col-md-4 col-lg-3 border rounded-3 shadow contact-card position-relative text-center flex-fill">
            {{-- Title --}}
            <h5 class="contact-title position-absolute top-50 start-50 translate-middle">Facebook</h5>
            {{-- Icon --}}
            <i class="fa-brands fa-facebook fs-4 contact-icon position-absolute top-50 start-50 translate-middle"></i>
          </a>
          {{-- 3 --}}
          <a href="https://wa.me/+201553064098" target="_blank"
             class="col-4 col-md-4 col-lg-3 flex-fill border rounded-3 shadow contact-card position-relative text-center">
            {{-- Title --}}
            <h5 class="contact-title position-absolute top-50 start-50 translate-middle">Whatsapp</h5>
            {{-- Icon --}}
            <i class="fa-brands fa-whatsapp fs-4 contact-icon position-absolute top-50 start-50 translate-middle"></i>
          </a>

          {{-- 4 --}}
          <a href="https://linkedin.com/in/ahmed-osama-053737240" target="_blank"
             class=" col-4 col-md-4 col-lg-3 flex-fill border rounded-3 shadow contact-card position-relative text-center ">
            {{-- Title --}}
            <h5 class="contact-title position-absolute top-50 start-50 translate-middle">LinkedIn</h5>
            {{-- Icon --}}
            <i class="fa-brands fa-linkedin fs-4 contact-icon position-absolute top-50 start-50 translate-middle"></i>
          </a>

          {{-- 5 --}}
          <a href="mailto:ahmadosama.2011@gmail.com" target="_blank"
             class=" col-4 col-md-4 col-lg-3 flex-fill border rounded-3 shadow contact-card position-relative text-center ">
            {{-- Title --}}
            <h5 class="contact-title position-absolute top-50 start-50 translate-middle">E-mail</h5>
            {{-- Icon --}}
            <i class="fa-solid fa-envelope fs-4 contact-icon position-absolute top-50 start-50 translate-middle"></i>
          </a>

        </div>
      </div>
    </div>



  </div>
@endsection
