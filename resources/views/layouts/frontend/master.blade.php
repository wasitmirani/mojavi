<!doctype html>
<html lang="en">
@include('layouts.frontend.partials.head')
  <body>
    <!-- HEADER -->
    @include('layouts.frontend.partials.header')
    <!-- HEADER -->
    <!-- Main Content -->
    <main class="main-content">

    @yield('content')
    </main>
      <!-- Main Content -->
      <!-- footer -->
     @include('layouts.frontend.partials.footer')

      <!-- footer -->

      <!-- Scripts -->
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://netteria.net/myscript/jquery/html5videopopup/js/videopopup.js"></script>
      <script src="{{ asset('frontend/assets/slick-slider/slick/slick.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
      <!-- Scripts -->
    </body>
  </html>
