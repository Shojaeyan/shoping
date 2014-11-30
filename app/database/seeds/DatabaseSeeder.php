<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
        Eloquent::unguard();
        $this->call('RoleTableSeeder');
        $this->command->info('Role table seeded!');
    }

}

class RoleTableSeeder extends Seeder
{
    public function run() {
        DB::table('roles')->delete();
        Role::create(array('name' => 'admin'));
        Role::create(array('name' => 'pending'));
        Role::create(array('name' => 'member'));
        Role::create(array('name' => 'bronze'));
        Role::create(array('name' => 'silver'));
        Role::create(array('name' => 'gold'));
    }
}