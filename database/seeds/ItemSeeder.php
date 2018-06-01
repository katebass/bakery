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

        $item = new App\Item(['title' => 'Шварцвальдский лес', 'description' => 'Очень вкусно', 'price' => 100.00, 'photo' => "https://static.1000.menu/img/content/16952/tort-biskvit-shokolad-na-kipyatke_1472929500_0_max.jpg"]);
        $item->category()->associate($category);
        $item->save();

        $arr[] = $item->id;

        $item = new App\Item(['title' => 'Ванильный торт', 'description' => 'Вкусно-превкусно', 'price' => 100.00, 'photo' => "http://eurotort.com.ua/katalog-tortov/images/big/405.jpg"]);
		$item->category()->associate($category);
        $item->save();

        $arr[] = $item->id;

        $item = new App\Item(['title' => 'Красный бархат', 'description' => 'Супер класс', 'price' => 100.00, 'photo' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXWBVUkQrwgv8l-D8W3xnzEeDTRsAlzRSkMAAsUkyvpBbHHSgF"]);
        $item->category()->associate($category);
        $item->save();

        $arr[] = $item->id;

        $item = new App\Item(['title' => 'Торт Ягодный', 'description' => 'этот торт самый лучший', 'price' => 100.00, 'photo' => "http://kamelenta.ru/files/0/408/14419716328216.png"]);
        $item->category()->associate($category);
        $item->save();

        $arr[] = $item->id;

        $order->items()->attach($arr);


        //biscuits
        $category = App\Category::create(['title' => 'Печенье', 'description' => 'Наше печенье. Только свежая и вкусная выпечка', 'photo' => "https://static.1000.menu/img/content/8729/pechene-kurabe_1486594445_ogv2_og.jpg"]);

        $order = App\Order::create(['customer_name' => 'Jane Doe', 'customer_phone' => '067-333-44-55', 'customer_email' => 'thecustomer@gmail.com']);

        $arr2 = [];
        $item = new App\Item(['category_id' => 1, 'title' => 'Шоколадное печенье', 'description' => 'Очень вкусно', 'price' => 100.00, 'photo' => "https://cakemade.club/wp-content/uploads/2015/04/pechenie-babochki.jpg"]);
        $item->category()->associate($category);
        $item->save();

        $arr2[] = $item->id;

        $item = new App\Item(['title' => 'Кокосовое печенье', 'description' => 'Вкусно-превкусно', 'price' => 100.00, 'photo' => "http://img.povar.ru/uploads/00/51/05/65/pechene_quotminutkaquot_s_povidlom-130767.jpg"]);
		$item->category()->associate($category);
        $item->save();

        $arr2[] = $item->id;

        $item = new App\Item(['title' => 'Ванильно-банановое', 'description' => 'Супер класс', 'price' => 100.00, 'photo' => "https://static.1000.menu/img/content/21063/-pechene-cherez-myasor-pechene-s-maionezom-cherez-myasorubku_1498654437_1_max.jpg"]);
        $item->category()->associate($category);
        $item->save();

        $arr2[] = $item->id;

        $item = new App\Item(['title' => 'Печенье с изюмом', 'description' => 'это печенье самое лучшее', 'price' => 100.00, 'photo' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReol8ZPVk4_WV5TFDPvnWnsFouqm6s3cT0I-XFHxUvKQR7YJsC"]);
        $item->category()->associate($category);
        $item->save();

        $arr2[] = $item->id;

        $order->items()->attach($arr2);
    }
}
