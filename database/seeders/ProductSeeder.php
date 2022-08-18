<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'LG mobile',
            'price'=>'200',
            'description' => 'Smart phone with 4GB RAM',
            'category'=>'mobile',
            'gallary'=>'https://media.istockphoto.com/id/1301151677/photo/modern-mobile-phone-mockup-with-sample-home-screens-user-interface-and-app-icons-are.webp?s=612x612&w=is&k=20&c=xqgPQKze-Ykhe4Ak5zV7f3HH8rPepNBl1KnOvbJ8BfY='
            ],    
            [
            'name'=>'Samsung mobile',
            'price'=>'250',
            'description' => 'Smart phone with 4GB RAM',
            'category'=>'mobile',
            'gallary'=>'https://media.istockphoto.com/id/1301151677/photo/modern-mobile-phone-mockup-with-sample-home-screens-user-interface-and-app-icons-are.webp?s=612x612&w=is&k=20&c=xqgPQKze-Ykhe4Ak5zV7f3HH8rPepNBl1KnOvbJ8BfY='
            ],    
            [
            'name'=>'REDMI mobile',
            'price'=>'299',
            'description' => 'Smart phone with 4GB RAM',
            'category'=>'mobile',
            'gallary'=>'https://media.istockphoto.com/id/1301151677/photo/modern-mobile-phone-mockup-with-sample-home-screens-user-interface-and-app-icons-are.webp?s=612x612&w=is&k=20&c=xqgPQKze-Ykhe4Ak5zV7f3HH8rPepNBl1KnOvbJ8BfY='
            ],    
            [
            'name'=>'LG Refrigerator',
            'price'=>'1000',
            'description' => 'With All features',
            'category'=>'refrigerator',
            'gallary'=>'https://media.istockphoto.com/id/1301151677/photo/modern-mobile-phone-mockup-with-sample-home-screens-user-interface-and-app-icons-are.webp?s=612x612&w=is&k=20&c=xqgPQKze-Ykhe4Ak5zV7f3HH8rPepNBl1KnOvbJ8BfY='
            ],    
            [
            'name'=>'LG TV',
            'price'=>'350',
            'description' => 'Smart TV',
            'category'=>'television',
            'gallary'=>'https://media.istockphoto.com/id/1301151677/photo/modern-mobile-phone-mockup-with-sample-home-screens-user-interface-and-app-icons-are.webp?s=612x612&w=is&k=20&c=xqgPQKze-Ykhe4Ak5zV7f3HH8rPepNBl1KnOvbJ8BfY='
            ]    
        ]);
    }
}
