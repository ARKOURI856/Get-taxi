<?php

namespace App\Controllers;

use App\Models\ChauffeurModel;

class sign_up_chauff extends BaseController
{
    public function view_chauff()
    {
        // Afficher le formulaire d'inscription
        return view('s_inscrire_chauf');
    }
  

    public function S_inscrire_chauff()
    {
        helper(['form', 'url']);
        
        // Instancier le modèle
        $ChauffeurModel = new ChauffeurModel();

        // Récupérer les données du formulaire
        $data = [
            'nom'       => $this->request->getPost('nom'),
            'prenom'    => $this->request->getPost('prenom'),
            'email'     => $this->request->getPost('email'),
            'telephone' => $this->request->getPost('telephone'),
            'cnie'      => $this->request->getPost('cnie'),
            'matricule' => $this->request->getPost('matricule'),
            'permis_code' => $this->request->getPost('permis_code'),
            'password'  => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        // Validation des fichiers

        // Valider les fichiers
        // Insérer les données dans la base de données
        try {
            if ($ChauffeurModel->insert($data)) {
                return redirect()->to('/dashboard_chauff');
            } else {
                echo "Erreur lors de l'insertion : ";
                print_r($ChauffeurModel->errors());
            }
        } catch (\Exception $e) {
            echo "Exception SQL : " . $e->getMessage();
        }
    }
}
