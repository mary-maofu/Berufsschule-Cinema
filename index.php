0
<?php
require_once('includes/db.php');
$result = mysqli_query($con, "SELECT TABLE_NAME FROM information_schema.tables WHERE TABLE_SCHEMA = 'db'");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
          />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
          />
      <link rel="stylesheet" href="Styles/style.css" />
      <title>BS Projekt</title>
  </head>
  <body>

  <?php include 'Private/navigation.php'; ?>

    <div class="main-page" id="main-page">
      <div class="p-4">
        <div class="welcome">
          <div class="content rounded-3 p-3">
            <h1 class="fs-3">Wilkommen</h1>
            <p class="mb-0">Hallo willkommen zu unserer Datenbank oberfläche!</p>
          </div>
        </div>

        <section class="statistics mt-4">
          <div class="row">
            <div class="col-lg-4">
              <div
                class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3"
>
                <i class="uil-envelope-shield fs-2 text-center bg-blue rounded-circle"></i>

                 <!-- shows amount of people in the db-->
                <div class="ms-3">
                  <div class="d-flex align-items-center">
                    <h3 class="mb-0">
                        <?php
                        // Specify the table name you want to count rows from
                        $tableName = 'Personen';

                        // Query to count the rows in the specified table
                        $query = "SELECT COUNT(*) as rowCount FROM $tableName";
                        $result = mysqli_query($con, $query);

                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $rowCount = $row['rowCount'];
                            echo " $rowCount";
                        } else {
                            echo "Failed to retrieve row count";
                        }

                        ?>
                    </h3>
                    <span class="d-block ms-2">Personen</span>
                  </div>
                  <p class="fs-normal mb-0">Personen in der Datenbank</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
                <i class="uil-file fs-2 text-center bg-pink rounded-circle"></i>
              <!--    shows the amount of tables in the db-->
                <div class="ms-3">
                  <div class="d-flex align-items-center">
                    <h3 class="mb-0">
                        <?php
                        $result = mysqli_query($con, "SELECT TABLE_NAME FROM information_schema.tables WHERE TABLE_SCHEMA = 'db'");
                        $rowCount = mysqli_num_rows($result); ?>
                        <?php echo $rowCount; ?>
                    </h3>
                    <span class="d-block ms-2">Tabellen</span>
                  </div>
                  <p class="fs-normal mb-0">Tabellen in der Datenbank</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box d-flex rounded-2 align-items-center p-3">
                <i
                  class="uil-users-alt fs-2 text-center bg-yellow rounded-circle"
></i>
                <div class="ms-3">
                  <div class="d-flex align-items-center">
                    <h3 class="mb-0">2</h3>
                    <span class="d-block ms-2">Kreatoren</span>
                  </div>
                  <p class="fs-normal mb-0">Antonio & Mary</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="admins mt-4">
          <div class="row">
            <div class="col-md-6">
              <div class="box d-flex column-gap-3">
                <!-- <h4>Admins:</h4> -->
                <div class="admin d-flex align-items-center rounded-2 p-3 mb-4 col-12">
                  <div class="img">
                    <img
                      class="img-fluid rounded-pill"
                      width="100"
                      height="100"
                      src="images/mary.db.jpg"
                      alt="admin"
                          />
                  </div>
                  <div class="ms-3">
                    <h3 class="fs-5 mb-1">Mary</h3>
                    <p class="mb-0">
                        AI Generated Profile picture of an admin
                    </p>
                  </div>
                </div>
                <div class="admin d-flex align-items-center rounded-2 p-3 mb-4 col-12">
                  <div class="img">
                    <img
                      class="img-fluid rounded-pill"
                      width="100"
                      height="100"
                      src="images/antonio-db.jpg"
                      alt="admin"
                          />
                  </div>
                  <div class="ms-3">
                    <h3 class="fs-5 mb-1">Antonio</h3>
                    <p class="mb-0">
                        AI Generated Profile picture of an admin
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="statis  text-center">

            <div class="row">
                <div class="p-4">
                    <div class="welcome">
                        <div class="content rounded-3 p-3">
                            <h1 class="fs-3">Was wurde benutzt?</h1>
                            <p class="mb-0">Hier sind unsere Programmiersprachen,Applikationen,Technologien usw. die benutzt wurden aufgelistet :)</p>
                        </div>
                    </div>
            </div>

          <div class="row mt-4">
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
              <div class="box bg-blue p-5">
                <i class="uil-eye"></i>
                <h4>PHP</h4>
                <p class="lead">DB Connection & Oberfläche</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
              <div class="box bg-pink p-5">
                <i class="uil-user"></i>
                <h4>CSS/SCSS</h4>
                <p class="lead">Styles der Oberfläche</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
              <div class="box bg-yellow  p-4 pt-5">
                <i class="uil-shopping-cart"></i>
                <h4>SQL/Phpmyadmin</h4>
                <p class="lead">Datenbank Logik</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="box bg-success p-5">
                <i class="uil-feedback"></i>
                <h4>Javascript</h4>
                <p class="lead">Funktionen der Oberfläche</p>
              </div>
            </div>
          </div>
              <div class="row mt-5">
              <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <div class="box bg-success p-5">
                      <i class="uil-eye"></i>
                      <h4>DDEV</h4>
                      <p class="lead">Lokale entwicklung</p>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <div class="box bg-yellow p-5">
                      <i class="uil-user"></i>
                      <h4>AI</h4>
                      <p class="lead">Bilder Generator</p>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                  <div class="box bg-pink p-4 pt-5">
                      <i class="uil-shopping-cart"></i>
                      <h4>Phpstorm & VSCode</h4>
                      <p class="lead">Entwicklungsumgebung</p>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="box bg-blue p-5">
                      <i class="uil-feedback"></i>
                      <h4>Git & Github</h4>
                      <p class="lead">Funktionale Zusammenarbeit</p>
                  </div>
              </div>
          </div>
          </div>
        </section>
      </div>
    </div>



  <?php include 'Private/tables.php'; ?>
<?php include 'Private/search.php'; ?>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
          ></script>
    <script src="Scripts/script.js"></script>
          <script src="Scripts/functionality.js"></script>
  </body>
</html>
