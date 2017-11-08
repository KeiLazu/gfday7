<?php

use Illuminate\Database\Seeder;
use App\memo;

class memoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $memo = new memo();
        $memo->titlememo = 'test';
        $memo->containermemo = 'testtest';
        $memo = new memo();
        $memo->titlememo = 'kei';
        $memo->containermemo = 'testing sawoemde';
        $memo->save();
        // DB::table('memos')->insert(array(
        //     array('titlememo'=>'test','containermemo'=>'testtest'),
        //     array('titlememo'=>'kei','containermemo'=>'playing sawoemde'),
        // ));
    }
}
