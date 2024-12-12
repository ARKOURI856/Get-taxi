<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCommandeAccepterTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_accepter' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_chauffeur' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'id_client' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'nom_chauffeur' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'prenom_chauffeur' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'tele_chauffeur' => [
                'type'       => 'VARCHAR',
                'constraint' => 15,
            ],
            'email_chauff' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);

        // Set primary key
        $this->forge->addKey('id_accepter', true);
        $this->forge->addKey('id_client');
        $this->forge->addForeignKey('id_chauffeur', 'chauffeur', 'id_chauff', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_client', 'client', 'id_client', 'CASCADE', 'CASCADE');
        $this->forge->createTable('commande_accepter');
    }

    public function down()
    {
        // Drop the table if it exists
        $this->forge->dropTable('commande_accepter');
    }
}
