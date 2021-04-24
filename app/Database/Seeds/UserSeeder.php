<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$user_data = [
			[

				'nama' => 'Administrator',
				'nis' => '0',
				'email' => 'administrator@gmail.com',
				'password' => password_hash('pass1234', PASSWORD_BCRYPT),
				'role' => 'admin'
			],
			[
				'nama' => 'lisda',
				'nis' => '201403080',
				'email' => 'lisda@gmail.com',
				'password' => password_hash('pass1234', PASSWORD_BCRYPT),
				'role' => 'siswa'
			]
		];
		foreach ($user_data as $data) {
			// insert semua data ke tabel
			$this->db->table('users')->insert($data);
		}
	}
}
