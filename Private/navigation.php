<aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
    <i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
    <div class="sidebar-header d-flex justify-content-center gap-2 align-items-center pe-3 py-4">
        <a href="../index.php">
            <img class="img-fluid" width="70" src="../images/db-icon2.png" alt="" />
            <div class="ms-2">
                <h5 class="fs-6 mb-0">
                    <a class="text-decoration-none" href="#">DB Projekt</a>
                </h5>
                <p class="mt-1 mb-0">By Antonio & Mary</p>
            </div>
        </a>
    </div>
    <form class="search position-relative text-center px-4 py-3 mt-2 text-white" role="search" action="<?=$_SERVER['PHP_SELF']?>">
        <input
                type="text"
                class="form-control text-white w-100 search bg-transparent"
                placeholder="Search here"
                name="search"
        />
        <i class="fa fa-search position-absolute d-block fs-6"></i>
    </form>

    <?php
    // Überprüfe, ob eine Suchanfrage gesendet wurde
    if (isset($_GET['search'])) {
        $search = $_GET['search'];

        // Führe die SQL-Abfrage mit dem Suchbegriff aus
        $query = "SELECT * FROM Personen WHERE Name LIKE '%$search%'";
        $result = mysqli_query($con, $query);

        // Zeige die Suchergebnisse an
        if (mysqli_num_rows($result) > 0) {
            echo "<div class='search-results ms-5 text-white'>";
            while ($row = mysqli_fetch_assoc($result)) {
                // Zeige die gefundenen Datensätze an
                echo "<a href=". $row['Name'] .  ">" . $row['Name'] . "</a> <BR>";
            }
            echo "</div>";
        } else {
            echo "<p class='text-white ms-5'>Keine Ergebnisse gefunden.</p>";
        }
    }
    ?>


    <ul class="categories list-unstyled">
        <li class="has-dropdown">
            <i class="uil-bag"></i><a href="#"><b>Tabellen</b></a>
            <ul class="sidebar-dropdown list-unstyled">
                <li class="data" id="data-nav-link">
                    <i class="uil-setting"></i><a href="#"><b>Person Tabelle</b></a>
                </li>
                <li class="data" id="movie-nav-link">
                    <i class="uil-setting"></i><a href="#"><b>Filme Tabelle</b></a>
                </li>
                <li class="data" id="songs-nav-link">
                    <i class="uil-setting"></i><a href="#"><b>Songs Tabelle</b></a>
                </li>
            </ul>
        </li>

    </ul>
</aside>

<section id="wrapper">
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid mx-2 mt-2">
            <div class="navbar-header">
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#toggle-navbar"
                    aria-controls="toggle-navbar"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <i class="uil-bars text-white"></i>
                </button>
                <a class="navbar-brand" href="#"
                >BS<span class="main-color">Projekt</span></a
                >
            </div>
            <div class="collapse navbar-collapse" id="toggle-navbar">
                <ul class="navbar-nav ms-auto ">
                 
                        <a  class ="text-decoration-none text-dark"
                            href = "Private/login.php"
                        >
                            Login
                        </a>
                    

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i
                                data-show="show-side-navigation1"
                                class="uil-bars show-side-btn"
                            ></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>