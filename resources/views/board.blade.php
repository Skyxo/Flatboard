<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Flatboard</title>

    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>

    <header class="header-wrapper" role="banner">

        <div class="container-fluid">

            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand js-brand-toggle" href="#">Flatboard</a>
                </div>

                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Start</a></li>
                        <li><a href="#">Forum</a></li>
                    </ul>
                </div>
            </nav>

        </div>

    </header>

    <main class="main-wrapper board-wrapper" id="main" role="main">

        <section class="welcome">
            <div class="container">

                <div class="boardtitle-container">
                    <div class="boardtitle-wrapper">
                        <h1 class="board-title">Flatboard</h1>
                        <div class="divider"></div>
                        <h2 class="board-description">can be to flat for you</h2>
                    </div>
                </div>

                <div class="quickboard-container">

                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                            <div class="quickboard" id="announcements">
                                <div class="quickboard-head">
                                    <span class="quickboard-head-icon">
                                        <i class="fa fa-newspaper-o"></i>
                                    </span>
                                    <span class="quickboard-head-title">
                                        Ankündigungen
                                    </span>
                                    <span class="quickboard-head-badge">
                                        <span class="badge">4</span>
                                    </span>
                                </div>

                                <div class="quickboard-topics hidden-sm hidden-xs">



                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                            <div class="quickboard" id="subscribed">
                                <div class="quickboard-head">
                                    <span class="quickboard-head-icon">
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <span class="quickboard-head-title">
                                        Abbonierte Themen
                                    </span>
                                    <span class="quickboard-head-badge">
                                        <span class="badge">9</span>
                                    </span>
                                </div>

                                <div class="quickboard-topics hidden-sm hidden-xs">



                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                            <div class="quickboard" id="active-topics">
                                <div class="quickboard-head">
                                    <span class="quickboard-head-icon">
                                        <i class="fa fa-rss"></i>
                                    </span>
                                    <span class="quickboard-head-title">
                                        Deine aktiven Themen
                                    </span>
                                    <span class="quickboard-head-badge">
                                        <span class="badge">2</span>
                                    </span>
                                </div>

                                <div class="quickboard-topics hidden-sm hidden-xs">



                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <div class="next-page" id="next-page-anchor">
                <div class="background">
                    <div class="icon">
                        <i class="fa fa-chevron-down"></i>
                    </div>
                </div>
            </div>
        </section>

        <section class="board" id="board">

            <div class="container">

                <div class="board-list">

                    <div class="board simple-board" data-board-id="1">

                        <div classs="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

                                <div class="board-icon">
                                    <i class="fa fa-newspaper-o"></i>
                                </div>

                            </div>

                            <div class="col-lg-5 col-md-5 col-sm-8 col-xs-8">

                                <div class="board-title">
                                    <span>Einfaches Forum</span>
                                </div>

                            </div>

                            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">

                                <div class="board-last-thread">

                                </div>

                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

                                <div class="board-badge">
                                    <span class="badge">5</span>
                                </div>

                            </div>
                        </div>

                    </div>


                    <div class="board category">

                        <div class="board-head">

                            <div classs="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

                                    <div class="board-icon">
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">

                                    <div class="board-title">
                                        <span>Kategorie</span>
                                    </div>

                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

                                    <div class="board-badge">
                                        <span class="badge">8</span>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="subboard-list">

                            <div class="board subboard simple-subboard">
                                <div classs="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

                                        <div class="board-icon">
                                            <i class="fa fa-empire"></i>
                                        </div>

                                    </div>

                                    <div class="col-lg-5 col-md-5 col-sm-8 col-xs-8">

                                        <div class="board-title">
                                            <span>Ein Unterforum</span>
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">

                                        <div class="board-last-thread">

                                        </div>

                                    </div>

                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

                                        <div class="board-badge">
                                            <span class="badge">5</span>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="board subboard simple-subboard">
                                <div classs="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

                                        <div class="board-icon">
                                            <i class="fa fa-empire"></i>
                                        </div>

                                    </div>

                                    <div class="col-lg-5 col-md-5 col-sm-8 col-xs-8">

                                        <div class="board-title">
                                            <span>Ein Unterforum</span>
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">

                                        <div class="board-last-thread">

                                        </div>

                                    </div>

                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

                                        <div class="board-badge">
                                            <span class="badge">5</span>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="board subboard extended-subboard">

                                <div class="board-head">

                                    <div classs="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

                                            <div class="board-icon">
                                                <i class="fa fa-empire"></i>
                                            </div>

                                        </div>

                                        <div class="col-lg-5 col-md-5 col-sm-8 col-xs-8">

                                            <div class="board-title">
                                                <span>Ein Unterforum</span>
                                            </div>

                                        </div>

                                        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">

                                            <div class="board-last-thread">

                                            </div>

                                        </div>

                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

                                            <div class="board-badge">
                                                <span class="badge">5</span>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="subboard-list">

                                    <div class="subboard last-grade-subboard">
                                        <div class="board-title">
                                            <span>Unterforum</span>
                                        </div>
                                    </div>

                                    <div class="subboard last-grade-subboard">
                                        <div class="board-title">
                                            <span>Lorem ipsum</span>
                                        </div>
                                    </div>

                                    <div class="subboard last-grade-subboard">
                                        <div class="board-title">
                                            <span>Tests</span>
                                        </div>
                                    </div>

                                </div>


                            </div>


                        </div>

                    </div>


                </div>


            </div>

        </section>

    </main>

    <script type="text/javascript">
        window.Laravel = {
            csrfToken: '{{ csrf_token() }}'
        };
    </script>
    <script type="text/javascript" src="js/app.js"></script>

</body>
</html>