<?php
// Sécurisation des données (fonction simple)
function securiser($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Vérifie que la requête vient bien du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Étape 1
    $commercial     = securiser($_POST['commercial'] ?? '');
    $date           = securiser($_POST['date'] ?? '');
    $heure          = securiser($_POST['heure'] ?? '');
    $structure      = securiser($_POST['structure'] ?? '');
    $responsable    = securiser($_POST['responsable'] ?? '');
    $telephone      = securiser($_POST['telephone'] ?? '');
    $email          = securiser($_POST['email'] ?? '');
    $adresse        = securiser($_POST['adresse'] ?? '');
    $type_lieu      = securiser($_POST['type_lieu'] ?? '');

    // Étape 2
    $interet        = securiser($_POST['interet'] ?? '');
    $besoins        = securiser($_POST['besoins'] ?? '');
    $packs          = isset($_POST['packs']) ? implode(', ', $_POST['packs']) : '';
    $objections     = securiser($_POST['objections'] ?? '');

    // Étape 3
    $proprete       = securiser($_POST['proprete'] ?? '');
    $nuisibles      = securiser($_POST['nuisibles'] ?? '');
    $ordures        = securiser($_POST['ordures'] ?? '');
    $accessibilite  = securiser($_POST['accessibilite'] ?? '');

    // Étape 4
    $pack_propose   = securiser($_POST['pack_propose'] ?? '');
    $tarif          = securiser($_POST['tarif'] ?? '');
    $actions        = isset($_POST['actions']) ? implode(', ', $_POST['actions']) : '';
    $commercial_nom = securiser($_POST['commercial_nom'] ?? '');
    $client_nom     = securiser($_POST['client_nom'] ?? '');
    $certifie       = isset($_POST['certifie']) ? 'Oui' : 'Non';

    // Ici tu peux enregistrer dans la base de données ou envoyer un mail
    // Exemple simple d'affichage (à remplacer)
    echo "<h2>Données reçues :</h2>";
    echo "<p><strong>Commercial :</strong> $commercial</p>";
    echo "<p><strong>Date :</strong> $date</p>";
    echo "<p><strong>Heure :</strong> $heure</p>";
    echo "<p><strong>Structure :</strong> $structure</p>";
    echo "<p><strong>Responsable :</strong> $responsable</p>";
    echo "<p><strong>Téléphone :</strong> $telephone</p>";
    echo "<p><strong>Email :</strong> $email</p>";
    echo "<p><strong>Adresse :</strong> $adresse</p>";
    echo "<p><strong>Type de lieu :</strong> $type_lieu</p>";
    echo "<p><strong>Intérêt :</strong> $interet</p>";
    echo "<p><strong>Besoins :</strong> $besoins</p>";
    echo "<p><strong>Packs évoqués :</strong> $packs</p>";
    echo "<p><strong>Objections :</strong> $objections</p>";
    echo "<p><strong>Propreté :</strong> $proprete</p>";
    echo "<p><strong>Nuisibles :</strong> $nuisibles</p>";
    echo "<p><strong>Présence d’ordures :</strong> $ordures</p>";
    echo "<p><strong>Accessibilité :</strong> $accessibilite</p>";
    echo "<p><strong>Pack proposé :</strong> $pack_propose</p>";
    echo "<p><strong>Tarif :</strong> $tarif</p>";
    echo "<p><strong>Actions :</strong> $actions</p>";
    echo "<p><strong>Nom du commercial :</strong> $commercial_nom</p>";
    echo "<p><strong>Nom du client :</strong> $client_nom</p>";
    echo "<p><strong>Certifié :</strong> $certifie</p>";

    // Redirection ou confirmation possible ici
    // header('Location: confirmation.html');
} else {
    echo "Accès non autorisé.";
}
?>
