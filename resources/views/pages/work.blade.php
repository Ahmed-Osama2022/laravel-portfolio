@extends('layouts.master')

@section('content')
  <div class="container sora-font" id="my-work">
    <!-- Modal -->
    <div class="modal fade" id="projectsAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content sora-font">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add project</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form action="/work" method="POST" enctype="multipart/form-data">
              @csrf

              {{-- 1- Project Title --}}
              <div class="mb-3">
                <label for="title" class="form-label text-capitalize">Project Title</label>
                <input type="text" name="title" class="form-control bg-transparent text-white" id="title">
              </div>
              {{-- 2- Project online_link (Optional) --}}
              <div class="mb-3">
                <label for="online_link" class="form-label text-capitalize">Project online link (Or Github repo link)
                  <span class="text-white-50">(Optional)</span> </label>
                <input type="text" name="online_link" class="form-control bg-transparent text-white" id="online_link">
              </div>
              {{-- 3- Project ImgSrc --}}
              <div class="mb-3">
                <label for="imgSrc" class="form-label text-capitalize">Project Image</label>
                <input type="file" name="imgSrc" class="form-control bg-transparent text-white" id="imgSrc"
                       accept="image/*">

                {{-- Image Preview --}}
                <div class="mt-3">
                  <img id="imgPreview" src="#" alt="Preview" class="d-none rounded shadow mx-auto img-fluid">
                </div>
              </div>

              {{-- Script for Preview --}}
              <script>
                document.getElementById('imgSrc').addEventListener('change', function(event) {
                  const file = event.target.files[0];
                  const preview = document.getElementById('imgPreview');

                  if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                      preview.src = e.target.result;
                      preview.classList.remove('d-none');
                    }
                    reader.readAsDataURL(file);
                  } else {
                    preview.src = "#";
                    preview.classList.add('d-none');
                  }
                });
              </script>



              <div class="modal-footer">
                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn cv_btn">Save changes</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>


    {{-- NOTE: Don't forget to add the AOS animations --}}
    <div class="work d-flex align-items-center p-3 justify-content-center justify-content-md-start" data-aos="fade-down">
      <h1>Projects <span>&</span> Work</h1>
      {{-- NOTE: This button will open a modal... --}}
      @if (Auth::check())
        <a href="#" class="btn btn-outline-info px-3 py-2 mt-4 ms-4 my-auto" data-bs-toggle="modal"
           data-bs-target="#projectsAddModal">
          <i class="fa-solid fa-plus"></i>
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
        {{-- Show the success message for updating the social links --}}
        <p class="text-muted-white fw-bold mt-2">{{ session('project_success') }} </p>
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
      <div class="col-md-9 text-center text-md-start mb-5 pb-4" data-aos="fade-down">
        {{-- Work Cards --}}
        <div class="row flex-row gap-3 align-items-center">
          {{-- Repeat this NOTE: and don't forget to use pagination! --}}
          @if (count($projects) !== 0)
            @if (Auth::check())
              {{-- For Auth users --}}
              @foreach ($projects as $project)
                <a href="#"
                   onclick="event.preventDefault(); document.getElementById('edit-form-{{ $project->id }}').submit();"
                   class="col-md-4 rounded-3 shadow work-card p-3 flex-fill position-relative overflow-hidden">

                  <img src="{{ asset('storage/' . $project->imgSrc) }}" alt="Project Image"
                       class="img-fluid w-100 h-100 object-fit-cover opacity-50">

                  <div class="position-absolute top-50 start-50 translate-middle fw-bold fs-4 text-center">
                    {{ $project->title }} <br>
                    <p class="fs-6 text-muted-white">Click to Edit</p>
                  </div>
                </a>

                {{-- Hidden form --}}
                <form id="edit-form-{{ $project->id }}" action="{{ route('work.update', $project->id) }}" method="POST"
                      class="d-none">
                  @csrf
                  @method('PATCH')
                </form>
              @endforeach
            @else
              {{-- For site visitors --}}
              @foreach ($projects as $project)
                <a href="{{ asset('storage/' . $project->online_link) }}"
                   class="col-md-4 rounded-3 shadow work-card p-3 flex-fill position-relative overflow-hidden">
                  {{-- Image --}}
                  <img src="{{ asset('storage/' . $project->imgSrc) }}" alt="Project Image"
                       class="img-fluid w-100 h-100 object-fit-cover opacity-50">

                  {{-- Title overlay --}}
                  <div class="position-absolute top-50 start-50 translate-middle fw-bold fs-4 text-center">
                    {{ $project->title }}
                  </div>
                </a>
              @endforeach
            @endif
          @else
            <p class="text-white-50 fw-bold fs-4 px-5">There is no uploaded projects yet.</p>
          @endif
        </div>
      </div>


    </div>
  </div>
@endsection
