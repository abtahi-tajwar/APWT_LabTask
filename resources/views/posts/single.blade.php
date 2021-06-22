@include('header')

<div class="container">
  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Trending Questions
      </h3>
      
      <div class="posts mb-3">
          <!-- Single Post -->
        <div class="index-single-post row border bg-light rounded-1 mb-2 py-1 p-3">
            <div class="row g-0">
                <!-- Post info section -->
                <div class="col-12 col-lg-8 d-flex align-items-center ms-2 mb-1">
                    <div class="text-primary">Category Name</div>
                    <div class="mx-1">|</div>
                    <div class="lh-sm text-muted align-self-end me-1">Posted By</div>
                    <a href="#user-profile" class="fs-6 text-success me-1 text-decoration-none">User Name</a href="#user-profile">
                    <div class="lh-sm text-danger align-self-end">3 hours ago</div>
                </div>
                <!-- Post header section  -->
                <div class="col-12 ps-2 border-top">
                    <div class="fs-4 fw-bold my-1"><a href="">How to know which method is best for dynamic speed calculation</a></div>
                </div>
                <div class="ms-3 pe-3 col-12 mb-2">
                    <div class="lh-sm text-dark text-wrap">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus dignissimos et ipsam dolorem modi nesciunt eius cumque. Maxime natus quas earum magni, modi esse tempore iusto? Nisi, ipsam at? Debitis at, veniam iste tempore molestiae in maxime inventore dolor quam facere. Magni maiores explicabo, doloremque magnam laboriosam placeat distinctio reiciendis unde! In quo odio fuga soluta cupiditate voluptatum qui iusto impedit dicta odit, adipisci assumenda saepe minus iste distinctio itaque dolores dignissimos quod quis eveniet delectus ullam obcaecati temporibus. Dicta impedit explicabo quibusdam labore unde. Enim quo odio reprehenderit possimus ipsum deleniti, repudiandae quas similique, tempore praesentium cupiditate saepe dolore?</div>
                </div>
                <div class="col-8 d-flex align-items-center border-top p-1 ">
                    <div class="border border-0 bg-info px-2" style="border-radius: 30px;"><a href=""><i class="fas fa-arrow-alt-circle-up me-1"></i>3.5K <i class="text-muted"></a>|<a href=""></i><i class="fas fa-arrow-alt-circle-down ms-1"></i></a></div>
                    <div class="mx-3"><i class="fas fa-comment-dots me-1"></i><a href="">741 Comments</a></div>
                    <div class="me-3"><i class="fas fa-eye me-1"></i>741 Views</div>
                </div>
                <div class="col-4 justify-content-end d-flex align-items-center border-top p-1 ">
                    <div class="mx-3"><i class="far fa-heart me-1"></i></i><a href="">Favourite</a></div>
                    <div class="me-3"><i class="fas fa-share me-1"></i><a href="">Share</a></div>
                    <div class="me-3"><i class="fas fa-ellipsis-h me-1"></i></div>
                </div>
            </div>
        </div>        
      </div>
      <!-- Comment Section -->
      <div class="mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="d-flex flex-column col-12 p-0">
                <div class="d-flex flex-row align-items-center text-left comment-top p-2 bg-white border-bottom px-4">
                    <div class="profile-image"><img class="rounded-circle" src="{{asset('img/admin/1.jpg')}}" width="70"></div>
                    <div class="d-flex flex-column-reverse flex-grow-0 align-items-center votings ml-1"><i class="fa fa-sort-up fa-2x hit-voting"></i><span>127</span><i class="fa fa-sort-down fa-2x hit-voting"></i></div>
                    <div class="d-flex flex-column ml-3">
                        <div class="d-flex flex-row post-title">
                            <h5>Is sketch 3.9.1 stable?</h5><span class="ml-2">(Jesshead)</span>
                        </div>
                        <div class="d-flex flex-row align-items-center align-content-center post-title"><span class="bdge mr-1">video</span><span class="mr-2 comments">13 comments&nbsp;</span><span class="mr-2 dot"></span><span>6 hours ago</span></div>
                    </div>
                </div>
                <div class="coment-bottom bg-white p-2 px-4">
                    <div class="d-flex flex-row add-comment-section mt-4 mb-4"><img class="img-fluid img-responsive rounded-circle mr-2 m-2" src="{{asset('img/admin/2.jpg')}}" width="38"><input type="text" class="form-control mr-3" placeholder="Add comment"><button class="btn btn-primary" type="button">Comment</button></div>
                    <div class="commented-section mt-2">
                        <div class="d-flex flex-row align-items-center commented-user">
                            <h5 class="mr-2">Corey oates</h5><span class="dot mb-1"></span><span class="mb-1 ml-2">4 hours ago</span>
                        </div>
                        <div class="comment-text-sm"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></div>
                        <div class="reply-section">
                            <div class="d-flex flex-row align-items-center voting-icons"><i class="fa fa-sort-up fa-2x mt-3 hit-voting"></i><i class="fa fa-sort-down fa-2x mb-3 hit-voting"></i><span class="ml-2">10</span><span class="dot ml-2"></span>
                                <h6 class="ml-2 mt-1">Reply</h6>
                            </div>
                        </div>
                    </div>
                    <div class="commented-section mt-2">
                        <div class="d-flex flex-row align-items-center commented-user">
                            <h5 class="mr-2">Samoya Johns</h5><span class="dot mb-1"></span><span class="mb-1 ml-2">5 hours ago</span>
                        </div>
                        <div class="comment-text-sm"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</span></div>
                        <div class="reply-section">
                            <div class="d-flex flex-row align-items-center voting-icons"><i class="fa fa-sort-up fa-2x mt-3 hit-voting"></i><i class="fa fa-sort-down fa-2x mb-3 hit-voting"></i><span class="ml-2">15</span><span class="dot ml-2"></span>
                                <h6 class="ml-2 mt-1">Reply</h6>
                            </div>
                        </div>
                    </div>
                    <div class="commented-section mt-2">
                        <div class="d-flex flex-row align-items-center commented-user">
                            <h5 class="mr-2">Makhaya andrew</h5><span class="dot mb-1"></span><span class="mb-1 ml-2">10 hours ago</span>
                        </div>
                        <div class="comment-text-sm"><span>Nunc sed id semper risus in hendrerit gravida rutrum. Non odio euismod lacinia at quis risus sed. Commodo ullamcorper a lacus vestibulum sed arcu non odio euismod. Enim facilisis gravida neque convallis a. In mollis nunc sed id. Adipiscing elit pellentesque habitant morbi tristique senectus et netus. Ultrices mi tempus imperdiet nulla malesuada pellentesque.</span></div>
                        <div class="reply-section">
                            <div class="d-flex flex-row align-items-center voting-icons"><i class="fa fa-sort-up fa-2x mt-3 hit-voting"></i><i class="fa fa-sort-down fa-2x mb-3 hit-voting"></i><span class="ml-2">25</span><span class="dot ml-2"></span>
                                <h6 class="ml-2 mt-1">Reply</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Comment section end -->

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>

        <div class="p-4">
            <h4 class="fst-italic">Subcategories</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">Quantam Mechanics</a></li>
              <li><a href="#">Neclear Science</a></li>
              <li><a href="#">Modern Physics</a></li>
              <li><a href="#">Theory</a></li>
              <li><a href="#">Traditional Physics</a></li>
              <li><a href="#">History of Physics</a></li>
            </ol>
          </div>

        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>
</div>
 @include('footer')
