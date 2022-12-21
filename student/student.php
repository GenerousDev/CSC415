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
        <!-- <div class="row content"> -->
        <!-- <div class="col-sm-2">
                &nbsp;
            </div> -->
            <!-- <?php
            // if $_SESSION
            ?> -->
        <div class="text-left ">
            <br />
            <h2 align="center"> Student Submission Dashboard </h3>
                <form class="border shadow p-3 rounded" action="../php/createsubmitpage.php" method="post" >
                    <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $_GET['error'] ?>
                        </div>
                    <?php } ?>

                    <label for="formGroupExampleInput" class="form-label">Abstract</label>
                    <div class="mb-3 form-floating">
                        <textarea maxlength="800" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="abstract"></textarea>
                        <label for="floatingTextarea">800 words maximum</label>
                    </div>

                    <label for="formGroupExampleInput2" class="form-label">Literature Review</label>
                    <div class="mb-3 form-floating">
                        <textarea maxlength="800" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="literature"></textarea>
                        <label for="floatingTextarea">800 words maximum</label>
                    </div>

                    <label for="formGroupExampleInput" class="form-label">Methodology</label>
                    <div class="mb-3 form-floating">
                        <textarea maxlength="800" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="methodology"></textarea>
                        <label for="floatingTextarea">800 words maximum</label>
                    </div>

                    <label for="formGroupExampleInput2" class="form-label">Analysis</label>
                    <div class="mb-3 form-floating">
                        <textarea maxlength="800" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="analysis"></textarea>
                        <label for="floatingTextarea">800 words maximum</label>
                    </div>

                    <!-- <label for="formGroupExampleInput2" class="form-label">History</label>
                    <div class="mb-3 form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">800 words maximum</label>
                    </div> -->


                    <label for="formGroupExampleInput" class="form-label">Conclution</label>
                    <div class="mb-3 form-floating">
                        <textarea maxlength="400" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="conclusion"></textarea>
                        <label for="floatingTextarea">400 words maximum</label>
                    </div>

                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                    <a class="btn btn-primary float-end" onclick="location.href='../welcome.php'">HOME</a>
                </form>
        </div>
        <!-- </div> -->
    </div>
</Body>

</html>