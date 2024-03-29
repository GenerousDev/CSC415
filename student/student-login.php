    <!DOCTYPE html>
    <html>

    <head>
        <title>multi-user role-based-login-system</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>

    <body>
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
            <form class="border shadow p-3 rounded" action="../php/check-student.php" method="post" style="width: 450px;">
                <h1 class="text-center p-3">STUDENT LOGIN</h1>
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_GET['error'] ?>
                    </div>
                <?php } ?>
                <?php if (isset($_GET['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_GET['success']; ?>
                </div>
            <?php } ?>
                <div class="mb-3">
                    <label for="username" class="form-label">Matric Number</label>
                    <input type="text" class="form-control" name="matricnumber" id="username">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>

                <button type="submit" class="btn btn-primary">LOGIN</button>
                <a class="btn btn-primary float-end mb-5" onclick="location.href='../welcome.php'">LOGOUT</a>
            </form>
        </div>
    </body>

    </html>