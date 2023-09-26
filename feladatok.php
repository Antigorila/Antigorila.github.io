<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    </link>
    <script src="bootstrap\js\bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="style.css">
    </link>
</head>

<body class="body">

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" back>
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Home <span
                                class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">


        <div class="row">
            <div class="row mt-3 text-center">
                <div class="col">
                    <h4>Feladat 3.2</h4>
                    <h8><i>3.2. feladat I [Számok bekérése] Írjunk programot, mely bekér egy számot, és eldönti, hogy
                            osztható-e 3-mal, 4-gyel vagy 9-cel
                        </i></h8>
                    <hr>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="card">
                    <h5 class="m-2">Számbekérés</h5>
                    <div class="card-body">
                        <h4 class="card-title">Számok</h4>
                        <form action="" method="GET">
                            <input class="form-control mb-2" type="number" name="szam_1" id="szam_1">
                            <button class="btn btn-secondary" name="submit">Küldés</button>
                            <?php
                            if (isset($_GET['submit'])) {
                                if (isset($_GET['szam_1'])) {
                                    $atkertSzam = $_GET['szam_1'];
                                }
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <h5 class="m-2">Számok: </h5>
                    <div class="card-body">
                        <p>Átkért szám:
                            <?php echo isset($atkertSzam) ? $atkertSzam : "" ?>
                        </p>
                        <?php

                        $szamok = array();
                        if (isset($atkertSzam)) {
                            array_push($szamok, $atkertSzam);
                        }

                        for ($i = 0; $i < count($szamok); $i++) {
                            if ($szamok[$i] % 3 == 0 || $szamok[$i] % 4 == 0 || $szamok[$i] % 9 == 0) {
                                echo $szamok[$i] . " osztahtó 3-mal vagy 4-gyel vagy 9-cel<br>";
                            } else {
                                echo $szamok[$i] . " nem osztahtó 3-mal, 4-gyel, 9-cel<br>";
                            }
                        }

                        ?>
                        <br>
                        <br>

                    </div>
                </div>
            </div>
        </div>


        <br>

        <div class="row">
            <div class="row mt-3 text-center">
                <div class="col">
                    <h4>Feladat 3.3</h4>
                    <h8><i>3.3. feladat I [Átváltások] Készítsünk programot, mely bekér egy hőmérséklet értéket, majd
                            felajánlja, hogy Celsiusból Fahrenheitbe, vagy Fahrenheitből Celsiusba váltja át.</i></h8>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <h5 class="m-2">Hömérséglet bekérő</h5>
                    <div class="card-body">
                        <h4 class="card-title">Hömérséglet</h4>
                        <form action="" method="GET">
                            <input class="form-control mb-2" type="number" name="szam_1" id="szam_1">
                            <button class="btn btn-secondary" name="submit">Küldés</button>
                            <?php
                            if (isset($_GET['submit'])) {
                                if (isset($_GET['szam_1'])) {
                                    $atkertSzam = $_GET['szam_1'];
                                }
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <h5 class="m-2">Számok: </h5>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="row mt-3 text-center">
                <div class="col">
                    <h4>Feladat 3.4</h4>
                    <h8><i>3.4. feladat [Testtömeg indexek] Írjunk programot, mely a testsúly és a testmagasság alapján
                            meghatározza a testtömegindexet, és kiírja, hogy milyen testsúly osztályba tartozik az adott
                            illető. a testtömeg osztályokat meghatározhatjuk tetszőlegesen, de alapul vehetünk létező
                            osztályozásokat is.
                        </i></h8>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <h5 class="m-2">Adatbekérő form</h5>
                    <div class="card-body">
                        <h4 class="card-title">Testtömeg indexek</h4>
                        <form action="" method="GET">
                            <h8><i>Testtömeg:(kg)</h8></i>
                            <input class="form-control mb-2" type="number" name="testtomeg" id="testtomeg"
                                placeholder="Testtömeg">
                            <h8><i>Testmagasság:(cm)</h8></i>
                            <input class="form-control mb-2" type="number" name="magassag" id="magassag"
                                placeholder="Testmagasság">
                            <button class="btn btn-secondary" name="submitTI">Küldés</button>
                            <?php
                            $testtomegN = 0;
                            $magassagN = 0;
                            if (isset($_GET['submitTI'])) {
                                if (isset($_GET['testtomeg']) && isset($_GET['magassag'])) {
                                    if (is_numeric($_GET['testtomeg']) && is_numeric($_GET['magassag'])) {
                                        $testtomegN = $_GET['testtomeg'];
                                        $magassagN = $_GET['magassag'];
                                    }
                                }
                            }
                            ?>
                        </form>

                        <form action="" method="GET">

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <h5 class="m-2">Testtömeg index: </h5>
                    <div class="card-body">
                        <p>Súly:
                            <?php echo isset($testtomegN) ? $testtomegN : "" ?>
                        </p>
                        <p>Magasság:
                            <?php echo isset($magassagN) ? $magassagN : "" ?>
                        </p>
                        <h6>TesttömegIndex:
                            <?php
                            if ($testtomegN !== 0 && $magassagN !== 0) {
                                $Tindex = $testtomegN / (($magassagN / 100) * ($magassagN / 100));
                                echo round($Tindex);
                            }
                            ?>
                        </h6>
                        <h5>Kategória:</h5>
                        <?php
                        if (isset($Tindex)) {
                            if ($Tindex <= 16) {
                                echo "Súlyos Soványság";
                            } elseif (16 <= $Tindex && 17 >= $Tindex) {
                                echo "Mérsékelt Soványság";
                            } elseif (17 <= $Tindex && 18.49 >= $Tindex) {
                                echo "Enyhe Soványság";
                            } elseif (18.5 <= $Tindex && 24.9 >= $Tindex) {
                                echo "Normál";
                            } elseif ($Tindex >= 25 && $Tindex <= 30) {
                                echo "Túlsúly";
                            } else {
                                echo "Extrém túlsúly";
                            }
                        }                     
                        ?>
                        <br>
                        <br>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row mt-3 text-center">
                    <div class="col">
                        <h4>Feladat 3.5</h4>
                        <h8><i>3.5. feladat I [Víz-gőz-jég] Készítsünk programot, amely bekéri a víz hőmérsékletét, majd
                                eldönti, hogy az milyen halmazállapotú. A halmazállapot lehet folyékony, gőz, vagy jég.
                            </i></h8>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <h5 class="m-2">Adatbekérő form</h5>
                        <div class="card-body">
                            <h4 class="card-title">Víz hőmérséklet</h4>
                            <form action="" method="GET">
                                <h8><i>Víz hőmérséklet</h8></i>
                                <input class="form-control mb-2" type="number" name="vizhomerseglet" id="vizhomerseglet"
                                    placeholder="C°">
                                <button class="btn btn-secondary" name="submitVIZ">Küldés</button>
                                <?php
                                if (isset($_GET['submitVIZ'])) {
                                    if (is_numeric($_GET['vizhomerseglet'])) {
                                        if (isset($_GET['vizhomerseglet'])) {
                                            $vizhomersegletV = $_GET['vizhomerseglet'];
                                        }
                                    }
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                    <div class="card-body">
                            <h5>Víz halmatálapota: </h5>
                            <?php
                            if (isset($vizhomersegletV)) {
                                if ($vizhomersegletV > 100) {
                                    echo "Gőz";
                                } elseif ($vizhomersegletV < 100 && $vizhomersegletV > 0) {
                                    echo "Folyékony";
                                }
                                else if (0 > $vizhomersegletV) {
                                    echo "Jég";
                                }
                            }
                           
                            ?>
                            <br>
                            <br>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row mt-3 text-center">
                    <div class="col">
                        <h4>Feladat 3.6</h4>
                        <h8><i>3.6. feladat I [Pontok távolsága] Írjunk programot, amely bekéri két pont koordinátáit, majd kiszámolja azok távolságát
                            </i></h8>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
<div class="col-6">
    <div class="card">
        <h5 class="m-2">Adatbekérő form</h5>
        <div class="card-body">
            <h4 class="card-title">Pontok távolsága</h4>
            <form action="" method="GET">
                <h8><i>A.pont</h8></i>
                <input class="form-control mb-2" type="number" name="Apont" id="Apont" placeholder="cm">
                <h8><i>B.pont</h8></i>
                <input class="form-control mb-2" type="number" name="Bpont" id="Bpont" placeholder="cm">
                <h8><i>C.pont</h8></i>
                <input class="form-control mb-2" type="number" name="Cpont" id="Cpont" placeholder="cm">
                <button class="btn btn-secondary" name="submitPontok">Küldés</button>
                <?php
                if (isset($_GET['submitPontok'])) {
                    if (is_numeric($_GET['Apont']) && is_numeric($_GET['Bpont']) && is_numeric($_GET['Cpont'])) {
                        if (isset($_GET['Apont']) && isset($_GET['Bpont']) && isset($_GET['Cpont'])) {
                            $x = $_GET['Apont'];
                            $y = $_GET['Bpont'];
                            $z = $_GET['Cpont'];
                        }
                    }
                }
                ?>
            </form>
        </div>
    </div>

</div>
<div class="col-6">
                    <div class="card">
                    <div class="card-body">
                            <h5>Pontok távolsága: </h5>
                            <?php
                            if (isset($x) && isset($y)) {
                                echo round(sqrt(($x * 1 - $x * 2) * ($x * 1 - $x * 2) + ($y * 2 - $y * 1) * ($y * 2 - $y * 1)), 2) . " cm";
                            }
                            ?>
                            <br>
                            <br>
                        </div>
        </div>
    </div>
</div>
                

            <div class="row">
                <div class="row mt-3 text-center">
                    <div class="col">
                        <h4>Feladat 3.7</h4>
                        <h8><i>3.7. feladat [Ponthatárok] Írjon egy programot, ami leosztályoz egy maximálisan
100 pontos dolgozatot az 50, 65, 80, 90 ponthatárok szerint! A határérték a jobb jegyhez
tartozik. Ha a pontszám negatív vagy száznál nagyobb, akkor a program írja ki, hogy
hibás az adat!
                            </i></h8>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <h5 class="m-2">Adatbekérő form</h5>
                        <div class="card-body">
                            <h4 class="card-title">Pontszám</h4>
                            <form action="" method="GET">
                                <h8><i>Pontszám: </h8></i>
                                <input class="form-control mb-2" type="number" name="pont" id="pont"
                                    placeholder="Pontszám">
                                <button class="btn btn-secondary" name="submitPontszam">Küldés</button>
                                <?php
                                if (isset($_GET['submitPontszam'])) {
                                    if (is_numeric($_GET['pont'])) {
                                        if (isset($_GET['pont'])) {
                                            $pontszamgetV = $_GET['pont'];
                                        }
                                    }
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                    <div class="card-body">
                            <h5>Jegy: </h5>
                            <?php
                            if (isset($pontszamgetV)) {
                                if ($pontszamgetV > 100) {
                                    echo "Max 100pont lehet";
                                }
                                else if ($pontszamgetV <= 100 && $pontszamgetV >= 90) {
                                    echo "5ös";
                                } 
                                else if ($pontszamgetV <= 89 && $pontszamgetV >= 80) {
                                    echo "4es";
                                } 
                                else if ($pontszamgetV <= 79 && $pontszamgetV >= 65) {
                                    echo "3as";
                                } 
                                else if ($pontszamgetV <= 64 && $pontszamgetV >= 50) {
                                    echo "2es";
                                } 
                                else if ($pontszamgetV <= 49 && $pontszamgetV >= 0) {
                                    echo "1es";
                                } 
                                else {
                                    echo "Vagy minusz vagy valami nemjó";   
                                }
                            }                         
                            ?>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            

<!-- ************************************************************************************************************************* -->
            <div class="row">
                <div class="row mt-3 text-center">
                    <div class="col">
                        <h4>Feladat 3.8</h4>
                        <h8><i>3.8. feladat [Mezőgazdasági jóslás] Készítsen konzolos alkalmazást, amely
mezőgazdasági jóslást végez. A program kérje be az elvetett búza mennyiségét tonnában.
Ez alapján számolja ki egy véletlenszerűen generált szorzóval (5-15) a várható hozamot,
és írja ki a mennyiségét. A szorzó alapján elemezze és írja ki, hogy milyen év várható:
átlag alatti (5-8), átlagos év (9-12), átlag feletti (13-15).
                            </i></h8>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <h5 class="m-2">Adatbekérő form</h5>
                        <div class="card-body">
                            <h4 class="card-title">Mezőgazdasági jóslás</h4>
                            <form action="" method="GET">
                                <h8><i>Búza tonnában: </h8></i>
                                <input class="form-control mb-2" type="number" name="buza" id="buza"
                                    placeholder="Tonna">
                                <button class="btn btn-secondary" name="submitBuza">Küldés</button>
                                <?php
                                if (isset($_GET['submitBuza'])) {
                                    if (is_numeric($_GET['buza'])) {
                                        if (isset($_GET['buza'])) {
                                            $buzaGetV = $_GET['buza'];
                                        }
                                    }
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                    <div class="card-body">
                            <h5>Mezőgazdasági jóslás: </h5>
                            <?php
                            $randomSzam = random_int(5,15);
                            $josoltOsszeg = $randomSzam * $buzaGetV;
                            if (isset($buzaGetV)) {
                               if ($josoltOsszeg >= 5 && $josoltOsszeg <= 8) {
                                    echo "Jósolt szám" . $josoltOsszeg . "<br>";
                                    echo "Átlag alatti";
                               }
                               else if ($josoltOsszeg >= 9 && $josoltOsszeg <= 12) {
                                    echo "Jósolt szám" . $josoltOsszeg . "<br>";
                                    echo "Átlagos";
                                }
                                else if ($josoltOsszeg >= 13 && $josoltOsszeg <= 15) {
                                    echo "Jósolt szám" . $josoltOsszeg . "<br>";
                                    echo "Átlag feletti";
                                }
                                else {
                                    if (isset($randomSzam) && isset($josoltOsszeg)) {
                                        echo "Hiba a számolásban";
                                    }
                                }
                            }                         
                            ?>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
<!-- ************************************************************************************************************************* -->
<div class="row">
                <div class="row mt-3 text-center">
                    <div class="col">
                        <h4>Feladat 3.9</h4>
                        <h8><i>3.9. feladat [Respirációs kvóciens kiszámítása] Készítsünk az egészség megőrzéséhez használható programot. A programunk kérje be a kilégzéskor keletkező CO2
és O2 mennyiségét! Számoljuk ki a respirációs kvócienst!
                            </i></h8>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <h5 class="m-2">Adatbekérő form</h5>
                        <div class="card-body">
                            <h4 class="card-title">Respirációs kvóciens kiszámítása</h4>
                            <form action="" method="GET">
                                <h8><i>CO2 kibocsátás: </h8></i>
                                <input class="form-control mb-2" type="number" name="CO2" id="CO2"
                                    placeholder="Tonna">
                                    <h8><i>O2 Kibocsátáts: </h8></i>
                                <input class="form-control mb-2" type="number" name="O2" id="O2"
                                    placeholder="Tonna">
                                <button class="btn btn-secondary" name="submitBuza">Küldés</button>
                                <?php
                                if (isset($_GET['submitBuza'])) {
                                    if (is_numeric($_GET['buza'])) {
                                        if (isset($_GET['buza'])) {
                                            $buzaGetV = $_GET['buza'];
                                        }
                                    }
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                    <div class="card-body">
                            <h5>Mezőgazdasági jóslás: </h5>
                            <?php
                            $randomSzam = random_int(5,15);
                            $josoltOsszeg = $randomSzam * $buzaGetV;
                            if (isset($buzaGetV)) {
                               if ($josoltOsszeg >= 5 && $josoltOsszeg <= 8) {
                                    echo "Jósolt szám" . $josoltOsszeg . "<br>";
                                    echo "Átlag alatti";
                               }
                               else if ($josoltOsszeg >= 9 && $josoltOsszeg <= 12) {
                                    echo "Jósolt szám" . $josoltOsszeg . "<br>";
                                    echo "Átlagos";
                                }
                                else if ($josoltOsszeg >= 13 && $josoltOsszeg <= 15) {
                                    echo "Jósolt szám" . $josoltOsszeg . "<br>";
                                    echo "Átlag feletti";
                                }
                                else {
                                    if (isset($randomSzam) && isset($josoltOsszeg)) {
                                        echo "Hiba a számolásban";
                                    }
                                }
                            }                         
                            ?>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
<!-- ************************************************************************************************************************* -->





        </div>
    </div>
</body>

</html>