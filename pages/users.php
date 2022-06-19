<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style -->
    <script src="https://kit.fontawesome.com/810a80b0a3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>new_life</title>
</head>
<body>
    <!-- insert side nav -->
    <?php include('../sidenav.php');?>
    <section class="header-body-content">
        <!-- insert top nav -->
        <?php include('../topnav.php');?>
        <section>
            <div class="dashboard-text adduserbtn">
                <a href="./adduser.php"><i class="fa-solid fa-circle-plus"></i> ADD USER</a>
            </div>
        </section>
        <section>
            <div class="row dashboard-wrapper m-0">
                <div class="col-12 bg-white tb-bg">
                    <div class="theader">
                        <p>List of Users</p>
                        <i class="fa-solid fa-print"></i>
                    </div>
                    <table cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td>Jepriel Tibay</td>
                                <td>Looc, Maribago, Lapu-Lapu City</td>
                                <td>10/22/1999</td>
                                <td>Single</td>
                                <td class="status">Active <i class="fa-solid fa-circle"></i></td>
                                <td><i class="fa-solid fa-user-pen"></i></td>
                            </tr>
                            <tr>
                                <td>Jepriel Tibay</td>
                                <td>Looc, Maribago, Lapu-Lapu City</td>
                                <td>10/22/1999</td>
                                <td>Single</td>
                                <td class="status">Active <i class="fa-solid fa-circle"></i></td>
                                <td><i class="fa-solid fa-user-pen"></i></td>
                            </tr>
                            <tr>
                                <td>Jepriel Tibay</td>
                                <td>Looc, Maribago, Lapu-Lapu City</td>
                                <td>10/22/1999</td>
                                <td>Single</td>
                                <td class="status">Active <i class="fa-solid fa-circle"></i></td>
                                <td><i class="fa-solid fa-user-pen"></i></td>
                            </tr>
                            <tr>
                                <td>Maria Angelica Felomina Cuyno</td>
                                <td>Looc, Maribago, Lapu-Lapu City</td>
                                <td>10/22/1999</td>
                                <td>Single</td>
                                <td class="status">Active <i class="fa-solid fa-circle"></i></td>
                                <td><i class="fa-solid fa-user-pen"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </section>
    
    <!-- javascript cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- custom javascript -->
    <script src="../js/main.js"></script>
</body>
</html>