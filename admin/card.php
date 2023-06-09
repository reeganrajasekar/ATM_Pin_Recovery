<?php require("./layout/Header.php"); ?>
<?php require("./layout/Navbar.php"); ?>
<?php require("./layout/db.php"); ?>
<div class="pagetitle container">
    <div style="display:flex;justify-content:space-between">
        <h1>ATM Cards</h1>
        <button class="btn btn-primary" style="background-color: #012970;" data-bs-toggle="modal" data-bs-target="#myModal">Add</button>
    </div>
</div>

<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" style="color:#012970">Add User</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <form onsubmit="document.getElementById('loader').style.display='block'" enctype="multipart/form-data" action="/admin/action/user.php" method="post">
                <div class="form-floating mb-3 ">
                    <input required type="text" class="form-control"  name="name" placeholder="Hospital Name">
                    <label>Name</label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input required type="number" class="form-control"  name="mobile" placeholder="Mobile">
                    <label>Mobile</label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input required type="number" min="1000000000000000" max="9999999999999999" class="form-control"  name="no" placeholder="ATM No">
                    <label>ATM NO</label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input required type="password" class="form-control"  name="pin" placeholder="PIN">
                    <label>PIN</label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input required type="file"  class="form-control"  name="file" placeholder="File">
                    <label>Fingureprint</label>
                </div>
                <div style="display:flex;justify-content:flex-end">
                    <button class="btn  w-25" style="background-color:#012970;color:#fff">Add</button>
                </div>
            </form>
        </div>

        </div>
    </div>
</div>

<div class="table-responsive">        
    <table class="table table-striped table-bordered" style="background-color:white">
        <thead style="text-align:center">
            <tr>
                <th>#</th>
                <th>ATM No</th>
                <th>User Name</th>
                <th>Mobile</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $result = $conn->query("SELECT * FROM card ORDER BY id DESC");
            if($result->num_rows > 0){
                $i=0;
                while($row=$result->fetch_assoc()){
                    $i++;
                    ?>
                        <tr>
                            <td style="text-align:center"><?php echo($i) ?></td>
                            <td><?php echo($row["no"]) ?></td>
                            <td><?php echo($row["name"]) ?></td>
                            <td><?php echo($row["mobile"]) ?></td>
                            <td><?php echo($row["status"]) ?></td>
                            <td class="text-center" style="display:flex;justify-content:space-around">
                                <a href="/admin/atm.php?id=<?php echo($row["id"]) ?>" target="_blank" class="btn btn-secondary">View</a>
                                <form action="/admin/action/delete.php" method="get">
                                    <input type="hidden" name="id" value="<?php echo($row["id"]) ?>">
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php
                }
            }else{
            ?>
            <tr>
                <td style="text-align:center" colspan="6">Nothing Found</td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php require("./layout/Footer.php"); ?>