<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wir sind schnell wieder für Sie da.</title>
    <link rel="stylesheet" href="<?= rex_url::addonAssets('schwooops', 'chat.css') ?>">
    <script src="<?= rex_url::addonAssets('schwooops', 'reload.js')?>"></script>
</head>
<body>
    <?php
    $name = rex::getServerName();
    $email = rex_config::get('schwooops', 'email');
    $phone = rex_config::get('schwooops', 'phone');
    $adress = rex_config::get('schwooops', 'contact');
    $more = rex_config::get('schwooops', 'more');
    ?>
    <div class="chat-container">
        <div class="header">
            <span class="name"><?= $name; ?></span>
            <span class="icons">
                <a href="tel:<?= $phone; ?>">
                    <img src="<?= rex_url::addonAssets('schwooops', '/phone-icon.svg') ?>" alt="Telefon">
                </a>
                <a href="mailto:<?= $email; ?>">
                    <img src="<?= rex_url::addonAssets('schwooops', 'email-icon.svg') ?>" alt="E-Mail">
                </a>
            </span>
        </div>
        <div class="message operator">
            <div class="avatar"><img src="<?= rex_url::addonAssets('schwooops', 'avatar.png') ?>" alt="Avatar"></div>
            <div class="message" style="display: block;">
            <p>Entschuldigung, wir haben gerade geplante Wartungsarbeiten an der Website.</p>
</div>
        </div>
        <div class="message user">
            <div class="avatar"><img src="<?= rex_url::addonAssets('schwooops', 'avatar.png') ?>" alt="Avatar"></div>
            <div class="message" style="display: block;">
            <p>Okay, kann ich trotzdem mit euch Kontakt aufnehmen?</p>
</div>
        </div>
        <div class="message operator">
            <div class="avatar"><img src="<?= rex_url::addonAssets('schwooops', 'avatar.png') ?>" alt="Avatar"></div>
            <div class="message" style="display: block;">
            <p>Ja klar, hier sind unsere Kontaktdaten:</p>
            <p>E-Mail: <?= $email; ?></p>
            <p>Telefon: <?= $phone; ?></p>
            <p>Adresse: <?= $adress; ?></p>
            <p>Erreichbarkeitszeiten: <?= $more; ?></p>
            </div>
            </div>
            <div class="feedback">
            <button>Vielen Dank!</button>
            <button>Ärgerlich, aber die Kontaktdaten helfen mir weiter.</button>
            <button>Kein Problem! Ich warte einfach, bis die Wartung vorbei ist.</button>
        </div>
        <div class="response-field">
            <input type="text" placeholder="Geben Sie hier Ihre Nachricht ein...">
            <button>Senden</button>
        </div>
    </div>
</body>
</html>
