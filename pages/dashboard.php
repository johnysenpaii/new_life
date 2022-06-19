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
            <div class="dashboard-text">Dashboard</div>
        </section>
        <section>
            <div class="row dashboard-wrapper m-0">
                <div class="col-6 info-sec">
                    <div class="row justify-content-evenly">
                        <div class="col-5 info-section">
                            Number of User
                            <span class="total-num">200</span>
                        </div>
                        <div class="col-5 info-section">
                            Number of active User
                            <span class="total-num">200</span>
                        </div>
                    </div>
                    <div class="row justify-content-center pt-5">
                         <div class="col-11 blend-bg"></div>
                    </div>
                </div>
                <div class="col-6 bg-white bday-sec">
                    Birthday Celebrants for this month of June
                    <ul>
                        <li>Jepriel Tibay</li>
                        <li>Francisdel Chris Patlingrao</li>
                        <li>Jose Harvey Semblante</li>
                    </ul>
                    <!-- <div class="bday-bg">
                        <img src="" alt="">
                    </div> -->
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