<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Primzahlfinder | Torben Hammes</title>
    <link rel="icon" type="image/png" sizes="500x500" href="assets/img/Logo%20Torben%20Hammes%20Favicon.png?h=8ec876b77046e51e189ed138b69638ef">
    <link rel="icon" type="image/png" sizes="500x500" href="assets/img/Logo%20Torben%20Hammes%20Favicon.png?h=8ec876b77046e51e189ed138b69638ef">
    <link rel="icon" type="image/png" sizes="500x500" href="assets/img/Logo%20Torben%20Hammes%20Favicon.png?h=8ec876b77046e51e189ed138b69638ef">
    <link rel="icon" type="image/png" sizes="500x500" href="assets/img/Logo%20Torben%20Hammes%20Favicon.png?h=8ec876b77046e51e189ed138b69638ef">
    <link rel="icon" type="image/png" sizes="500x500" href="assets/img/Logo%20Torben%20Hammes%20Favicon.png?h=8ec876b77046e51e189ed138b69638ef">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=03f393bd22b39ac86d6bee8b6ee26f76">
    <link rel="manifest" href="manifest.json?h=8d02c319746818c5c76a870387a21270">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css?h=cfa788754642173dafbd830bd7969fdb">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css?h=c8a4c01ed2ebafc942c6c14c1f21db9a">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand bg-light navigation-clean">
        <div class="container"><img src="assets/img/Logo%20Torben%20Hammes%20Favicon.png?h=8ec876b77046e51e189ed138b69638ef" style="width: 40px;height: 20;"><a class="navbar-brand" href="index.php"><strong>Ist das eine Primzahl?</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"></button>
            <div class="collapse navbar-collapse"
                id="navcol-1"><a class="btn btn-primary ml-auto" role="button" href="https://github.com/TorbenHammes" target="_blank">GitHub&nbsp;<i class="fa fa-github"></i></a></div>
        </div>
    </nav>
    <header class="masthead text-white text-center" style="background: url('assets/img/bg-showcase-2.jpg?h=82f59ff9dc7ce5bb277d6dfa737a6e45')no-repeat center center;background-size: cover;background-image: url(&quot;assets/img/bg-showcase-2.jpg?h=82f59ff9dc7ce5bb277d6dfa737a6e45&quot;);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">Ein Programm zum Prüfen, ob deine Zahl eine Primzahl ist!</h1>
                </div>
            </div>
        </div>
    </header>
    <!-- Start: Primzahl Form -->
    <div class="newsletter-subscribe">
        <div class="container">
            <!-- Start: Intro -->
            <div class="intro">
                <h2 class="text-center">Primzahlfinder</h2>
                <p class="text-center">Gib hier einfach deine gewünschte Zahl ein! Du kannst eine ganze Zahl (ohne Nachkommastelle) zwischen 0 und 1.000.000 eingeben und erhälst die Nachricht, ob diese Zahl eine Primzahl ist.</p>
            </div>
            <!-- End: Intro -->
            <!--<form class="form-inline" method="post">
                <div class="form-group"><input class="form-control" type="email" name="primzahl" placeholder="Deine Wunschzahl"></div>
                <div class="form-group"><button class="btn btn-primary" type="submit">Abschicken</button></div>
            </form>-->
            <form action="" method="get" class="form-inline">
                <div class="form-group"><input class="form-control" type="number" name="anfang" placeholder="Anfangszahl"><input class="form-control" type="number" name="ende" placeholder="Endzahl"></div><br>
                <!--<input type="submit" name="submit" value=" Teiler ermitteln" >-->
               <button class="btn btn-primary" type="submit" name="submit" value="Primzahl">Abschicken</button>
            </form>
            <div class="text-center">
                <?php
                    function Primzahl( $nummer ) {

                        for(
                            $zahlen = 2;
                            $zahlen*$zahlen <= $nummer;
                            $zahlen++ )

                        if( !($nummer % $zahlen) )

                            return FALSE;
                            return TRUE;
                    }

                    $anfang = $_GET['anfang'];
                    $ende = $_GET['ende'];;

                    for
                        (
                        $zahlen = $anfang;
                        $zahlen<$ende;
                        $zahlen++
                    ) {
                        if
                            (Primzahl($zahlen) == TRUE) {
                                echo "$zahlen\n";
                            }
                    }
                    ?>
            </div>
        </div>
    </div>
    <!-- End: Primzahl Form -->
    <!-- Start: Primzahl-Tester Form -->
    <div class="newsletter-subscribe">
        <div class="container">
            <!-- Start: Intro -->
            <div class="intro">
                <h2 class="text-center">Primzahlfinder</h2>
                <p class="text-center">Gib hier einfach deine gewünschte Zahl ein! Du kannst eine ganze Zahl (ohne Nachkommastelle) zwischen 0 und 1.000.000 eingeben und erhälst die Nachricht, ob diese Zahl eine Primzahl ist.</p>
            </div>
            <!-- End: Intro -->
            <!--<form class="form-inline" method="post">
                <div class="form-group"><input class="form-control" type="email" name="primzahl" placeholder="Deine Wunschzahl"></div>
                <div class="form-group"><button class="btn btn-primary" type="submit">Abschicken</button></div>
            </form>-->
            <form action="" method="get" class="form-inline">
                <input class="form-control" type="real" name="ein" size="8" value="" placeholder="Deine Wunschzahl"><br>
                <!--<input type="submit" name="submit" value=" Teiler ermitteln" >-->
               <button class="btn btn-primary" type="submit" name="submit" value=" Teiler ermitteln">Abschicken</button>
            </form>
            <div class="text-center"><?php
                extract ($_GET);
                if (($ein > 1000000)or($ein < 0))
                    echo "<br>Bitte eine andere Zahl w&auml;hlen";
                else {
                    $z=0;
                    $end= round(sqrt($ein),0);
                    for ($c = 1; $c<=$end; $c=$c+1) {
                        $test= $ein%$c;
                        if ($test==0)
                        {$d = $ein/$c;
                        $z=$z +1;
                        echo "<br>$c und $d sind Teiler von  $ein <br>";
                        }
                        else
                             echo " ";
                    }
                    {if ($z==1)
                        echo "<br> $ein ist eine Primzahl";
                    else echo "<br> $ein ist keine Primzahl";
                    }
                }
            ?></div>
        </div>
    </div>
    <!-- End: Primzahl-Tester Form -->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto h-100 text-center text-lg-left">
                    <p class="text-muted small mb-4 mb-lg-0">© <a href="https://torbenhammes.de/"> Torben Hammes</a> 2019</p>
                </div>
                <div class="col-lg-6 my-auto h-100 text-center text-lg-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin fa-2x fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-xing fa-2x fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-github fa-2x fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-code-fork fa-2x fa-fw"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js?h=83e266cb1712b47c265f77a8f9e18451"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js?h=63715b63ee49d5fe4844c2ecae071373"></script>
</body>

</html>
