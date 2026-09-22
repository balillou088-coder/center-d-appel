<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   // database/seeders/FaqSeeder.php
public function run(): void
{
    $faqs = [
        [
            'question' => 'Comment récupérer un mot de passe oublié ?',
            'answer'   => 'Cliquez sur « Mot de passe oublié » sur la page de connexion, entrez votre email et suivez le lien de réinitialisation envoyé dans votre boîte mail. Le lien est valable 60 minutes.',
            'category' => 'connexion',
            'order'    => 1,
        ],
        [
            'question' => 'Comment transférer un appel à un collègue ?',
            'answer'   => 'Pendant l\'appel, cliquez sur le bouton « Transférer », sélectionnez l\'agent ou le numéro, puis validez. Pour un transfert accompagné, attendez que votre collègue décroche avant de raccrocher.',
            'category' => 'appels',
            'order'    => 2,
        ],
        [
            'question' => "Pourquoi un appel n'apparaît-il pas dans l'historique ?",
            'answer'   => 'Vérifiez les filtres de date et de statut appliqués. Les appels manqués non traités peuvent mettre jusqu\'à 5 minutes avant d\'apparaître. Si le problème persiste, contactez le support.',
            'category' => 'appels',
            'order'    => 3,
        ],
        [
            'question' => 'Comment exporter un rapport en Excel ?',
            'answer'   => 'Allez dans Rapports → Sélectionnez la période → Cliquez sur « Exporter » en haut à droite → Choisissez le format CSV ou XLSX. Le fichier sera téléchargé automatiquement.',
            'category' => 'rapports',
            'order'    => 4,
        ],
        [
            'question' => 'Comment créer une fiche client ?',
            'answer'   => 'Depuis le module Clients, cliquez sur « Nouveau client », remplissez les informations obligatoires (nom, téléphone) puis enregistrez. La fiche sera disponible pour tous les agents.',
            'category' => 'clients',
            'order'    => 5,
        ],
        [
            'question' => 'Comment ajouter un nouvel agent ?',
            'answer'   => 'Réservé aux administrateurs : Administration → Utilisateurs → « Ajouter un utilisateur ». Renseignez le nom, l\'email, attribuez un rôle (Agent ou Admin) et envoyez l\'invitation.',
            'category' => 'administration',
            'order'    => 6,
        ],
    ];

    foreach ($faqs as $faq) {
        Faq::create($faq);
    }
}
}
