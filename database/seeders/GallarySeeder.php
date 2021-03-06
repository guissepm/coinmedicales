<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\Gallary;
class GallarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallary::where('id', '>', '0')->delete();

        Gallary::insertOrIgnore([
            'name'=>'01-logo.png',
            'extension'=>'image/png',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'1.jpg',
            'extension'=>'image/jpg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109042527banner_270x211.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109025727banner_270x229.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109042309banner_271x451.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109025813banner_368x550.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109025823banner_370x210.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109025851banner_370x220.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109025909banner_370x230.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109025939banner_370x230.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109020219banner_370x277.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109040046banner_370x493.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109045900banner_372x546.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109020247banner_470x210.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109020336banner_470x210.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109020344banner_568x298.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109042006banner_570x211.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109041942banner_570x451.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109020413banner_570x490.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109043135banner_770x259.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109045938banner_770x301.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109045900banner_372x546.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109045938banner_770x301.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109045420banner_270x229.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109041942banner_570x451.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109042006banner_570x211.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109042527banner_270x211.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109042309banner_271x451.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109040046banner_370x493.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109043135banner_770x259.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109054227banner_370x193.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109054758category900x900.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109055140wUJPQ27501.png',
            'extension'=>'image/png',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109050158product_1_900x900.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109050215product_2_900x900.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109050235product_3_900x900.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109052217product_4_900x900.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109052232product_5_900x900.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109052248product_6_900x900.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109052304product_7_900x900.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109061656homebanner1600x800.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109081240product_8_900x900.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);	
         Gallary::insertOrIgnore([
            'name'=>'202109081253product_9_900x900.jpg',
            'extension'=>'image/jpeg',
            'user_id'=>'1',
            'created_by'=>'1'
         ]);
        
    }
}
