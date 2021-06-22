@include('admin.dashboard.sidebar')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>
        Create Post
        </h3>
    </div>
    <div class="page-content">
        <div class="row">
            <div class="create-post col-sm">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="post-title" class="form-label">Post Title</label>
                        <input type="text" class="form-control" id="post-title" name="post-title">
                    </div>
                    <div class="mb-3">
                        <label for="post-description" class="form-label">Post Description</label>
                        <textarea class="form-control" name="post-description" id="post-description" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <select class="form-select" aria-label="Default select example" name="post-category">
                                <option selected>Catgory</option>
                                <option value="website">Programming & Tech</option>
                                <option value="android">Physics</option>
                                <option value="ui">Chemistry</option>
                                <option value="ui">Math</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <select class="form-select" aria-label="Default select example" name="post-category">
                                <option selected>Sub Category</option>
                                <option value="website">Python</option>
                                <option value="android">PHP</option>
                                <option value="ui">C++</option>
                                <option value="ui">Javascript</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="formFile" class="form-label">Add Image</label>
                        <input class="form-control" type="file" id="formFile" name="featured_image">
                      </div>
                    <button type="submit" class="btn btn-primary">Post</button>
                </form>
            </div>
            <div class="preview col-sm">

            </div>
        </div>
</div>
@include('admin.dashboard.footer')