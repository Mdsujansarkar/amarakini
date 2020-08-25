@include('frontend.layouts.header')
  <!-- Humberger End -->
  <!-- Humberger Begin -->
@include('frontend.layouts.navbar')
{{-- @include('frontend.layouts.search') --}}
    <!-- Header Section End -->
    @yield('home')

@include('frontend.layouts.footer')