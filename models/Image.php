<?php
require 'Model.php';
    class Image extends Model
    {

        // we define attributes
        public $gallery_id;
        public $user_id;
        public $image_title;
        public $image_description;
        public $image_name;
        public $date_added;
        

        const AllowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
        const InputKey = 'uploaded_file';

        public function __construct($gallery_id, $user_id, $image_title, $image_description, $image_name, $date_added )
        {
            parent::__construct();
            $this->gallery_id = $gallery_id;
            $this->user_id=$user_id;
            $this->image_title = $image_title;
            $this->image_description = $image_description;
            $this->image_name = $image_name;
            $this->date_added = $date_added;
            

        }
public static function upload(){
    $pdo = MY_PDO::getInstance();
    
if(isset($_POST["upload"]) && $_SESSION["user_id"]) {
    
//Retrieve the field values from our registration form.
                $user_id = $_SESSION ['user_id'];
                $image_title = filter_input(INPUT_POST, 'image_title', FILTER_SANITIZE_SPECIAL_CHARS);
                $image_description = filter_input(INPUT_POST, 'image_description', FILTER_SANITIZE_SPECIAL_CHARS);
                $image_name=$_FILES["uploaded_file"]["name"];
 
if ($_FILES["uploaded_file"]["type"]=="image/gif"
|| $_FILES["uploaded_file"]["type"]=="image/jpeg"
|| $_FILES["uploaded_file"]["type"]=="image/pjpeg"
//|| $_FILES["uploaded_file"]["type"]=="image/png"
&& $_FILES["uploaded_file"]["size"]<20000) { if ($_FILES["uploaded_file"]["error"]>0) {
echo "Return Code:".$_FILES["uploaded_file"]["error"]."";
} else {

move_uploaded_file($_FILES["uploaded_file"]["tmp_name"],"views/images/".date('d-m-Y_H:i:s-').$image_name);
// image details into database table
$sql = "INSERT INTO gallery(gallery_id, user_id, image_title, image_description, image_name)
VALUES('', '". $_SESSION["user_id"]."', '".$image_title."', '".$image_description."', 'views/images/".date('d-m-Y_H:i:s-').$image_name."')";
$stmt = $pdo->prepare($sql);
    
                $stmt->bindValue(':user_id', $user_id);
                $stmt->bindValue(':image_title', $image_title);
                $stmt->bindValue(':image_description', $image_description);
                $stmt->bindValue(':image_name', $image_name);

                //Execute the statement and insert the new account.
                $stmt->execute();
}
}
}
}
                 public static function viewAll()
         {
            $pdo = MY_PDO::getInstance();

            $sqlQuery = <<<EOT
            SELECT * FROM gallery
EOT;
            /** @var MY_PDO $pdo */
            $result = $pdo->run($sqlQuery);

            if ($result) {
                $Images = $result->fetchAll(PDO::FETCH_ASSOC);
            } else {
                $Images = array();
            }

            return $Images;

        }

    }
    