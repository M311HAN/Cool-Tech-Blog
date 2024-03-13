<!-- Specifies the document's language as English -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Ensures proper rendering and touch zooming for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Link to external CSS file and Google Fonts for styling and typography -->
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
     <!-- Dynamic document title, defaulting to "Cool Tech" -->
    <title>
        @isset($doctitle)
            {{ $doctitle }} | Cool Tech
        @else
            Cool Tech
        @endisset
    </title>
</head>
<body>
    <!-- Main header/logo link -->
    <a class="header" href="/">
        <div class="header">
            <em>Cool Tech</em>
        </div>
    </a>

{{ $slot }}
 <!-- Footer with navigation links and copyright statement -->
<div class="footer">
    <div class="different-pages">
        <div class="redir home-page">
            <a href="/">Home Page</a>
        </div>
        <div class="redir about-page">
            <a href="/about">About Us</a>
        </div>
        <div class="redir search-page">
            <a href="/search">Search Page</a>
        </div>
        <div class="redir legal-page">
            <a href="/legal">Legal Page</a>
        </div>
    </div>
    <div class="copyright">
        <!-- Dynamic year in copyright -->
        <strong>Copyright &#169; {{ date('Y') }} Cool Tech.</strong>
    </div>
        <!-- Cookie consent banner component -->
        <x-cookie-consent /> <!-- Cookie consent component included here -->
    </div>
    
</body>
</html>