<?php
?>
<?php
$this->load->view('includes/head');
?>
<div class="container-fluid">
    <div class="row">
        <!-- Main Sidebar -->
        <?php
        $this->load->view('includes/sidebar');
        ?>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
            <!-- Main Navbar -->
            <?php
            $this->load->view('includes/navbar');
            ?>
            <!-- / .main-navbar -->
            <div class="main-content-container container-fluid px-4">
                <!-- Page Header -->
                <div class="page-header row no-gutters py-4">
                    <div class="col-12 col-sm-4 text-center text-sm-left mb-4 mb-sm-0">
                        <span class="text-uppercase page-subtitle">Tasks</span>
                        <h3 class="page-title">My tasks</h3>
                    </div>


                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <div class="card card-small">
                            <div class="card-header border-bottom">
                                <h6 class="m-0">Tasks</h6>
                            </div>
                            <div class="card-body pt-0">
                                <div class="blog-comments__item d-flex p-3">
                                    <div class="blog-comments__avatar mr-3">
                                        <img src="assets/images/avatars/02.png" alt="User avatar">
                                    </div>
                                    <div class="blog-comments__content">
                                        <div class="blog-comments__meta text-muted">
                                            <a class="text-secondary" href="#">James Johnson</a> on <a
                                                class="text-secondary" href="#">Hello World!</a> <span
                                                class="text-muted">– 3 days ago</span>
                                        </div>
                                        <p class="m-0 my-1 mb-2 text-muted">Well, the way they make shows is, they make
                                            one show ...</p>
                                        <div class="blog-comments__actions">
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" class="btn btn-white">
                                                    <span class="text-success"><i
                                                            class="material-icons">check</i></span> Approve
                                                </button>
                                                <button type="button" class="btn btn-white">
                                                    <span class="text-danger"><i class="material-icons">clear</i></span>
                                                    Reject
                                                </button>
                                                <button type="button" class="btn btn-white">
                                                    <span class="text-light"><i
                                                            class="material-icons">more_vert</i></span> Edit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row border-bottom py-2 bg-ligh">
                                    <div class="col-12 col-lg-10">
                                        <div id=""
                                             class=" input-group input-group-lg my-auto ml-auto mr-auto ml-sm-auto mr-sm-0"
                                             style="max-widthi: 350px;">
                                            <textarea class="form-control"
                                                      placeholder="What do you have planned..."></textarea>

                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2 d-flex mb-2 mb-sm-0">
                                        <button type="button"
                                                class="btn btn-sm btn-white ml-auto mr-auto ml-sm-auto mr-sm-0 mt-3 mt-sm-0">
                                           <i class="material-icons">add</i> Add Task
                                        </button>
                                    </div>
                                </div>
                                <canvas height="130" style="max-width: 100% !important;"
                                        class="blog-overview-users"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            $this->load->view('includes/footer');
            ?>
        </main>
    </div>
</div>
<?php
$this->load->view('includes/end');
?>
<script>
    $(".6").addClass("active")
</script>

