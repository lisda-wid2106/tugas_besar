<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Kegiatan extends Seeder
{
	public function run()
	{
		$user_data = [
			[

			'nama_kegiatan' => 'Upacara Bendera',
			'tanggal' => '2021-11-11',
			
			],
			[
				'nama_kegiatan' => 'Upacara Bendera Lagi',
				'tanggal' => '2021-11-12',
			]
			
		];
		foreach($user_data as $data){
			// insert semua data ke tabel
			$this->db->table('kegiatan')->insert($data);
		}
	}
}