
<!-- Check if the cookie consent has not been set yet -->
@if(!isset($_COOKIE['cookie_consent']))
    <div class="cookie-consent">
        <!-- Message about cookie use -->
        <p>This website uses cookies to ensure you get the best experience on our website.</p>
        <!-- Button to accept cookies -->
        <button id="cookieConsentButton">Got it!</button>
    </div>

    <!-- Script to handle consent -->
    <!-- On button click, hide banner and set consent cookie for 30 days -->
    <script>
        document.getElementById('cookieConsentButton').addEventListener('click', function() {
            document.querySelector('.cookie-consent').style.display = 'none';
            document.cookie = "cookie_consent=accepted; path=/; max-age=" + 60 * 60 * 24 * 30; // Expires in 30 days
        });
    </script>
@endif
