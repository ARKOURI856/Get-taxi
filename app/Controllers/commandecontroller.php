<?php

namespace App\Controllers;

use App\Models\ClientModel;
use App\Models\commande;

class commandecontroller extends BaseController
{


public function command_insert()
    {
        helper(['form']);

        $id_client = session('id_client'); // Récupère l'id_client de la session
    if (!$id_client) {
        echo "Erreur : ID Client introuvable dans la session.";
        exit;
    }

        $commandeModel = new commande();

        $data = [
            'id_client' => $id_client,
            'depart'       => $this->request->getPost('depart'),
            'arrive'    => $this->request->getPost('arrive'),
            'nbrplaces'     => $this->request->getPost('nbrplaces'),
        ];

        try {
            if ($commandeModel->insert($data)) {
                echo "Données insérées avec succès !";
            } else {
                echo "Erreur lors de l'insertion : ";
                print_r($commandeModel->errors());
            }
        } catch (\Exception $e) {
            echo "Exception SQL : " . $e->getMessage();
        }
    }
}
    ?>