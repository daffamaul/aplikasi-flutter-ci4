<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProdukMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'null' => false,
            ],
            'kode_produk' => [
                'type'       => 'VARCHAR',
                'constraint'    => 255,
                'null'       => false,
            ],
            'nama_produk' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null'          => false,
            ],
            'harga' => [
                'type' => 'INT',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('produk');
    }

    public function down()
    {
        $this->forge->dropTable('produk');
    }
}
