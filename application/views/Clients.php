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
                        <span class="text-uppercase page-subtitle">Clients</span>
                        <h3 class="page-title">My clients</h3>
                    </div>


                </div>

                <div class="row">
                    <div class="col-12 ">
                        <table class="file-manager file-manager-list d-none table-responsive">
                            <thead>
                            <tr>
                                <th colspan="5" class="text-left bg-white">
                                    <button class="btn btn-blockj btn-primary"><i class="material-icons">person_add</i> New Client</button>
                                </th>
                            </tr>
                            <tr>
                                <th style="width: 10px;" class="hide-sort-icons"></th>
                                <th class="text-left">Name</th>
                                <th>Size</th>
                                <th>Type</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="file-manager__item-icon">
                                    <div>
                                        <i class="material-icons">person</i>
                                    </div>
                                </td>
                                <td class="text-left">
                                    <h5 class="file-manager__item-title">Projects</h5>
                                    <span class="file-manager__item-meta">Last opened 12 days ago.</span>
                                </td>
                                <td>7 GB</td>
                                <td>Directory</td>
                                <td class="file-manager__item-actions">
                                    <div class="btn-group btn-group-sm d-flex justify-content-end" role="group" aria-label="Table row actions">
                                        <button type="button" class="btn btn-white active-light">
                                            <i class="material-icons">&#xE254;</i>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <i class="material-icons">&#xE872;</i>
                                        </button>
                                    </div>
                                </td>
                            </tr>


                            </tbody>
                        </table>
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
    $(".2").addClass("active")
</script>

