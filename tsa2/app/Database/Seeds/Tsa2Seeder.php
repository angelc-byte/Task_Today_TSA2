<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Tsa2Seeder extends Seeder
{
    public function run()
    {
        $this->db->table('users')->insert([
            'username' => 'angel',
            'password' => password_hash('password123', PASSWORD_DEFAULT),
            'full_name' => 'Angel Clarise C. Tolentino',
            'email' => 'angel.tolentino@example.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        $now = date('Y-m-d H:i:s');
        $this->db->table('tasks')->insertBatch([
            ['title' => 'Review project requirements', 'description' => 'Check all TSA2 requirements before implementation.', 'status' => 'completed', 'task_date' => date('Y-m-d'), 'is_archived' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Test authentication flow', 'description' => 'Verify logged-out redirects and logged-in management actions.', 'status' => 'pending', 'task_date' => date('Y-m-d'), 'is_archived' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Prepare submission package', 'description' => 'Review the repository, database, README, and documentation.', 'status' => 'pending', 'task_date' => date('Y-m-d', strtotime('+1 day')), 'is_archived' => 0, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}

