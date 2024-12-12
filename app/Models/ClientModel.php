<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model
{
    protected $table = 'client'; // Nom de la table
    protected $primaryKey = 'id_client'; // Clé primaire

    // Colonnes autorisées pour l'insertion ou la mise à jour
    protected $allowedFields = ['nom', 'prenom', 'email', 'telephone', 'password'];

    // Validation des données
    protected $validationRules = [
        'nom'       => 'required|alpha_space|max_length[100]',
        'prenom'    => 'required|alpha_space|max_length[100]',
        'email'     => 'required|valid_email|max_length[150]',
        'telephone' => 'required|numeric|max_length[15]',
        'password'  => 'required|min_length[8]',
    ];

    protected $validationMessages = [];
}
