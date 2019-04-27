
<form role="form" enctype='multipart/form-data' action="" method="post">
<fieldset>
<legend>Upload Images</legend>
<div class="form-group">
<label for="name">Image Title</label>
<input type="text" name="image_title" placeholder="Image Title" class="form-control" />
</div>
<div class="form-group">
<label for="name">Image Description:</label>
<input type="text" name="image_description" placeholder="Image Description (max 255 chars)" class="form-control" />
</div>
<div class="form-group">
<label for="name">Choose Image:</label>
<input type="file" name="uploaded_file" placeholder="Choose file (jpg only!)" class="form-control" />
</div>
<div class="form-group">
<input type="submit" name="upload" value="upload" class="btn btn-primary" />
</div>
</fieldset>
</form>
