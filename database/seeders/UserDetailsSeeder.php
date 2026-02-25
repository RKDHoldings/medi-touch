<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Find or create the roles
        $adminRole = Role::where('name', 'admin')->firstOrCreate(['name' => 'admin']);
        $staffRole = Role::where('name', 'staff')->firstOrCreate(['name' => 'staff']);

        // Admin user
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@meditouch.com.np',
            'phone' => '9801234567',
            'password' => bcrypt('MediTouch@123')
        ]);
        $admin->assignRole($adminRole); // Assign the role object

        // Staff user
        $staff = User::create([
            'name' => 'Staff',
            'email' => 'staff@meditouch.com.np',
            'phone' => '9876543211',
            'password' => bcrypt('MediStaff@123')
        ]);
        $staff->assignRole($staffRole);

        // Another Admin user
        
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'clinic.meditouch@gmail.com',
            'phone' => '061590664',
            'password' => bcrypt('forMail@only')
        ]);
        $admin->assignRole($adminRole);
    }
}
