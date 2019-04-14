<?php

$page_title='Login';
//include ('include/head.php');

?>
<p>Please fill in your credentials to log in</p>
<form action="" method="POST" class="w3-container">

<label for="email">Email:</label>
<input type="text" name="email" required autofocus="true">

<label for="password">Password:</label>
<input type="password" name="password" required>

</form>

<p>
Don't have an account? <a href='?controller=Pages&action=registerUser'>Sign up now</a>.
</p>
