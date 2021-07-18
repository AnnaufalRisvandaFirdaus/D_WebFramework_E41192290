@extends('user.home')

@section('content')

<div class="container-fluid">
    <h2 class="text-center display-4">Cari Pekerjaanmu!</h2>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="simple-results.html">
                <div class="input-group">
                    <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-lg btn-default">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<link rel="stylesheet" href="templateuser/assets/css/fontawesome.css">
<link rel="stylesheet" href="templateuser/assets/css/templatemo-sixteen.css">
<link rel="stylesheet" href="templateuser/assets/css/owl.css">


<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filters">
                    <ul>
                        <li class="active" data-filter="*">Semua Lowongan</li>
                        <li data-filter=".des">Featured</li>
                        <li data-filter=".dev">Flash Deals</li>
                        <li data-filter=".gra">Last Minute</li>
                    </ul>
                </div>

                @foreach($conten as $item)
                <div class="col-md-12">
                    <div class="filters-content">
                        <div class="row grid">

                            <div class="col-lg-4 col-md-4 all des">
                                <div class="product-item">
                                    <a href="/register"><img
                                            src="{{ asset('foto_perusahaan/'. $item->foto_perusahaan ) }}" alt=""></a>
                                    <div class="down-content">
                                        <h4>{{$item['nama_perusahaan']}}</h4>
                                        <h6>{{$item['gaji']}}</h6>

                                        <p>{{$item['Pekerjaan']}}</p>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>{{$item['syarat_ketentuan']}}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="pages">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap core JavaScript -->
    <script src="templateuser/vendor/jquery/jquery.min.js"></script>
    <script src="templateuser/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="templateuser/assets/js/custom.js"></script>
    <script src="templateuser/assets/js/owl.js"></script>
    <script src="templateuser/assets/js/slick.js"></script>
    <script src="templateuser/assets/js/isotope.js"></script>
    <script src="templateuser/assets/js/accordions.js"></script>


    <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
        if (!cleared[t.id]) { // function makes it static and global
            cleared[t.id] = 1; // you could use true and false, but that's more typing
            t.value = ''; // with more chance of typos
            t.style.color = '#fff';
        }
    }
    </script>

    @endsection