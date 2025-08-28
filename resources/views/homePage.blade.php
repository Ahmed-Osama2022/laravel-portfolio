{{-- NOTE: Home page is a banner (and banner only) --}}
@extends('layouts.master')

@section('content')
  {{-- Banner --}}
  <div class="container mb-4 pb-4   mb-lg-0 pb-lg-0">
    @include('pages.banner')
  </div>
@endsection
