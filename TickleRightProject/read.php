<?php
if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    require_once "config.php";

    $sql = "SELECT * FROM detail WHERE id = ?";

    if ($stmt = mysqli_prepare($conn, $sql)) {

        mysqli_stmt_bind_param($stmt, "i", $param_id);

        $param_id = trim($_GET["id"]);

        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                $name = $row["name"];
                $phone = $row["phone"];
                $email = $row["email"];
                $address = $row["address"];
            } else {

                header("location: error.php");
                exit();
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($conn);
} else {
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">View Record</h1>
                    <div class="form-group">
                        <label>Name</label>
                        <p>
                            <b>
                                <?php echo $row["name"]; ?>
                            </b>
                        </p>
                    </div>

                    <div class="form-group">
                        <label>Phone</label>
                        <p>
                            <b>
                                <?php echo $row["phone"]; ?>
                            </b>
                        </p>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <p>
                            <b>
                                <?php echo $row["email"]; ?>
                            </b>
                        </p>
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <p>
                            <b>
                                <?php echo $row["address"]; ?>
                            </b>
                        </p>
                    </div>

                    <p>
                        <a href="index.php" class="btn btn-primary">Back</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>