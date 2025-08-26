<div class="banner d-flex justify-content-center align-items-center p-3 text-center text-md-start">
  <!-- Modal -->
  <div class="modal fade" id="cvModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content sora-font">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">CV File settings</h1>
          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{-- Show the exsisting one --}}

          {{-- Show the edit form --}}
          <h2 class="fs-6">Upload your CV here:</h2>
          <p class="text-muted-white">
            Please choose a PDF file to upload! <br>
            maximum file size is <span class="text-decoration-underline">30MB</span>
          </p>
          <form action="/info/cv" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <input type="file" name="cvFile" id="cvFile" accept="application/pdf">

            {{-- Show error message for cvFile --}}
            @error('cvFile')
              <div class="text-danger mt-2">{{ $message }}</div>
            @enderror

            <p id="fileName" class="text-muted-white mt-2"></p>
            <div id="previewContainer" style="margin-top: 15px; display: none;">
              <h3>CV Preview:</h3>
              <embed id="preview" type="application/pdf" width="100%" height="420px" />
            </div>

            <script>
              const input = document.getElementById("cvFile");
              const fileName = document.getElementById("fileName");
              const previewContainer = document.getElementById("previewContainer");
              const preview = document.getElementById("preview");

              input.addEventListener("change", () => {
                if (input.files.length > 0) {
                  const file = input.files[0];
                  fileName.textContent = "Selected file: " + file.name;

                  // Show preview if it's a PDF
                  if (file.type === "application/pdf") {
                    const fileURL = URL.createObjectURL(file);
                    preview.src = fileURL;
                    previewContainer.style.display = "block";
                  } else {
                    previewContainer.style.display = "none";
                  }
                } else {
                  fileName.textContent = "";
                  previewContainer.style.display = "none";
                }
              });
            </script>

            <div class="modal-footer my-3">
              <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn cv_btn">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="row justify-content-center align-items-center">
    {{-- 1st col --}}
    <div class="col-md-6 col-lg-5 banner-text sora-font" data-aos="fade-right">
      <div>
        <h1 class="fw-bold">Hello I'm Ahmed Osama</h1>
        <h1 class="laravel-color">Full stack web developer</h1>
      </div>
      <div>
        {{-- Show the success message for uploading the CV file --}}
        <p class="text-muted-white fw-bold mt-2">{{ session('file_success') }}</p>
        {{-- Show error message for cvFile --}}
        @error('cvFile')
          <div class="text-danger mt-2 fw-bold">Error: {{ $message }}</div>
        @enderror

        <a href="storage/{{ App\Models\File::first()->cv_link }}" class="btn cv_btn px-3 py-2 mt-4">View
          CV</a>
        {{-- NOTE: This button will open a modal... --}}
        @if (Auth::check())
          <!-- Button trigger modal -->
          <a href="#" class="btn btn-outline-info px-3 py-2 mt-4 ms-2" data-bs-toggle="modal"
             data-bs-target="#cvModal">
            <i class="fa-solid fa-pencil"></i>
          </a>
        @endif
      </div>
    </div>
    {{-- 2nd col --}}
    <div class="col-md-6 col-lg-7 d-none d-md-block" data-aos="fade-left">
      <img src="{{ asset('assets/images/personal-image.png') }}" loading='lazy' alt="Banner image" class="img-fluid">
    </div>
  </div>

</div>
