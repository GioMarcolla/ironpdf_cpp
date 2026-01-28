<section id="home-reasoning" class="bg-purple-350">
    <div class="container-dynamic overflow-visible">
        <div class="row align-items-center overflow-visible">
            <aside class="col-12 col-xl-3 icon-glow px-5 px-xl-0 overflow-visible">
                <div class="glow-blur">
                    <div class="glow-source"></div>
                </div>
                <img
                    src="<?= esc($jsonData['main']['reasoning']['icon']['src']) ?>"
                    alt="<?= esc($jsonData['main']['reasoning']['icon']['alt']) ?>"
                    width="<?= esc($jsonData['main']['reasoning']['icon']['width']) ?>"
                    height="<?= esc($jsonData['main']['reasoning']['icon']['height']) ?>" />
            </aside>
            <div class="col-12 col-xl-9 d-flex flex-column ps-0 ps-xl-5">
                <h2 class="fw-black fs-40 lh-48">
                    <?= esc($jsonData['main']['reasoning']['title'][0]) ?>
                    <span class="d-block d-xl-inline text-purple-100"><?= esc($jsonData['main']['reasoning']['title'][1]) ?></span>
                </h2>
                <?php foreach ($jsonData['main']['reasoning']['paragraphs'] as $paragraph): ?>
                    <p class="fw-light fs-16 text-justify lh-28">
                        <?= esc($paragraph) ?>
                    </p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>