<section id="home-hero">
    <div id="hero-image" class="position-absolute top-0 end-0 z-1">
        <img
            class="inline"
            src="<?= esc($jsonData['header']['hero']['hero_image']['src']) ?>"
            alt="<?= esc($jsonData['header']['hero']['hero_image']['alt']) ?>"
            width="<?= esc($jsonData['header']['hero']['hero_image']['width']) ?>"
            height="<?= esc($jsonData['header']['hero']['hero_image']['height']) ?>"
            loading="eager" 
            aria-hidden="true"/>
    </div>

    <section id="hero-intro" class="container-dynamic d-flex flex-column position-relative z-3 ">
        <div>
            <img
                src="<?= esc($jsonData['header']['hero']['intro']['intro_image']['src']) ?>"
                alt="<?= esc($jsonData['header']['hero']['intro']['intro_image']['alt']) ?>"
                width="<?= esc($jsonData['header']['hero']['intro']['intro_image']['width']) ?>"
                height="<?= esc($jsonData['header']['hero']['intro']['intro_image']['height']) ?>" />
        </div>
        <div class="hero-content d-flex flex-column">
            <div>
                <h2 class="fw-bold fs-18 lh-26"><?= esc($jsonData['header']['hero']['intro']['title']) ?></h5>
            </div>
            <div class="w-100" style="max-width: 598px;">
                <h1 class="fw-black fs-50 lh-54">
                    <?= esc($jsonData['header']['hero']['intro']['main_title'][0]) ?>
                    <span class="d-block d-xl-inline text-purple-100"><?= esc($jsonData['header']['hero']['intro']['main_title'][1]) ?></span>
                </h1>
            </div>
            <div>
                <h4 class="text-purple-200 fw-light fs-14 lh-28"><?= esc($jsonData['header']['hero']['intro']['subtitle']) ?></h4>
            </div>
        </div>
    </section>

    <section id="hero-signup" class="hero-signup-gradient text-center text-xl-start">
        <div class="hero-content container-dynamic d-flex flex-column align-items-center align-items-xl-start position-relative z-3">
            <div class="d-flex flex-column w-100" style="gap: 20px; max-width: 530px;">
                <div class="d-flex flex-column" style="gap: 5px">
                    <h2 class="fw-black fs-40 lh-44"><?= esc($jsonData['header']['hero']['signup']['cta_title']) ?></h2>
                    <p class="fw-bold fs-18 lh-26"><?= esc($jsonData['header']['hero']['signup']['cta_subtitle']) ?></p>
                </div>
                <div>
                    <?= view('components/home/betaSignupForm', ['borderColorClass' => 'border-purple-100']) ?> </div>
            </div>
            <div class="d-flex flex-column flex-xl-row align-items-center justify-content-center justify-content-xl-start" style="gap: 10px;">
                <span class="badge rounded-pill fs-14 bg-purple-100 text-purple-200 lh-28" style="padding: 2px 18px;">
                    <?= esc($jsonData['header']['hero']['signup']['badges'][0]) ?>
                </span>

                <span class="fw-light">
                    <?= esc($jsonData['header']['hero']['signup']['beta_program_info']['description']) ?>

                    <div class="d-block d-xl-inline text-center">
                        <?php
                        // Split the beta platforms by '|'
                        $platforms = $jsonData['header']['hero']['signup']['beta_program_info']['platforms'];
                        $lastIndex = count($platforms) - 1;

                        foreach ($platforms as $index => $platform):
                            $platform = trim($platform);
                        ?>
                            <span class="fw-medium"><?= esc($platform) ?>
                                <?php if ($index !== $lastIndex): ?>
                                    <span class="text-purple-200">|</span>
                                <?php endif; ?>
                            </span>
                        <?php endforeach; ?>
                    </div>

                </span>
            </div>
        </div>
    </section>
</section>