<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-3 m-0 border-0 bd-example bd-example-row">
    <?php
    include "../php/detailsstudent.php";
    $i = 0;
    while ($rows = mysqli_fetch_assoc($result)) {
        $i++;
    ?>
        <label class="form-label d-flex justify-content-center">Student Personal Details</label>
        <div class="row g-0 text-center">
            <div class="col-6 col-md-4 label label-default">Full Name:</div>
            <div class="col-sm-6 col-md-8"><?php echo $rows['fullname']; ?></div>
        </div>
        <br />
        <div class="row g-0 text-center">
            <div class="col-6 col-md-4 label label-default">Matric Number:</div>
            <div class="col-sm-6 col-md-8"><?php echo $rows['matricnumber']; ?></div>
        </div>
        <br />
        <div class="row g-0 text-center">
            <div class="col-6 col-md-4 label label-default">Email:</div>
            <div class="col-sm-6 col-md-8"><?php echo $rows['email']; ?></div>
        </div>

    <?php } ?>
    <label class="form-label d-flex justify-content-center mt-5">Student Project Score</label>
    <div class="row g-0 text-center">
        <div class="col-6 col-md-4 label label-default">TOPICS</div>
        <div class="col-sm-6 col-md-8">SCORE</div>
    </div>
    <?php
    include "../php/getscore.php";
    $i = 0;
    while ($rows = mysqli_fetch_assoc($result)) {
        $i++;
    ?>
        <div class="row g-0 text-center">
            <div class="col-6 col-md-4 label label-default">Analysis:</div>
            <div class="col-sm-6 col-md-8"><?php echo $rows['analysisScore']; ?></div>
        </div>
        <br />
        <div class="row g-0 text-center">
            <div class="col-6 col-md-4 label label-default">Methodology:</div>
            <div class="col-sm-6 col-md-8"><?php echo $rows['methodologyScore']; ?></div>
        </div>
        <br />
        <div class="row g-0 text-center">
            <div class="col-6 col-md-4 label label-default">Literature:</div>
            <div class="col-sm-6 col-md-8"><?php echo $rows['literatureScore']; ?></div>
        </div>
        <div class="row g-0 text-center">
            <div class="col-6 col-md-4 label label-default">Abstract:</div>
            <div class="col-sm-6 col-md-8"><?php echo $rows['abstractScore']; ?></div>
        </div>
        <br />
        <div class="row g-0 text-center">
            <div class="col-6 col-md-4 label label-default">Conclusion:</div>
            <div class="col-sm-6 col-md-8"><?php echo $rows['conclusionScore']; ?></div>
        </div>
        <div class="row g-0 text-center">
            <div class="col-6 col-md-4 label label-default">Total:</div>
            <div class="col-sm-6 col-md-8"><?php echo $rows['conclusionScore'] + $rows['abstractScore'] + $rows['literatureScore'] + $rows['methodologyScore'] + $rows['analysisScore']; ?></div>
        </div>
    <?php } ?>
    <!-- End Example Code -->
</body>

</html>