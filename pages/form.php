<?php include_once "../includes/header.php"; ?>

<main class="container py-5">
    <div class="container-fluid" style="max-width: 800px;">
        <h1>Données du formulaire</h1>
        <?php if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"])): ?>
            <div class="alert alert-success text-center" role="alert">
                Votre message a été envoyé avec succès !
            </div>
            <p><b>Nom :</b> <?php echo $_POST["name"] ?> </p>
            <p><b>Email :</b> <?php echo $_POST["email"] ?> </p>
            <p><b>Sujet :</b> <?php echo $_POST["subject"] ?> </p>
            <p class="message-box"><b>Message :</b> <?php echo $_POST["message"] ?> </p>
        <?php else: ?>
            <div class="alert alert-danger text-center" role="alert">
                Aucune données trouver.
            </div>
        <?php endif; ?>
    </div>
</main>

<?php include_once "../includes/footer.php"; ?>