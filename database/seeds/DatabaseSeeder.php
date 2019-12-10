<?php

use Illuminate\Database\Seeder;
use App\Models\Channel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ChannelsSeeder::class);
    }
}

class ChannelsSeeder extends Seeder {
    public function run(){
        // 最初に全レコード削除
        //DB::table('Channels')->delete();

        // レコードの登録
        Channel::create(array(
            'title' => 1,
            'description' => 'NHK',
            'published_flg' => true,
        ));

        Channel::create(array(
            'title' => 2,
            'description' => 'Eテレ',
            'published_flg' => false,
        ));
    }
}