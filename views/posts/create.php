<div class="form-container">
    <h2>Create a new post below:</h2>

    <!--if the uploader doesn't work just return code to form action="". Need to use postadd() to add to database?-->

    <form action="" method="POST" class="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="PostTitle">Title</label>
            <input type="text" class="form-control" id="post_title" #aria-describedby="productName" placeholder="Enter post title" required>
        </div>
        <div class="form-group">
            <label for="PostContent">Body</label>
            <input type="text" class="form-control" id="post_content" placeholder="Enter post content" required>
        </div>

        <div class="form-group">
            <label> Include an image? </label>
            <br>
            <input type="hidden"
                   name="MAX_FILE_SIZE"
                   value="10000000"
            />
            <input type="file" name="uploadimage" class="w3-btn w3-pink"/>
        </div>
        <button type="submit" value="createpost" class="btn btn-primary">Publish Post</button>

    </form>
</div>