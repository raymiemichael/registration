<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=BenchNine" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">


    <style>
        body{
            background-color: aliceblue;
        }
        h1 {
            font-size: 40px;
            font-family: 'Arima Madurai', cursive;
        }
        h2 {
            font-size: 29px;
            font-family: 'Arima Madurai', cursive;
            font-style: italic;
        }
        h3 {
            font-size: 19px;
            font-family: 'BenchNine', sans-serif;
            color: grey;
        }
        h4 {
            font-size: 23px;
            font-family: 'BenchNine', sans-serif;
            color: red;
        }

    </style>
</head>
<body>

<?php
// define variables and set to empty values

        $firstname = $lastname = $address = $city = "";
        $state = $zipcode = $country = $city = "";
        $income = $education = $phone = $email = $password = $confirmpassword ="";
        ?>


<div class="container">
    <br>
    <h1 class="text-center">CSC 642 Summer 2018 Individual Assignment Raymie Michael</h1>
    <h2 class="text-center">Registration Form</h2>
    <div class="row justify-content-center">
        <div class="shadow p-3 mb-5 bg-white rounded" style="width: inherit">

            <div class="media-container-column col-lg-12">
                <div> <h4> * indicates required field</h4></div>

                <form id="form" name="register" role="form" method="post" action="results.php" target="_blank">
                    <h3>Name</h3>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input class="form-control input-lg" type="text" name="firstname"
                                       value="<?php echo $firstname; ?>" placeholder="First Name *" maxlength="40" required="" oninvalid="this.setCustomValidity('Please enter your first name.')"
                                       oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input class="form-control input-lg" type="text" name="lastname"
                                       value="<?php echo $lastname; ?>" placeholder="Last Name *" maxlength="40" required="" oninvalid="this.setCustomValidity('Please enter your last name.')"
                                       oninput="setCustomValidity('')">
                            </div>
                        </div>
                    </div>
                    <h3>Address</h3>

                    <div class="form-group">
                        <input class="form-control input-lg" type="text" name="address" value="<?php echo $address; ?>"
                               placeholder="Street Address *" maxlength="40" required="" oninvalid="this.setCustomValidity('Please enter your street address.')"
                               oninput="setCustomValidity('')">
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input class="form-control input-lg" type="text" name="city" value="<?php echo $city; ?>"
                                       placeholder="City *" maxlength="40" required="" oninvalid="this.setCustomValidity('Please enter your city.')"
                                       oninput="setCustomValidity('')">
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <!--<div class="form-group">-->
                            <!--<input class="form-control input-lg" type="text" name="state" value="<?php echo $state; ?>"-->
                            <!--placeholder="State *" maxlength="40" required="" oninvalid="this.setCustomValidity('Please enter your state.')"-->
                            <!--oninput="setCustomValidity('')">-->
                            <!--</div>-->
                            <select name="state" class="form-control input-lg" data-toggle="dropdown" required>
                                <option disabled selected value> Select your state... </option>

                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District Of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input class="form-control input-lg" type="text" name="zipcode"
                                       value="<?php echo $zipcode; ?>" placeholder="Zip Code *" maxlength="5" pattern="[0-9]{5}" required="" oninvalid="this.setCustomValidity('Please enter a valid zip code.')"
                                       oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input class="form-control input-lg" type="text" name="country"
                                       value="<?php echo $country; ?>" maxlength="40" placeholder="Country *" required="" oninvalid="this.setCustomValidity('Please enter your country.')"
                                       oninput="setCustomValidity('')">
                            </div>
                        </div>
                    </div>
                    <h3>Personal Information</h3>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <select name="education" class="form-control input-lg" data-toggle="dropdown">
                                    <option value="">Select your education...</option>
                                    <option value="highschool" <?php if (isset($education) && $gender == "highschool") echo "checked"; ?> >High School</option>
                                    <option value="college"
                                    <?php if (isset($education) && $gender == "college") echo "checked"; ?>
                                    >College</option>
                                    <option value="graduate"
                                    <?php if (isset($education) && $gender == "graduate") echo "checked"; ?>
                                    >Graduate</option>
                                    <option value="phd"
                                    <?php if (isset($education) && $gender == "phd") echo "checked"; ?> >Ph. D</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <select name="income" class="form-control input-lg" data-toggle="dropdown">
                                    <option value="">Select your yearly income...</option>
                                    <option value="lessthan"
                                    <?php if (isset($income) && $gender == "lessthan") echo "checked"; ?> >Less
                                    Than</option>
                                    <option value="between"
                                    <?php if (isset($income) && $gender == "between") echo "checked"; ?>
                                    >Between</option>
                                    <option value="above"
                                    <?php if (isset($income) && $gender == "above") echo "checked"; ?> >Above</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <h3>Contact</h3>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input class="form-control input-lg" type="tel" name="phone" value="<?php echo $phone; ?>"
                                       placeholder="Phone Number *" maxlength="7" pattern="[0-9]{7}" required="" oninvalid="this.setCustomValidity('Please enter a valid phone number.')"
                                       oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input class="form-control input-lg" type="email" name="email" value="<?php echo $email; ?>"
                                       placeholder="Email" maxlength="40" required="" oninvalid="this.setCustomValidity('Please enter a valid email.')"
                                       oninput="setCustomValidity('')">
                            </div>
                        </div>
                    </div>
                    <h3>Password</h3>

                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input class="form-control input-lg" type="password" name="password"
                                       value="<?php echo $password; ?>" placeholder="Password *" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input class="form-control input-lg" type="password" name="confirmpassword"
                                       value="<?php echo $confirmpassword; ?>" placeholder="Confirm Password *" required>
                                <span id='message'></span>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div>
					<span class="button-checkbox">
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1" required>   By checking this box, it means that you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a>
                        set out by this site.
					</span>
                        </div>
                    </div>

                    <br>
                    <div class="row justify-content-center">
                        <div class="g-recaptcha" data-sitekey="6Ldg4mYUAAAAAJutkOuTPSbCscDkkYwF9KhI0aYW"></div>
                    </div>

                    <br>
                    <div class="row justify-content-center">
                        <div class="col-xs-4 col-md-4"><input class="btn btn-danger btn-block btn-lg" type="button" onclick="reset()" value="CANCEL"></div>

                        <div class="col-xs-4 col-md-4"><input type="submit" value="PROCEED" class="btn btn-success btn-block btn-lg" tabindex="7"></div>
                    </div>

                </form>
            </div>
        </div>


        <div class="modal fade" id="t_and_c_m" tabindex="-1" role="document" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Terms & Conditions</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam
                            nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus
                            ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam
                            nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus
                            ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam
                            nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus
                            ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam
                            nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus
                            ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam
                            nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus
                            ipsa porro delectus quidem dolorem ad.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>


</div>

<script>
    function reset() {
        document.getElementById("form").reset();
    }
</script>

</body>


</html>