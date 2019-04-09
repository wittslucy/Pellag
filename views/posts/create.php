<div class="form-container">
    <h2>Fill in the following form to create a new product:</h2>

    <form action="" method="POST" class="w3-container" enctype="multipart/form-data">
        <div class="form-group">
            <label for="productName">Name</label>
            <input type="text" class="form-control" id="productName" aria-describedby="productName"
                   placeholder="Enter product name">
        </div>
        <div class="form-group">
            <label for="productPrice">Price</label>
            <input type="text" class="form-control" id="productPrice" placeholder="Product Price">
        </div>

        <div class="form-group">
            <input type="hidden"
                   name="MAX_FILE_SIZE"
                   value="10000000"
            />
            <input type="file" name="myUploader" class="w3-btn w3-pink" required/>
        </div>
        <button type="submit" value="Add Product" class="btn btn-primary">Add Product</button>

    </form>
</div>