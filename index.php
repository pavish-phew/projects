<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="shortcut icon" href="Images/fav.png" type="image/x-icon">
    <title>Parking Lot</title>  
</head>

<body style="background-color:pink;">

    <header class="shadow">
        <div class="header-content d-flex justify-content-center p-2">
            <img src="./Images/parking.svg" alt="" id="header-logo">
            <div id="header-msg" class="ml-5 align-self-center">PARKING LOT</div>
        </div>
    </header>
    <div class="form-container mt-5">
        <form class="w-50 mx-auto" id="entryForm" action="index2.php" method="post">
            <h5 class="text-center">Add Vehicle details to Parking Lot</h5>
         <div class="container">

            <div class="form-group">

                <label for="owner">Owner:</label>
                <input type="text" class="form-control rounded-0 shadow-sm" name="owner" id="owner" placeholder="Owner">
            </div><br>
            <div class="form-group">
                <label for="car">Phone number:</label>
                <input type="text" class="form-control rounded-0 shadow-sm" name="car" id="car" placeholder="+91 873141515">
            </div><br>
            <div class="form-group">    
                <label for="licensePlate">License Plate:</label>
                <input type="text" class="form-control rounded-0 shadow-sm" name="licensePlate" id="licensePlate" placeholder="Enter your Vehicle Number">
            </div><br>
            <div class="row">
                <div class="col-6">
                    <label for="entryDate">Entry Date:</label>
                    <input type="date" class="form-control rounded-0 shadow-sm" name="entryDate" id="entryDate">
                </div>
                <div class="col-6">
                    <label for="exitDate">Exit Date:</label>
                    <input type="date" class="form-control rounded-0 shadow-sm" name="exitDate" id="exitDate">
                </div>

                <button type="submit" class="btn mx-auto d-block mt-5 rounded-0 shadow" name="submit" id="btnOne">Add Car</button>
            </div>
        </form>
    </div>
    
    
</body>

</html>
