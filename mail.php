<?php
// Nur POST-Anfragen erlauben
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: kontakt.html');
    exit;
}

// Eingaben bereinigen
$name     = htmlspecialchars(trim($_POST['Name'] ?? ''));
$telefon  = htmlspecialchars(trim($_POST['Telefon'] ?? ''));
$email    = filter_var(trim($_POST['E-Mail'] ?? ''), FILTER_SANITIZE_EMAIL);
$nachricht = htmlspecialchars(trim($_POST['Nachricht'] ?? ''));

// Pflichtfelder prüfen
if (empty($name) || empty($telefon) || empty($email)) {
    header('Location: kontakt.html?status=fehler');
    exit;
}

// E-Mail validieren
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: kontakt.html?status=fehler');
    exit;
}

// Empfänger
$empfaenger = 'mail@malinowski-psychotherapie.de';
$betreff    = 'Neue Kontaktanfrage von ' . $name;

// Mail-Inhalt
$inhalt  = "Neue Kontaktanfrage über das Webformular\n";
$inhalt .= "==========================================\n\n";
$inhalt .= "Name:     " . $name . "\n";
$inhalt .= "Telefon:  " . $telefon . "\n";
$inhalt .= "E-Mail:   " . $email . "\n\n";
$inhalt .= "Nachricht:\n" . $nachricht . "\n\n";
$inhalt .= "--\n";
$inhalt .= "Diese Nachricht wurde über das Kontaktformular auf\n";
$inhalt .= "www.malinowski-psychotherapie.de gesendet.\n";

// Mail-Header — Absender MUSS eine eigene Domain-Adresse sein (IONOS Pflicht)
$headers  = "From: mail@malinowski-psychotherapie.de\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "Content-Transfer-Encoding: 8bit\r\n";

// Mail senden
$erfolg = mail($empfaenger, $betreff, $inhalt, $headers);

if ($erfolg) {
    header('Location: kontakt.html?status=erfolg');
} else {
    header('Location: kontakt.html?status=fehler');
}
exit;
?>
