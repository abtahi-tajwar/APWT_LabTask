@include('admin.dashboard.sidebar')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>
        Create Category
        </h3>
    </div>
    <div class="page-content">
        <div class="row">
            <div class="create-post col-sm">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="post-title" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="post-title" name="post-title">
                    </div>
                    <div class="mb-3">
                        <label for="post-description" class="form-label">Parent Category</label>
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Categories..">
                        <ul id="myUL">
                            <li><a href="#">Adele</a></li>
                            <li><a href="#">Agnes</a></li>

                            <li><a href="#">Billy</a></li>
                            <li><a href="#">Bob</a></li>

                            <li><a href="#">Calvin</a></li>
                            <li><a href="#">Christina</a></li>
                            <li><a href="#">Cindy</a></li>
                        </ul>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
            <div class="preview col-sm">

            </div>
        </div>
</div>
@include('admin.dashboard.footer')