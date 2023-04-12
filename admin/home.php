<?php require("./layout/db.php"); ?>
<?php require("./layout/Header.php"); ?>
<?php require("./layout/Navbar.php"); ?>
<div class="pagetitle">
    <h1>Dashboard</h1>
</div>

<div class="row">
    <div class="col-4">
        <div class="card info-card sales-card">
            <div class="card-body bg-primary rounded text-white">
                <h5 class="card-title text-white">Total Cards</h5>

                <div class="d-flex align-items-center">
                <div class="ps-3">
                    <h6>
                        <?php
                        $result = $conn->query("SELECT * FROM card");
                        echo($result->num_rows);
                        ?>
                    </h6>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card info-card sales-card">
            <div class="card-body bg-success rounded text-white">
                <h5 class="card-title text-white">Total Active Cards</h5>

                <div class="d-flex align-items-center">
                <div class="ps-3">
                    <h6>
                        <?php
                        $result = $conn->query("SELECT * FROM card WHERE status='ACTIVE'");
                        echo($result->num_rows);
                        ?>
                    </h6>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card info-card sales-card">
            <div class="card-body bg-warning rounded text-white">
                <h5 class="card-title text-white">Total Inactive Cards</h5>

                <div class="d-flex align-items-center">
                <div class="ps-3">
                    <h6>
                        <?php
                        $result = $conn->query("SELECT * FROM card WHERE NOT status='ACTIVE'");
                        echo($result->num_rows);
                        ?>
                    </h6>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php require("./layout/Footer.php"); ?>