@extends('layout/main')
@section('title','Dashboard')
    
@section('container')
<head>
<link rel="stylesheet" href="{{asset('style/assets/scss/widgets.css')}}">
<link rel="stylesheet" href="{{asset('style/assets/scss/style.css')}}">
</head>
<body>
        <div class="content mt-3">
            <div class="animated fadeIn">


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-3">Real Chart</h4>
                                    <div class="flot-container">
                                        <div id="cpu-load" class="cpu-load"></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /# column -->
                        <div class="col-lg-4 col-md-6">
                            <section class="card">
                                <div class="twt-feed blue-bg">
                                    <div class="corner-ribon black-ribon">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                    <div class="fa fa-twitter wtt-mark"></div>
                                    <center>
                                    <div class="media">
                                        <div class="media-body">
                                            <h2 class="text-white display-6">Yandi A.</h2>
                                            <p class="text-light">CEO</p>
                                        </div>
                                    </div>
                                    </center>
                                </div>
                                <div class="weather-category twt-category">
                                    <ul>
                                        <li class="active">
                                            <h5>1</h5>
                                            Tweets
                                        </li>
                                        <li>
                                            <h5>0</h5>
                                            Following
                                        </li>
                                        <li>
                                            <h5>1M</h5>
                                            Followers
                                        </li>
                                    </ul>
                                </div>
                                <div class="twt-write col-sm-12">
                                    <textarea placeholder="Write your Tweet and Enter" rows="1" class="form-control t-text-area"></textarea>
                                </div>
                                <footer class="twt-footer">
                                    <a href="#"><i class="fa fa-camera"></i></a>
                                    <a href="#"><i class="fa fa-map-marker"></i></a>
                                   Bogor, Indonesia
                                    <span class="pull-right">
                                        32
                                    </span>
                                </footer>
                            </section>
                        </div>
                        <div class="col-md-5 col-lg-2">
                            <div class="card">
                                <div class="card-body">
                                    <center>
                                    <div class="stat-widget-one">
                                        <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                                        <div class="stat-content dib">
                                            <div class="stat-text">Total Profit</div>
                                            <div class="stat-digit">1,012</div>
                                        </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
        <div class="col-md-6 col-lg-3">
            <div class="card text-white bg-flat-color-1">
                <div class="card-body pb-0">
                    <div class="dropdown float-right">
                        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-menu-content">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">
                        <span class="count">10468</span>
                    </h4>
                    <p class="text-light">Members online</p>

                </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70"/>
                        <canvas id="widgetChart3"></canvas>
                    </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card text-white bg-flat-color-1">
                <div class="card-body pb-0">
                    <div class="dropdown float-right">
                        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-menu-content">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">
                        <span class="count">10468</span>
                    </h4>
                    <p class="text-light">Members online</p>

                </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70"/>
                        <canvas id="widgetChart3"></canvas>
                    </div>
            </div>
        </div>
        <!--/.col-->
        <div class="col-md-6 col-lg-3">
            <div class="card text-white bg-flat-color-1">
                <div class="card-body pb-0">
                    <div class="dropdown float-right">
                        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-menu-content">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">
                        <span class="count">10468</span>
                    </h4>
                    <p class="text-light">Members online</p>

                </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70"/>
                        <canvas id="widgetChart3"></canvas>
                    </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card text-white bg-flat-color-1">
                <div class="card-body pb-0">
                    <div class="dropdown float-right">
                        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-menu-content">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">
                        <span class="count">10468</span>
                    </h4>
                    <p class="text-light">Members online</p>

                </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70"/>
                        <canvas id="widgetChart3"></canvas>
                    </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <i class="fa fa-laptop bg-info p-3 font-2xl mr-3 float-left text-light"></i>
                        <div class="h5 text-secondary mb-0 mt-1">$4.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
                    </div>
                    <div class="b-b-1 pt-3"></div>
                    <hr>
                    <div class="more-info pt-2" style="margin-bottom:-10px;">
                        <a class="font-weight-bold font-xs btn-block text-muted small" href="#">View More <i class="fa fa-angle-right float-right font-lg"></i></a>
                    </div>
                </div>
            </div>
        </div><!--/.col-->
        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <i class="fa fa-laptop bg-info p-3 font-2xl mr-3 float-left text-light"></i>
                        <div class="h5 text-secondary mb-0 mt-1">$5.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
                    </div>
                    <div class="b-b-1 pt-3"></div>
                    <hr>
                    <div class="more-info pt-2" style="margin-bottom:-10px;">
                        <a class="font-weight-bold font-xs btn-block text-muted small" href="#">View More <i class="fa fa-angle-right float-right font-lg"></i></a>
                    </div>
                </div>
            </div>
        </div><!--/.col-->
        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <i class="fa fa-laptop bg-info p-3 font-2xl mr-3 float-left text-light"></i>
                        <div class="h5 text-secondary mb-0 mt-1">$6.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
                    </div>
                    <div class="b-b-1 pt-3"></div>
                    <hr>
                    <div class="more-info pt-2" style="margin-bottom:-10px;">
                        <a class="font-weight-bold font-xs btn-block text-muted small" href="#">View More <i class="fa fa-angle-right float-right font-lg"></i></a>
                    </div>
                </div>
            </div>
        </div><!--/.col-->
        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <i class="fa fa-laptop bg-info p-3 font-2xl mr-3 float-left text-light"></i>
                        <div class="h5 text-secondary mb-0 mt-1">$7.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold font-xs small">Income</div>
                    </div>
                    <div class="b-b-1 pt-3"></div>
                    <hr>
                    <div class="more-info pt-2" style="margin-bottom:-10px;">
                        <a class="font-weight-bold font-xs btn-block text-muted small" href="#">View More <i class="fa fa-angle-right float-right font-lg"></i></a>
                    </div>
                </div>
            </div>
        </div><!--/.col-->
       

    </div><!-- .animated -->
</div><!-- .content -->


    <script src="{{asset('style/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('style/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('style/assets/js/plugins.js')}}"></script>
    <script src="{{asset('style/assets/js/main.js')}}"></script>

    <script src="{{asset('style/assets/js/lib/chart-js/Chart.bundle.js')}}"></script>
    <script src="{{asset('style/assets/js/widgets.js')}}"></script>


    <!--  flot-chart js -->
    <script src="{{asset('style/assets/js/lib/flot-chart/excanvas.min.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/flot-chart/jquery.flot.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/flot-chart/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/flot-chart/jquery.flot.time.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/flot-chart/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/flot-chart/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/flot-chart/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/flot-chart/curvedLines.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/flot-chart/flot-chart-init.js')}}"></script>

</body>
</html>

@endsection