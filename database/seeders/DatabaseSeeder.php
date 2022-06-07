<?php


namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Products::factory(50)->create();
        // Produts::factory()->count(50)->create();

        $products = array([
            'name' => 'Women Printed Rayon Straight Kurta  (Light Green)',
            'price' => '394',
            'description' => 'Special PriceGet extra 10% off (price inclusive of discount)T&C

Bank Offer5% Cashback on Flipkart Axis Bank CardT&C

Bank OfferFlat ₹100 Off* On 1st Transaction through Flipkart Pay LaterT&C

Partner OfferWishlist Now or Add to Cart, Extra 10% Off up to ₹50 on Selected Fashion Product',
            'image' => 'https://rukminim1.flixcart.com/image/880/1056/kqpj4i80/kurta/j/h/8/xl-ku632lgn-mokshi-original-imag4nmvvfny6vyf.jpeg?q=50',
        ],[
            'name' => 'Women Printed Crepe Anarkali Kurta  (Maroon)',
            'price' => '224',
            'description' => 'Special PriceGet extra 10% off (price inclusive of discount)T&C

Bank Offer5% Cashback on Flipkart Axis Bank CardT&C

Bank OfferFlat ₹100 Off* On 1st Transaction through Flipkart Pay LaterT&C

Partner OfferWishlist Now or Add to Cart, Extra 10% Off up to ₹50 on Selected Fashion Products',
            'image' => 'https://rukminim1.flixcart.com/image/880/1056/kq2o2vk0/kurta/i/b/f/s-kurti-9-maroon-ashvmegh-original-imag465pdppp4uzm.jpeg?q=50',
        ],[
            'name' => '7088-SILVER DAY AND DATE WORKING Analog Watch - For Men',
            'price' => '224',
            'description' => 'Special PriceGet extra 10% off (price inclusive of discount)T&C

Bank Offer5% Cashback on Flipkart Axis Bank CardT&C

Bank OfferFlat ₹100 Off* On 1st Transaction through Flipkart Pay LaterT&C

Partner OfferWishlist Now or Add to Cart, Extra 10% Off up to ₹50 on Selected Fashion Products',
            'image' => 'https://rukminim1.flixcart.com/image/880/1056/krjjde80/watch/c/o/e/7088-silver-hmtr-original-imag5b9qe7xhc4jz.jpeg?q=50',
        ],[
            'name' => 'OPPO K10 (Blue Flame, 128 GB)  (6 GB RAM)',
            'price' => '14,990',
            'description' => 'Bank Offer₹1750 Instant Discount with Bank of Baroda Credit, Credit Card EMI TransactionsT&C

Bank OfferFlat ₹100 Off* On 1st Transaction through Flipkart Pay LaterT&C

Special PriceGet extra ₹4009 off (price inclusive of discount)T&C

Freebie25% Off on Discovery+ Subscription',
            'image' => 'https://rukminim1.flixcart.com/image/416/416/kg6vfrk0/noodle/g/v/r/70-2-minute-noodles-instant-noodles-maggi-original-imafwh4kbzngtdzm.jpeg?q=70',
        ],[
            'name' => 'Maggi Mega Pack Masala Instant Noodles Vegetarian  (12 x 70 g)',
            'price' => '143',
            'description' => 'Special PriceGet extra 5% off (price inclusive of discount)T&C

Bank Offer10% off on SBI Credit Cards, up to ₹250. On orders of ₹2000 and aboveT&C

Bank Offer5% Cashback on Flipkart Axis Bank Card',
            'image' => 'https://rukminim1.flixcart.com/image/416/416/kg6vfrk0/noodle/g/v/r/70-2-minute-noodles-instant-noodles-maggi-original-imafwh4kbzngtdzm.jpeg?q=70',
        ],[
            'name' => 'Women Printed Crepe Anarkali Kurta  (Maroon)',
            'price' => '224',
            'description' => 'Special PriceGet extra 10% off (price inclusive of discount)T&C

Bank Offer5% Cashback on Flipkart Axis Bank CardT&C

Bank OfferFlat ₹100 Off* On 1st Transaction through Flipkart Pay LaterT&C

Partner OfferWishlist Now or Add to Cart, Extra 10% Off up to ₹50 on Selected Fashion Products',
            'image' => 'https://rukminim1.flixcart.com/image/880/1056/kq2o2vk0/kurta/i/b/f/s-kurti-9-maroon-ashvmegh-original-imag465pdppp4uzm.jpeg?q=50',
        ],[
            'name' => '7088-SILVER DAY AND DATE WORKING Analog Watch - For Men',
            'price' => '224',
            'description' => 'Special PriceGet extra 10% off (price inclusive of discount)T&C

Bank Offer5% Cashback on Flipkart Axis Bank CardT&C

Bank OfferFlat ₹100 Off* On 1st Transaction through Flipkart Pay LaterT&C

Partner OfferWishlist Now or Add to Cart, Extra 10% Off up to ₹50 on Selected Fashion Products',
            'image' => 'https://rukminim1.flixcart.com/image/880/1056/krjjde80/watch/c/o/e/7088-silver-hmtr-original-imag5b9qe7xhc4jz.jpeg?q=50',
        ],[
            'name' => 'OPPO K10 (Blue Flame, 128 GB)  (6 GB RAM)',
            'price' => '14,990',
            'description' => 'Bank Offer₹1750 Instant Discount with Bank of Baroda Credit, Credit Card EMI TransactionsT&C

Bank OfferFlat ₹100 Off* On 1st Transaction through Flipkart Pay LaterT&C

Special PriceGet extra ₹4009 off (price inclusive of discount)T&C

Freebie25% Off on Discovery+ Subscription',
            'image' => 'https://rukminim1.flixcart.com/image/416/416/kg6vfrk0/noodle/g/v/r/70-2-minute-noodles-instant-noodles-maggi-original-imafwh4kbzngtdzm.jpeg?q=70',
        ],[
            'name' => 'Maggi Mega Pack Masala Instant Noodles Vegetarian  (12 x 70 g)',
            'price' => '143',
            'description' => 'Special PriceGet extra 5% off (price inclusive of discount)T&C

Bank Offer10% off on SBI Credit Cards, up to ₹250. On orders of ₹2000 and aboveT&C

Bank Offer5% Cashback on Flipkart Axis Bank Card',
            'image' => 'https://rukminim1.flixcart.com/image/416/416/kg6vfrk0/noodle/g/v/r/70-2-minute-noodles-instant-noodles-maggi-original-imafwh4kbzngtdzm.jpeg?q=70',
        ]
    );

        foreach( $products as  $product){
        \App\Models\Products::create($product);
    	}
       


    }
}
