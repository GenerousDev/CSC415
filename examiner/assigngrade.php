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
    <?php include "../php/setscore.php"; ?>
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
        <div class="col-sm-9 col-md-10"> PROJECT SECTION & PROJECT SECTION SOLUTION</div>
        <div class="col-sm-1 col-md-2">GRADE BY SELECTING A DROPDOWN</div>
    </div>
    <div class="row g-0 text-center">

        <?php
        $i = 0;
        while ($rows = mysqli_fetch_assoc($result)) {
            $i++;
        ?>
            <div class="col-11 col-md-10 label label-default">
                Analysis: <br /> <?php echo $rows['analysis']; ?>
                <?= $rows['matricnumber'] ?>
            </div>

            <div class="col-sm-1 col-md-2">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        SELECT GRADE
                    </button>
                    <ul class="dropdown-menu">

                        <?php
                        include "../php/usegreadescale.php";
                        $j = 0;
                        while ($values = mysqli_fetch_assoc($result)) {
                            $j++;
                        ?>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&analysisScore=<?= $values['gradeA'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade A</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&analysisScore=<?= $values['gradeB'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade B</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&analysisScore=<?= $values['gradeC'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade C</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&analysisScore=<?= $values['gradeD'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade D</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&analysisScore=<?= $values['gradeE'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade E</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&analysisScore=<?= $values['gradeF'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade F</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&analysisScore=<?= $values['gradeG'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade G</a></li>
                        <?php } ?>
                    </ul>

                </div>
            </div>

            <div class="col-11 col-md-10 label label-default">
                Methodology: <br /> <?php echo $rows['methodology']; ?>
            </div>

            <div class="col-sm-1 col-md-2">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        SELECT GRADE
                    </button>
                    <ul class="dropdown-menu">
                        <?php
                        include "../php/usegreadescale.php";
                        $j = 0;
                        while ($values = mysqli_fetch_assoc($result)) {
                            $j++;
                        ?>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&methodologyScore=<?= $values['gradeA'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade A</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&methodologyScore=<?= $values['gradeB'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade B</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&methodologyScore=<?= $values['gradeC'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade C</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&methodologyScore=<?= $values['gradeD'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade D</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&methodologyScore=<?= $values['gradeE'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade E</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&methodologyScore=<?= $values['gradeF'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade F</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&methodologyScore=<?= $values['gradeG'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade G</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-11 col-md-10 label label-default">
                Literature: <br /><?php echo $rows['literature']; ?>
            </div>

            <div class="col-sm-1 col-md-2">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        SELECT GRADE
                    </button>
                    <ul class="dropdown-menu">
                        <?php
                        include "../php/usegreadescale.php";
                        $j = 0;
                        while ($values = mysqli_fetch_assoc($result)) {
                            $j++;
                        ?>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&literatureScore=<?= $values['gradeA'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade A</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&literatureScore=<?= $values['gradeB'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade B</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&literatureScore=<?= $values['gradeC'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade C</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&literatureScore=<?= $values['gradeD'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade D</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&literatureScore=<?= $values['gradeE'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade E</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&literatureScore=<?= $values['gradeF'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade F</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&literatureScore=<?= $values['gradeG'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade G</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-11 col-md-10 label label-default">
                Abstract: <?php echo $rows['abstract']; ?>
            </div>

            <div class="col-sm-1 col-md-2">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        SELECT GRADE
                    </button>
                    <ul class="dropdown-menu">
                        <?php
                        include "../php/usegreadescale.php";
                        $j = 0;
                        while ($values = mysqli_fetch_assoc($result)) {
                            $j++;
                        ?>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&abstractScore=<?= $values['gradeA'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade A</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&abstractScore=<?= $values['gradeB'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade B</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&abstractScore=<?= $values['gradeC'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade C</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&abstractScore=<?= $values['gradeD'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade D</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&abstractScore=<?= $values['gradeE'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade E</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&abstractScore=<?= $values['gradeF'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade F</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&abstractScore=<?= $values['gradeG'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade G</a></li>
                        <?php } ?>
                    </ul>

                </div>
            </div>

            <div class="col-11 col-md-10 label label-default">
                Conclusion: <?php echo $rows['conclusion']; ?>
            </div>

            <div class="col-sm-1 col-md-2">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        SELECT GRADE
                    </button>
                    <ul class="dropdown-menu">
                        <?php
                        include "../php/usegreadescale.php";
                        $j = 0;
                        while ($values = mysqli_fetch_assoc($result)) {
                            $j++;
                        ?>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&conclusionScore=<?= $values['gradeA'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade A</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&conclusionScore=<?= $values['gradeB'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade B</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&conclusionScore=<?= $values['gradeC'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade C</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&conclusionScore=<?= $values['gradeD'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade D</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&conclusionScore=<?= $values['gradeE'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade E</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&conclusionScore=<?= $values['gradeF'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade F</a></li>
                            <li><a class="dropdown-item" href="../php/setGrade.php?matricnumber=<?= $rows['matricnumber'] ?>&conclusionScore=<?= $values['gradeG'] ?>&examinerid=<?=$rows['examinerid'] ?>">Grade G</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
    </div>
<?php } ?>
<br />

<!-- End Example Code -->
</body>

</html>