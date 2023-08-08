<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'doctor-list',
            'doctor-create',
            'doctor-edit',
            'doctor-delete',
            'patient-list',
            'patient-create',
            'patient-edit',
            'patient-delete',
            'department-list',
            'department-create',
            'department-edit',
            'department-delete',
            'condition-list',
            'condition-create',
            'condition-edit',
            'condition-delete',
            'procedure-list',
            'procedure-create',
            'procedure-edit',
            'procedure-delete',
            'reference-list',
            'reference-create',
            'reference-edit',
            'reference-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete'

         ];

         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}
