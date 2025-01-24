<?php
include 'data.php';

foreach ($articles as $articlesCard): ?>
    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
        <div class="card" style="width: 100%;">
            <img src="../assets/img/blog/<?php echo $articlesCard["imagePath"]; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $articlesCard["name"]; ?></h5>
                <p class="card-date"><?php echo $articlesCard["date"]; ?></p>
                <p class="card-creator"><?php echo $articlesCard["createdBy"]; ?></p>
                <a href="#" class="btn-primary">Ouvrir l'article</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>