<?php
// Skontrolujte, či bol formulár odoslaný
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Získajte údaje z formulára
  $meno = $_POST['meno'];
  $sprava = $_POST['sprava'];

  // Nastavte e-mailovú adresu, na ktorú chcete zaslať správu
  $email_prijemcu = 'rubylissaart@gmail.com';

  // Nastavte predmet správy
  $predmet = 'Nová správa zo stránky';

  // Vytvorte obsah správy
  $obsah = "Meno: $meno\n";
  $obsah .= "Správa: $sprava\n";

  // Odoslanie e-mailu
  if (mail($email_prijemcu, $predmet, $obsah)) {
    // Ak bol e-mail úspešne odoslaný, môžete zobraziť potvrdzovaciu správu
    echo "Thank you, your message has been successfully sent.";
  } else {
    // Ak sa vyskytla chyba pri odosielaní e-mailu, zobrazte chybovú správu
    echo "We're sorry, an error occurred while sending the message.";
  }
}
?>
