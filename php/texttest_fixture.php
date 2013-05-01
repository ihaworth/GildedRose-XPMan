<?php

include 'gilded_rose.php';

echo "OMGHAI!\n";

$items = array(
     new Item("+5 Dexterity Vest", 10, 20),
     new Item("Aged Brie", 2, 0),
     new Item("Elixir of the Mongoose", 5, 7),
     new Item("Sulfuras, Hand of Ragnaros", 0, 80),
     new Item("Sulfuras, Hand of Ragnaros", -1, 80),
     new Item("Backstage passes to a TAFKAL80ETC concert", 15, 20),
     new Item("Backstage passes to a TAFKAL80ETC concert", 10, 49),
     new Item("Backstage passes to a TAFKAL80ETC concert", 5, 49),
     new Item("Conjured Mana Cake", 3, 6),  // <-- :O
);

$num_days = 2;

if (count($argv) > 1) {
    $num_days = int($argv[1]);
}

$days = range(0, $num_days - 1);

foreach ($days as $day) {
    echo "-------- day {$day} --------\n";
    echo "name, sellIn, quality\n";

    foreach ($items as $item) {
        echo "{$item}\n";
    }

    echo "\n";
    
    $gildedRose = new GildedRose($items);
    $gildedRose->updateQuality();
}
