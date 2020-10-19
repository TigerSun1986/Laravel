<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->times(50)->create();
        $user = User::find(1);
        $user->name = 'sunhu';
        $user->email = 'sunhu@inmix.com';
        $user->password = bcrypt('123456');
        $user->is_admin = true;
        $user->save();
    }
}
