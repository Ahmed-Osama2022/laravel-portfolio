<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME') }}</title>

  {{-- Bootstrap Files --}}
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>

<body>
  @include('partials.navbar')


</body>

</html>
