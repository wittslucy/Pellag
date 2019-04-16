<!DOCTYPE html>
<html>
    <head>
        <script src="views/js/password-checker.js"></script>
    </head>
<div class="form-container">
    <h2>PLEASE REGISTER BELOW</h2>

    <form id="form" name="form" action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="email">Email address</label>
            <input autofocus="autofocus" type="email" class="form-control" name="email" id="email"
                   aria-describedby="email" placeholder="Enter email" required/>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required/>
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Password" required/>
        </div>
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name"
                   required/>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" required/>
        </div>
        <div class="form-group">
            <label for="bio">Write something about yourself</label>
            <textarea rows="3" maxlength="255" class="md-textarea form-control" name="bio" id="bio" placeholder="Bio"></textarea>
            <small class="form-text text-muted">255 characters</small>
        </div>

        <button type="submit" name='registerUser' value="registration" class="btn btn-primary">Submit</button>
    </form>
</div>

</html>