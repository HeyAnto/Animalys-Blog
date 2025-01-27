<?php include_once "../includes/header.php"; ?>

<main class="container py-5">
    <div class="container-fluid">
        <h1>Nous contacter</h1>
        <div class="row mt-5">
            <div class="col-md-12 col-lg-6">
                <form id="contactForm">

                    <div class="mb-3">
                        <label for="name" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Votre email" required>
                    </div>

                    <div class="mb-3">
                        <label for="subject" class="form-label">Sujet</label>
                        <select class="form-select" id="subject" name="subject" required>
                            <option value="" disabled selected>Choisissez un sujet</option>
                            <option value="suggestion-article">Suggestion d'article</option>
                            <option value="reactions-article">Réactions à un article</option>
                            <option value="correction-article">Correction ou amélioration d'un article</option>
                            <option value="proposition-interview">Proposition d'interview</option>
                            <option value="demande-contenu">Demande de contenu spécifique</option>
                            <option value="collaboration">Collaboration ou partenariat</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Votre message" required></textarea>
                    </div>

                    <button type="submit" class="btn-primary">Envoyer</button>
                </form>
            </div>
            <div class="col-md-12 col-lg-6 mt-5">
                <img class="rounded img-fluid d-block" src="../assets/img/img-contact.webp" alt="Adam Creation">
            </div>
        </div>
    </div>
</main>

<?php include_once "../includes/footer.php"; ?>