<?php /* Template Name: Contact */ ?>
<?php get_header() ?>
<div class="page container">
    <h1 class="mainTitlePerPage"><?php wp_title("", true, "") ?></h1>
    <div class="row contact">
        <div class="col-12 col-sm-6 formContact">
            <form>
                <div class="row">
                    <div class="col-6">
                        <label for="contactName">Nom</label> <br>
                        <input type="text" id="contactName" name="contactName">
                    </div>
                    <div class="col-6">
                        <label for="contactFirstName">Prénom</label> <br>
                        <input type="text" id="contactFirstName" name="contactFirstName">
                    </div>
                    <div class="col-12">
                        <label for="contactMail">E-mail</label> <br>
                        <input type="text" id="contactMail" name="contactMail">
                    </div>
                    <div class="col-12">
                        <label for="contactPhone">Téléphone</label> <br>
                        <input type="text" id="contactPhone" name="contactPhone">
                    </div>
                    <div class="col-12">
                        <label for="contactMessage">Message</label> <br>
                        <textarea id="contactMessage" name="contactMessage"></textarea>
                    </div>
                    <button id="btnSubmitContact" type="submit">Envoyer</button>
                </div>
                
            </form>
        </div>
        <div class="col-12 col-sm-6 bgContact">
            <img src="<?php bloginfo("stylesheet_directory") ?>/assets/img/background-contact.jpeg" alt="Image de foule">
        </div>
    </div>
</div>
<?php get_footer() ?>

<style>
.mainTitlePerPage::before {
    content:'<?php wp_title("", true, ""); ?>';
}
</style>