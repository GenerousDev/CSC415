<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-3 m-0 border-0 bd-example bd-example-row">
    <?php include "../php/submitproject.php"; ?>
    <label class="form-label d-flex justify-content-center mt-2">SUBMITTED PROJECTS DETAILS</label>
    <?php if (isset($_GET['success'])) { ?>
        <div class="alert alert-success" role="alert">
            <?php echo $_GET['success']; ?>
        </div>
    <?php } ?>
    <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']; ?>
        </div>
    <?php } ?>
    <div class="row g-0 text-center">
        <div class="col-6 col-md-4 label label-default">MATRIC NUMBER</div>
        <div class="col-sm-6 col-md-8">ASSIGN LECTURER NAME AND ID</div>
    </div>
    <div class="row g-0 text-center">

        <?php
        $i = 0;
        while ($rows = mysqli_fetch_assoc($result)) {
            $i++;
        ?>
            <div class="col-6 col-md-4 label label-default">
                <?php echo $rows['matricnumber']; ?>
            </div>
            <div class="col-sm-4=6 col-md-8">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        SELECT EXAMINER
                    </button>
                    <ul class="dropdown-menu">
                        <?php
                        include "../php/readexaminer.php";
                        $j = 0;
                        while ($values = mysqli_fetch_assoc($results)) {
                            $j++;
                        ?>
                            <li><a class="dropdown-item" href="../php/setExaminer.php?matricnumber=<?= $rows['matricnumber'] ?>&examinerid=<?= $values['id'] ?>"><?php echo $values['fullname']; ?><?php echo $values['id']; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php } ?>

    </div>
    <br />

    <!-- End Example Code -->
</body>

</html>