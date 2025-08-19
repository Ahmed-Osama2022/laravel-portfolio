{{-- For >= Desktop screens --}}
<div class="sidebar pe-2 d-none d-lg-block">
  <div class="items">
    <ul class="d-flex gap-4 flex-column p-4 justify-content-center align-items-center rounded-pill shadow">
      <a href="{{ route('home') }}">
        <li data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Home"
            class="{{ Route::is('home') ? 'active' : '' }}">
          <i class="fa-solid fa-house fs-4"></i>
        </li>
      </a>

      <a href="/about">
        <li data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="About-me"
            class="{{ request()->is('about') ? 'active' : '' }}"><i class="fa-solid fa-user fs-4"></i>
        </li>
      </a>

      <a href="/services">
        <li data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Services"
            class="{{ request()->is('services') ? 'active' : '' }}"><i class="fa-solid fa-screwdriver-wrench fs-4"></i>
        </li>
      </a>

      <a href="/work">
        <li data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Work"
            class="{{ request()->is('work') ? 'active' : '' }}"><i class="fa-solid fa-laptop-code fs-4"></i></li>
      </a>

      <a href="/contact">
        <li data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Contact"
            class="{{ request()->is('contact') ? 'active' : '' }}"><i class="fa-solid fa-envelope fs-4"></i></li>
      </a>
    </ul>
  </div>
</div>

{{-- For < Desktop screens (Mobile & Tablets) --}}
<div class="sidebar-phone d-block d-lg-none" data-aos="fade-up">
  <div class="items">
    <ul class="d-flex gap-3 flex-row p-4 justify-content-around align-items-center rounded shadow">
      <a href="{{ route('home') }}">
        <li class="{{ Route::is('home') ? 'active' : '' }}"><i class="fa-solid fa-house fs-4"></i></li>
      </a>

      <a href="/about">
        <li class="{{ request()->is('about') ? 'active' : '' }}"><i class="fa-solid fa-user fs-4"></i></li>
      </a>

      <a href="/services">
        <li class="{{ request()->is('services') ? 'active' : '' }}"><i class="fa-solid fa-screwdriver-wrench fs-4"></i>
        </li>
      </a>

      <a href="/work">
        <li class="{{ request()->is('work') ? 'active' : '' }}"><i class="fa-solid fa-laptop-code fs-4"></i></li>
      </a>

      <a href="/contact">
        <li class="{{ request()->is('contact') ? 'active' : '' }}"><i class="fa-solid fa-envelope fs-4"></i></li>
      </a>

    </ul>
  </div>
</div>
