  <nav class="navbar navbar-expand-lg bg-transparent py-4" data-aos="fade-down">
    <div class="container">
      {{-- <a class="navbar-brand" href="#">{{ env('APP_NAME') }}</a> --}}

      {{-- LOGO --}}
      <div
           class="d-flex flex-column flex-md-row text-center text-md-start align-items-center justify-content-between w-100">
        <div class="">
          <a class="navbar-brand p-0" href="#">
            <img src="{{ asset('assets/images/LOGO(Ahmed)-sm.svg') }}" class="img-fluid p-0" alt="LOGO Image">
          </a>
        </div>

        {{-- Social media icons & links --}}
        <div class="" id="navbarNav">
          <ul class="d-flex flex-row align-items-center justify-content-between gap-3 m-auto px-0">
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-brands fa-facebook fs-5"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-brands fa-x-twitter fs-5"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-brands fa-instagram fs-5"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-brands fa-linkedin fs-5"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-brands fa-github fs-5"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-brands fa-whatsapp fs-5"></i></a>
            </li>
          </ul>
        </div>
        {{-- End Row --}}
      </div>

    </div>
  </nav>
