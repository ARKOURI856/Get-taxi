<?php

namespace App\Controllers;

use App\Models\ChauffeurModel;
use App\Models\commande;

class Login_chauff extends BaseController
{
    public function se_connecter_chauff()
    {
        return view('se_connecter_chauffv'); // Vue de connexion
    }

    public function dashboard_chauff(): string
{
    $commandeModel = new commande();
    $commandedata['commandes'] = $commandeModel->getCommandeWithClient();
    
    $session = session();
    $chauffeurData = [
        'id_chauff'  => $session->get('id_chauff'),
        $id_client    = $session->get('id_client'),
        'nom' => $session->get('nom'),
        'prenom' => $session->get('prenom'),
        'telephone' => $session->get('telephone'),
        'email'   => $session->get('email')
    ];
    $data = array_merge($commandedata, $chauffeurData);

    if (empty($commandedata['commandes'])) {
        echo "No commandes found or client data mismatch.";
        exit;
    }

    return view('chauff_dash', $data);
}


    public function authentifier_chauff()
    {
        $session = session();
        $model = new ChauffeurModel();
        $commandeModel = new commande();
        

            
        // Récupération des données POST
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Vérification des identifiants
        $chauff = $model->where('email', $email)->first();
      
        if ($chauff && password_verify($password, $chauff['password'])) {
            // Enregistrer les données dans la session
            
            $session->set([
                'id_chauff' => $chauff['id_chauff'],
                'nom' => $chauff['nom'],
                'prenom' => $chauff['prenom'],
                'email' => $chauff['email'],
                'telephone' => $chauff['telephone'],
                'cnie' => $chauff['cnie'],
                'permis_code' => $chauff['permis_code'],
                'matricule' => $chauff['matricule'],
                
            ]);
            $clientId = $session->get('id_client'); // Retrieve the client ID from the session

        // Ensure the client ID exists in the session before proceeding
        if ($clientId) {
            // Récupérer la commande du client basé sur l'id_client
            $commande = $commandeModel->where('id_client', $clientId)->first();

            if ($commande) {
                // Enregistrer les données de la commande dans la session
                $session->set([
                    'id_client' => $commande['id_client'],
                    'depart' => $commande['depart'],
                    'arrive' => $commande['arrive'],
                    'date' => $commande['date'],
                    'nbrplaces' => $commande['nbrplaces'],
                ]);
            }
        }
            return redirect()->to('/dashboard_chauff'); // Redirection vers le tableau de bord
        } else {
            // Identifiants invalides
            var_dump($chauff);
            return redirect()->back()->with('error', 'Adresse email ou mot de passe incorrect.');
            
        }
    }

    


    public function deconnexion()
    {
        $session = session();
        $session->destroy(); // Déconnexion
        return redirect()->to('/se_connecter_chaff'); // Retour à la page de connexion
    }
}
