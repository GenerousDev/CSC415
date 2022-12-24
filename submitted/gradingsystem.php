<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script language="javascript" src="jquery.maxlength.js"></script>
    <title>Project accessment web platform</title>
</head>

<Body>
    <div class="container">
        <div class="text-left ">
            <h2 align="center"> Current Grading Scale </h3>
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
                <?php
                include "../php/readgradescale.php";
                $i = 0;
                while ($rows = mysqli_fetch_assoc($result)) {
                    $i++;
                ?>
                    <p class="user-select-all">GRADE A: <?php echo $rows['gradeA']; ?></p>
                    <p class="user-select-all">GRADE B: <?php echo $rows['gradeB']; ?></p>
                    <p class="user-select-all">GRADE C: <?php echo $rows['gradeC']; ?></p>
                    <p class="user-select-all">GRADE D: <?php echo $rows['gradeD']; ?></p>
                    <p class="user-select-all">GRADE F: <?php echo $rows['gradeE']; ?></p>
                    <p class="user-select-all">GRADE G: <?php echo $rows['gradeF']; ?></p>
                    <p class="user-select-all">GRADE E: <?php echo $rows['gradeG']; ?></p>
                <?php } ?>
                <br />
                <h2 align="center">Update Student Grading Scale </h3>
                    <form class="border shadow p-3 rounded" action="../php/gradesystem.php" method="post">
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $_GET['error'] ?>
                            </div>
                        <?php } ?>

                        <label for="formGroupExampleInput" class="form-label">GRADE A</label>
                        <div class="mb-3 form-floating">
                            <input maxlength="800" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="gradeA" />
                            <label for="floatingTextarea">A</label>
                        </div>

                        <label for="formGroupExampleInput2" class="form-label">GRADE B</label>
                        <div class="mb-3 form-floating">
                            <input maxlength="800" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="gradeB" />
                            <label for="floatingTextarea">B</label>
                        </div>

                        <label for="formGroupExampleInput" class="form-label">GRADE C</label>
                        <div class="mb-3 form-floating">
                            <input maxlength="800" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="gradeC" />
                            <label for="floatingTextarea">C</label>
                        </div>

                        <label for="formGroupExampleInput2" class="form-label">GRADE D</label>
                        <div class="mb-3 form-floating">
                            <input maxlength="800" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="gradeD" />
                            <label for="floatingTextarea">D</label>
                        </div>

                        <label for="formGroupExampleInput" class="form-label">GRADE E</label>
                        <div class="mb-3 form-floating">
                            <input maxlength="400" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="gradeE" />
                            <label for="floatingTextarea">E</label>
                        </div>

                        <label for="formGroupExampleInput" class="form-label">GRADE F</label>
                        <div class="mb-3 form-floating">
                            <input maxlength="400" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="gradeF" />
                            <label for="floatingTextarea">F</label>
                        </div>

                        <label for="formGroupExampleInput" class="form-label">GRADE G</label>
                        <div class="mb-3 form-floating">
                            <input maxlength="400" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="gradeG" />
                            <label for="floatingTextarea">G</label>
                        </div>
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                        <a class="btn btn-primary float-end" onclick="location.href='../welcome.php'">HOME</a>
                    </form>


        </div>
        <!-- </div> -->
    </div>
</Body>

</html>