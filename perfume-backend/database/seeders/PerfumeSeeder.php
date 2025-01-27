<?php

namespace Database\Seeders;

use App\Models\Perfume;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerfumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $perfumes = [
        [
            'name' => 'Dior Sauvage',
            'description' => 'Un profumo fresco e speziato con note di bergamotto e ambroxan.',
            'img' => 'https://example.com/dior-sauvage.jpg',
            'brand_id' => 1, // Dior
        ],
        [
            'name' => 'Dior J’adore',
            'description' => 'Un profumo floreale e sofisticato con note di ylang-ylang, rosa e gelsomino.',
            'img' => 'https://example.com/dior-jadore.jpg',
            'brand_id' => 1, // Dior
        ],
        [
            'name' => 'Dior Homme',
            'description' => 'Un profumo elegante con note di iris, ambra e vetiver.',
            'img' => 'https://example.com/dior-homme.jpg',
            'brand_id' => 1, // Dior
        ],
        [
            'name' => 'Miss Dior',
            'description' => 'Un profumo femminile con note di rosa, agrumi e patchouli.',
            'img' => 'https://example.com/miss-dior.jpg',
            'brand_id' => 1, // Dior
        ],
        [
            'name' => 'Dior Fahrenheit',
            'description' => 'Un profumo audace con note di cuoio, mandarino e noce moscata.',
            'img' => 'https://example.com/dior-fahrenheit.jpg',
            'brand_id' => 1, // Dior
        ],
        [
            'name' => 'Dior Addict',
            'description' => 'Un profumo seducente con note di vaniglia bourbon, gelsomino e fava tonka.',
            'img' => 'https://example.com/dior-addict.jpg',
            'brand_id' => 1, // Dior
        ],
        [
            'name' => 'Dior Poison',
            'description' => 'Un profumo intenso con note di frutti rossi, ambra e spezie.',
            'img' => 'https://example.com/dior-poison.jpg',
            'brand_id' => 1, // Dior
        ],
        [
            'name' => 'Dior Eau Sauvage',
            'description' => 'Un profumo classico con note agrumate di limone, rosmarino e muschio di quercia.',
            'img' => 'https://example.com/dior-eau-sauvage.jpg',
            'brand_id' => 1, // Dior
        ],
        [
            'name' => 'Dior Hypnotic Poison',
            'description' => 'Un profumo misterioso con note di mandorla, gelsomino e vaniglia.',
            'img' => 'https://example.com/dior-hypnotic-poison.jpg',
            'brand_id' => 1, // Dior
        ],
        [
            'name' => 'Dior Dune',
            'description' => 'Un profumo raffinato con note di mandorla, ambra e legni esotici.',
            'img' => 'https://example.com/dior-dune.jpg',
            'brand_id' => 1, // Dior
        ],

        // Primi Dieci Profumi di Dior

        [
            'name' => 'Chanel No. 5',
            'description' => 'Il classico profumo floreale, simbolo di eleganza e femminilità.',
            'img' => 'https://example.com/chanel-no-5.jpg',
            'brand_id' => 2, // Chanel
        ],
        [
            'name' => 'Chanel Coco Mademoiselle',
            'description' => 'Un profumo giovane e sofisticato con note di arancia, rosa e patchouli.',
            'img' => 'https://example.com/chanel-coco-mademoiselle.jpg',
            'brand_id' => 2, // Chanel
        ],
        [
            'name' => 'Chanel Chance',
            'description' => 'Un profumo fresco e luminoso con note di iris, gelsomino e muschio.',
            'img' => 'https://example.com/chanel-chance.jpg',
            'brand_id' => 2, // Chanel
        ],
        [
            'name' => 'Chanel Allure',
            'description' => 'Un profumo audace e sofisticato con note di vaniglia, limone e fiori bianchi.',
            'img' => 'https://example.com/chanel-allure.jpg',
            'brand_id' => 2, // Chanel
        ],
        [
            'name' => 'Chanel No. 19',
            'description' => 'Un profumo intenso e complesso con note di iris, muschio e rosmarino.',
            'img' => 'https://example.com/chanel-no-19.jpg',
            'brand_id' => 2, // Chanel
        ],
        [
            'name' => 'Chanel Chance Eau Tendre',
            'description' => 'Un profumo delicato e fruttato con note di pompelmo, gelsomino e muschio bianco.',
            'img' => 'https://example.com/chanel-chance-eau-tendre.jpg',
            'brand_id' => 2, // Chanel
        ],
        [
            'name' => 'Chanel Allure Homme',
            'description' => 'Un profumo maschile con note di cedro, mandarino e vaniglia.',
            'img' => 'https://example.com/chanel-allure-homme.jpg',
            'brand_id' => 2, // Chanel
        ],
        [
            'name' => 'Chanel Egoiste',
            'description' => 'Un profumo legnoso e speziato con note di rosa, pepe e sandalo.',
            'img' => 'https://example.com/chanel-egoiste.jpg',
            'brand_id' => 2, // Chanel
        ],
        [
            'name' => 'Chanel Gabrielle',
            'description' => 'Un profumo floreale con note di ylang-ylang, gelsomino e fiori bianchi.',
            'img' => 'https://example.com/chanel-gabrielle.jpg',
            'brand_id' => 2, // Chanel
        ],
        [
            'name' => 'Chanel Bleu de Chanel',
            'description' => 'Un profumo maschile aromatico con note di limone, zenzero e legno di sandalo.',
            'img' => 'https://example.com/chanel-bleu-de-chanel.jpg',
            'brand_id' => 2, // Chanel
        ],

        // Dieci profumi di Chanel

        [
            'name' => 'Armani Code',
            'description' => 'Un profumo seducente con note di arancia, lavanda, muschio e vaniglia.',
            'img' => 'https://example.com/armani-code.jpg',
            'brand_id' => 3, // Armani
        ],
        [
            'name' => 'Armani Acqua di Giò',
            'description' => 'Un profumo fresco e marino con note di limone, lime, gelsomino e cedro.',
            'img' => 'https://example.com/armani-acqua-di-gio.jpg',
            'brand_id' => 3, // Armani
        ],
        [
            'name' => 'Armani Code Profumo',
            'description' => 'Un profumo orientale con note di tonka bean, arancia dolce e ambra.',
            'img' => 'https://example.com/armani-code-profumo.jpg',
            'brand_id' => 3, // Armani
        ],
        [
            'name' => 'Armani Si',
            'description' => 'Un profumo elegante con note di rosa, vaniglia, e patchouli.',
            'img' => 'https://example.com/armani-si.jpg',
            'brand_id' => 3, // Armani
        ],
        [
            'name' => 'Armani Emporio Diamonds',
            'description' => 'Un profumo fruttato e floreale con note di fragola, lychee e vaniglia.',
            'img' => 'https://example.com/armani-emporio-diamonds.jpg',
            'brand_id' => 3, // Armani
        ],
        [
            'name' => 'Armani Acqua di Giò Profumo',
            'description' => 'Una versione intensa di Acqua di Giò, con note di incenso e patchouli.',
            'img' => 'https://example.com/armani-acqua-di-gio-profumo.jpg',
            'brand_id' => 3, // Armani
        ],
        [
            'name' => 'Armani Code Colonia',
            'description' => 'Un profumo fresco con note agrumate e aromatiche di lavanda e bergamotto.',
            'img' => 'https://example.com/armani-code-colonia.jpg',
            'brand_id' => 3, // Armani
        ],
        [
            'name' => 'Armani Acqua di Giò Absolu',
            'description' => 'Un profumo legnoso e acquatico con note di bergamotto, rosmarino e legno di patchouli.',
            'img' => 'https://example.com/armani-acqua-di-gio-absolu.jpg',
            'brand_id' => 3, // Armani
        ],
        [
            'name' => 'Armani Code Luna',
            'description' => 'Un profumo fresco e floreale con note di mandarino, fiori d’arancio e legno di sandalo.',
            'img' => 'https://example.com/armani-code-luna.jpg',
            'brand_id' => 3, // Armani
        ],
        [
            'name' => 'Armani Privé Bois d’Encens',
            'description' => 'Un profumo legnoso e sofisticato con note di incenso e legno di cedro.',
            'img' => 'https://example.com/armani-prive-bois-dencens.jpg',
            'brand_id' => 3, // Armani
        ],

        // Dieci profumi di Armani 

        [
            'name' => 'Gucci Bloom',
            'description' => 'Un profumo floreale con note di gelsomino, tuberosa e riso.',
            'img' => 'https://example.com/gucci-bloom.jpg',
            'brand_id' => 4, // Gucci
        ],
        [
            'name' => 'Gucci Guilty',
            'description' => 'Un profumo orientale con note di pepe rosa, mandarino e patchouli.',
            'img' => 'https://example.com/gucci-guilty.jpg',
            'brand_id' => 4, // Gucci
        ],
        [
            'name' => 'Gucci Flora',
            'description' => 'Un profumo floreale con note di peonia, agrumi e legni esotici.',
            'img' => 'https://example.com/gucci-flora.jpg',
            'brand_id' => 4, // Gucci
        ],
        [
            'name' => 'Gucci Oud',
            'description' => 'Un profumo legnoso e orientale con note di oud, rosa e ambra.',
            'img' => 'https://example.com/gucci-oud.jpg',
            'brand_id' => 4, // Gucci
        ],
        [
            'name' => 'Gucci Bamboo',
            'description' => 'Un profumo fresco e floreale con note di bambù, ylang-ylang e muschio.',
            'img' => 'https://example.com/gucci-bamboo.jpg',
            'brand_id' => 4, // Gucci
        ],
        [
            'name' => 'Gucci Rush',
            'description' => 'Un profumo orientale fruttato con note di pesca, gardenia e patchouli.',
            'img' => 'https://example.com/gucci-rush.jpg',
            'brand_id' => 4, // Gucci
        ],
        [
            'name' => 'Gucci Mémoire d’une Odeur',
            'description' => 'Un profumo unisex con note di camomilla, muschio e legno di sandalo.',
            'img' => 'https://example.com/gucci-memoire-dune-odeur.jpg',
            'brand_id' => 4, // Gucci
        ],
        [
            'name' => 'Gucci Flora by Gucci',
            'description' => 'Un profumo floreale con note di peonia, limone e rosa.',
            'img' => 'https://example.com/gucci-flora-by-gucci.jpg',
            'brand_id' => 4, // Gucci
        ],
        [
            'name' => 'Gucci Guilty Pour Femme',
            'description' => 'Un profumo audace e floreale con note di geranio, pesca e patchouli.',
            'img' => 'https://example.com/gucci-guilty-pour-femme.jpg',
            'brand_id' => 4, // Gucci
        ],
        [
            'name' => 'Gucci Pour Homme',
            'description' => 'Un profumo legnoso e aromatico con note di bergamotto, tabacco e cipresso.',
            'img' => 'https://example.com/gucci-pour-homme.jpg',
            'brand_id' => 4, // Gucci
        ],

        // Dieci profumi di Gucci

        [
            'name' => 'Yves Saint Laurent Black Opium',
            'description' => 'Un profumo audace con note di caffè, vaniglia, e fiori d’arancio.',
            'img' => 'https://example.com/ysl-black-opium.jpg',
            'brand_id' => 5, // Yves Saint Laurent
        ],
        [
            'name' => 'Yves Saint Laurent Libre',
            'description' => 'Un profumo floreale e fruttato con note di lavanda, arancio e muschio.',
            'img' => 'https://example.com/ysl-libre.jpg',
            'brand_id' => 5, // Yves Saint Laurent
        ],
        [
            'name' => 'Yves Saint Laurent Mon Paris',
            'description' => 'Un profumo fruttato e floreale con note di fragola, peonia e patchouli.',
            'img' => 'https://example.com/ysl-mon-paris.jpg',
            'brand_id' => 5, // Yves Saint Laurent
        ],
        [
            'name' => 'Yves Saint Laurent Kouros',
            'description' => 'Un profumo legnoso e muschiato con note di cipresso, miele e muschio.',
            'img' => 'https://example.com/ysl-kouros.jpg',
            'brand_id' => 5, // Yves Saint Laurent
        ],
        [
            'name' => 'Yves Saint Laurent Opium',
            'description' => 'Un profumo orientale speziato con note di garofano, pepe nero e patchouli.',
            'img' => 'https://example.com/ysl-opium.jpg',
            'brand_id' => 5, // Yves Saint Laurent
        ],
        [
            'name' => 'Yves Saint Laurent Paris',
            'description' => 'Un profumo floreale con note di rosa, iris, e sandalo.',
            'img' => 'https://example.com/ysl-paris.jpg',
            'brand_id' => 5, // Yves Saint Laurent
        ],
        [
            'name' => 'Yves Saint Laurent M7',
            'description' => 'Un profumo orientale con note di mandorla, oud e ambra.',
            'img' => 'https://example.com/ysl-m7.jpg',
            'brand_id' => 5, // Yves Saint Laurent
        ],
        [
            'name' => 'Yves Saint Laurent L’Homme',
            'description' => 'Un profumo maschile con note di zenzero, bergamotto e legno di cedro.',
            'img' => 'https://example.com/ysl-lhomme.jpg',
            'brand_id' => 5, // Yves Saint Laurent
        ],
        [
            'name' => 'Yves Saint Laurent Y',
            'description' => 'Un profumo fresco e legnoso con note di bergamotto, mela e salvia.',
            'img' => 'https://example.com/ysl-y.jpg',
            'brand_id' => 5, // Yves Saint Laurent
        ],
        [
            'name' => 'Yves Saint Laurent La Nuit de L’Homme',
            'description' => 'Un profumo legnoso e speziato con note di cardamomo, cedro e lavanda.',
            'img' => 'https://example.com/ysl-la-nuit-de-lhomme.jpg',
            'brand_id' => 5, // Yves Saint Laurent
        ],

        // Dieci Profumi di Yves Saint Laurent
    ];

    foreach($perfumes as $perfume){
        $newPerfume = new Perfume();
        $newPerfume->name = $perfume['name'];
        $newPerfume->description = $perfume['description'];
        $newPerfume->img = $perfume['img'];
        $newPerfume->brand_id = $perfume['brand_id'];

        $newPerfume->save();
    }
    }
}
