<!--    daten-->

<?php
// Get the current URL
$currentUrl = $_SERVER['REQUEST_URI'];

// Check if the URL is "https://bs-db-p.ddev.site/Michael"
if ($currentUrl !== "/Michael") {
    // Hide the sections by setting the "display" style to "none"
    $personTableStyle = "display: none;";
    $movieTableStyle = "display: none;";
    $songsTableStyle = "display: none;";
} else {
    // URL matches, show the sections
    $personTableStyle = "";
    $movieTableStyle = "";
    $songsTableStyle = "";
}
?>

<div class="container d-none" id="person-table">
    <div class="row">
        <div class="col">
            <div class="text-white">
                <div class="text-white">
                    <h2 class="display-6 mt-4 mb-4 text-center"> Personen </h2>
                </div>
                <div class="card-body">
                    <table id="data-table" class="table table-bordered text-center">
                        <tr class="text-white bg-purple">
                            <td>Personen</td>
                            <td>Name</td>
                            <td>Geburtsdatum</td>
                            <td>Networth</td>
                            <td>Bild</td>
                        </tr>

                        <?php
                        // Query to select rows from the Personen table
                        $query = "SELECT * FROM Personen";
                        $result = mysqli_query($con, $query);

                        if ($result) {
                            $row_count = 0;
                            while ($row = mysqli_fetch_assoc($result)) {
                                $row_count++;
                                ?>
                                <!--kann man gebrauchen!-->
                                <tr class=" text-white <!-- <?php?> -->">
                                    <td><?php echo $row['PersonenID']; ?></td>
                                    <td><?php echo $row['Name']; ?></td>
                                    <td><?php echo $row['Geburtsdatum']; ?></td>
                                    <td><?php echo $row['Networth']; ?></td>
                                    <td class="image-col"><img src="images/<?=$row['bild']?>" class="card-img-top personen-img"></td>
                                  
                                </tr>
                                <?php
                            }
                        } else {
                            echo "Failed to retrieve data from the database.";
                        }
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!--    daten-->

<div class="container d-none" id="movie-table">
    <div class="row">
        <div class="col">
            <div class="text-white">
                <div class="text-white">
                    <h2 class="display-6 mt-4 mb-4 text-center"> Filme </h2>
                </div>
                <div class="card-body">
                    <table id="data-table" class="table table-bordered text-center">
                        <tr class=" text-white bg-purple">
                            <td>FilmID</td>
                            <td>Titel</td>
                            <td>Veröffentlichungsdatum</td>
                            <td>Bild</td>
                        </tr>

                        <?php
                        // Query to select rows from the Personen table
                        $query = "SELECT * FROM Filme";
                        $result = mysqli_query($con, $query);

                        if ($result) {
                            $row_count = 0;
                            while ($row = mysqli_fetch_assoc($result)) {
                                $row_count++;
                                ?>
                                <tr class=" text-white <!-- <?php?> -->">
                                    <td><?php echo $row['ID']; ?></td>
                                    <td><?php echo $row['Name']; ?></td>
                                    <td><?php echo $row['release_year']; ?></td>
                                    <td class="image-col"><img src="<?=$row['Charakter_bild']?>" class="card-img-top filme-img"></td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "Failed to retrieve data from the database.";
                        }
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container d-none" id="songs-table">
    <div class="row">
        <div class="col">
            <div class="text-white">
                <div class="text-white">
                    <h2 class="display-6 mt-4 mb-4 text-center"> Songs </h2>
                </div>
                <div class="card-body">
                    <table id="data-table" class="table table-bordered text-center">
                        <tr class=" text-white bg-purple">
                            <td>SongID</td>
                            <td>Titel</td>
                            <td>Veröffentlichungsdatum</td>
                            <td>Song Cover</td>
                        </tr>

                        <?php
                        // Query to select rows from the Personen table
                        $query = "SELECT * FROM Songs";
                        $result = mysqli_query($con, $query);

                        if ($result) {
                            $row_count = 0;
                            while ($row = mysqli_fetch_assoc($result)) {
                                $row_count++;
                                ?>
                                <!--kann man gebrauchen!-->
                                <tr class=" text-white <!-- <?php /*if ($row_count > 10) { echo 'd-none'; } */?> -->">
                                    <td><?php echo $row['ID']; ?></td>
                                    <td><?php echo $row['Title']; ?></td>
                                    <td><?php echo $row['release_date']; ?></td>
                                    <td class="image-col"><img src="<?=$row['Cover']?>" class="card-img-top personen-img"></td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "Failed to retrieve data from the database.";
                        }
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>