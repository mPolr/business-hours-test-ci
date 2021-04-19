<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddOrganization extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
                'constraint'     => 5,
            ],
            'name'       => [
                'type'       => 'VARCHAR',
                'constraint'     => 50,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('organization');
    }

    public function down()
    {
        $this->forge->dropTable('organization');
    }
}