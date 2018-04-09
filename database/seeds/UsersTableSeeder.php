<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = User::find(1);
        $user->name = 'jinhesui';
        $user->email = 'jinhesui@163.com';
        $user->password = bcrypt('password');
        $user->avatar = 'http://www.gravatar.com/avatar/9e75bfd9f9c409516f52265c32bde750?s=140';
        $user->is_admin = true;
        $user->activated = true;
        $user->save();
    }
}
