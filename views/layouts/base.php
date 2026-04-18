<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' . APP_NAME : APP_NAME; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css">
    <?php if (isset($additionalCSS)): ?>
        <?php foreach ($additionalCSS as $css): ?>
            <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/<?php echo $css; ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>
    <div class="container">
        <!-- Navigation -->
        <?php if (\App\Models\User::isLoggedIn()): ?>
            <?php $user = \App\Models\User::getLoggedInUser(); ?>
            <nav class="navbar">
                <div class="navbar-brand"><?php echo APP_NAME; ?></div>
                <div class="navbar-menu">
                    <span class="navbar-text">Bienvenue, <?php echo htmlspecialchars($user['name']); ?></span>
                    <a href="<?php echo BASE_URL; ?>logout" class="btn btn-logout">Déconnexion</a>
                </div>
            </nav>
        <?php endif; ?>

        <!-- Contenu principal -->
        <main class="main-content">
            <?php echo $content ?? ''; ?>
        </main>
    </div>

    <!-- Scripts -->
    <script src="<?php echo BASE_URL; ?>js/ajax.js"></script>
    <?php if (isset($additionalJS)): ?>
        <?php foreach ($additionalJS as $js): ?>
            <script src="<?php echo BASE_URL; ?>js/<?php echo $js; ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>