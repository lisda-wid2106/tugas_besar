<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KegiatanTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true,
			],
			'nama_kegiatan' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'tanggal' => [
				'type' => 'Date',
			],

		]);
		$this->forge->addKey('id');
		$this->forge->createTable('kegiatan');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('kegiatan');
	}
}
