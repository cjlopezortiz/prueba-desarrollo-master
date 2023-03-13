<?php
require_once '../lib/core.lib.php';
require_once '../lib/common/header.php';
?>

<script src="../assets/js/app.js">
</script>
<script src = "../assets/js/jquery.datatables.js">
</script>
<script src="../assets/js/datatables.bootstrap4.min.js" type="text/javascript"></script>

<main class="container-fluid p-5 bg-light">
    <?php

    $GPC['type'] = 'filter-orders';
    require_once './orders_async.php';
    ?>
</main>