<div class="form-container">
    <h2>Please fill in your credentials to log in</h2>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="email">Email address</label>
            <input autofocus="autofocus" type="email" class="form-control" name="email" id="email"
                   aria-describedby="email" placeholder="Enter email" required/>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required/>
        </div>

        <button type="submit" name='login' class="btn btn-primary">LOGIN</button>
    </form>
</div>

<div class="form-container">
    <h2>
        Don't have an account? <a href='?controller=User&action=registerUser'>Sign up now</a>.
    </h2>
</div>

