<!DOCTYPE html>
<html>
    @include('admin.partials._head')
<body class="fixed-left">
<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
     @include('admin.partials._nav')
    <!-- Top Bar End -->
    <!-- Left Sidebar Start -->
     @include('admin.partials._sidebar')
    <!-- Left Sidebar End -->

    <!-- Start right content -->
    <div class="content-page">
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            @yield('content')
            <!-- Footer Start -->
            <footer>

                <div class="footer-links pull-right">
                    <!--<a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a
                            <!--href="#">Help</a><a href="#">Contact Us</a>
                </div>
            </footer>
            <!-- Footer End -->
        </div>
        <!-- ============================================================== -->
        <!-- End content here -->
        <!-- ============================================================== -->

    </div>
    <!-- End right content -->

</div>
<!-- End of page -->
<!-- the overlay modal element -->
<div class="md-overlay"></div>
 @include('admin.partials._script')
</body>
</html>