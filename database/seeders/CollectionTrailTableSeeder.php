<?php

namespace Database\Seeders;

use App\Models\CollectionTrail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionTrailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collection_trail')->delete();
        $datas=[
            [
                'collection_id'=>11,
                'trail_id'=>51
            ],
            [
                'collection_id'=>11,
                'trail_id'=>31,
            ],
            [
                'collection_id'=>41,
                'trail_id'=>41,
            ],
            [
                'collection_id'=>31,
                'trail_id'=>1,
            ],
            [
                'collection_id'=>21,
                'trail_id'=>21,
            ],
            [
                'collection_id'=>31,
                'trail_id'=>11,
            ],[
                'collection_id'=>41,
                'trail_id'=>31,
            ],
            [
                'collection_id'=>41,
                'trail_id'=>21,
            ],
            [
                'collection_id'=>11,
                'trail_id'=>41,
            ],
            [
                'collection_id'=>61,
                'trail_id'=>11,
            ],
        ];
        foreach ($datas as $data){
            $collection_trail=new CollectionTrail();
            $collection_trail->collection_id=$data['collection_id'];
            $collection_trail->trail_id=$data['trail_id'];
            $collection_trail->save();
        }
    }
}
