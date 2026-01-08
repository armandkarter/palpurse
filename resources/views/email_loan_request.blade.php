<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouvelle demande de prêt - FGVSERVIZIO</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f9f9f9; padding: 20px;">
    <div style="background: #fff; border-radius: 8px; padding: 20px; max-width: 600px; margin: auto;">
        <p>Une nouvelle demande de prêt a été soumise sur <strong>FGVSERVIZIO</strong>.</p>

        <h4>Détails du demandeur :</h4>
        <ul>
            <li><strong>Nom/Prénom :</strong> {{ $name }}</li>
            <li><strong>Adresse :</strong> {{ $address }}</li>
            <li><strong>Téléphone :</strong> {{ $phone }}</li>
            <li><strong>Email :</strong> {{ $email }}</li>
        </ul>

        <h4>Détails du prêt :</h4>
        <ul>
            <li><strong>Type de prêt :</strong> {{ $type }}</li>
            <li><strong>Montant :</strong> {{ number_format($amount, 2, ',', ' ') }} €</li>
            <li><strong>Durée :</strong> {{ $duration }} mois</li>
        </ul>


        <p style="color: #777; font-size: 14px;">Ce message a été envoyé automatiquement depuis le site FGVSERVIZIO.</p>
    </div>
</body>
</html>
