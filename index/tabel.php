<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- lokal CSS -->
    <link rel="stylesheet" href="../style/style.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>ProjekKita</title>
</head>

<body>
    <div class="container shadow-lg p-3 mb-5 bg-body rounded mt-4" id="semua">

        <div class="row justify-content-center container">
            <div class="col-lg-6">
                <h2 class="text-center fw-normal">Biodata Form</h2>
                <div class="item">
                    <h3 class="fw-bold">Nama : </h3>
                    <h3><?php echo $_POST["nama"]; ?></h3>
                </div>
                <div class="item">
                    <h3 class="fw-bold">Skill : </h3>
                    <h3><?php echo $_POST["skill"]; ?></h3>
                </div>
                <div class="item">
                    <h3 class="fw-bold">Gender : </h3>
                    <h3><?php echo $_POST["gender"]; ?></h3>
                </div>
                <div class="item">
                    <h3 class="fw-bold">Email : </h3>
                    <h3><?php echo $_POST["email"]; ?></h3>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-end " id="kanan">
                <img src="../asset/image/img1.png" class="img-site justify-content-center" alt="..." />
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>