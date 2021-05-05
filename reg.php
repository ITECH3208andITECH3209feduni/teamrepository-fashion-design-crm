<main class="login-bg">

<div class="register-form-area">
    <form data-submit-login="<?=APP_URL.'reg/doregistration'?>" method="post">
    <span class="errorShow"></span>
<div class="register-form text-center">

<div class="register-heading">
<span>Sign Up</span>
<p>Create your account to get full access</p>
</div>

<div class="input-box">
<div class="single-input-fields">
<label>Full name</label>
<input type="text" name="reg_username" placeholder="Enter full name">
</div>
<div class="single-input-fields">
<label>Email Address</label>
<input type="email" name="reg_email" placeholder="Enter email address">
</div>
<div class="single-input-fields">
<label>Password</label>
<input type="password" name="reg_pass" placeholder="Enter Password">
</div>
<div class="single-input-fields">
<label>Confirm Password</label>
<input type="password" name="reg_cpass" placeholder="Confirm Password">
</div>
</div>

<div class="register-footer">
<p> Already have an account? <a href="<?=APP_URL?>login"> Login</a> here</p>

  <button type="submit" class="submit-btn3 loginButton">Register</button>
<button type="button" class="submit-btn2 disabledButton" style="display: none;">Processing...</button>
</div>
</div></form>
</div>

</main><br><br><br>
