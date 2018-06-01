<?php

use Illuminate\Database\Seeder;
use App\Item;
use App\Category;
use App\Order;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//cakes
    	$category = App\Category::create(['title' => 'Торты', 'description' => 'Наши торты. Только свежая и вкусная выпечка', 'photo' => "https://static.1000.menu/img/content/4999/shvarcvaldskii-vishnevyi-tort_1396253792_1_max.jpg"]);

    	$order = App\Order::create(['customer_name' => 'John Doe','customer_phone' => '050-212-12-12', 'customer_email' => 'customer@gmail.com']);

    	$arr = [];

        $item = new App\Item(['title' => 'Шварцвальдский лес', 'description' => 'Очень вкусно', 'price' => 100.00, 'photo' => "https://static.1000.menu/img/content/4999/shvarcvaldskii-vishnevyi-tort_1396253792_1_max.jpg"]);
        $item->category()->associate($category);
        $item->save();

        $arr[] = $item->id;

        $item = new App\Item(['title' => 'Ванильный торт', 'description' => 'Вкусно-превкусно', 'price' => 100.00, 'photo' => "https://static.1000.menu/img/content/4999/shvarcvaldskii-vishnevyi-tort_1396253792_1_max.jpg"]);
		$item->category()->associate($category);
        $item->save();

        $arr[] = $item->id;

        $item = new App\Item(['title' => 'Красный бархат', 'description' => 'Супер класс', 'price' => 100.00, 'photo' => "https://static.1000.menu/img/content/4999/shvarcvaldskii-vishnevyi-tort_1396253792_1_max.jpg"]);
        $item->category()->associate($category);
        $item->save();

        $arr[] = $item->id;

        $item = new App\Item(['title' => 'Красный бархат', 'description' => 'этот торт самый лучший', 'price' => 100.00, 'photo' => "https://static.1000.menu/img/content/4999/shvarcvaldskii-vishnevyi-tort_1396253792_1_max.jpg"]);
        $item->category()->associate($category);
        $item->save();

        $arr[] = $item->id;

        $order->items()->attach($arr);


        //biscuits
        $category = App\Category::create(['title' => 'Печенье', 'description' => 'Наше печенье. Только свежая и вкусная выпечка', 'photo' => "https://static.1000.menu/img/content/8729/pechene-kurabe_1486594445_ogv2_og.jpg"]);

        $order = App\Order::create(['customer_name' => 'Jane Doe', 'customer_phone' => '067-333-44-55', 'customer_email' => 'thecustomer@gmail.com']);

        $arr2 = [];
        $item = new App\Item(['category_id' => 1, 'title' => 'Шоколадное печенье', 'description' => 'Очень вкусно', 'price' => 100.00, 'photo' => "https://s1.eda.ru/StaticContent/Photos/120131083347/150811232211/p_O.jpg"]);
        $item->category()->associate($category);
        $item->save();

        $arr2[] = $item->id;

        $item = new App\Item(['title' => 'Кокосовое печенье', 'description' => 'Вкусно-превкусно', 'price' => 100.00, 'photo' => "https://s1.eda.ru/StaticContent/Photos/120131083347/150811232211/p_O.jpg"]);
		$item->category()->associate($category);
        $item->save();

        $arr2[] = $item->id;

        $item = new App\Item(['title' => 'Ванильно-банановое', 'description' => 'Супер класс', 'price' => 100.00, 'photo' => "https://s1.eda.ru/StaticContent/Photos/120131083347/150811232211/p_O.jpg"]);
        $item->category()->associate($category);
        $item->save();

        $arr2[] = $item->id;

        $item = new App\Item(['title' => 'Печенье с изюмом', 'description' => 'это печенье самое лучшее', 'price' => 100.00, 'photo' => "https://s1.eda.ru/StaticContent/Photos/120131083347/150811232211/p_O.jpg"]);
        $item->category()->associate($category);
        $item->save();

        $arr2[] = $item->id;

        $order->items()->attach($arr2);
    }
}
