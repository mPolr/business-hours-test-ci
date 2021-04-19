<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSchedule extends Migration
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

            'organization_id'          => [
                'type'           => 'INT',
                'unsigned'       => true,
                'constraint'     => 5,
            ],

            'day_of_week'       => [
                'type'       => 'INT',
                'constraint'     => 1,
            ],

            'open'       => [
                'type'       => 'INT',
                'constraint'     => 2,
            ],

            'close'       => [
                'type'       => 'INT',
                'constraint'     => 1,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('schedule');
    }

    public function down()
    {
        $this->forge->dropTable('schedule');
    }
}