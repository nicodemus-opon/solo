<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 2019-02-10
 * Time: 07:44
 */ ?>

<script type="text/javascript" src="assets/scripts/loader.js"></script>
<script src="assets/scripts/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="assets/scripts/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="assets/scripts/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="assets/scripts/Chart.min.js"></script>
<script src="assets/scripts/shards.min.js"></script>
<script src="assets/scripts/jquery.sharrre.min.js"></script>
<script src="assets/scripts/extras.1.3.1.min.js"></script>
<script src="assets/scripts/shards-dashboards.1.3.1.min.js"></script>
<script src="assets/scripts/app/app-analytics-overview.1.3.1.min.js"></script>
<!--script>
    window.ShardsDashboards = {
        colors: {
            accent: '#f00' // Pure red, ew!
        }
    }
</script-->
<script type="text/javascript" src="assets/scripts/jquery.dataTables.min.js"></script>
<script src="assets/scripts/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="assets/scripts/dropzone.min.js"></script>
<script type="text/javascript" src="assets/scripts/app/app-file-manager.1.3.1.min.js"></script>
<script>
    $(window).on('load', function() {
        console.log("uuuu");
        $(".loaderx").fadeOut("fast");
    });
    //$(".loaderx").fadeOut("slow");
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.min.js"></script>
<script src="assets/scripts/app/app-blog-new-post.1.3.1.min.js"></script>

<script>
    // Check that service workers are registered
    if ('serviceWorker' in navigator) {
        // Use the window load event to keep the page load performant
        window.addEventListener('load', () => {
            navigator.serviceWorker.register('sw.js');
        });
    }
</script>

</body>
</html>
