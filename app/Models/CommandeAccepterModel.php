<?php

namespace App\Models;

use CodeIgniter\Model;

class CommandeAccepterModel extends Model
{
    protected $table = 'commande_accepter'; // Nom de la table
    protected $primaryKey = 'id_accepter';  // Clé primaire

    // Colonnes disponibles dans la table
    protected $allowedFields = [
        'id_chauffeur',
        'id_client',
        'nom_chauffeur',
        'prenom_chauffeur',
        'tele_chauffeur',
        'email_chauff'
    ];

    // Règles de validation pour les données
    protected $validationRules = [
        'id_chauffeur'     => 'required|integer',
        'id_client'     => 'required|integer',
        'nom_chauffeur'    => 'required|alpha_space|max_length[100]',
        'prenom_chauffeur' => 'required|alpha_space|max_length[100]',
        'tele_chauffeur'   => 'required|numeric|max_length[15]',
        'email_chauff'     => 'required|valid_email|max_length[150]',
    ];

    // Messages personnalisés en cas d'erreur de validation
    protected $validationMessages = [
        'email_chauff' => [
            'required'    => 'L\'email est obligatoire.',
            'valid_email' => 'L\'email doit être valide.',
            'is_unique'   => 'Cet email est déjà utilisé dans les commandes acceptées.'
        ],
        'tele_chauffeur' => [
            'required'    => 'Le numéro de téléphone est obligatoire.',
            'max_length'  => 'Le numéro de téléphone ne peut pas dépasser 15 caractères.',
            'numeric'     => 'Le numéro de téléphone doit être uniquement composé de chiffres.'
        ]
    ];

    // Récupère les commandes acceptées avec les informations des chauffeurs
    public function getCommandeaccepter($client_id)
    {

    $query = $this->db->table('commande_accepter')
    ->select('commande_accepter.*, chauffeur.nom, chauffeur.prenom, chauffeur.telephone')
    ->join('chauffeur', 'commande_accepter.id_chauffeur = chauffeur.id_chauff', 'left')
     // Join with chauffeur table
    ->where('commande_accepter.id_client', $client_id) // Filter by the client's ID
    ->get();
    

        // Si la requête échoue, retourne une erreur sous forme de log au lieu de die()
        if (!$query) {
            log_message('error', 'Erreur dans la récupération des commandes acceptées: ' . $this->db->error()['message']);
            return [];
        }

        return $query->getResultArray();
    }

    // Ajoute une nouvelle commande acceptée
    public function addCommande($data)
    {
        // Debugging: Journalise les données à insérer
        log_message('debug', 'Commande data: ' . print_r($data, true));
        return $this->insert($data);
    }

    // Met à jour une commande acceptée existante
    public function updateCommande($id, $data)
    {
        return $this->update($id, $data);
    }

    // Supprime une commande acceptée
    public function deleteCommande($id)
    {
        return $this->delete($id);
    }
}
