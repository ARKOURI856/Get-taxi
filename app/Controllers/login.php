<?php
namespace App\Controllers;

use App\Models\ClientModel;

class Login extends BaseController
{
    public function se_connecter()
    {
        return view('se_connecterv'); // Affiche la vue de connexion
    }
    public function dashboard(): string{
        $session = session();
        $userData = [
            'nom' => $session->get('nom'),
            'prenom' => $session->get('prenom'),
            'email' => $session->get('email'),
            'telephone' => $session->get('telephone'),
        ];
        return view('clientdash',$userData);
       }
    public function authentifier()
    {
        $session = session();
        $model = new ClientModel();

        // Récupération des données POST
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Vérification des identifiants
        $client = $model->where('email', $email)->first();

        if ($client && password_verify($password, $client['password'])) {
            // Identifiants valides : enregistrer l'utilisateur dans la session
            $session->set('id_client', $client['id_client']);
            $session->set('nom', $client['nom']);
            $session->set('prenom', $client['prenom']);

            return redirect()->to('/dashboard'); // Redirection vers une page sécurisée
        } else {
            // Identifiants invalides
            return redirect()->back()->with('error', 'Adresse email ou mot de passe incorrect.');
        }
    }

    public function deconnexion()
    {
        $session = session();
        $session->destroy(); // Déconnexion de l'utilisateur
        return redirect()->to('/se_connecter_chaff'); // Retour à la page de connexion
    }

}
?>