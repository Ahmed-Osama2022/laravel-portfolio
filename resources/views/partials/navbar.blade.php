  <nav class="navbar navbar-expand-lg bg-transparent py-4" data-aos="fade-down">
    <div class="container">
      {{-- <a class="navbar-brand" href="#1">{{ env('APP_NAME') }}</a> --}}

      {{-- LOGO --}}
      <div
           class="d-flex flex-column flex-md-row text-center text-md-start align-items-center justify-content-between w-100">
        <div class="">
          <a class="navbar-brand p-0" href="{{ Route('home') }}">
            <img src="{{ asset('assets/images/LOGO(Ahmed)-sm.svg') }}" class="img-fluid p-0" alt="LOGO Image">
          </a>
        </div>

        {{-- Social media icons & links --}}
        <div class="" id="navbarNav">
          @php
            $social_links = App\Models\Social::find(1) ?? '#';
          @endphp
          <ul class="d-flex flex-row align-items-center justify-content-between gap-3 m-auto px-0">
            <li class="nav-item">
              <a class="nav-link" href="{{ $social_links->facebook ?? '#' }}"><i
                   class="fa-brands fa-facebook fs-5"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ $social_links->X_twitter ?? '#' }}"><i
                   class="fa-brands fa-x-twitter fs-5"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ $social_links->instagram ?? '#' }}"><i
                   class="fa-brands fa-instagram fs-5"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ $social_links->linkedin ?? '#' }}"><i
                   class="fa-brands fa-linkedin fs-5"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ $social_links->github ?? '#' }}"><i class="fa-brands fa-github fs-5"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"
                 href="{{ $social_links->whatsapp ? 'https://wa.me/+2' . $social_links->whatsapp : '#' }}"><i
                   class="fa-brands fa-whatsapp fs-5"></i></a>
            </li>
            @if (Auth::check())
              <li class="">
                <form method="post" action="{{ route('logout') }}">
                  @csrf
                  <button class="btn cv_btn px-1 px-md-3" type="submit">Logout</button>
                </form>
              </li>
            @endif

          </ul>
        </div>
        {{-- End Row --}}
      </div>

    </div>
  </nav>
