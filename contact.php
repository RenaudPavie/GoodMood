<?php /* Template Name: Contact */ ?>
<?php get_header() ?>
<div class="page container">
    <h1 class="mainTitlePerPage"><?php wp_title("", true, "") ?></h1>
</div>
<?php get_footer() ?>

<style>
.mainTitlePerPage::before {
    content:'<?php wp_title("", true, ""); ?>';
}
</style>