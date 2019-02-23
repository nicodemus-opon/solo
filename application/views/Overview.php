<?php
?>
<?php
$this->load->view('includes/head');
?>
<div class="loaderx">

</div>
<div class="container-fluid ">
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
                        <span class="text-uppercase page-subtitle">Overview</span>
                        <h3 class="page-title">Analytics</h3>
                    </div>


                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                <div class="stats-small card card-small">
                                    <div class="card-body px-0 pb-0">
                                        <div class="d-flex px-3">
                                            <div class="stats-small__data">
                                                <span class="stats-small__label mb-1 text-uppercase">Total Revenue</span>
                                                <h6 class="stats-small__value count m-0">$29,219</h6>
                                            </div>
                                            <div class="stats-small__data text-right">
                                                <span class="stats-small__percentage stats-small__percentage--increase">2.93%</span>
                                            </div>
                                        </div>
                                        <canvas height="53" class="sales-overview-small-stats-1"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                <div class="stats-small card card-small">
                                    <div class="card-body px-0 pb-0">
                                        <div class="d-flex px-3">
                                            <div class="stats-small__data">
                                                <span class="stats-small__label mb-1 text-uppercase">Revenue Today</span>
                                                <h6 class="stats-small__value count m-0">$8,391</h6>
                                            </div>
                                            <div class="stats-small__data text-right">
                                                <span class="stats-small__percentage stats-small__percentage--decrease">7.21%</span>
                                            </div>
                                        </div>
                                        <canvas height="53" class="sales-overview-small-stats-2"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                <div class="stats-small card card-small">
                                    <div class="card-body px-0 pb-0">
                                        <div class="d-flex px-3">
                                            <div class="stats-small__data">
                                                <span class="stats-small__label mb-1 text-uppercase">Total Customers</span>
                                                <h6 class="stats-small__value count m-0">891</h6>
                                            </div>
                                            <div class="stats-small__data text-right">
                                                <span class="stats-small__percentage stats-small__percentage--increase">3,71%</span>
                                            </div>
                                        </div>
                                        <canvas height="53" class="sales-overview-small-stats-3"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                <div class="stats-small card card-small">
                                    <div class="card-body px-0 pb-0">
                                        <div class="d-flex px-3">
                                            <div class="stats-small__data">
                                                <span class="stats-small__label mb-1 text-uppercase">New Customers</span>
                                                <h6 class="stats-small__value count m-0">29</h6>
                                            </div>
                                            <div class="stats-small__data text-right">
                                                <span class="stats-small__percentage stats-small__percentage--decrease">2.71%</span>
                                            </div>
                                        </div>
                                        <canvas height="53" class="sales-overview-small-stats-4"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-8 col-md-12 mb-4">
                        <!-- Sales Report -->
                        <div class="card card-small h-100">
                            <div class="card-header border-bottom">
                                <h6 class="m-0">Sales report</h6>
                                <div class="block-handle"></div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row border-bottom py-2 bg-light">
                                    <div class="col-12 col-sm-6 d-flex mb-2 mb-sm-0">
                                        <div class="btn-group btn-group-sm btn-group-toggle d-flex my-auto mx-auto mx-sm-0"
                                             data-toggle="buttons">
                                            <label class="btn btn-white">
                                                <input type="radio" name="options" id="option1" autocomplete="off"> Hour
                                            </label>
                                            <label class="btn btn-white">
                                                <input type="radio" name="options" id="option2" autocomplete="off"> Day
                                            </label>
                                            <label class="btn btn-white">
                                                <input type="radio" name="options" id="option2" autocomplete="off"> Week
                                            </label>
                                            <label class="btn btn-white active">
                                                <input type="radio" name="options" id="option2" autocomplete="off"
                                                       checked> Month </label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div id="sales-report-date-range"
                                             class="input-daterange input-group input-group-sm my-auto ml-auto mr-auto ml-sm-auto mr-sm-0"
                                             style="max-width: 350px;">
                                            <input type="text" class="input-sm form-control" name="start"
                                                   placeholder="Start Date" id="analytics-overview-date-range-1">
                                            <input type="text" class="input-sm form-control" name="end"
                                                   placeholder="End Date" id="analytics-overview-date-range-2">
                                            <span class="input-group-append">
                            <span class="input-group-text">
                              <i class="material-icons"></i>
                            </span>
                          </span>
                                        </div>
                                    </div>
                                </div>
                                <div id="sales-overview-sales-report-legend"></div>
                                <canvas height="130" class="sales-overview-sales-report"></canvas>
                            </div>
                        </div>
                        <!-- End Sales Report -->
                    </div>

                    <div class="col-lg-4 col-sm-12 col-md-12 mb-4">
                        <!-- Sales by Category -->
                        <div class="card sc-stats card-small h-100">
                            <div class="card-header border-bottom">
                                <h6 class="m-0">Projects</h6>
                                <div class="block-handle"></div>
                            </div>
                            <div class="card-body p-0">
                                <div class="container-fluid">
                                    <div class="row px-3">
                                        <div class="col-2 sc-stats__image">
                                            <img class="border rounded" src="images/sales-overview/product-shoes.jpg">
                                        </div>
                                        <div class="col sc-stats__title">Shoes</div>
                                        <div class="col-2 sc-stats__value text-right">12,281</div>
                                        <div class="col-3 sc-stats__percentage text-right">32.4%</div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col-2 sc-stats__image">
                                            <img class="border rounded"
                                                 src="images/sales-overview/no-product-image.jpg">
                                        </div>
                                        <div class="col sc-stats__title">Men's Jeans</div>
                                        <div class="col-2 sc-stats__value text-right">8,129</div>
                                        <div class="col-3 sc-stats__percentage text-right">28.4%</div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col-2 sc-stats__image">
                                            <img class="border rounded"
                                                 src="images/sales-overview/product-sportswear.jpg">
                                        </div>
                                        <div class="col sc-stats__title">Sportswear</div>
                                        <div class="col-2 sc-stats__value text-right">812</div>
                                        <div class="col-3 sc-stats__percentage text-right">12.2%</div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col-2 sc-stats__image">
                                            <img class="border rounded" src="images/sales-overview/product-basics.jpg">
                                        </div>
                                        <div class="col sc-stats__title">Basics</div>
                                        <div class="col-2 sc-stats__value text-right">29</div>
                                        <div class="col-3 sc-stats__percentage text-right">7.1%</div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col-2 sc-stats__image">
                                            <img class="border rounded"
                                                 src="images/sales-overview/product-sweaters.jpg">
                                        </div>
                                        <div class="col sc-stats__title">Sweaters</div>
                                        <div class="col-2 sc-stats__value text-right">3</div>
                                        <div class="col-3 sc-stats__percentage text-right">1.2%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-top">
                                <div class="row">
                                    <div class="col">
                                        <select class="custom-select custom-select-sm">
                                            <option selected>Last Week</option>
                                            <option value="1">Today</option>
                                            <option value="2">Last Month</option>
                                            <option value="3">Last Year</option>
                                        </select>
                                    </div>
                                    <div class="col text-right view-report">
                                        <a href="#">Full report &rarr;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Sales by Category -->
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
    $(".1").addClass("active")
</script>

