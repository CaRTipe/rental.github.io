<?php
include './server/dbconfigs.php';
$disp = $_GET['house_id'];
$house = displayProperties($disp);
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $house['house_name']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <?php include "./navbar/navbar.php"; ?>

    <div class="text-center my-5">
        <h1 class="h1"><?php echo $house['house_name']; ?></h1>
    </div>

    <div class="container mb-5">
        <div class="row g-4">
            <!-- Property Image -->
            <div class="col-12">
                <img src="./uploads/<?php echo $house['image']; ?>" alt="House Image" class="img-fluid rounded" width="1300px"/>
            </div>

            <!-- Property Details -->
            <div class="col-12">
                <h2 class="h4 my-3"><?php echo $house['house_name']; ?></h2>
                <p class="my-3">
                    <?php echo $house['description']; ?> 
                </p>

                <!-- Icons Row -->
                <div class="row g-3 mb-4">
                    <div class="col-12 col-sm-4">
                        <div class="card d-flex flex-row align-items-center justify-content-center gap-2 p-2" style="background-color: rgb(77, 78, 79);">
                            <img src="./assets/images/bedroom.png" alt="bedroom" width="24" height="24" />
                            <p class="mb-0"><?php echo $house['bedroom']; ?>-bedroom</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="card d-flex flex-row align-items-center gap-2 p-2" style="background-color: rgb(77, 78, 79);">
                            <img src="./assets/images/bathroom.png" alt="bathroom" width="24" height="24" />
                            <p class="mb-0"><?php echo $house['bathroom']; ?>-bathroom</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="card d-flex flex-row align-items-center gap-2 p-2" style=" background-color: rgb(77, 78, 79);">
                            <img src="./assets/images/villa.png" alt="villa" width="24" height="24" />
                            <p class="mb-0">Villa</p>
                        </div>
                    </div>
                </div>

                <!-- Price and Button -->
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                    <div>
                        <h4 class="text-muted mb-1">Price</h4>
                        <h3 class="text-dark"><?php echo $house['price']; ?></h3>
                    </div>
                    <button class="btn btn-primary px-4 py-2" style="background-color: purple; border-radius: 20px;">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "./navbar/footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>