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

        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/serviceStyles.css">

    </head>
    <body>

        <?php include('../includes/header.php') ?>

        <div class="jumbotron text-center">
            <h1>Community Auto Workshop</h1>
            <p>Best Auto Works in town</p>
        </div>

        <div class="container">

            <h4 style="text-align: center;"><div id="heading"></div></h4>

            <div class="col-sm-center">
                <form id="userForm" action="#">
                    <select name="" id="type">
                        <option value="">-- Select Type--</option>
                    </select>
                    <select name="" id="year">
                        <option value="">-- Select Year --</option>
                    </select>
                    <select name="" id="make">
                        <option value="">-- Select Make --</option>
                    </select>
                    <select name="" id="model">
                        <option value="">-- Select Model --</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <?php include('../includes/footer.php') ?>
        <script>
            heading.innerHTML = localStorage.getItem('service-selected');
        </script>
        <script src="../js/servicesJS.js"></script>

    </body>
</html>