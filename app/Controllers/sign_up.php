<?php

namespace App\Controllers;

use App\Models\ClientModel;

class Sign_up extends BaseController
{
    public function view()
    {
        return view('S_inscrire');
    }
    public function about_v()
    {
        // Afficher le formulaire d'inscription
        return view('about');
    }

    public function S_inscrire()
    {
        helper(['form']);

        $clientModel = new ClientModel();

        $data = [
            'nom'       => $this->request->getPost('nom'),
            'prenom'    => $this->request->getPost('prenom'),
            'email'     => $this->request->getPost('email'),
            'telephone' => $this->request->getPost('telephone'),
            'password'  => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        try {
            if ($clientModel->insert($data)) {
                return redirect()->to('/dashboard');
            } else {
                echo "Erreur lors de l'insertion : ";
                print_r($clientModel->errors());
            }
        } catch (\Exception $e) {
            echo "Exception SQL : " . $e->getMessage();
        }
    }
}
