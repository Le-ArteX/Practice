<!DOCTYPE html>
<html lang="en">
<head>  
    <title>Travel Page</title>
</head>
<body>
    <div class="form-container">
        <h2>Travel Form</h2>
        <form action="submit_travel.php" method="POST">
            <label for="destination">Destination:</label>
            <input type="text" id="destination" name="destination" required>

            <label for="departure-date">Departure Date:</label>
            <input type="text" id="departure-date" name="departure_date" required>

            <label for="return-date">Return Date:</label>
            <input type="text" id="return-date" name="return_date" required>
            <!--  -->
            <label for="travelers">Number of Travelers:</label>
            <input type="number" id="travelers" name="travelers" min="1" required>

            <input type="hidden" name="form_type" value="travel_form">
            <!-- dvsbvs;v -->

            <button type="submit">Submit</button>
        </form>
    </div>
    </body  
