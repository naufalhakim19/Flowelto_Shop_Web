<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class floseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flowers')->insert([
            'categoryID' => 1,
            'flowerName' => 'Madonna Lily',
            'flowerPrice' => 50000,
            'description' => 'While all members of the lily family produce showy blooms on single stems, the Madonna lily (Lilium candidum) also has a sweet fragrance. These white, star-shaped flowers grow on a single stem of up to 4 feet and foliage is small, oblong and bright green.',
            'flowerImage' => 'Madonna Lily.jpg'
        ]);
        
        DB::table('flowers')->insert([
            'categoryID' => 1,
            'flowerName' => 'Callas',
            'flowerPrice' => 60000,
            'description' => 'The callas (Zantedeschia) elegant, cone-shaped flower bracts and bright green, lance-shaped foliage add interest to any home landscape. The bract surrounds a yellow-white central spike. The common calla (Z. aethiopica) has a white bract that is up to 8 inches long and grows on a single stem that can reach 3 feet. The foliage is evergreen. Other cultivars are available in pinks, purples and yellows.',
            'flowerImage' => 'callas.jpg'
        ]);

        DB::table('flowers')->insert([
            'categoryID' => 1,
            'flowerName' => 'Cannas',
            'flowerPrice' => 70000,
            'description' => 'Cannas (Canna x generalis) are known for their showy blooms as well as their colorful foliage. These plants have single blooms at the top of 6-foot stalks with leaves may be solid green, bronze or red. The leaves, similar to those on banana trees or ginger plants, grow on alternating sides of the stalk. Canna flowers, which are available in blues, oranges, pinks, reds and white, propogate easily and may become invasive.',
            'flowerImage' => 'cannas.jpg'
        ]);

        DB::table('flowers')->insert([
            'categoryID' => 1,
            'flowerName' => 'Sunflowers',
            'flowerPrice' => 60000,
            'description' => 'an herbaceous annual plant in the family Asteraceae, grown for its seeds. The plant has a thick, hairy, erect stem which gives rise to a large flower head.',
            'flowerImage' => 'sunflowers.jpg'
        ]);

        DB::table('flowers')->insert([
            'categoryID' => 1,
            'flowerName' => 'Rose Orange',
            'flowerPrice' => 40000,
            'description' => 'This gorgeous orange rose flower has impressive and beautiful golden petals amongst succulent green leaves. The rose is complete and would make a perfect centrepiece or a great addition to your floral displays and arrangements.',
            'flowerImage' => 'rose orange.jpg'
        ]);

        DB::table('flowers')->insert([
            'categoryID' => 1,
            'flowerName' => 'Vintage Peony Cream',
            'flowerPrice' => 90000,
            'description' => 'This tranquil peony would be well suited individually in your preferred vase as a beautiful centrepiece or it can be used in any floral arrangement to contribute its soothing qualities.',
            'flowerImage' => 'Vintage Peony Cream.jpg'
        ]);

        DB::table('flowers')->insert([
            'categoryID' => 1,
            'flowerName' => 'Vintage Peony Cream',
            'flowerPrice' => 90000,
            'description' => 'This tranquil peony would be well suited individually in your preferred vase as a beautiful centrepiece or it can be used in any floral arrangement to contribute its soothing qualities.',
            'flowerImage' => 'Vintage Peony Cream.jpg'
        ]);

        DB::table('flowers')->insert([
            'categoryID' => 1,
            'flowerName' => 'Hydrangea Pink',
            'flowerPrice' => 90000,
            'description' => 'Create breathtaking romantic wedding arrangements with our single stem artificial hydrangea. It can be bent or cut to any length required for use in bouquets or table decorations or even wedding car decorations.',
            'flowerImage' => 'Hydrangea Pink.jpg'
        ]);

        DB::table('flowers')->insert([
            'categoryID' => 1,
            'flowerName' => 'Hydrangea Pink',
            'flowerPrice' => 90000,
            'description' => 'Create breathtaking romantic wedding arrangements with our single stem artificial hydrangea. It can be bent or cut to any length required for use in bouquets or table decorations or even wedding car decorations.',
            'flowerImage' => 'Hydrangea Pink.jpg'
        ]);




        DB::table('flowers')->insert([
            'categoryID' => 2,
            'flowerName' => 'Blackeyed Susan',
            'flowerPrice' => 100000,
            'description' => 'Known as the official flower for the Preakness, Blackeyed Susans are a member of the sunflower family. In addition to making a beautiful indoor flower arrangement, Blackeyed Susans attract butterflies, bees and other beneficial insects.',
            'flowerImage' => 'black_eyed_susan_bouquet.jpg'
        ]);

        DB::table('flowers')->insert([
            'categoryID' => 2,
            'flowerName' => 'Bleeding Heart',
            'flowerPrice' => 110000,
            'description' => 'The Bleeding Hearts appearance is as equally dramatic as its name, bearing heart shaped flowers that hang from a long stem. It also makes for an exquisite cut flower to display in your home.',
            'flowerImage' => 'bleeding_heart_bouquet.jpg'
        ]);

        DB::table('flowers')->insert([
            'categoryID' => 2,
            'flowerName' => 'Bloodroot',
            'flowerPrice' => 70000,
            'description' => 'This flower gets its name from the bright red poisonous sap if you cut into the stem, but on the outside the Bloodroot makes for a great addition to a shaded garden. In addition to a bright white flower, the leaves are scalloped to create an elegant package.',
            'flowerImage' => 'bloodroot_bouquet.jpg'
        ]);

        DB::table('flowers')->insert([
            'categoryID' => 2,
            'flowerName' => 'Mawar',
            'flowerPrice' => 100000,
            'description' => 'Roses are often used in various events, especially red roses. This makes the rose seem very traditional. However, you dont need to worry about this impression. By using your creativity, you can change the traditional impression of these types of flowers to be more contemporary and still convey the meaning of the purity of love.',
            'flowerImage' => 'mawar.jpg'
        ]);

        DB::table('flowers')->insert([
            'categoryID' => 2,
            'flowerName' => 'Ranunculus',
            'flowerPrice' => 100000,
            'description' => 'This flower is similar to a rose but in fact the two flowers are different in their petals. Ranunculus petals are rounder than a rose. These types of flowers are known as charismatic flowers. Because it is similar to a rose, Ranunculus can also symbolize the femininity and tenderness of a bride.',
            'flowerImage' => 'ranunculus.jpg'
        ]);

        DB::table('flowers')->insert([
            'categoryID' => 2,
            'flowerName' => 'Hydrangea',
            'flowerPrice' => 120000,
            'description' => 'This advantage makes you not need to use a lot of hydrangeas when arranging a flower bouquet, just one to two stalks. Combine it with a small flower like a daisy and a few stalks of Eucalyptus flowers.',
            'flowerImage' => 'Hydrangea.jpg'
        ]);

        DB::table('flowers')->insert([
            'categoryID' => 2,
            'flowerName' => 'Peony',
            'flowerPrice' => 110000,
            'description' => 'Peonies are believed to be able to bring good luck and a happy married life until death separates the bride and groom. Therefore, these types of flowers can be used to accompany you walking in the aisle.',
            'flowerImage' => 'Peony.jpg'
        ]);

        DB::table('flowers')->insert([
            'categoryID' => 2,
            'flowerName' => 'Baby’s Breath',
            'flowerPrice' => 140000,
            'description' => 'Peonies are believed to be able to bring good luck and a happy married life until death separates the bride and groom. Therefore, these types of flowers can be used to accompany you walking in the aisle.',
            'flowerImage' => 'Baby’s Breath.jpg'
        ]);


    }
}
