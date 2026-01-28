<section id="home-coming-soon" class="position-relative overflow-hidden">

    <div id="coming-soon-intro" class="container-dynamic d-flex flex-column z-2 position-relative">
        <div class="text-center">
            <h2 id="coming-soon-title" class="d-inline-block fw-black fs-40 position-relative">
                <?= esc($jsonData['main']['coming_soon']['title']) ?>
                <img
                    class="position-absolute"
                    alt="<?= esc($jsonData['main']['coming_soon']['image']['alt']) ?>"
                    src="<?= esc($jsonData['main']['coming_soon']['image']['src']) ?>"
                    width="<?= esc($jsonData['main']['coming_soon']['image']['width']) ?>"
                    height="<?= esc($jsonData['main']['coming_soon']['image']['height']) ?>"
                    aria-hidden="true">
            </h2>
        </div>

        <div class="d-flex flex-column flex-xxl-row justify-content-between dynamic-separator align-items-center align-items-xxl-start">
            <?php foreach ($jsonData['main']['coming_soon']['highlights'] as $index => $highlight): ?>
                <p class="text-center fw-light">
                    <span class="fw-bold fs-16 lh-26">#</span> <?= esc($highlight) ?>
                </p>
                <?php if ($index !== count($jsonData['main']['coming_soon']['highlights']) - 1): ?>
                    <div class="separator fs-18 d-none d-xxl-block">|</div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <div id="coming-soon-description" class="z-2 position-relative">
        <div class="container-dynamic d-flex flex-column">
            <?php foreach ($jsonData['main']['coming_soon']['description'] as $paragraph): ?>
                <p class="fw-light">
                    <?php foreach ($paragraph as $segment): ?>
                        <?php if ($segment['highlight']): ?>
                            <span class="fw-bold"><?= esc($segment['text']) ?></span>
                        <?php else: ?>
                            <?= esc($segment['text']) ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </p>
            <?php endforeach; ?>
        </div>
    </div>


    <div class="position-absolute underglow-wrapper z-1">
        <?= $this->include('components/underglow') ?>
    </div>

</section>