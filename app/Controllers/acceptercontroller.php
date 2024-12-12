<?php

namespace App\Controllers;

use App\Models\CommandeAccepterModel;

class acceptercontroller extends BaseController
{
    public function display_accepter(){

        $commande_acceptermodel = new CommandeAccepterModel();
        $client_id = session()->get('id_client'); // Retrieve the client's ID from the session
        if (!$client_id) {
            die('Client ID is not set in the session.');
        }
           
        $commande_accepter['commande_accepter'] = $commande_acceptermodel->getCommandeaccepter($client_id);
        
        return view('commande_etat',$commande_accepter);
    }
    public function insert_accepter()
    {

        
        $session = session();
        $id_chauffeur  = $session->get('id_chauff');
        $id_client     = $session->get('id_client');
        $nom_chauffeur = $session->get('nom');
        $prenom_chauffeur = $session->get('prenom');
        $tele_chauffeur = $session->get('telephone');
        $email_chauff   = $session->get('email');


        $commande = [
            'id_chauffeur'     => $id_chauffeur,
            'id_client'        => $id_client,
            'nom_chauffeur'    => $nom_chauffeur,
            'prenom_chauffeur' => $prenom_chauffeur,
            'tele_chauffeur'   => $tele_chauffeur,
            'email_chauff'     => $email_chauff,
        ];

        $model = new CommandeAccepterModel();
        try {
            if ($model->addCommande($commande)) {
                echo "Données insérées avec succès !";
            } else {
                echo "Erreur lors de l'insertion : ";
                print_r($model->errors());
            }
        } catch (\Exception $e) {
            echo "Exception SQL : " . $e->getMessage();
        }
    }
    

}