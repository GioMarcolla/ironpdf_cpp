<section id="home-beta">

    <div class="container-dynamic d-flex flex-column align-items-center">
        <h2 class="fw-black fs-30">
            <?= esc($jsonData['footer']['beta']['title'][0]) ?>
            <span class="d-block d-md-inline text-purple-100"><?= esc($jsonData['footer']['beta']['title'][1]) ?></span>
        </h2>
        <?= view('components/home/betaSignupForm', ['borderColorClass' => 'border-white-100']) ?>
    </div>

</section>