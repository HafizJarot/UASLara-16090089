<div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <div class="clearfix"></div>
            <!--- Profile -->
            <div class="profile-info">
                <div class="col-xs-4">
                    <a href="#" class="rounded-image profile-image"><img
                                src="{{ asset('coco/assets/img/logobrebes.png') }}"></a>
                </div>
                <div class="col-xs-8">
                    <div class="profile-text">Welcome <b>Admin</b></div>

                </div>
            </div>
            <!--- Divider -->
            <div class="clearfix"></div>
            <hr class="divider"/>
            <div class="clearfix"></div>
            <!--- Divider -->
            <div id="sidebar-menu">
                <ul class="nav nav-list">

                    <li class='ripple'><a href="{{route('dashboard')}}"><i class='icon-home-3'></i><span>Home</span></a></li>

                    <li class='ripple'><a href="{{ route('sejarah') }}"><i class='glyphicon glyphicon-tower'></i><span>Sejarah</span></a></li>

                    <li class='ripple'><a href="{{route('galeri')}}"><i class='fa fa-picture-o'></i><span>Galeri</span></a></li>
                    <li class='ripple'><a href="{{route('makanan')}}"><i class='fa fa-cutlery'></i><span>Makanan</span></a></li>
                    <li class='ripple'><a href="{{route('wisata')}}"><i class=' fa fa-globe'></i><span>Objek Wisata</span></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>