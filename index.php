<!DOCTYPE html>
<html lang="en">
<head>
    <title>Community Auto Workshop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include('includes/header.php') ?>

<div class="jumbotron text-center">
    <h1>Community Auto Workshop</h1>
    <p>Best Auto Works in town</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 mb-4">
            <h4 style=" text-align: center; ">Services</h4>
        </div>

        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="row boxes-row">

                <div class="col-sm-6 mb-3"><a href="#"><div class="box" id="Brakes">Brakes</div></a></div>
                <div class="col-sm-6 mb-3"><a href="#"><div class="box" id="Engines">Engines</div></a></div>
                <div class="col-sm-6 mb-3"><a href="#"><div class="box" id="Tires">Tires</div></a></div>
                <div class="col-sm-6 mb-3"><a href="#"><div class="box" id="Transmission">Transmission</div></a></div>
                <div class="col-sm-6 mb-3"><a href="#"><div class="box" id="Oil & Fluids">Oil & Fluids</div></a></div>
                <div class="col-sm-6 mb-3"><a href="#"><div class="box" id="Electrical">Electrical</div></a></div>
            </div>
        </div>
        <div class="col-sm-3"></div>
        <div id="heading"></div>
    </div>
</div>

<?php include('includes/footer.php') ?>
<script>
    var heading = document.getElementById('heading');
    let divs = document.querySelectorAll('.box');

        for(let i=0; i<divs.length; i++) {
            divs[i].onclick = function(e) {
                let target = e.target;
                var currentSelectedDiv = target.getAttribute('id');
                heading.innerHTML = ['You have selected ', currentSelectedDiv].join('');
                localStorage.setItem('service-selected', currentSelectedDiv);
                console.log(currentSelectedDiv);
                window.location.href = "service_pages/services.php";
            }
        }
</script>
<script src="js/script.js"></script>
<script src="js/servicesJS.js"></script>

</body>
</html>