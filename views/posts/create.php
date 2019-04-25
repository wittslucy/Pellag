<div class="form-container" style="width: 70%; margin: 0 auto">
    <div class="dashboardcard">
        <h5 style="text-align: center">Create a new post below:</h5>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="post_title">Title</label>
                <input type="text" class="form-control" name="post_title" id="post_title" placeholder="Post title"
                       required/>
            </div>
            <div class="form-group">
                <label for="post_content">Write your stuff</label>
                <textarea rows="3" maxlength="2500" class="md-textarea form-control" name="post_content" id="post_content" placeholder="Post Content"></textarea>
                <small class="form-text text-muted">2500 characters</small>
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
            <button type="submit" name="createpost" class="btn btn-primary">Publish Post</button>

        </form>
    </div>



</div>