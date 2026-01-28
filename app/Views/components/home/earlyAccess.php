<section id="early-access" class="position-relative">

    <div class="container-dynamic d-flex flex-column position-relative z-2">

        <!-- Title -->
        <h2 class="fw-black fs-40 lh-44">
            <?= esc($jsonData['main']['early_access']['title'][0]) ?>
            <span class="text-purple-100"><?= esc($jsonData['main']['early_access']['title'][1]) ?></span>
        </h2>

        <!-- Description -->
        <p class="fs-16 fw-light lh-28">
            <?= esc($jsonData['main']['early_access']['description']) ?>
        </p>

        <!-- Programs -->
        <ul id="release-badges" class="w-100 d-flex flex-column flex-xl-row justify-content-center align-items-center p-0">
            <?php foreach ($jsonData['main']['early_access']['programs'] as $program): ?>
                <?php
                // Generate badge color classes based on status
                $status = $program['status'];
                if ($status === 'Released') {
                    $outerClass = 'released';
                    $innerClass = 'bg-purple-100 text-purple-500';
                } else {
                    $outerClass = 'coming-soon';
                    $innerClass = 'bg-purple-500 text-purple-100';
                }
                ?>
                <li class="d-flex justify-content-center justify-content-xl-between flex-grow-0 flex-xl-grow-1">
                    <span class="d-flex badge outter rounded-pill flex-grow-0 flex-xl-grow-1 bg-purple-900-80 <?= $outerClass ?>">
                        <h3 class="d-flex-inline badge rounded-pill <?= $innerClass ?> fw-bold fs-14 lh-28 align-items-center justify-content-center" style="width: 9.75rem;">
                            # <?= esc($status) ?>
                        </h3>
                        <img
                            src="<?= esc($program['image']['src']) ?>"
                            alt="<?= esc($program['image']['alt']) ?>"
                            width="<?= esc($program['image']['width']) ?>"
                            height="<?= esc($program['image']['height']) ?>"
                            loading="lazy"
                            decoding="async"
                            class="mw-100" />
                    </span>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Underglow -->
    <div class="position-absolute underglow-wrapper z-1">
        <?= $this->include('components/underglow') ?>
    </div>

</section>