<?php
session_start();
if (isset($_SESSION['email'])) {

} else {
    echo '<script type="text/javascript">location.href = "access_denied.php";</script>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create new program</title>
    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../css/bootstrap/bootstrap-theme.min.css.map" rel="stylesheet">
    <link href="../css/body.css" rel="stylesheet">

    <script src="../js/jquery/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="../js/jquery/jquery.PrintArea.js" type="text/javascript"></script>
    <script src="../js/bootstrap/bootstrap.min.js" type="text/javascript"></script>

</head>
<body>
<div style="width: 1200px; margin: 0 auto;">
    <?php
    include_once ('header.php');
    ?>
    <div class="row" style="height: 550px;">

        <?php include ('home_menu.php');?>

        <div class="col-sm-7" style=" border-right: 1px solid #BBCDBC; border-left: 1px solid #BBCDBC;">
            <h2 style="color: #4D574E; text-align: center">Create a new Program</h2>
            <div class="form-group">
                <form name="program" method="post" action="programs.php">
                    <div class="form-group">
                        <label>Program</label>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td><input type="text" class="form-control" placeholder="Name of the Program" id="program_name" name="program_name" required></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="program_name">Category Criteria Names</label>
                        <div class="table-responsive">
                            <table class="table" id="dynamic_field_for_criteria">
                                <tr>
                                    <td><input type="text" name="criteria[]" placeholder="Enter Criteria Name" class="form-control name_list" required/></td>
                                    <td><button type="button" name="add_criteria" id="add_criteria" class="btn btn-success">Add More</button></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Category Names</label>
                        <div class="table-responsive">
                            <table class="table" id="dynamic_field_for_category">
                                <tr>
                                    <td><input type="text" name="categories[]" placeholder="Enter Category Name" class="form-control name_list" required/></td>
                                    <td><input type="text" name="expressions[]" placeholder="Enter expression" class="form-control name_list" required/></td>
                                    <td><button type="button" name="add_categories" id="add_categories" class="btn btn-success">Add More</button></td>

                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" id="submit" name="submit" class="btn btn-info" value="Submit">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-3">
            <?php
            include ('show_recent_bills.php');
            ?>
        </div>
    </div>
    <?php
    include_once ('footer.php');
    ?>
</body>
</html>


<script type="text/javascript">
    $(document).ready(function() {
        var i = 1;
        $('#add_categories').click(function () {
            i++;
            $('#dynamic_field_for_category').append('<tr id="row_category' + i + '"><td><input type="text" name="categories[]" placeholder="Enter Category Name" class="form-control name_list" required/></td><td><input type="text" name="expressions[]" placeholder="Enter expression" class="form-control name_list" required/></td><td><button type="button" name="remove_category" id="' + i + '" class="btn btn-danger btn_remove_category">Remove</button></td></tr>');
        });
        $(document).on('click', '.btn_remove_category', function () {
            var button_id = $(this).attr("id");
            $('#row_category' + button_id + '').remove();
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        var j=1;
        $('#add_criteria').click(function(){
            j++;
            $('#dynamic_field_for_criteria').append('<tr id="row1'+j+'"><td><input type="text" name="criteria[]" placeholder="Enter Criteria Name" class="form-control name_list" required/></td><td><button type="button" name="remove_criteria" id="'+j+'" class="btn btn-danger btn_remove_criteria">Remove</button></td></tr>');
        });
        $(document).on('click', '.btn_remove_criteria', function(){
            var button_id = $(this).attr("id");
            $('#row1'+button_id+'').remove();
        });
    });
</script>
