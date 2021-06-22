@include('admin.dashboard.sidebar')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
<div class="page-heading">
    <h3>Website Statistics</h3>
</div>
<div class="page-content">
    <div class="row">
        <div class="col-12 col-lg-4">
            <!-- Moderators List -->
            <div class="card mb-3">
                <div class="card-header">
                    <h4 class="card-title">Moderators</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <p>
                            List Of All Admins of the website
                        </p>
                        <ul class="list-group">
                            <li class="list-group-item active">Abtahi Tajwar</li>
                            <li class="list-group-item">Fahim Faisal</li>
                            <li class="list-group-item">Md. Atik</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">chocolate cheesecake candy</li>
                            <li class="list-group-item">Oat cake icing pastry pie carrot</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <h2>Search User</h2>
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
        </div>
        <div class="col-12 col-lg-8">
            <div class="container">
                <div class="avatar avatar-xl">
                        <img src="{{ asset('img/admin/5.jpg') }}" alt="">                       
                </div>
                <h1 class="display-2">Abtahi Tajwar</h1>
                <form action="" class="mb-3">
                    <select class="form-select w-25" aria-label="Disabled select example" disabled>
                        <option selected>Open this select menu</option>
                        <option value="admin">Admin</option>
                        <option value="moderator" selected>Moderator</option>
                        <option value="instructor">Instructor</option>
                        <option value="student">Student</option>
                      </select>
                </form>
                <div class="card">
                    <div class="card-header">
                        <h4>Top Answers</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-lg">
                                <thead>
                                    <tr>
                                        <th>Author</th>
                                        <th>Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-3">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-md">
                                                    <img src="{{ asset('img/admin/5.jpg') }}" alt="Face 1">
                                                </div>
                                                <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">Congratulations on your graduation!</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-3">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-md">
                                                    <img src="{{ asset('img/admin/4.jpg') }}" alt="Face 1">
                                                </div>
                                                <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">Wow amazing design! Can you make another
                                                tutorial for
                                                this design?</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Top posts -->
                <div class="card">
                    <div class="card-header">
                        <h4>Top Posts</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-lg">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Post excerpt</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-3">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">Congratulations on your graduation!</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-3">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">Wow amazing design! Can you make another
                                                tutorial for
                                                this design?</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.dashboard.footer')