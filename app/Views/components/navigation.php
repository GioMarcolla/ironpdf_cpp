<nav id="main-nav" class="navbar navbar-dark navbar-expand-md fs-11 bg-transparent position-absolute top-0" aria-label="Main navigation">
    <div class="container d-flex">
        <!-- Brand -->
        <a class="navbar-brand nav-link" href="#" aria-label="link to home page">
            <img 
                src="<?= esc($jsonData['navigation']['menu']['logo']['src']) ?>"
                alt="<?= esc($jsonData['navigation']['menu']['logo']['alt']) ?>"
                width="<?= esc($jsonData['navigation']['menu']['logo']['width']) ?>"
                height="<?= esc($jsonData['navigation']['menu']['logo']['height']) ?>"
                style="height: 0.89rem" 
                aria-hidden="true"/>
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav fw-bold">
                <?php foreach ($jsonData['navigation']['menu']['links'] ?? [] as $item): ?>
                    <?php if (isset($item['items'])): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= esc($item['title']) ?>
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach ($item['items'] as $index => $subItem): ?>
                                    <li>
                                        <a class="dropdown-item fw-bold fs-11" href="#" aria-label="link to <?= esc($subItem) ?> page"><?= esc($subItem) ?></a>
                                    </li>
                                    <?php if ($index < count($item['items']) - 1) : ?>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?= esc($item['title']) ?></a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>