<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'category-list',
            'category-create',
            'category-edit',
            'category-delete',
            'sub_category-list',
            'sub_category-create',
            'sub_category-edit',
            'sub_category-delete',
            'order-list',
            'order-create',
            'order-edit',
            'order-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete',
            'analysis-show',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }
    }
}
