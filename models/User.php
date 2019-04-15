<?php
    require_once 'Model.php';

    /**
     * Created by PhpStorm.
     * User: Art3mis
     * Date: 2019-04-14
     * Time: 11:22
     */
    class User extends Model
    {

        // we define 3 attributes
        public $user_id;
        public $first_name;
        public $last_name;
        public $bio;
        public $email;
        public $password;
        public $date_created;
        public $last_login;

        public function __construct($user_id, $first_name, $date_created, $last_name, $bio, $email, $password)
        {
            parent::__construct();
            $this->user_id = $user_id;
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->date_created = $date_created;
            $this->bio = $bio;
            $this->email = $email;
            $this->password = $password;
        }

        public static function create()
        {
            $pdo = MY_PDO::getInstance();

            //If the POST var "register" exists (our submit button), then we can
            //assume that the user has submitted the registration form.
            if (isset($_POST['registerUser'])) {

                //Retrieve the field values from our registration form.
                $first_name = !empty($_POST['first_name']) ? trim($_POST['first_name']) : null;
                $last_name = !empty($_POST['last_name']) ? trim($_POST['last_name']) : null;
                $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
                $bio = !empty($_POST['bio']) ? trim($_POST['bio']) : null;
                $date_created = date('Y-m-d');
                $password = !empty($_POST['password']) ? trim($_POST['password']) : null;

                //TODO: Add password confirmation test - ALEX
                //TODO: ADD: Error checking (username characters, password length, etc). ALEX
                //Basically, you will need to add your own error checking BEFORE
                //the prepared statement is built and executed.

                //Now, we need to check if the supplied username already exists.
                $sql = 'SELECT COUNT(blog_site.blog_user.email) AS num FROM blog_site.blog_user WHERE email = :email';

                $stmt = $pdo->prepare($sql);

                //Bind the provided username to our prepared statement.
                $stmt->bindValue(':email', $email);

                //Execute.
                $stmt->execute();

                //Fetch the row.
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                //If the provided username already exists - display error.
                //TO ADD - Your own method of handling this error. For example purposes,
                //I'm just going to kill the script completely, as error handling is outside
                //the scope of this tutorial.
                if ($row['num'] > 0) {
                    die('That email already exists!');
                }

                //Hash the password as we do NOT want to store our passwords in plain text.
                $passwordHash = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12));

                //Construct the SQL statement and prepare it.
                $sql = 'Insert into blog_site.blog_user(first_name, last_name, date_created, email, bio, password) values (:first_name, :last_name, :date_created, :email, :bio, :password)';
                $stmt = $pdo->prepare($sql);

                //Bind the provided username to our prepared statement.
                $stmt->bindValue(':first_name', $first_name);
                $stmt->bindValue(':last_name', $last_name);
                $stmt->bindValue(':date_created', $date_created);
                $stmt->bindValue(':email', $email);
                $stmt->bindValue(':bio', $bio);
                $stmt->bindValue(':password', $passwordHash);

                //Execute the statement and insert the new account.
                $result = $stmt->execute();

                //If the signup process is successful.
                if ($result) {
                    //What you do here is up to you!
                    echo 'Thank you for registering with our website.';
                }

            }

        }

        public static function login()
        {
            $pdo = MY_PDO::getInstance();

            //If the POST var "login" exists (our submit button), then we can
            //assume that the user has submitted the login form.
            if (isset($_POST['login'])) {

                //Retrieve the field values from our login form.
                $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
                $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

                //Retrieve the user account information for the given email - does this email exists in DB.
                $sql = 'SELECT * FROM blog_site.blog_user WHERE email = :email';
                $stmt = $pdo->prepare($sql);
                //Bind value.
                $stmt->bindValue(':email', $email);
                //Execute.
                $stmt->execute();
                //Fetch row.
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                //If $row is FALSE.
                if ($user === false) {
                    //Could not find a user with that email!
                    //PS: You might want to handle this error in a more user-friendly manner!
                    die('Incorrect username / password combination!');
                } else {
                    //User account found. Check to see if the given password matches the
                    //password hash that we stored in our users table.

                    //Compare the passwords.
                    $validPassword = password_verify($passwordAttempt, $user['password']);

                    //If $validPassword is TRUE, the login has been successful.
                    if ($validPassword) {

                        //Provide the user with a login session.
                        $_SESSION['user_id'] = $user['user_id'];
                        $_SESSION['logged_in'] = time(); // TODO: Add last_logged_in to user DB

                        // Redirect to the home page.
                        header('Location: /index.php', true, 302);

                    } else {
                        //$validPassword was FALSE. Passwords do not match.
                        die('Incorrect username / password combination!');
                    }
                }

            }
        }

        public static function logout()
        {
            $pdo = MY_PDO::getInstance();

            //If the POST var "login" exists (our submit button), then we can
            //assume that the user has submitted the login form.
            if (isset($_POST['logout'])) {

                // make sure you don't do unset($_SESSION);
                unset($_SESSION['user_id']);
                session_destroy();
                // Redirect to the home page.

                header('Location: /', true, 302);

            }
        }

    }
