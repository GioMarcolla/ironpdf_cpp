<?php
$borderColorClass = $borderColorClass ?? 'border-purple-100';
?>
<form action="submit" class="beta-signup-form">
    <fieldset>
        <div class="input-group rounded-pill overflow-hidden border border-3 <?= esc($borderColorClass) ?> bg-light">
            <label for="email" class="visually-hidden">Email address</label>
            <input 
                name="email" 
                autocomplete="email" 
                type="email" 
                class="form-control border-0" 
                placeholder="<?= esc($jsonData['header']['hero']['signup']['form_placeholder']) ?>"
                aria-label="<?= esc($jsonData['header']['hero']['signup']['form_placeholder']) ?>" 
                required />
            <button name="submit" class="btn btn-pink border-0 rounded-pill d-flex align-items-center" type="submit">
                <h2 class="fs-16 fw-bold"><?= esc($jsonData['header']['hero']['signup']['form_button']) ?></h3>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path d="M441.3 299.8C451.5 312.4 450.8 330.9 439.1 342.6L311.1 470.6C301.9 479.8 288.2 482.5 276.2 477.5C264.2 472.5 256.5 460.9 256.5 448L256.5 192C256.5 179.1 264.3 167.4 276.3 162.4C288.3 157.4 302 160.2 311.2 169.3L439.2 297.3L441.4 299.7z" />
                </svg>
            </button>
        </div>
    </fieldset>
</form>