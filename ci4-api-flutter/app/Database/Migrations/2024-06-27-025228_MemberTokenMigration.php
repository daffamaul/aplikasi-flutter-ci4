<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MemberTokenMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'null' => false,
            ],
            'member_id' => [
                'type'       => 'INT',
                'null'       => false,
            ],
            'auth_key' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null'          => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('member_id', 'member', 'id', 'cascade', 'cascade');
        $this->forge->createTable('member_token');
    }

    public function down()
    {
        $this->forge->dropTable('member_token');
    }
}
