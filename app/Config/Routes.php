<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/S_inscrire', 'Sign_up::view');
$routes->post('/dashbord', 'Sign_up::S_inscrire');
$routes->get('/about', 'Sign_up::about_v');

$routes->get('/se_connecter', 'Login::se_connecter');         // Affiche le formulaire de connexion
$routes->post('/authentifier', 'Login::authentifier');        // Traite la connexion
$routes->get('/dashboard', 'Login::dashboard'); // Exemple de route sécurisée
$routes->get('/deconnexion', 'Login::deconnexcommand_insertion');  

$routes->post('/commande','commandecontroller::command_insert');

$routes->get('/S_inscrire_chauff', 'sign_up_chauff::view_chauff');
$routes->post('/chauff_dash', 'sign_up_chauff::S_inscrire_chauff');

$routes->get('/se_connecter_chaff', 'Login_chauff::se_connecter_chauff');         // Affiche le formulaire de connexion
$routes->post('/authentifier_chauff', 'Login_chauff::authentifier_chauff');        // Traite la connexion
$routes->get('/dashboard_chauff', 'Login_chauff::dashboard_chauff');
$routes->get('/deconnexion', 'Login_chauff::deconnexion');  

$routes->get('/commande_accepter', 'acceptercontroller::insert_accepter');
$routes->get('/etat_commande', 'acceptercontroller::display_accepter');

