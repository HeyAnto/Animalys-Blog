<?php
include_once "data.php";

function getTextPreview($texte)
{
    if (strlen($texte) <= 25) {
        return $texte;
    } else {
        return substr($texte, 0, 25) . "...";
    }
}

foreach ($articles as $id => $articleCard): ?>
    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
        <div class="card" style="width: 100%;">
            <img src="../assets/img/blog/<?php echo $articleCard["imagePath"]; ?>" class="card-img-top" alt="<?php echo $articleCard["name"]; ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $articleCard["name"]; ?></h5>
                <p class="card-description"><?php echo getTextPreview($articleCard["article"]); ?></p>
                <p class="card-date"><?php echo $articleCard["date"]; ?></p>
                <p class="card-creator"><?php echo $articleCard["createdBy"]; ?></p>
                <a href="../pages/single.php?id=<?php echo $id ?>" class="btn-primary">Ouvrir l'article</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>