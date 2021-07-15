@extends('layout.app')
@section('content')
    <section id="home">
        <div class="content">
            <div id="large-header" class="large-header">
                <div id="countdown_dashboard" class="home-main container">
                    <div class="row">
                        <div class="logo">
                            <img src="images/logo.png" alt="logo">
                            <p>El valor del Bitcoin es:</p>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Estados Unidos -->
                        <div class="col-md-4 dash-glob" data-scroll-reveal="enter bottom move 25px, after 0.3s">
                            <div class="dash days_dash">
                                <div class="digit usd">${{ number_format($btc["USD"],2) }}<i class="icon-arrow"></i></div>
                                <div class="digit"><img src="images/flags/united-states.png" alt="United States BTC" width="50"></div>
                            </div>
                        </div>

                        <!-- Chile -->
                        <div class="col-md-4 dash-glob" data-scroll-reveal="enter bottom move 25px, after 0.3s">
                            <div class="dash minutes_dash">
                                <div class="digit clp">${{ number_format($btc["CLP"],2) }}</div>
                                <div class="digit"><img src="images/flags/chile.png" alt="United States BTC" width="50"></div>
                            </div>
                        </div>
                        <!-- Perú -->
                        <div class="col-md-4 dash-glob" data-scroll-reveal="enter bottom move 25px, after 0.3s">
                            <div class="dash seconds_dash">
                                <div class="digit pen">S/{{ number_format($btc["PEN"],2) }}</div>
                                <div class="digit"><img src="images/flags/peru.png" alt="United States BTC" width="50"></div>
                            </div>
                        </div>
                    </div> <!-- END ROW -->
                </div> <!-- END COUNTDOWN -->
            </div> <!-- LARGE HEADER -->
        </div> <!-- END CONTENT -->
    </section>
    <section class="features parallax" data-stellar-background-ratio="0.7" id="features">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4 col-md-4">
                    <div class="features-box">
                        <div class="open-overlay"><img src="images/logos/js.png" height="30"></div>
                        <h4><a href="/" class="redirect">Jquery</a></h4>
                        <p>Vista basada en Jquery</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="features-box">
                        <div class="open-overlay"><img src="images/logos/vue.png" height="30"></div>
                        <h4><a href="vue" class="redirect">Vue</a></h4>
                        <p>Vista basada en Vue</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="features-box">
                        <div class="open-overlay"><img src="images/logos/react.png" height="30"></div>
                        <h4><a class="redirect">React</a></h4>
                        <p>Vista basada en React</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
