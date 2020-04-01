<?php
$title = 'School-registration';
require 'includes/header.php'; ?>
    <!--
            -id
            -first name
            -last name
            -email
            -password
            -Date of Birth
            -School list from dropdown(name of the school)
            -contact number

            //on sign up and login authentication.
            -Add teachers
            -Add Students


            //drop dow for schools quick access
            <option>Al Ghubra Private School- 593175</option>
                    <option>Al Ghubra Private School- 593175</option>
                    <option>Al Ghubra Private School- 593175</option>
                    <option>Al Ghubra Private School- 593175</option>
                    <option>Al Ghubra Private School- 593175</option>
                    <option>Al Ghubra Private School- 593175</option>
                    <option>Al Ghubra Private School- 593175</option>
                    <option>Al Ghubra Private School- 593175</option>
                    <option>Al Ghubra Private School- 593175</option>
                    <option>Al Ghubra Private School- 593175</option>
                    <option>Al Ghubra Private School- 593175</option>
                    <option>Al Ghubra Private School- 593175</option>
    -->


    <div id="wrap">
        <div id="main" class="container clear-top">
            <h1>Registration for the school</h1>
            <strong>
                <p style="color: red">Please adhere to our terms and conditions. This form is to be filled by the <em>school
                        administrator or school manager </em>to register their school.
                </p>
            </strong>
            <form>
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" id="firstname">
                </div>
                <div class="form-group">
                    <label for="secondname">Second Name</label>
                    <input type="text" class="form-control" id="secondname">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="phonenumber"> Contact Number</label>
                    <input type="text" class="form-control" id="phonenumber">
                    <small id="phoneHelp" class="form-text text-muted">We'll never share your phone number with anyone
                        else.</small>
                </div>

                <div class="form-group">
                    <label for="schoolname">School name (Choose from list)</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Al Ghubra Private School- 593175</option>
                        <option>Al Hail Ideal Private School- 536220</option>
                        <option>Al Murshid Private School- 489793</option>
                        <option>Al Najah Preparatory School - 705605</option>
                        <option>Al Sahwa Schools - 693887</option>
                        <option>American British Academy Muscat</option>
                        <option>British School Salalah Oman Salalah</option>
                        <option>International School of Oman Muscat</option>
                        <option>Jalan private school</option>
                        <option>MUSCAT INTERNATIONAL SCHOOL RUWI</option>
                        <option>The British School Muscat</option>
                        <option>The Sultan's School Seeb</option>
                        <option>Al Salam Al Ahlia School- 620121</option>
                        <option>Al Tajheez Al Iimi Private School llc.- 593345</option>


                    </select>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>



<?php require 'includes/footer.php' ?>