<?php

//include header file
include('components/header.php');

?>


<div class="container-fluid header-img">
    <div class="row">
        <div class="col-md-6 offset-md-3">

            <div class="header">
                <h1 class="text-center">Donate Blood,Save a Life</h1>
                <p class="text-center">Donate the blood to help the others.</p>
            </div>


            <h1 class="text-center">Search The Donors</h1>
            <hr class="white-bar text-center">

            <form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
                <div class="form-group text-center justify-content-center">

                    <select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default"
                            required>

                        <option value="">-- Select --</option>
                        <optgroup title="Dhaka Division" label="&raquo; Dhaka Division">
                        </optgroup>
                        <option value="Dhaka city">Dhaka city</option>
                        <option value="Gazipur">Gazipur</option>
                        <option value="Tangail">Tangail</option>
                        <option value="Faridpur">Faridpur</option>
                        <option value="Gopalganj">Gopalganj</option>
                        <option value="Kishoreganj">Kishoreganj</option>
                        <option value="Madaripur">Madaripur</option>
                        <option value="Manikganj">Manikganj</option>
                        <option value="Munshiganj">Munshiganj</option>
                        <option value="Narayanganj">Narayanganj</option>
                        <option value="Narsingdi">Narsingdi</option>
                        <option value="Rajbari">Rajbari</option>
                        <option value="Shariatpur">Shariatpur</option>
                        <optgroup title="Mymensingh Division" label="&raquo; Mymensingh Division"></optgroup>
                        <option value="Mymensingh">Mymensingh</option>
                        <option value="Sherpur">Sherpur</option>
                        <option value="Netrokona">Netrokona</option>
                        <option value="Jamalpur">Jamalpur</option>
                        <optgroup title="Rajshahi Division" label="&raquo; Rajshahi Division"></optgroup>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Sirajganj">Sirajganj</option>
                        <option value="Pabna">Pabna</option>
                        <option value="Bogura">Bogura</option>
                        <option value="Chapainawabganj">Chapainawabganj</option>
                        <option value="Naogaon">Naogaon</option>
                        <option value="Joypurhat">Joypurhat</option>
                        <option value="Natore">Natore</option>
                    </select>

                </div>
                <div class="form-group center-aligned">
                    <select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;"
                            class="form-control demo-default text-center margin10px">

                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>

                    </select>
                </div>
                <div class="form-group center-aligned">
                    <button type="submit" class="btn btn-lg btn-danger">Search</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- header ends -->

<!-- donate section -->
<div class="container-fluid red-background">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center" style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
            <hr class="white-bar">
            <p class="text-center pera-text">
                Blood transfusion is an essential component of the health care system of every country and patients who
                require blood transfusion service as part of the clinical management of their condition have the right
                to expect that sufficient and safe blood will be available to meet their needs. However, this is not
                always the case, especially in developing countries. To recruit and retain adequate regular voluntary
                non-remunerated blood donors the motivators and barriers of donors must be understood. Equally important
                to this goal is the knowledge of blood donors.


            </p>
            <a href="donate.php" class="btn btn-default btn-lg text-center center-aligned">Become a Donor!</a>
        </div>
    </div>
</div>
<!-- end doante section -->


<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <h3 class="text-center red">Our Vission</h3>
                <img src="asset/img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168"
                     height="168">
                <p class="text-center">
                    Blood transfusion is an essential component of the health care system of every country and patients
                    who require blood transfusion service as part of the clinical management of their condition have the
                    right to expect that sufficient and safe blood will be available to meet their needs. However, this
                    is not always the case, especially in developing countries. To recruit and retain adequate regular
                    voluntary non-remunerated blood donors the motivators and barriers of donors must be understood.
                    Equally important to this goal is the knowledge of blood donors.
            </div>
        </div>

        <div class="col">
            <div class="card">
                <h3 class="text-center red">Our Goal</h3>
                <img src="asset/img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
                <p class="text-center">
                    Blood transfusion is an essential component of the health care system of every country and patients
                    who require blood transfusion service as part of the clinical management of their condition have the
                    right to expect that sufficient and safe blood will be available to meet their needs. However, this
                    is not always the case, especially in developing countries. To recruit and retain adequate regular
                    voluntary non-remunerated blood donors the motivators and barriers of donors must be understood.
                    Equally important to this goal is the knowledge of blood donors.
                </p>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <h3 class="text-center red">Our Mission</h3>
                <img src="asset/img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
                <p class="text-center">
                    Blood transfusion is an essential component of the health care system of every country and patients
                    who require blood transfusion service as part of the clinical management of their condition have the
                    right to expect that sufficient and safe blood will be available to meet their needs. However, this
                    is not always the case, especially in developing countries. To recruit and retain adequate regular
                    voluntary non-remunerated blood donors the motivators and barriers of donors must be understood.
                    Equally important to this goal is the knowledge of blood donors.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- end aboutus section -->


<?php
//include footer file
include('components/footer.php');
?>
