<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

                // create permissions
        Permission::create(['name' => 'create supply']);
        Permission::create(['name' => 'delete supply']);

                // this can be done as separate statements
        $role = Role::create(['name' => 'distributor']);
        $role->givePermissionTo('create supply');

          $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());

           $user=\App\User::first()->assignRole("distributor");


    }
}
