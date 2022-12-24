<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student and Examiner</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<Body>
    <?php include "../php/readstudent.php"; ?>
    <div class="container">
        <div class="box">
            <h4 class="display-4 text-center">Student Data</h4><br>
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
            <?php if (mysqli_num_rows($result)) { ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Matric Number</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($rows = mysqli_fetch_assoc($result)) {
                            $i++;
                        ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?php echo $rows['fullname']; ?></td>
                                <td><?php echo $rows['email']; ?></td>
                                <td><?php echo $rows['matricnumber']; ?></td>
                                <td>
                                <!-- href="../student/studentupdate.php?matricnumber=<?= $rows['matricnumber'] ?>&id=<?= $rows['id'] ?>" -->
                                    <a class="btn btn-success">Update</a>
                                    <a href="../student/studentdetailpage.php?matricnumber=<?= $rows['matricnumber'] ?>&id=<?= $rows['id'] ?>" class="btn btn-secondary">Details</a>
                                    <!-- href="../php/deletestudent.php?id=<?= $rows['id'] ?>" -->
                                    <a class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } ?>
            <div class="link-right">
                <a class="btn btn-primary float-end" onclick="location.href='../student/createstudentpage.php'">CREATE STUDENT</a>
            </div>
        </div>
    </div>





    <?php include "../php/readexaminer.php"; ?>

    <div class="container">
        <div class="box">
            <h4 class="display-4 text-center">Examiner Data</h4><br>
            <!-- <?php if (isset($_GET['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_GET['success']; ?>
                </div>
            <?php } ?> -->
            <?php if (mysqli_num_rows($result)) { ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Username</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($rows = mysqli_fetch_assoc($results)) {
                            $i++;
                        ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?php echo $rows['fullname']; ?></td>
                                <td><?php echo $rows['email']; ?></td>
                                <td><?php echo $rows['username']; ?></td>
                                <td>
                                <!-- href="../examiner/examinerupdate.php?id=<?= $rows['id'] ?>" -->
                                    <a  class="btn btn-success">Update</a>
                                    <!-- href="../php/detailsexaminer.php?id=<?= $rows['id'] ?>" -->
                                    <a class="btn btn-secondary">Details</a>
                                    <a href="../php/deleteexaminer.php?id=<?= $rows['id'] ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } ?>
            <div class="link-right">
                <a class="btn btn-primary " onclick="location.href='../examiner/createexaminerpage.php'">CREATE EXAMAINER</a>

                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <h4 class="display-4 text-center">Submitted Data</h4><br>
                            <a class="btn btn-secondary mb-5" onclick="location.href='../submitted/submittedsolutions.php'">SUBMITTED PROJECTS</a>
                            <a class="btn btn-secondary mb-5 btn btn-info" onclick="location.href='../submitted/gradingsystem.php'"> GRADING SCALE </a>
                            <a class="btn btn-success float-end mb-5" onclick="location.href='../welcome.php'">LOGOUT</a>
                        </div>
                    </div>
                </div>

</Body>
</div>
</div>
</div>


</html>