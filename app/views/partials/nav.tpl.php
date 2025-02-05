    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= $router->generate('main-home') ?>">oShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $router->generate('main-home') ?>">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $router->generate('category-list') ?>">Catégories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $router->generate('product-list') ?>">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Types</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Marques</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="
                        
                        ">Tags</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $router->generate('category-home-selection') ?>">Sélection Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $router->generate('user-list') ?>">Utilisateurs</a>
                    </li>
                </ul>
            </div>
            <div>
                <?php if (!isset($_SESSION['userId'])) : ?>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enroll" >           
                                <a class="navbar-brand fs-6" href="<?= $router->generate('user-login') ?>">Connexion</a>
                    </button>
                <?php endif; ?>
                <?php if (isset($_SESSION['userId'])) : ?>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#enroll" >           
                                <a class="navbar-brand fs-6" href="<?= $router->generate('user-logout') ?>">Déconnexion</a>
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </nav>
