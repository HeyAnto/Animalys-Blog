<?php
include 'data.php';

function getTextPreview($texte)
{
    if (strlen($texte) <= 25) {
        return $texte;
    } else {
        return substr($texte, 0, 25) . "...";
    }
}

foreach ($articles as $articlesCard): ?>
    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
        <div class="card" style="width: 100%;">
            <img src="../assets/img/blog/<?php echo $articlesCard["imagePath"]; ?>" class="card-img-top" alt="<?php echo $articlesCard["name"]; ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $articlesCard["name"]; ?></h5>
                <p class="card-description"><?php echo getTextPreview($articlesCard["article"]); ?></p>
                <p class="card-date"><?php echo $articlesCard["date"]; ?></p>
                <p class="card-creator"><?php echo $articlesCard["createdBy"]; ?></p>
                <a href="#" class="btn-primary">Ouvrir l'article</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>