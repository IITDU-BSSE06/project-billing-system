<?php
session_start();

if (isset($_SESSION['email'])) {

} else {
    echo '<script type="text/javascript">location.href = "access_denied.php";</script>';
}

?>
<!DOCTYPE html>
<html>
<head>
    <?php include('include.php');?>
    <title>Select a Program for new Bill</title>
</head>


<body>
<div style="width: 1200px; margin: 0 auto;">
    <?php
    include ('header.php');
    ?>
    <div class="row" style="height: 550px;">
        <?php include('home_menu.php') ?>
        <div class="col-sm-7" style=" border-left: 1px solid #BBCDBC; border-right: 1px solid #BBCDBC; min-height: 550px;">
            <h2 style="color: #4D574E;">Select a Program for new Bill</h2>
            <form action="create_bill.php" method="post">
                <div class="form-group">
                    <label for="programs">Programs</label>
                    <select id="programs" class="form-control" name="program_name">
                    </select>
                    <?php
                    require ('db_config.php');
                    $sql = "SELECT * FROM program";
                    $result = $conn->query($sql);

                    while ($row = $result->fetch_assoc()) {
                        $program_name = $row["program_name"];
                        $_SESSION["program_name"] = $program_name;
                        echo
                        "<script>
						var row = document.getElementById('programs');
						var col = document.createElement('OPTION');
						col.innerHTML = '$program_name';
						row.append(col);
					</script>";
                    }
                    mysqli_close($conn);
                    ?>
                </div>
                <button type="submit" style="margin:auto; display:block;" class="btn btn-primary" id="selected_program">Next</button>
            </form>
        </div>
        <div class="col-sm-3">
            <?php
            include ('show_recent_bills.php');
            ?>
        </div>
    </div>
    <?php include ('footer.php');?>
    
</body>
</html>