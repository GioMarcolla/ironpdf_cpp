<?php
$cookieConsent = $_COOKIE['cookie_consent'] ?? null;
if ($cookieConsent === 'accepted') {
    return;
}
?>

<div id="cookie-banner" class="fixed-bottom bg-dark text-white p-4 border-top border-secondary" style="z-index: 9999;">
    <div class="container-fluid d-flex align-items-center justify-content-between gap-3" style="max-width: 100%;">
        <p class="mb-0 flex-grow-1">
            We use cookies to improve your experience. By using our site, you consent to our use of cookies.
            <a href="#" class="text-warning text-decoration-none">Learn more</a>
        </p>
        <button id="cookie-accept" class="btn btn-sm btn-primary" aria-label="Accept cookies">
            Accept
        </button>
        <button id="cookie-dismiss" class="btn btn-sm btn-outline-secondary" aria-label="Dismiss cookie banner">
            Dismiss
        </button>
    </div>
</div>

<script>
(function() {
    var banner = document.getElementById('cookie-banner');
    if (!banner) return;

    var acceptBtn = document.getElementById('cookie-accept');
    var dismissBtn = document.getElementById('cookie-dismiss');

    function hideBanner() {
        banner.style.display = 'none';
    }

    function setConsent(value) {
        // Set cookie that expires in 30 days
        var date = new Date();
        date.setTime(date.getTime() + (30 * 24 * 60 * 60 * 1000));
        document.cookie = 'cookie_consent=' + value + '; expires=' + date.toUTCString() + '; path=/';
        hideBanner();
    }

    acceptBtn.addEventListener('click', function() {
        setConsent('accepted');
    });

    dismissBtn.addEventListener('click', function() {
        hideBanner();
    });
})();
</script>
