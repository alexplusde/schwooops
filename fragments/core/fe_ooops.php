<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wir sind schnell wieder für Sie da</title>
    <link rel="stylesheet" href="<?= rex_url::assets('schwooops/chat.css') ?>">
    <script src="<?= rex_url::assets('schwooops/reload.js')?>"></script>
</head>
<body>
    <?php
    $name = 'Website-Betreiber';
    $email = 'kontakt@website.de';
    $phone = '+49 123 456789';
    $adress = 'Musterstraße 1, 12345 Musterstadt';
    $more = 'Mo-Fr: 9:00 - 18:00 Uhr';
    ?>
    <div class="chat-container">
        <div class="header">
            <span class="name"><?= $name ?></span>
            <span class="icons">
                <a href="tel:<?= $phone ?>">
                    <img src="<?= rex_url::assets('schwooops/phone-icon.svg') ?>" alt="Telefon">
                </a>
                <a href="mailto:<?= $email ?>">
                    <img src="<?= rex_url::assets('schwooops/email-icon.svg') ?>" alt="E-Mail">
                </a>
            </span>
        </div>
        <div class="message operator">
            <div class="avatar"><img src="avatar-placeholder.png" alt="Avatar"></div>
            <p>Entschuldigung, wir haben gerade geplante Wartungsarbeiten an der Website.</p>
        </div>
        <div class="message user">
            <div class="avatar"><img src="avatar-placeholder.png" alt="Avatar"></div>
            <p>Okay, kann ich trotzdem mit euch Kontakt aufnehmen?</p>
        </div>
        <div class="message operator">
            <div class="avatar"><img src="avatar-placeholder.png" alt="Avatar"></div>
            <p>Ja klar, hier sind unsere Kontaktdaten und more:</p>
            <p>E-Mail: <?= $email ?></p>
            <p>Telefon: <?= $phone ?></p>
            <p>Adresse: <?= $adress ?></p>
            <p>Erreichbarkeitszeiten: <?= $more ?></p>
        </div>
        <div class="feedback">
            <button>Vielen Dank!</button>
            <button>Ärgerlich, aber die Kontaktdaten helfen mir weiter.</button>
            <button>Kein Problem, ich warte einfach, bis die Wartung vorbei ist.</button>
        </div>
        <div class="response-field">
            <input type="text" placeholder="Geben Sie hier Ihre Nachricht ein...">
            <button>Senden</button>
        </div>
    </div>
</body>
</html>
