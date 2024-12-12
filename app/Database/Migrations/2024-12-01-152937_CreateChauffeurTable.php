<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateChauffeurTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_chauff' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nom' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => false,
            ],
            'prenom' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => false,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
                'null'       => false,
                'unique'     => true,
            ],
            'telephone' => [
                'type'       => 'VARCHAR',
                'constraint' => 15,
                'null'       => false,
            ],
          
            'cnie' => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
                'null'       => false,
                'unique'     => true,
            ],
            'permis_code' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
                'unique'     => true,
            ],
            'matricule' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'null'       => false,
                'unique'     => true,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('id_chauff', true); // Primary key
        $this->forge->createTable('chauffeur');
    }

    public function down()
    {
        $this->forge->dropTable('chauffeur');
    }
}
