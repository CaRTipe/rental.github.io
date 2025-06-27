<?php
include 'filemanager.php';
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme='light'>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>House Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <?php include "./navbar/navbar.php"; ?>

    <div class="container mt-5">
        <?php
        if (isset($houses)) {
            echo "<div class='row g-4'>"; // gap between cards

            foreach ($houses as $house) {
                $shortDesc = strlen($house['description']) > 50 ? substr($house['description'], 0, 20) . '...' : $house['description'];
                echo "
        <div class='col-12 col-sm-6 col-lg-4'>
          <div class='card h-100 shadow'>
            <img class='card-img-top' src='./uploads/{$house['image']}' alt='House Image' style='object-fit: cover; height: 200px;' />
            <div class='card-body d-flex flex-column justify-content-between'>
              <div>
                <h4 class='card-title text-dark mb-2'>{$house['house_name']}</h4>
                <p class='card-text text-dark mb-3'>{$shortDesc} <a class='text-primary' href='singleproperty.php?house_id={$house['house_id']}'>Read more</a></p>

                <div class='d-flex flex-wrap gap-2 mb-3'>
                  <div class='card p-2 d-flex flex-row align-items-center gap-2' style='width: 140px; background-color:rgb(77, 78, 79);'>
                    <img src='./assets/images/bedroom.png' alt='Bedroom' width='20px' height='20px' />
                    <span>{$house['bedroom']}-bedroom</span>
                  </div>
                  <div class='card p-2 d-flex flex-row align-items-center gap-2' style='width: 140px; background-color:rgb(77, 78, 79);'>
                    <img src='./assets/images/bathroom.png' alt='Bathroom' width='20px' height='20px' />
                    <span>{$house['bathroom']}-bathroom</span>
                  </div>
                  <div class='card p-2 d-flex flex-row align-items-center gap-2' style='width: 140px; background-color:rgb(77, 78, 79);'>
                    <img src='./assets/images/villa.png' alt='Villa' width='20px' height='20px' />
                    <span>Villa</span>
                  </div>
                </div>
              </div>

              <div class='d-flex flex-column gap-2'>
                <div>
                  <h6 class='text-dark'>Price</h6>
                  <h5 class='text-dark'>{$house['price']}</h5>
                </div>
                <a href='singleproperty.php?house_id={$house['house_id']}' class='btn btn-primary w-100' style='background-color: purple;'>
                  View Property Details
                </a>
              </div>
            </div>
          </div>
        </div>";
            }

            echo "</div>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>