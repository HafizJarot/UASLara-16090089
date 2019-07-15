@extends('frontend.index')

@section('content')

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Sejarah</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">

                @foreach($sejarahs as $sejrah)
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="{{asset('uploads/Sejarah/'.$sejrah->foto)}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">{{$sejrah->judul}}</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">{{$sejrah->artikel}}</p>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="{{asset('uploads/Sejarah/'.$sejrah->foto)}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">{{$sejrah->judul}}</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">{{$sejrah->artikel}}</p>
                                </div>
                            </div>
                        </li>

                    </ul>
                            </div>
                @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="galeri">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">GALERI</h2>
                    <h3 class="section-subheading text-muted">KOTA BREBES</h3>
                </div>
            </div>
            <div class="row">
                <?php $no = 1 ?>
                @foreach($galeries as $galeri)
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#galeri{{$no}}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">

                                </div>
                            </div>
                            <img width="350px" height="300px" src="{{asset('uploads/galeri/'.$galeri->foto)}}" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>{{$galeri->nama}}</h4>
                            <p class="text-muted">{{$galeri->tempat}}</p>
                        </div>
                    </div>
                    <?php $no++ ?>
                @endforeach
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="makanan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">MAKANAN</h2>
                    <h3 class="section-subheading text-muted">Khas Brebes</h3>
                </div>
            </div>
            <div class="row text-center">

                @foreach($makanans as $makanan)

                        <div class="col-sm-4">
                            <div class="team-member">
                                <img src="{{asset('uploads/makanan/'.$makanan->foto)}}" height="300" width="300">
                                <h4 class="service-heading">{{$makanan->nama}}</h4>
                                <p class="text-muted"></p>
                            </div>
                        </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="wisata">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">WISATA</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <?php $no = 1 ?>
                @foreach($wisatas as $wisata)
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#wisata{{$no}}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">

                                </div>
                            </div>
                            <img width="350px" height="300px" src="{{asset('uploads/wisata/'.$wisata->foto)}}" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>{{$wisata->nama}}</h4>
                            <p class="text-muted">{{$wisata->tempat}}</p>
                        </div>
                    </div>
                    <?php $no++ ?>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Clients -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">KONTAK</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="Kirim Pesan" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="nama" type="text" placeholder="Nama Kamu *"
                                           required="required"
                                           data-validation-required-message="Tolong isi Nama kamu.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Alamat Email Kamu *"
                                           required="required"
                                           data-validation-required-message="Tolong isi alamat Email kamu.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="nomer hp" type="tel" placeholder="Nomer HP Kamu *"
                                           required="required"
                                           data-validation-required-message="Tolong isi nomer HP kamu.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="komentar" placeholder="Komentar *"
                                              required="required"
                                              data-validation-required-message="Tolong isi Komentar kamu."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase"
                                        type="submit">Kirim Pesan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Galeri -->
    <?php $no = 1 ?>
    @foreach($galeris as $galeri)
    <div class="portfolio-modal modal fade" id="galeri{{$no}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">{{$galeri->nama}}</h2>
                                <p class="item-intro text-muted">{{$galeri->tempat}}</p>
                                <img width="350px" height="300px" src="{{asset('uploads/galeri/'.$galeri->foto)}}" alt="">
                                {{--<img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">--}}
                                <p></p>
                                <ul class="list-inline">
                                    <li>{{$galeri->harga}}</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                    Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $no++ ?>
    @endforeach

    <!-- Modal Objek Wisata -->
    <?php $no = 1 ?>
    @foreach($wisatai as $wisata)
        <div class="portfolio-modal modal fade" id="wisata{{$no}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2 class="text-uppercase">{{$wisata->nama}}</h2>
                                    <p class="item-intro text-muted">{{$wisata->tempat}}</p>
                                    <img width="350px" height="300px" src="{{asset('uploads/wisata/'.$wisata->foto)}}" alt="">
                                    {{--<img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">--}}
                                    <p></p>
                                    <ul class="list-inline">
                                        <li>{{$wisata->harga}}</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times"></i>
                                        Close Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $no++ ?>
    @endforeach



@endsection