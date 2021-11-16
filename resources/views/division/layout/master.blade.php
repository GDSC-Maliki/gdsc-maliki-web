<!DOCTYPE html>
<html lang="en">
@include('division.layout.head')
@yield('head')

<body>

    <!-- ======= Header ======= -->
    @include('division.layout.header')
    <!-- End Header -->

    <!-- ======= Team Section ======= -->
    @yield('content-division')
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    @include('division.layout.contact')
    <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('division.layout.footer')
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    @include('division.layout.script')
    @stack('script')

</body>

</html>
