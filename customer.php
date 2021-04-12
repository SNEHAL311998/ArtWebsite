<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/customer.css">
    <title>Customer Login</title>
</head>

<body>
    <div class="regform">
        <h1>
            Customer Registration</h1>
    </div>
    <div class="main">
        <form action="customerinfo.php" method="POST" >
            <div id="name">
                <h2 class="name">
                    Name </h2>
                <input class="firstname" type="text" name="first_name" required ><br>
                <label class="firstlabel">first name</label>
                <input class="lastname" type="text" name="last_name" required><br>
                <label class="lastlabel">last name</label>
            </div>
            <h2 class="name">
                Address </h2>
            <input class="company" type="text" name="company" required>
            <h2 class="name">
                Email</h2>
            <input class="email" type="email" name="email" required>
            <h2 class="name">
                Phone</h2>
            <input class="Code" type="text" name="area_code" required>
            <label class="area-code">Area Code</label>
            <input class="number" type="text" name="phone" required>
            <label class="phone-number">Phone Number</label>


            <h2 class="name">
                City</h2>
            <!-- <select class="option" name="subject">
                <option disabled="disabled" selected="selected">--Choose option--</option>
                <option>Ahmedabad</option>
                <option>Mangalore</option>
                <option>Mumbai</option>
                <option>Bangalore</option>
                <option>Chennai</option>
                <option>Delhi</option>
                <option>Kochi</option>
                <option>Kannur</option>
                <option>Pune</option>
            </select> -->
            <input class="number" type="text" name="city" required>
            <!-- <h2 id="coustomer">
                Are you beginner?</h2>
            <label class="radio">
                <input class="radio-one" type="radio" checked="checked" name="rdiobtn">
                <span class="checkmark"></span>
                Yes
            </label>

            <label class="radio">
                <input class="radio-two" type="radio" name="rdiobtn">
                <span class="checkmark"></span>
                No
            </label> -->

            <button type="submit" name="register">Register</button>


        </form>
    </div>
</body>

</html>