<?php
  include '../db/connection.php';
  $msg = "";
  if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $qualification = isset( $_POST['qualification'] ) ? $_POST['qualification'] : [];

    $study  = implode(",",$qualification);

    $query = "UPDATE `ids_records` SET `name` = '{$name}' ,`email` = '{$email}' , `address` = '{$address}' , `phone` = '{$phone}' , `password` = '{$password}' , `gender` = '{$gender}' , `qualification` = '{$study}' WHERE `id` = '{$_GET['id']}'";
    
    $Update = mysqli_query($con,$query);
    $msg = "Insert Success";
    if($insert == false){
      $msg = "Insert Error:";
    }

  }
  
  $query    = "SELECT * FROM `ids_records` WHERE `id` = '{$_GET['id']}'";
  $result   = mysqli_query($con, $query);
  $response = mysqli_fetch_assoc($result);

  $quali = explode(",",$response['qualification']);

  include './../header/header.php';
?>
<form method="post">
  <div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p>You are 30 seconds away from earning your own money!</p>
            <input type="submit" name="" value="Login"/><br/>
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                </li>
            </ul>
            <?php echo $msg; ?>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Apply as a Employee</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" name="name" placeholder="User Name *" value="<?php echo $response['name']; ?>" required/>
                            </div>
                            <!-- <div class="form-group">
                              <input type="text" class="form-control" placeholder="Last Name *" value="" />
                            </div> -->
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password *" value="<?php echo $response['password']; ?>" />
                            </div>
                            <!-- <div class="form-group">
                                <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
                            </div> -->


                            <div class="form-group">
                              <textarea name="address" class="form-control" placeholder="Address"> <?php echo $response['address']; ?> </textarea>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Your Email *" value="<?php echo $response['email']; ?>" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="<?php echo $response['email']; ?>" />
                            </div>
                            <div class="form-group">
                              <p>Gender :</p>
                                <div class="maxl">
                                    <label class="radio inline"> 
                                        <input type="radio" name="gender" value="male" <?php echo ($response['gender'] == 'male') ? 'checked' : ''; ?> >
                                        <span> Male </span> 
                                    </label>
                                    <label class="radio inline"> 
                                        <input type="radio" name="gender" value="female" <?php echo ($response['gender'] == 'female') ? 'checked' : ''; ?> >
                                        <span>Female </span> 
                                    </label>
                                    <label class="radio inline"> 
                                        <input type="radio" name="gender" value="other" <?php echo ($response['gender'] == 'other') ? 'checked' : ''; ?> >
                                        <span>Other </span> 
                                    </label>                                    
                                </div>
                            </div>  
                            <div class="form-group">
                              <p>Qualification :</p>
                              <div class="maxl">
                                  <label class="checkbox inline"> 
                                    <input type="checkbox" name="qualification[]" value="MCA" <?php echo ($quali[0] == 'MCA') ? 'checked' : ''; ?> >
                                    <span> MCA </span> 
                                  </label>
                                  <label class="radio inline"> 
                                    <input type="checkbox" name="qualification[]" value="BBA" <?php echo ($quali[1] == 'BBA') ? 'checked' : ''; ?> >
                                    <span>BBA </span> 
                                  </label>
                              </div>
                            </div>                                                            
                            <input type="submit" class="btnRegister" name="register"  value="Register"/>
                        </div>
                    </div>
                </div>
                <!-- <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Apply as a Hirer</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                    <option>What is your Birthdate?</option>
                                    <option>What is Your old Phone Number</option>
                                    <option>What is your Pet Name?</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="`Answer *" value="" />
                            </div>
                            <input type="submit" class="btnRegister" name="register" value="Register"/>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

  </div>
</form>
<?php 
  include './../header/footer.php';
?>    