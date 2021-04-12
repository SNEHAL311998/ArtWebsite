<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/customer.css">
    <title>Seller Login</title>
</head>

<body>
    <div class="regform">
        <h1>
            Seller Registration</h1>
    </div>
    <div class="main">

        <form method="POST">
            <div id="name">
                <h2 class="name">
                    Name </h2>
                <input class="firstname" type="text" name="first_name"><br>
                <!-- <label class="firstlabel">first name</label> -->
                <!-- <input class="lastname" type="text" name="last_name"><br>
                <label class="lastlabel">last name</label> -->
            </div>
            <h2 class="name">
                Address </h2>
            <input class="company" type="text" name="company">
            <h2 class="name">
                Email</h2>
            <input class="email" type="email" name="email">
            <h2 class="name">
                Phone</h2>
            <!-- <input class="Code" type="text" name="area_code">
            <label class="area-code">Area Code</label> -->
            <input class="number" type="text" name="phone">
            <label class="phone-number">Phone Number</label>


            <!-- <h2 class="name">
                City</h2> -->
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
            <!-- <input class="number" type="text" name="phone"> -->
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

            <button type="submit">Register</button>


        </form>
    </div>
</body>

</html>