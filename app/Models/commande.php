<?php

namespace App\Models;

use CodeIgniter\Model;

class commande extends Model
{
    protected $table = 'commande'; // Nom de la table
    protected $primaryKey = 'id'; // Clé primaire
    protected $allowedFields = ['id_client', 'depart', 'arrive', 'date', 'nbrplaces']; // Colonnes autorisées
    protected $validationRules = [
        'depart'    => 'required|alpha_space|max_length[100]', // Valider 'depart'
        'arrive'    => 'required|alpha_space|max_length[100]', // Valider 'arrive'
        'nbrplaces' => 'required|integer|greater_than_equal_to[0]|less_than_equal_to[3]', // Min = 0, Max = 3
    ];
    public function getCommandeWithClient()
{
    $query = $this->db->table('commande')
        ->select('commande.*, client.*')
        ->join('client', 'commande.id_client = client.id_client')
        ->get();

    if (!$query) {
        die($this->db->error()['message']);
    }

    return $query->getResultArray();
}
}
