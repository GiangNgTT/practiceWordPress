<style>
    <?php include 'page-products.css'?>
</style>
<?php /* Template Name: our products*/ ?>
<h1 class="title">List products</h1>
<div class="list-products">
<?php
global $wpdb;
$result = $wpdb->get_results("SELECT * FROM wp_sp");
foreach ($result as $print) { ?>
    <div class="">
        <div> <?php echo '<img src="' . $print->image . '" />' ?></div>
        <div>
            <h1><?php echo $print->title; ?></h1>
            <h3><?php echo $print->price; ?> VND</h3>
        </div>
    </div>
<?php }
?>
</div>