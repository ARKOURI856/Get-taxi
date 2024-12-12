<?php

namespace App\Models;

use CodeIgniter\Model;

class ChauffeurModel extends Model
{
    protected $table = 'chauffeur';
    protected $primaryKey = 'id_chauff';

    protected $allowedFields = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'cnie',
        'permis_code',
        'matricule',
        'password',
    ];

    protected $validationRules = [
        'nom'          => 'required|alpha_space|max_length[100]',
        'prenom'       => 'required|alpha_space|max_length[100]',
        'email'        => 'required|valid_email|max_length[150]|is_unique[chauffeur.email]',
        'telephone'    => 'required|numeric|max_length[15]',
        'cnie'         => 'required|alpha_numeric|max_length[10]',
        'permis_code'  => 'required|regex_match[/^[A-Z]{2}-\d{4}-\d{6}$/]|is_unique[chauffeur.permis_code]',
         'matricule' => 'required|regex_match[/^\d{2}\|\p{Arabic}\|\d{3,5}$/u]|max_length[20]',
        'password'     => 'required|min_length[8]',
    ];

    protected $validationMessages = [
        'email' => [
            'is_unique'    => 'Cette adresse email est déjà utilisée.',
            'valid_email'  => 'Veuillez fournir une adresse email valide.',
        ],
        'telephone' => [
            'required' => 'Le numéro de téléphone est obligatoire.',
            'numeric'  => 'Le numéro de téléphone doit contenir uniquement des chiffres.',
        ],
        'cnie' => [
            'required'       => 'Le CNIE est obligatoire.',
            'alpha_numeric'  => 'Le CNIE ne peut contenir que des lettres et des chiffres.',
        ],
        'permis_code' => [
            'required'    => 'Le code de permis est obligatoire.',
            'regex_match' => 'Le code de permis doit suivre le format "XX-YYYY-ZZZZZZ".',
            'is_unique'   => 'Ce code de permis est déjà utilisé.',
        ],
        'matricule' => [
            'required'    => 'Le matricule est obligatoire.',
            'regex_match' => 'Le matricule doit contenir uniquement des lettres et des chiffres (1-20 caractères).',
        ],
        'password' => [
            'required'    => 'Le mot de passe est obligatoire.',
            'min_length'  => 'Le mot de passe doit contenir au moins 8 caractères.',
        ],
    ];

    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password']) && !password_get_info($data['data']['password'])['algo']) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }

    public function getChauffeurByMatricule($id)
    {
        if (empty($id)) {
            return null;
        }
        return $this->where('id_chauff', $id)->first();
    }
}
