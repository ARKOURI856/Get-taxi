<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCommandeTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'client_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'depart' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'arrive' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
           'date' => [
            'type'       => 'TIMESTAMP',
            'default'    => 'CURRENT_TIMESTAMP',
            'null'       => false,
],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('client_id', 'client', 'id_client', 'CASCADE', 'CASCADE');
        $this->forge->createTable('commande',true);
    }

    public function down()
    {
        $this->forge->dropTable('commande');
    }
}
