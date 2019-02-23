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
                        <span class="text-uppercase page-subtitle">Notes</span>

                    </div>


                </div>

                <div class="row">
                    <div class="col-lg-4 col-4">
                        <div class="cardt card-smallt user-teams mb-4">
                            <div class="card-headert border-bottom">

                                <div class="block-handle"></div>
                            </div>
                            <div class="card-body p-0">
                                <div class="container-fluid">
                                    <div class="row px-3">
                                        <div class="col user-teams__info pl-3">
                                            <h6 class="m-0">Team Edison</h6>
                                            <span class="text-light">21 Members</span>
                                        </div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col user-teams__info pl-3">
                                            <h6 class="m-0">Team Edison</h6>
                                            <span class="text-light">21 Members</span>
                                        </div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col user-teams__info pl-3">
                                            <h6 class="m-0">Team Edison</h6>
                                            <span class="text-light">21 Members</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-8">
                        <div class="card card-small mb-3">
                            <div class="card-body">
                                <form class="add-new-post">
                                    <div id="editor-container" class="add-new-post__editor mb-1"></div>
                                </form>
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
    $(".7").addClass("active")
</script>

