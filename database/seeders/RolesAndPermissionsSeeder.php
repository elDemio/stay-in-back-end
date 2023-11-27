<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]
                ->forgetCachedPermissions();

        $viewHome = 'view Home';

        Permission::create(['name' => $viewHome]);

        $superAdmin = 'super-admin';
        $invitado = 'invitado';

        Role::create(['name' => $superAdmin])
                ->givePermissionTo(Permission::all());

        Role::create(['name' => $invitado])
                ->givePermissionTo([
                    $viewHome
                ]);
    }
}
