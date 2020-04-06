<?php
$title = 'School-registration';
require 'includes/header.php';
require_once 'database/managercrud.php';


?>

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

                    Private Schools

Al Ghubra Private School- 593175

Al Hail Ideal Private School- 536220

Advertisement
Al Murshid Private School- 489793

Al Najah Preparatory School - 705605

Al Sahwa Schools - 693887

Al Salam Al Ahlia School- 620121

Al Tajheez Al Iimi Private School llc.- 593345

Al-Irfaan Private School

American British Academy -603646

American International School of Muscat- 595180

Bangladesh School Muscat- 567841

British School  Muscat- 600842

Capital Private School - 680355

Dar Al Hanan Private Schools - 7710701

Egyptian School-  697047


Expatriate Schools

Indian Nursery - Al Khuwair - 605662

Indian School Muscat- 702567

Muscat English Speaking School

Muscat Private School- 565550

National Private School- 600536

Oman Private School- 695484

Sri Lankan School Muscat-  7711005

Advertisement
Sultan Bin Ahmed Private School-  708993

Tabarak Private School- 714384

Wattayah Private School- 562185


Private Colleges

Caledonian College of Engineering - 536165

College of Administrative Sciences SAOG - 751572

Muscat College Of Management Science & Technology - 798900

Sohar College For Applied Sciences - 694817
    -->
    <div id="wrap">
        <div id="main" class="container clear-top">
            <h1>Registration for the school</h1>

            <strong>
                <p style="color: red">Please adhere to our terms and conditions. This form is to be filled by the <em>school
                        administrator or school manager </em>to register their school.
                </p>
            </strong>
            <form method="post" action="success.php">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
                <div class="form-group">
                    <label for="secondname">Second Name</label>
                    <input type="text" class="form-control" id="secondname" name="secondname">
                </div>
                <div class="form-group">
                    <label for="role">What is your role in school (Choose from list)</label>
                    <select class="form-control" id="role" name="role">
                        <option>School Administrator</option>
                        <option>School Manager</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="form-group">
                    <label for="phonenumber"> Contact Number</label>
                    <input type="text" class="form-control" id="phonenumber" name="phonenumber">
                    <small id="phoneHelp" class="form-text text-muted">We'll never share your phone number with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="schoolname">School name (Choose from list)</label>
                    <select class="form-control" id="schoolname" name="schoolname">
                        <option value="0">Al Ghubra Private School- 593175</option>
                        <option>Al Hail Ideal Private Schoo-l- 536220</option>
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
                <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>



<?php require 'includes/footer.php' ?>