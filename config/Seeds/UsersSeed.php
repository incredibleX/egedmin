<?php
use Phinx\Seed\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

/**
 * MenuItem seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $hasher = new DefaultPasswordHasher();
        $users = [
            'username' => "admin",
            'password' => $hasher->hash("admin"),
            'name' => "Administrator",
            'role' => "admin",
            'gender' => false,
            'marital_status' => 'single',
            'email' => 'admin@eg-admin.com',
            'street' => "123",
            'city' => "NY",
            'country' => 'USA',
            'zipcode' => '2432',
            'phone' => '234234341'

        ];
        $table = $this->table('users');
        $table->insert($users)->save();
    }
}