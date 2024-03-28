<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Admin = Role::create(['name' => 'Admin']); // Rol 1
        $Comprador = Role::create(['name' => 'Comprador']); // Rol 2
        $Vendedor = Role::create(['name' => 'Vendedor']); // Rol 3

        // products 

        Permission::create(['name' => 'all-products'])->syncRoles([$Admin,$Comprador,$Vendedor]);
        Permission::create(['name' => 'products-options'])->syncRoles([$Admin]);
        Permission::create(['name' => 'products.index'])->syncRoles([$Admin,$Vendedor]);
        Permission::create(['name' => 'products.create'])->syncRoles([$Admin]);
        Permission::create(['name' => 'products.store'])->syncRoles([$Admin]);
        Permission::create(['name' => 'products.edit'])->syncRoles([$Admin]);
        Permission::create(['name' => 'products.update'])->syncRoles([$Admin]);
        Permission::create(['name' => 'products.show'])->syncRoles([$Admin]);
        Permission::create(['name' => 'products.destroy'])->syncRoles([$Admin,$Vendedor]);

       //producer_details

       Permission::create(['name' => 'producer_details.index'])->syncRoles([$Admin,$Vendedor]);
       Permission::create(['name' => 'show2'])->syncRoles([$Admin,$Vendedor]);
       Permission::create(['name' => 'producer_details.create'])->syncRoles([$Admin,$Vendedor]);
       Permission::create(['name' => 'producer_details.store'])->syncRoles([$Admin,$Vendedor]);
       Permission::create(['name' => 'producer_details.edit'])->syncRoles([$Admin,$Vendedor]);
       Permission::create(['name' => 'producer_details.update'])->syncRoles([$Admin,$Vendedor]);
       Permission::create(['name' => 'producer_details.show'])->syncRoles([$Admin,$Vendedor,$Comprador]);
       Permission::create(['name' => 'producer_details.destroy'])->syncRoles([$Admin,$Vendedor]);


       // permisos solo del admin

       Permission::create(['name' => 'admin.index'])->syncRoles([$Admin]);
       Permission::create(['name' => 'admin.create'])->syncRoles([$Admin]);
       Permission::create(['name' => 'admin.store'])->syncRoles([$Admin]);
       Permission::create(['name' => 'admin.edit'])->syncRoles([$Admin]);
       Permission::create(['name' => 'admin.update'])->syncRoles([$Admin]);
       Permission::create(['name' => 'admin.show'])->syncRoles([$Admin]);
       Permission::create(['name' => 'admin.destroy'])->syncRoles([$Admin]);

       Permission::create(['name' => 'request_type.index'])->syncRoles([$Admin]);
       Permission::create(['name' => 'request_type.create'])->syncRoles([$Admin]);
       Permission::create(['name' => 'request_type.store'])->syncRoles([$Admin]);
       Permission::create(['name' => 'request_type.edit'])->syncRoles([$Admin]);
       Permission::create(['name' => 'request_type.update'])->syncRoles([$Admin]);
       Permission::create(['name' => 'request_type.show'])->syncRoles([$Admin]);
       Permission::create(['name' => 'request_type.destroy'])->syncRoles([$Admin]);

       Permission::create(['name' => 'users.index'])->syncRoles([$Admin]);
       Permission::create(['name' => 'users.store'])->syncRoles([$Admin]);
       Permission::create(['name' => 'users.edit'])->syncRoles([$Admin]);
       Permission::create(['name' => 'users.update'])->syncRoles([$Admin]);
       Permission::create(['name' => 'users.show'])->syncRoles([$Admin]);
       Permission::create(['name' => 'users.destroy'])->syncRoles([$Admin]);

       Permission::create(['name' => 'applications_all'])->syncRoles([$Admin]);




    }
}
