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
                        <label for="website-name" class="form-label">Name</label>
                        <input type="text" value="" class="form-control" id="website-name" name="website-name">
                    </div>
                    <!-- Service List -->
                    <div class="mb-3">
                        <label for="website-service-list" class="form-label">Service</label>
                    </div>
                    <div class="project-service-list">
                        <div class="input-group mb-3 item">                            
                            <span class="input-group-text" id="basic-addon1">Services</span>
                            <input type="text" value="" name="project-services-title[]" class="form-control project-services-title" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            <input type="text" value="" name="project-services-subtitle[]" class="form-control project-services-subtitle" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>                                          
                    </div>                    
                    <div class="input-group mb-3">
                        <button type="button" class="btn btn-success" id="add-project-service">Add More Items</button>
                    </div>
                    <!--  About -->                    
                    <div class="mb-3">
                        <label for="website-about" class="form-label">About Services</label>
                        <textarea class="form-control" name="website-about" id="website-about" rows="3"></textarea>
                    </div>
                    <!--  About service list -->
                    <div class="about-service-list">
                        <div class="input-group mb-3 item">
                            <span class="input-group-text" id="basic-addon1">Project Featue</span>
                            <input type="text" value="" name="about-services[]" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>                      
                    </div>
                    <div class="input-group mb-3">
                        <button type="button" class="btn btn-success" id="add-about-service">Add More Items</button>
                    </div>
                     <!-- Website Phone number -->
                     <div class="mb-3">
                        <label for="website-phone" class="form-label">Number List</label>
                    </div>
                     <div class="website-phone-list">
                        <div class="input-group mb-3 item">
                            <span class="input-group-text" id="basic-addon1">Project Featue</span>
                            <input type="text" value="" name="phone-numbers[]" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        
                    </div>
                    <div class="input-group mb-3">
                        <button type="button" class="btn btn-success" id="add-phone-number">Add More Items</button>
                    </div>
                    <!-- Website Email -->
                    <div class="mb-3">
                        <label for="website-email" class="form-label">Website Email</label>
                        <input type="text" value="" class="form-control" id="website-email" name="website-email">
                    </div>
                    <!-- Website address -->
                    <div class="mb-3">
                        <label for="website-address" class="form-label">Web Address</label>
                        <input type="text" value="" class="form-control" id="website-address" name="website-address">
                    </div>
                    <!--  Social Media Links -->
                    <div class="mb-3">
                        <label for="company-location" class="form-label">Facbook</label>
                        <input type="text" value="" class="form-control" id="company-location" name="facebook">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
            <div class="preview col-sm">

            </div>
        </div>
</div>
@include('admin.dashboard.footer')
{{-- <?php use App\Http\Controllers\AdminFooter;
echo AdminFooter::init(); ?> --}}