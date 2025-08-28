@extends('layouts.master')
{{-- Check first if there is a record --}}
@if (!$project)
  @php
    abort(404);
  @endphp
@endif
@section('content')
  <div class="container sora-font shadow p-3 rounded-4 mb-5" id="my-work">
    {{-- NOTE: Don't forget to add the AOS animations --}}
    <div class="work d-flex align-items-center p-3 justify-content-center justify-content-md-start" data-aos="fade-down">
      <h1>Project settings page</h1>

      {{-- Delete button --}}
      <form action="{{ route('work.delete', ['id' => $project->id]) }}" method="POST" class="">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-outline-danger py-2 px-3 ms-4 my-auto">
          <p class="m-0">Delete <i class="fa-solid fa-trash"></i></p>
        </button>
      </form>
    </div>

    {{-- Edit Form --}}
    <form action="{{ route('work.update', ['id' => $project->id]) }}" method="POST" enctype="multipart/form-data"
          class="p-3 sora-font" data-aos="fade-up">
      @csrf
      @method('PATCH')

      <h1>Edit <span>{{ $project->title }}</span></h1>
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

      {{-- 1- Project Title --}}
      <div class="mb-3">
        <label for="title" class="form-label text-capitalize">Project Title <span
                class="text-white-50">(Required)</span></label>
        <input type="text" name="title" class="form-control bg-transparent text-white" id="title"
               value="{{ old('title', $project->title) }}">
      </div>
      {{-- 2- Project online_link (Optional) --}}
      <div class="mb-3">
        <label for="online_link" class="form-label text-capitalize">Project online link (Or Github repo link)
          <span class="text-white-50">(Optional)</span> </label>
        <input type="text" name="online_link" class="form-control bg-transparent text-white" id="online_link"
               value="{{ old('online_link', $project->online_link) }}">
      </div>
      {{-- 3- Project ImgSrc --}}
      <div class="mb-3">
        <label for="imgSrc" class="form-label text-capitalize">Project Image <span
                class="text-white-50">(Required)</span></label>
        <input type="file" name="imgSrc" class="form-control bg-transparent text-white" id="imgSrc"
               accept="image/*" value="{{ $project->imgSrc }}">

        {{-- Image Preview --}}
        <div class="mt-3 w-50 mx-auto">
          <img id="imgPreview" src="{{ asset('storage') . '/' . $project->imgSrc }}" alt="Preview" loading="lazy"
               class="rounded shadow mx-auto img-fluid">
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

      <div class="mt-3 d-flex justify-content-between gap-3">
        <button type="button" class="btn btn-outline-danger">
          <a href="/work">
            <i class="fa-solid fa-arrow-left"></i> Go back
          </a>
        </button>
        <button type="submit" class="btn cv_btn">Save changes</button>
      </div>

    </form>

  </div>

  <div class="pb-5"></div>
  <div class="pb-5"></div>
@endsection
