<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul>
                    <li><a href="">West Bengal</a></li>
                    <li><a href="" class="active" id="2">Bihar</a></li>
                    <li><a href="">Assam</a></li>
                    <li><a href="">Meghalaya</a></li>
                    <li><a href="">Manipur</a></li>
                </ul>
            </div>
            <div class="col-md-8">
                <ul id="2" class="display: block;">
                    <li><a href="<?php echo url(base_url);?>/institute-and-fees/bihar/private-college">Private College</a></li>
                    <li><a href="<?php echo url(base_url);?>/institute-and-fees/west-bengal/deemed">Deemed</a></li>
                    <li><a href="<?php echo url(base_url);?>/institute-and-fees/west-bengal/seat-matrix">Seat Matrix</a></li>
                    <li><a href="<?php echo url(base_url);?>/institute-and-fees/west-bengal/fees-structure">Fees Structure</a></li>
                    <li><a href="<?php echo url(base_url);?>/institute-and-fees/west-bengal/cut-off">Cut Off</a></li>
                    <li><a href="<?php echo url(base_url);?>/institute-and-fees/west-bengal/counselling">Counselling</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>