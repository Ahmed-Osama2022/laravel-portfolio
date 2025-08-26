@extends('layouts.master')
@section('content')
  {{-- {{ dd($social_links) }} --}}
  <div class="container sora-font">
    <!-- Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content sora-font">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Contact information details:</h1>
            <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body sora-font">
            <p class="fs-5">Please (add || edit) your contact information:</p>

            <form method="POST" action="/contact">
              @csrf
              @method('PATCH')

              @php $social_links = App\Models\Social::first(); @endphp

              {{-- 1 --}}
              <div class="mb-3">
                <label for="email" class="form-label text-capitalize">E-mail link:</label>
                <input type="text" name="email" class="form-control bg-transparent text-white"
                       value="{{ old('email', $social_links->email ?? '') }}" id="email">
              </div>
              {{-- 2 --}}
              <div class="mb-3">
                <label for="facebook" class="form-label text-capitalize">Facebook Link:</label>
                <input type="text" name="facebook" class="form-control bg-transparent text-white"
                       value="{{ old('facebook', $social_links->facebook ?? '') }}" id="facebook">
              </div>

              {{-- 3 --}}
              <div class="mb-3">
                <label for="instagram" class="form-label text-capitalize">instagram Link:</label>
                <input type="text" name="instagram" class="form-control bg-transparent text-white"
                       value="{{ old('instagram', $social_links->instagram ?? '') }}" id="instagram">
              </div>

              {{-- 4 --}}
              <div class="mb-3">
                <label for="whatsapp" class="form-label text-capitalize">whatsapp number:</label>
                <input type="tel" name="whatsapp" class="form-control bg-transparent text-white"
                       value="{{ old('whatsapp', $social_links->whatsapp ?? '') }}" id="whatsapp">
              </div>

              {{-- 5 --}}
              <div class="mb-3">
                <label for="linkedin" class="form-label text-capitalize">linkedIn Link:</label>
                <input type="text" name="linkedin" class="form-control bg-transparent text-white"
                       value="{{ old('linkedin', $social_links->linkedin ?? '') }}" id="linkedin">
              </div>

              {{-- 6 --}}
              <div class="mb-3">
                <label for="github" class="form-label text-capitalize">github Link:</label>
                <input type="text" name="github" class="form-control bg-transparent text-white" {{-- value="{{ $social_links->github ?? '' }}" --}}
                       value="{{ old('github', $social_links->github ?? '') }}" id="github">
              </div>

              {{-- 7 --}}
              <div class="mb-3">
                <label for="X_twitter" class="form-label text-capitalize">x Link:</label>
                <input type="text" name="X_twitter" class="form-control bg-transparent text-white"
                       value="{{ old('X_twitter', $social_links->X_twitter ?? '') }}" id="X_twitter">
              </div>


              <div class="modal-footer my-3">
                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn cv_btn">Save changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="contact d-flex align-items-center p-3 justify-content-center justify-content-md-start"
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

        {{-- Show the success message for updating the social links --}}
        <p class="text-muted-white fw-bold mt-2">{{ session('links_success') }}</p>
        {{-- Show error message for cvFile --}}
        @if ($errors->any())
          <div class="text-danger mt-2 fw-bold">
            <ul class="px-0">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif


      </div>

      {{-- 2nd row --}}
      <div class="col-md-6 text-center text-md-start mt-3 mb-5 pb-4" data-aos="fade-down">
        {{-- Cards --}}
        <div class="row flex-row gap-3 align-items-stretch justify-content-center justify-content-md-start">
          {{-- 1 --}}
          <a href="{{ $social_links->github ?? '#' }}" target="_blank"
             class="col-4 col-md-4 col-lg-3 flex-fill border rounded-3 shadow contact-card position-relative text-center">
            {{-- Title --}}
            <h5 class="contact-title position-absolute top-50 start-50 translate-middle">Github</h5>
            {{-- Icon --}}
            <i class="fa-brands fa-github fs-4 contact-icon position-absolute top-50 start-50 translate-middle"></i>
          </a>

          {{-- 2 --}}
          <a href="{{ $social_links->facebook ?? '#' }}" target="_blank"
             class="col-4 col-md-4 col-lg-3 border rounded-3 shadow contact-card position-relative text-center flex-fill">
            {{-- Title --}}
            <h5 class="contact-title position-absolute top-50 start-50 translate-middle">Facebook</h5>
            {{-- Icon --}}
            <i class="fa-brands fa-facebook fs-4 contact-icon position-absolute top-50 start-50 translate-middle"></i>
          </a>
          {{-- 3 --}}
          <a href="https://wa.me/+2{{ $social_links->whatsapp ?? '#' }}" target="_blank"
             class="col-4 col-md-4 col-lg-3 flex-fill border rounded-3 shadow contact-card position-relative text-center">
            {{-- Title --}}
            <h5 class="contact-title position-absolute top-50 start-50 translate-middle">Whatsapp</h5>
            {{-- Icon --}}
            <i class="fa-brands fa-whatsapp fs-4 contact-icon position-absolute top-50 start-50 translate-middle"></i>
          </a>

          {{-- 4 --}}
          <a href="{{ $social_links->linkedin ?? '#' }}" target="_blank"
             class=" col-4 col-md-4 col-lg-3 flex-fill border rounded-3 shadow contact-card position-relative text-center ">
            {{-- Title --}}
            <h5 class="contact-title position-absolute top-50 start-50 translate-middle">LinkedIn</h5>
            {{-- Icon --}}
            <i class="fa-brands fa-linkedin fs-4 contact-icon position-absolute top-50 start-50 translate-middle"></i>
          </a>

          {{-- 5 --}}
          <a href="mailto:{{ $social_links->email ?? '' }}" target="_blank"
             class=" col-4 col-md-4 col-lg-3 flex-fill border rounded-3 shadow contact-card position-relative text-center ">
            {{-- Title --}}
            <h5 class="contact-title position-absolute top-50 start-50 translate-middle">E-mail</h5>
            {{-- Icon --}}
            <i class="fa-solid fa-envelope fs-4 contact-icon position-absolute top-50 start-50 translate-middle"></i>
          </a>

          {{-- 6 --}}
          <a href="{{ $social_links->X_twitter ?? '' }}" target="_blank"
             class=" col-4 col-md-4 col-lg-3 flex-fill border rounded-3 shadow contact-card position-relative text-center ">
            {{-- Title --}}
            <h5 class="contact-title position-absolute top-50 start-50 translate-middle fw-bold">X</h5>
            {{-- Icon --}}
            <i class="fa-brands fa-x-twitter  fs-4 contact-icon position-absolute top-50 start-50 translate-middle"></i>
          </a>

        </div>
      </div>
    </div>



  </div>
@endsection
