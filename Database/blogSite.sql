# Drop anything lingering around.
DROP DATABASE IF EXISTS blogsite;
DROP DATABASE IF EXISTS blog_site;

# Create a database
CREATE DATABASE IF NOT EXISTS blog_site;
use blog_site;

# TABLES 
# Create table for users
CREATE TABLE IF NOT EXISTS blog_user
(
  user_id      int          not null primary key AUTO_INCREMENT,
  first_name   varchar(30)  not null,
  last_name    varchar(50)  not null,
  bio          varchar(255),
  email        varchar(255) not null,
  password     varchar(255) not null,
  date_created date         not null,
  last_login   date
);

# Populate table with test user
INSERT INTO blog_user (first_name, last_name, bio, email, password, date_created, last_login)
VALUES ('TestFirst', 'TestLast', 'I am a test', 'test@gmail.com', 'supersecure1!', curdate(), curdate());

# Create table for posts	
CREATE TABLE IF NOT EXISTS blog_post
(
  post_id      int  not null primary key AUTO_INCREMENT,
  user_id      int  not null,
  post_content text,
  date_created date not null,
  last_update  date,
  post_title   varchar(100),
  FOREIGN KEY (user_id) REFERENCES blog_user (user_id)
);

# Populate table with test post
INSERT INTO blog_post (user_id, post_content, date_created, last_update, post_title)
VALUES (1, 'Boring content here', curdate(), curdate(), 'I am a test post');

# Create table for comments	
CREATE TABLE IF NOT EXISTS comment
(
  comment_id      int  not null primary key AUTO_INCREMENT,
  post_id         int  not null,
  comment_content varchar(255),
  date_created    date not null,
  user_id         int  not null,
  FOREIGN KEY (user_id) REFERENCES blog_user (user_id),
  FOREIGN KEY (post_id) REFERENCES blog_post (post_id)
);

# Populate table with test comment
INSERT INTO comment (post_id, comment_content, date_created, user_id)
VALUES (1, 'I am a test comment', curdate(), 1);

# PROCEDURES

DELIMITER $$
# Stored procedure to create a user
CREATE
  DEFINER =`root`@`localhost`
  PROCEDURE `AddUser`(INOUT `NewFirstName` VARCHAR(30), INOUT `NewLastName` VARCHAR(50),
                      INOUT `NewEmail` VARCHAR(25), INOUT `NewPassword` VARCHAR(15), INOUT `NewBio` VARCHAR(255))
INSERT INTO blog_user (first_name, last_name, email, password, bio)
VALUES (NewFirstName, NewLastName, NewEmail, NewPassword, NewBio)$$

# Stored procedure to add last login whenever a user logs in.
CREATE
  DEFINER =`root`@`localhost`
  PROCEDURE `UpdateUserLastLogin`(INOUT `UserID` INT)
BEGIN
  UPDATE blog_user
  SET last_login = curdate()
  WHERE user_id = `UserID`;
END$$

# Stored procedure to delete a user
CREATE
  DEFINER =`root`@`localhost`
  PROCEDURE `DeleteUser`(INOUT `UserID` INT)
BEGIN
  DELETE FROM blog_user WHERE user_id = `UserID`;
END$$

# Stored procedure to add a blog post
CREATE
  DEFINER =`root`@`localhost`
  PROCEDURE `AddBlogPost`(INOUT `BlogTitle` VARCHAR(100), INOUT `BlogContent` TEXT, INOUT `UserID` INT,
                          INOUT `DateCreated` date)
INSERT INTO blog_post (post_title, post_content, user_id, date_created)
VALUES (BlogTitle, BlogContent, UserID, DateCreated)$$

# Stored procedure to edit a blog post
CREATE
  DEFINER =`root`@`localhost`
  PROCEDURE `EditBlogPost`(INOUT `BlogTitle` VARCHAR(100), INOUT `BlogContent` TEXT, INOUT `PostID` INT)
BEGIN
  UPDATE blog_post
  SET last_update            = curdate(),
      blog_post.post_title   = `BlogTitle`,
      blog_post.post_content = `BlogContent`
  WHERE blog_post.post_id = `PostID`;
END$$

# Stored procedure to delete a blog post
CREATE
  DEFINER =`root`@`localhost`
  PROCEDURE `DeleteBlogPost`(INOUT `PostID` INT)
BEGIN
  DELETE FROM blog_post WHERE blog_post.post_id = `PostID`;
END$$

# Stored procedure to add a comment
CREATE
  DEFINER =`root`@`localhost`
  PROCEDURE `AddComment`(INOUT `CommentContent` VARCHAR(255), INOUT `PostID` TEXT, INOUT `UserID` INT,
                         INOUT `DateCreated` DATE)
INSERT INTO comment (comment_content, post_id, user_id, date_created)
VALUES (CommentContent, PostID, UserID, DateCreated)$$

# Stored procedure to delete a comment
CREATE
  DEFINER =`root`@`localhost`
  PROCEDURE `DeleteComment`(INOUT `CommentID` INT)
BEGIN
  DELETE FROM comment WHERE comment_id = `CommentID`;
END$$

# Stored procedure to select all blog posts, ordered by date created
CREATE
  DEFINER =`root`@`localhost`
  PROCEDURE `SelectAllPosts`() NO SQL
BEGIN
  SELECT *
  FROM blog_post
  ORDER BY date_created;
END$$

# Stored procedure to select blog posts belonging to a particular user
CREATE
  DEFINER =`root`@`localhost`
  PROCEDURE `SearchPostsByAuthor`(INOUT `AuthorID` INT)
BEGIN
  SELECT *
  FROM blog_post
  WHERE blog_post.user_id = `AuthorID`
  ORDER BY date_created;
END$$

# Stored procedure to select blog posts with a particular postID
CREATE
  DEFINER =`root`@`localhost`
  PROCEDURE `SearchPostsByID`(INOUT `PostID` INT)
BEGIN
  SELECT *
  FROM blog_post
  WHERE blog_post.post_id = `PostID`;
END$$

# Stored procedure to select blog posts with a certain word in the title
CREATE
  DEFINER =`root`@`localhost`
  PROCEDURE `SearchPostsByKeyword`(INOUT `Keyword` VARCHAR(30))
BEGIN
  SELECT *
  FROM `blog_site`.`blog_post`
  WHERE (CONVERT(`post_content` USING utf8) LIKE '%' + @Keyword + '%' OR
         CONVERT(`post_title` USING utf8) LIKE '%' + @Keyword + '%');
END
DELIMITER;
# End of procedures