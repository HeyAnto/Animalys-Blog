<?php include_once "../includes/header.php"; ?>

<main class="container py-5">
    <div class="container-fluid" style="max-width: 800px;">
        <h1>Données du formulaire</h1>
        <?php if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"])): ?>
            <p><b>Nom :</b> <?php echo $_POST["name"] ?> </p>
            <p><b>Email :</b> <?php echo $_POST["email"] ?> </p>
            <p><b>Sujet :</b> <?php echo $_POST["subject"] ?> </p>
            <p class="message-box"><b>Message :</b> <?php echo $_POST["message"] ?> </p>
        <?php else: ?>
            <p><b>Aucune données trouver.</b></p>
        <?php endif; ?>
    </div>
</main>

<?php include_once "../includes/footer.php"; ?>