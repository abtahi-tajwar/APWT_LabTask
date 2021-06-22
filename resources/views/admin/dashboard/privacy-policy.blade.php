@include('admin.dashboard.sidebar')
{{-- <?php use App\Http\Controllers\Sidebar;
echo Sidebar::init(); ?> --}}
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>
        Edit Website Information
        </h3>
    </div>
    <div class="page-content">
        <div class="row">
            <div class="create-project col-sm">
                <form action="" method="POST">
                    @csrf
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="website-name" class="form-label">Moderator Name</label>
                        <input type="text" value="" class="form-control" id="moderator-name" name="moderator-name">
                    </div>
                   
                    
                   
                    <!-- New Policy -->                    
                    <div class="mb-3">
                        <label for="website-about" class="form-label">New Policy</label>
                        <textarea class="form-control" name="new-policy" id="new-policy" rows="3"></textarea>
                    </div>
                    <!--  policy list -->
                    <div class="new-policy-list">
                        <div class="input-group mb-3 item">
                            <span class="input-group-text" id="basic-addon1">Policy Featue</span>
                            <input type="text" value="" name="about-services[]" class="form-control" placeholder="Policy name" aria-label="Username" aria-describedby="basic-addon1">
                        </div>                      
                    </div>
                    <div class="input-group mb-3">
                        <button type="button" class="btn btn-success" id="add-about-service">Add More</button>
                    </div>

                    <!-- Edit Existing Policy -->                    
                    <div class="mb-3">
                        <label for="website-about" class="form-label">Update Policy</label>
                        <textarea class="form-control" name="new-policy" id="new-policy" rows="3"></textarea>
                    </div>
                    <!--  policy list -->
                    <div class="new-policy-list">
                        <div class="input-group mb-3 item">
                            <span class="input-group-text" id="basic-addon1">Policy Featue</span>
                            <input type="text" value="" name="about-services[]" class="form-control" placeholder="Policy name" aria-label="Username" aria-describedby="basic-addon1">
                        </div>                      
                    </div>
                    <div class="input-group mb-3">
                        <button type="button" class="btn btn-success" id="add-about-service">Update Policy</button>
                    </div>
                     
            <div class="preview col-sm">

            </div>
        </div>
</div>
@include('admin.dashboard.footer')