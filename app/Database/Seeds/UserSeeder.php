<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'uuid' => '6d6beb48-e47b-4c23-a5a7-159f2c64b673',
			'fullname' => 'Admin AYS',
            'username' => 'admin',
			'password' => password_hash('admin', PASSWORD_DEFAULT),
            'email'    => 'admin@ays.com',
        ];

        // Simple Queries
        $this->db->query('INSERT INTO users (uuid, fullname, username, password, email) VALUES(:uuid:, :fullname:, :username:, :password:, :email:)', $data);

        // Using Query Builder
        $this->db->table('users')->insert($data);
	}
}
