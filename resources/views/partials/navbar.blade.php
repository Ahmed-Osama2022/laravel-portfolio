  <nav class="navbar navbar-expand-lg bg-transparent py-4">
    <div class="container">
      {{-- <a class="navbar-brand" href="#">{{ env('APP_NAME') }}</a> --}}
      <div class="d-flex flex-row align-items-center justify-content-between w-100">
        <div class="">
          <a class="navbar-brand p-0" href="#">
            <img src="{{ asset('assets/images/LOGO(Ahmed)-sm.svg') }}" class="img-fluid p-0" alt="LOGO Image">
          </a>
        </div>
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> --}}

        <div class="" id="navbarNav">
          <ul class="d-flex flex-row  align-items-center justify-content-between gap-3 m-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
          </ul>
        </div>
        {{-- End Row --}}
      </div>

    </div>
  </nav>
