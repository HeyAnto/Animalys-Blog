<?php include_once "../includes/header.php"; ?>

<?php
include_once "../includes/data.php";

$id = $_GET["id"] ?? null;

if (isset($articles[$id])) {
    $content = $articles[$id];
?>
    <main class="container py-5">
        <div class="container-fluid" style="max-width: 800px;">
            <h1><?php echo $content["name"]; ?></h1>
            <p><b><?php echo $content["createdBy"]; ?></b></p>
            <p><?php echo $content["date"]; ?></p>
            <img class="rounded img-fluid d-block mt-5" src="../assets/img/blog/<?php echo $content["imagePath"]; ?>" alt="<?php echo $content["name"]; ?>">
            <p class="mt-5"><?php echo $content["article"]; ?></p>
        </div>
    </main>
<?php
} else {
?>
    <main class="container py-5">
        <div class="container-fluid" style="max-width: 800px;">
            <h1>Article non trouvé</h1>
            <p>Désolé, l'article que vous recherchez n'existe pas.</p>
            <a href="../index.php" class="btn-primary">Retour à l'accueil</a>
        </div>
    </main>
<?php
}
?>

<?php include_once "../includes/footer.php"; ?>