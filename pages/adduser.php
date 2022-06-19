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
            <div class="row dashboard-wrapper m-0">
                <div class="col-12 bg-white add-user">
                    <div class="theader">
                        <p>Member Information Form</p>
                    </div>
                    <div class="form-layout">
                        <div class="form-inputs col-4">
                            <label for="">Firstname</label>
                            <input type="text" placeholder="Enter Firstname">
                        </div>
                        <div class="form-inputs col-4">
                            <label for="">Lastname</label>
                            <input type="text" placeholder="Enter Lastname">
                        </div>
                        <div class="form-inputs col-4">
                            <label for="">Address</label>
                            <input type="text" placeholder="Enter Address">
                        </div>
                        <div class="form-inputs col-4">
                            <label for="">Birth Date</label>
                            <input type="date" placeholder="Enter Birth Date">
                        </div>
                        <div class="form-inputs col-4">
                            <label for="">Civil Status</label>
                            <input type="text" placeholder="Enter Civil Status">
                        </div>
                        <div class="form-inputs col-4">
                            <label for="">Firstname</label>
                            <input type="text" placeholder="Enter Firstname">
                        </div>
                    </div>
                    <div class="adduserbtn btn2">
                        <button><i class="fa-solid fa-circle-plus"></i> ADD USER</button>
                    </div>
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