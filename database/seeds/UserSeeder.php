<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'めるぴっと太郎',
            'email' => 'test@test.test',
            'email_verified_at' => now(),
            'password' => Hash::make('testtest'),
        ]);
        // パスワードをDBに保存する際は、ハッシュ化して保存するのが一般的です。
        // 以下のコードでパスワードのハッシュを生成できます。
    }
}
