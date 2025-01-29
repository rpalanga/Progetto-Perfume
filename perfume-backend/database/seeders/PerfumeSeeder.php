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
            'img' => 'https://tse1.mm.bing.net/th?id=OIP.LucIC_Gc2zLZHJ3sKhzZJwHaHj&pid=Api',
            'brand_id' => 1, // Dior
        ],
        [
            'name' => 'Dior J’adore',
            'description' => 'Un profumo floreale e sofisticato con note di ylang-ylang, rosa e gelsomino.',
            'img' => 'https://images-ext-1.discordapp.net/external/3E7LMxflyCH9CF0H9L5LEldW-QTKaDQReM4oLsb1kdU/%3Fv%3D1640889409/https/narcisolopez.com/cdn/shop/products/ChristianDiorJ_AdoreEaudeParfum100ml_Scatolato_1.png?format=webp&quality=lossless&width=1102&height=1102',
            'brand_id' => 1, // Dior
        ],
        [
            'name' => 'Dior Homme',
            'description' => 'Un profumo elegante con note di iris, ambra e vetiver.',
            'img' => 'https://media.douglas.it/medias/vNpqoR406858-0-global.jpg?context=bWFzdGVyfGltYWdlc3wxNTM5NDd8aW1hZ2UvanBlZ3xhR0ZoTDJnMU1TODJNakU1TWpZNU16QTROREU1TUM5MlRuQnhiMUkwTURZNE5UaGZNRjluYkc5aVlXd3VhbkJufDhhMWExYTQ3OGQxYzc2NmNlMGI2ZDQ0OTI0ZGFmYWUwOWI4MGExMDFhOTg1MGI3YjFkMDQ4NzdiMDdlNzI2MGY&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 1, // Dior
        ],
        [
            'name' => 'Miss Dior',
            'description' => 'Un profumo femminile con note di rosa, agrumi e patchouli.',
            'img' => 'https://media.douglas.it/medias/https-media-prod-eu-1.mirakl.net-SOURCE-cd9e27f22fb946299b6619f165828611.jpg?context=bWFzdGVyfGltYWdlc3w0MDgxMjZ8aW1hZ2UvanBlZ3xhREV4TDJoa09DODJNamt5TkRRek5EYzJOemt3TWk5b2RIUndjem92TDIxbFpHbGhMWEJ5YjJRdFpYVXRNUzV0YVhKaGEyd3VibVYwTDFOUFZWSkRSUzlqWkRsbE1qZG1NakptWWprME5qSTVPV0kyTmpFNVpqRTJOVGd5T0RZeE1RfGZlYTYyOTczYWY3YWUzMmM0OWNiYWI3NzVjM2EzMWFkNWNhZGNmM2YzY2ZlMGQ0NTY3ZThmNzNiYTg0YzdiMDc&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 1, // Dior
        ],
        [
            'name' => 'Dior Fahrenheit',
            'description' => 'Un profumo audace con note di cuoio, mandarino e noce moscata.',
            'img' => 'https://media.douglas.it/medias/B4wlKF547414-0-global.png?context=bWFzdGVyfGltYWdlc3wzMDU5MDF8aW1hZ2UvcG5nfGFHTXhMMmd3T1M4MU1EUTBOak16T0RRMU56WXpNQzlDTkhkc1MwWTFORGMwTVRSZk1GOW5iRzlpWVd3dWNHNW58ZTY3OTVjNDA1NjMyNGEyZjc4YmQ1NzdiMDNjMTJiYTI1MGE3NDczN2RlYWRkY2FlMGY2MmZhZWYyYWRmOTcyMw&grid=true&transparent=true&imPolicy=grayScaledtransparent&imdensity=1&imwidth=775',
            'brand_id' => 1, // Dior
        ],
        [
            'name' => 'Dior Addict',
            'description' => 'Un profumo seducente con note di vaniglia bourbon, gelsomino e fava tonka.',
            'img' => 'https://media.douglas.it/medias/https-media-prod-eu-1.mirakl.net-SOURCE-47768994131c41f29610ad1badb32d72.jpg?context=bWFzdGVyfGltYWdlc3w1OTgyOHxpbWFnZS9qcGVnfGFHTXdMMmhrWkM4Mk1qZzVNRGc0TmpneU16azJOaTlvZEhSd2N6b3ZMMjFsWkdsaExYQnliMlF0WlhVdE1TNXRhWEpoYTJ3dWJtVjBMMU5QVlZKRFJTODBOemMyT0RrNU5ERXpNV00wTVdZeU9UWXhNR0ZrTVdKaFpHSXpNbVEzTWd8MWU0MTFmNmRmZTBjYjdmYzFlZmZmMGNhZmIzMzNmYzRiM2U4Yjg3ZDFjN2YyNWUyZTE4NGMzMWY0NjE3ZWY2ZA&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 1, // Dior
        ],
        [
            'name' => 'Dior Poison',
            'description' => 'Un profumo intenso con note di frutti rossi, ambra e spezie.',
            'img' => 'https://media.douglas.it/medias/5Wy6SX563684-0-global.png?context=bWFzdGVyfGltYWdlc3w0NDk5ODl8aW1hZ2UvcG5nfGFEWmpMMmc0TlM4MU1EUTBPREF5TXpnME5qazBNaTgxVjNrMlUxZzFOak0yT0RSZk1GOW5iRzlpWVd3dWNHNW58ZjM3OTI0MGQxYTQxZWFiNjhlNjc1YmI2NGNjNWQ0Nzc1MWExZmQzNzcxZmE0MTMxZjAzNDJiNzMwNjY3Yzc5Yg&grid=true&transparent=true&imPolicy=grayScaledtransparent&imdensity=1&imwidth=775',
            'brand_id' => 1, // Dior
        ],
        [
            'name' => 'Dior Eau Sauvage',
            'description' => 'Un profumo classico con note agrumate di limone, rosmarino e muschio di quercia.',
            'img' => 'https://media.douglas.it/medias/rO0iCR995602-0-dgl-IT.png?context=bWFzdGVyfGltYWdlc3wyNzA5NDR8aW1hZ2UvcG5nfGFHRmxMMmczTXk4MU1EUTBOVGMzTnpZNU9EZzBOaTl5VHpCcFExSTVPVFUyTURKZk1GOWtaMnd0U1ZRdWNHNW58OTA5ZWQwZWUwYTM1YmNmNjM2OWVmYmE2MTdlN2NhMTY3Mzg1MDIwN2EzMTFhMzU1NjkyNjA1MTJmNDlmYmQyZg&grid=true&transparent=true&imPolicy=grayScaledtransparent&imdensity=1&imwidth=775',
            'brand_id' => 1, // Dior
        ],
        [
            'name' => 'Dior Hypnotic Poison',
            'description' => 'Un profumo misterioso con note di mandorla, gelsomino e vaniglia.',
            'img' => 'https://www.fragrancefind.co.za/wp-content/uploads/2014/02/Dior-Hypnotic-Poison-Eau-de-Parfum-100ml-Spray.jpg',
            'brand_id' => 1, // Dior
        ],
        [
            'name' => 'Dior Dune',
            'description' => 'Un profumo raffinato con note di mandorla, ambra e legni esotici.',
            'img' => 'https://media.douglas.it/medias/FrSdTV546895-0-global.png?context=bWFzdGVyfGltYWdlc3w1NjM3MDR8aW1hZ2UvcG5nfGFETmxMMmd5TkM4MU1EUTBPVEl6TnpZek9URTVPQzlHY2xOa1ZGWTFORFk0T1RWZk1GOW5iRzlpWVd3dWNHNW58OGY1MDM3NjRlOTVmOTBjMDNjMzM1ZWVjZWFiNTA4YTBmNDE5MmExYTgyOTI4ODMyYWE0ZTM3ZWFhNzg5ZTIyZg&grid=true&transparent=true&imPolicy=grayScaledtransparent&imdensity=1&imwidth=775',
            'brand_id' => 1, // Dior
        ],

        // Primi Dieci Profumi di Dior

        [
            'name' => 'Chanel No. 5',
            'description' => 'Il classico profumo floreale, simbolo di eleganza e femminilità.',
            'img' => 'https://media.douglas.it/medias/ZMAZXn891876-0-global.jpg?context=bWFzdGVyfGltYWdlc3wxMDQ5MTJ8aW1hZ2UvanBlZ3xhR1E0TDJneU55ODFNVEUyTURFd09USTFNall6T0M5YVRVRmFXRzQ0T1RFNE56WmZNRjluYkc5aVlXd3VhbkJufDNlMjI4NTZhYTY5MDZhNDUwNGE2NjhkNWQ3NmYwZTk3MTk2MGE2YzY0M2ZmYTNlMDU2YmE2ZjcwZWVjOTc4NTE&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 2, // Chanel
        ],
        [
            'name' => 'Chanel Coco Mademoiselle',
            'description' => 'Un profumo giovane e sofisticato con note di arancia, rosa e patchouli.',
            'img' => 'https://media.douglas.it/medias/GNNzFL103896-0-global.jpg?context=bWFzdGVyfGltYWdlc3w2NzQ0OHxpbWFnZS9qcGVnfGFHRXpMMmczWkM4MU1URTBNekUzTnpnNU5UazJOaTlIVGs1NlJrd3hNRE00T1RaZk1GOW5iRzlpWVd3dWFuQm58MmEzYTdhMmE3YmNjYTRlN2ZiNjU5NGY3ODY1YTFhYjgyYzE0MGRhNzZjYjg3MTVlNTRmOTQ0Yzk5NDI3YzQwMQ&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 2, // Chanel
        ],
        [
            'name' => 'Chanel Chance',
            'description' => 'Un profumo fresco e luminoso con note di iris, gelsomino e muschio.',
            'img' => 'https://media.douglas.it/medias/V39SR4209058-0-global.jpg?context=bWFzdGVyfGltYWdlc3w0NTE1M3xpbWFnZS9qcGVnfGFHRmhMMmhqTkM4MU1URTFOemszTkRJeU1EZ3pNQzlXTXpsVFVqUXlNRGt3TlRoZk1GOW5iRzlpWVd3dWFuQm58ZGJkMTI3Y2MwYTI0ZmQwMmE5OGUwZDYyMWMyYmM2NWFjNDZlN2I0NGE1NTZhY2Y5MzVkNTY4MWY3NzkwOWY2YQ&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 2, // Chanel
        ],
        [
            'name' => 'Chanel Allure',
            'description' => 'Un profumo audace e sofisticato con note di vaniglia, limone e fiori bianchi.',
            'img' => 'https://media.douglas.it/medias/FuBqSj052804-0-global.jpg?context=bWFzdGVyfGltYWdlc3w0MzY4M3xpbWFnZS9qcGVnfGFHRXlMMmhsTVM4MU1URXpPRGszTkRjME5EWXdOaTlHZFVKeFUyb3dOVEk0TURSZk1GOW5iRzlpWVd3dWFuQm58Nzc0ZDMxODYzMGM2MGE3ZWE3NDYwZTQ0ZWUyOWFkMDJkZWMzNDQ3ZjUzNjg1ODNiOTNiN2NiMTI4MGQ0NjkyYw&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 2, // Chanel
        ],
        [
            'name' => 'Chanel No. 19',
            'description' => 'Un profumo intenso e complesso con note di iris, muschio e rosmarino.',
            'img' => 'https://media.douglas.it/medias/https-media-prod-eu-1.mirakl.net-SOURCE-992306fff1514093a0ade2a3100ed493.jpg?context=bWFzdGVyfGltYWdlc3wxMDI1Nzh8aW1hZ2UvanBlZ3xhRGc0TDJnell5ODJNekEyTVRVek56UTFOakUxT0M5b2RIUndjem92TDIxbFpHbGhMWEJ5YjJRdFpYVXRNUzV0YVhKaGEyd3VibVYwTDFOUFZWSkRSUzg1T1RJek1EWm1abVl4TlRFME1Ea3pZVEJoWkdVeVlUTXhNREJsWkRRNU13fGY0MWIwNjhlYTZlNWYwNTFhYjFjYzY0M2I3MDUwNmUyNWI4ZTRiODYxOGM4YjM4MDVmMDgzN2ZhYTQyOWI4NmQ&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 2, // Chanel
        ],
        [
            'name' => 'Chanel Chance Eau Tendre',
            'description' => 'Un profumo delicato e fruttato con note di pompelmo, gelsomino e muschio bianco.',
            'img' => 'https://media.douglas.it/medias/https-media-prod-eu-1.mirakl.net-SOURCE-54878286f2484f258a8f0bad4df23305.jpg?context=bWFzdGVyfGltYWdlc3wyODE4OHxpbWFnZS9qcGVnfGFEQTRMMmd6Tnk4Mk1qZzFNamMwTnpFMk5UY3lOaTlvZEhSd2N6b3ZMMjFsWkdsaExYQnliMlF0WlhVdE1TNXRhWEpoYTJ3dWJtVjBMMU5QVlZKRFJTODFORGczT0RJNE5tWXlORGcwWmpJMU9HRTRaakJpWVdRMFpHWXlNek13TlF8OGQ2MzQyZWJmZDJiMjBjMGE0MTcwN2Y3MWY2OGM1ZWZhNDNiOGQzY2MzNTI0Y2VkZWM3NDg3MDI0M2YyZjY3ZQ&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 2, // Chanel
        ],
        [
            'name' => 'Chanel Allure Homme',
            'description' => 'Un profumo maschile con note di cedro, mandarino e vaniglia.',
            'img' => 'https://media.douglas.it/medias/https-media-prod-eu-1.mirakl.net-SOURCE-c0b30e4039294a3eace7e4f0ede57824.jpg?context=bWFzdGVyfGltYWdlc3w0MjE5NHxpbWFnZS9qcGVnfGFHRTRMMmd4Wmk4Mk1qZzNPRFUzTnpJMk1qWXlNaTlvZEhSd2N6b3ZMMjFsWkdsaExYQnliMlF0WlhVdE1TNXRhWEpoYTJ3dWJtVjBMMU5QVlZKRFJTOWpNR0l6TUdVME1ETTVNamswWVRObFlXTmxOMlUwWmpCbFpHVTFOemd5TkF8M2NjMTM4NDZlOGU5ZjU0NWI5ZDllZjY2MzY1ZGEwNzEwNGUzNmMwZTJmZDY5OTQ5NWJiZTFjOGM4NDEzMzZiYQ&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 2, // Chanel
        ],
        [
            'name' => 'Chanel Egoiste',
            'description' => 'Un profumo legnoso e speziato con note di rosa, pepe e sandalo.',
            'img' => 'https://media.douglas.it/medias/https-media-prod-eu-1.mirakl.net-SOURCE-5148200183124304a421a3c17e8ef233.jpg?context=bWFzdGVyfGltYWdlc3w0Mjg0OHxpbWFnZS9qcGVnfGFHWXpMMmhqWXk4Mk1qZzNPRGN3T0RRMk5UWTVOQzlvZEhSd2N6b3ZMMjFsWkdsaExYQnliMlF0WlhVdE1TNXRhWEpoYTJ3dWJtVjBMMU5QVlZKRFJTODFNVFE0TWpBd01UZ3pNVEkwTXpBMFlUUXlNV0V6WXpFM1pUaGxaakl6TXd8ZDIxZjE0ZWYyYWU4YzAzY2UyYzc5NTY5NGVmZDg5NGFkOGM4YzZmNzExM2Y5MDg2NGM1NzQyMDgxNDI1NmY2Yg&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 2, // Chanel
        ],
        [
            'name' => 'Chanel Gabrielle',
            'description' => 'Un profumo floreale con note di ylang-ylang, gelsomino e fiori bianchi.',
            'img' => 'https://media.douglas.it/medias/https-media-prod-eu-1.mirakl.net-SOURCE-e73aa808198b4c6389ec109ba65254d2.jpg?context=bWFzdGVyfGltYWdlc3w2MDU1MXxpbWFnZS9qcGVnfGFETTBMMmc1WkM4Mk1qZzNPRFU0T0RVd01qQTBOaTlvZEhSd2N6b3ZMMjFsWkdsaExYQnliMlF0WlhVdE1TNXRhWEpoYTJ3dWJtVjBMMU5QVlZKRFJTOWxOek5oWVRnd09ERTVPR0kwWXpZek9EbGxZekV3T1dKaE5qVXlOVFJrTWd8ODFlNGQ0N2UwYjMyMzJhODU4ZDg0NTcxMmFjZGZlYzdlYTg5OTcyNzQ5YmU4N2Y3NjViZDU5Y2NlNTczMGY5Zg&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 2, // Chanel
        ],
        [
            'name' => 'Chanel Bleu de Chanel',
            'description' => 'Un profumo maschile aromatico con note di limone, zenzero e legno di sandalo.',
            'img' => 'https://media.douglas.it/medias/7yl1uS544729-0-global.jpg?context=bWFzdGVyfGltYWdlc3wxMDU2NDd8aW1hZ2UvanBlZ3xhREl5TDJoallpODFNVEUxT0RnNE5ESXlNRGsxT0M4M2VXd3hkVk0xTkRRM01qbGZNRjluYkc5aVlXd3VhbkJufDNiMTI3ZDU2ODA2MzA1NjgzYzBjZGNlYjI0ZTRkMTUxNTU0OTRmZjY1MWVhNWQ1MDIxYTMxYTY5YmQ4YWYyNGQ&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 2, // Chanel
        ],

        // Dieci profumi di Chanel

        [
            'name' => 'Armani Code',
            'description' => 'Un profumo seducente con note di arancia, lavanda, muschio e vaniglia.',
            'img' => 'https://media.douglas.it/medias/https-media-prod-eu-1.mirakl.net-SOURCE-3e03826a54d84136893d942063aed743.jpg?context=bWFzdGVyfGltYWdlc3w0MDMwMHxpbWFnZS9qcGVnfGFHTmpMMmhqWkM4Mk1qZzFOekk0TnpBd09ESTROaTlvZEhSd2N6b3ZMMjFsWkdsaExYQnliMlF0WlhVdE1TNXRhWEpoYTJ3dWJtVjBMMU5QVlZKRFJTOHpaVEF6T0RJMllUVTBaRGcwTVRNMk9Ea3paRGswTWpBMk0yRmxaRGMwTXd8OWYwODQ0OGZiZDlkNTRmMzAwMTQ5N2NhNmYwNDU0NDM1MGUxMDdhMmJiZmIxNGM2MTQ0NzI2NTEzZWQ4MzAzMg&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 3, // Armani
        ],
        [
            'name' => 'Armani Acqua di Giò',
            'description' => 'Un profumo fresco e marino con note di limone, lime, gelsomino e cedro.',
            'img' => 'https://media.douglas.it/medias/WX5TM3694984-0-dgl-IT.jpg?context=bWFzdGVyfGltYWdlc3w0MDU4OHxpbWFnZS9qcGVnfGFETmtMMmhoTUM4ME9UTTJOekl6TURBNE56RTVPQzlYV0RWVVRUTTJPVFE1T0RSZk1GOWtaMnd0U1ZRdWFuQm58YzUyY2UwMjdkNGU5YjVmYzQ4NjI5YmFlMzc0MDRjNzgwYzcxMGQ0YjlkMDZlM2NjODlmMDQ1Njg4NTk2OWFlOA&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 3, // Armani
        ],
        [
            'name' => 'Armani Code Profumo',
            'description' => 'Un profumo orientale con note di tonka bean, arancia dolce e ambra.',
            'img' => 'https://media.douglas.it/medias/https-media-prod-eu-1.mirakl.net-SOURCE-bd39475e6a6d4c379877bfdb4660a020.jpg?context=bWFzdGVyfGltYWdlc3wxOTM0OXxpbWFnZS9qcGVnfGFEYzJMMmcyTmk4Mk1qZzFNekEyTWpNNU16ZzROaTlvZEhSd2N6b3ZMMjFsWkdsaExYQnliMlF0WlhVdE1TNXRhWEpoYTJ3dWJtVjBMMU5QVlZKRFJTOWlaRE01TkRjMVpUWmhObVEwWXpNM09UZzNOMkptWkdJME5qWXdZVEF5TUF8Yzk0MmRhY2YyMWRkODE2NDlkMDIzZWM1MGYxMzkxNzA3YjFlNGIzNjhiNTQwNGNjNDNlZDgxNjU2NTNiZTdiMw&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 3, // Armani
        ],
        [
            'name' => 'Armani Si',
            'description' => 'Un profumo elegante con note di rosa, vaniglia, e patchouli.',
            'img' => 'https://media.douglas.it/medias/KkpXrz969178-0-dgl-IT.jpg?context=bWFzdGVyfGltYWdlc3wxNzE3NDB8aW1hZ2UvanBlZ3xhR1kwTDJobFlpODBOamcxT0RNeE9EQTFNelF3Tmk5TGEzQlljbm81TmpreE56aGZNRjlrWjJ3dFNWUXVhbkJufGJkNjJkNTEwODJhYjkyZTU0NWQ5ZDZkYzNjZGQyZGQ2NGRiZWI3MzQzNDYxZGE1NTc3MTA3MjdlYTA1MTJiM2I&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 3, // Armani
        ],
        [
            'name' => 'Armani Emporio Diamonds',
            'description' => 'Un profumo fruttato e floreale con note di fragola, lychee e vaniglia.',
            'img' => 'https://media.douglas.it/medias/Ib40Vv335801-0-global.jpg?context=bWFzdGVyfGltYWdlc3wxMDkwNjh8aW1hZ2UvanBlZ3xhREprTDJnd09TOHhNek0wTkRBNU9EWXhOVE15Tmk5SllqUXdWbll6TXpVNE1ERmZNRjluYkc5aVlXd3VhbkJufDNiNjdhZjFjZTQ1NWNmMmIzYzI5NzkwN2RhOGI4NTViN2JhZmMwNmVmNTU2ODhlM2VkMDNhYmE1NzM0ZmNjNTI&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 3, // Armani
        ],
        [
            'name' => 'Armani Acqua di Giò Profumo',
            'description' => 'Una versione intensa di Acqua di Giò, con note di incenso e patchouli.',
            'img' => 'https://media.douglas.it/medias/fEC735530516-0-global.jpg?context=bWFzdGVyfGltYWdlc3w4MDY0MnxpbWFnZS9qcGVnfGFEZzVMMmcyWVM4eE5qRXpOakV5TXpjeE1UVXhPQzltUlVNM016VTFNekExTVRaZk1GOW5iRzlpWVd3dWFuQm58N2E5MmU4MzNjYTkxN2Q3ZGY3OTZjZDJmMTUwMjdhNzRiMTEwYjhiY2VkOTljY2QwMzBmMTZkZDMyZWQ2NmNhNw&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 3, // Armani
        ],
        [
            'name' => 'Armani Code Colonia',
            'description' => 'Un profumo fresco con note agrumate e aromatiche di lavanda e bergamotto.',
            'img' => 'https://media.douglas.it/medias/zpkt4j1177713-0-dgl-IT.jpg?context=bWFzdGVyfGltYWdlc3w2Nzg0N3xpbWFnZS9qcGVnfGFEUmpMMmhoTmk4MU1EQTRNVGN3TkRJME56TXlOaTk2Y0d0ME5Hb3hNVGMzTnpFelh6QmZaR2RzTFVsVUxtcHdad3xkZTIxYWE3OWNlODk5NDk5ZjI2NmRhODI0NTJhMzg3NjkwYzVjYWZjMTQ3NGIwNjRiZDJjNjlmYjRhMTgzY2Nj&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 3, // Armani
        ],
        [
            'name' => 'Armani Acqua di Giò Absolu',
            'description' => 'Un profumo legnoso e acquatico con note di bergamotto, rosmarino e legno di patchouli.',
            'img' => 'https://media.douglas.it/medias/2ZFgQL1172702-0-dgl-IT.jpg?context=bWFzdGVyfGltYWdlc3wxMDUxNDd8aW1hZ2UvanBlZ3xhREEzTDJnMU1pODBOemswTVRNeU5qRTBNelV4T0M4eVdrWm5VVXd4TVRjeU56QXlYekJmWkdkc0xVbFVMbXB3Wnd8YWQ2YTUwNGVjZjU5YjI2NThjOThjODRjNjViNzkyNTRiMGQ3NjRmODNjNzUxMTg1ZTdmMzA2OWY2NGQzZWVkZQ&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 3, // Armani
        ],
        [
            'name' => 'Armani Code Luna',
            'description' => 'Un profumo fresco e floreale con note di mandarino, fiori d’arancio e legno di sandalo.',
            'img' => 'https://media.douglas.it/medias/https-media-prod-eu-1.mirakl.net-SOURCE-bd39475e6a6d4c379877bfdb4660a020.jpg?context=bWFzdGVyfGltYWdlc3wxOTM0OXxpbWFnZS9qcGVnfGFEYzJMMmcyTmk4Mk1qZzFNekEyTWpNNU16ZzROaTlvZEhSd2N6b3ZMMjFsWkdsaExYQnliMlF0WlhVdE1TNXRhWEpoYTJ3dWJtVjBMMU5QVlZKRFJTOWlaRE01TkRjMVpUWmhObVEwWXpNM09UZzNOMkptWkdJME5qWXdZVEF5TUF8Yzk0MmRhY2YyMWRkODE2NDlkMDIzZWM1MGYxMzkxNzA3YjFlNGIzNjhiNTQwNGNjNDNlZDgxNjU2NTNiZTdiMw&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 3, // Armani
        ],
        [
            'name' => 'Armani Privé Bois d’Encens',
            'description' => 'Un profumo legnoso e sofisticato con note di incenso e legno di cedro.',
            'img' => 'https://www.armanibeauty.it/dw/image/v2/AAQP_PRD/on/demandware.static/-/Sites-gac-master-catalog/default/dw37fa120b/images/Armani/AP_2020_LACOLLECTION_BOIS_ENCENS_RVB.jpg?sw=750&sh=750&sm=cut&sfrm=png&q=85',
            'brand_id' => 3, // Armani
        ],

        // Dieci profumi di Armani 

        [
            'name' => 'Gucci Bloom',
            'description' => 'Un profumo floreale con note di gelsomino, tuberosa e riso.',
            'img' => 'https://media.douglas.it/medias/https-media-prod-eu-1.mirakl.net-SOURCE-6d4ad7b71b0149fc850662b9d4ee1503.jpg?context=bWFzdGVyfGltYWdlc3wzNzQ3NnxpbWFnZS9qcGVnfGFERXhMMmhoTkM4Mk1qZzNPVE0xTlRrMk1UTTNOQzlvZEhSd2N6b3ZMMjFsWkdsaExYQnliMlF0WlhVdE1TNXRhWEpoYTJ3dWJtVjBMMU5QVlZKRFJTODJaRFJoWkRkaU56RmlNREUwT1daak9EVXdOall5WWpsa05HVmxNVFV3TXd8MDJhYWVkZmFiYmNkMWVlNDIxMjI3MGFmMjQ3OTFmZjEyMTZkYWI0YzczZTJjZDE4ZDRlODU2ZGY2MGU2MTY4MQ&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 4, // Gucci
        ],
        [
            'name' => 'Gucci Guilty',
            'description' => 'Un profumo orientale con note di pepe rosa, mandarino e patchouli.',
            'img' => 'https://media.douglas.it/medias/https-media-prod-eu-1.mirakl.net-SOURCE-6d4ad7b71b0149fc850662b9d4ee1503.jpg?context=bWFzdGVyfGltYWdlc3wzNzQ3NnxpbWFnZS9qcGVnfGFERXhMMmhoTkM4Mk1qZzNPVE0xTlRrMk1UTTNOQzlvZEhSd2N6b3ZMMjFsWkdsaExYQnliMlF0WlhVdE1TNXRhWEpoYTJ3dWJtVjBMMU5QVlZKRFJTODJaRFJoWkRkaU56RmlNREUwT1daak9EVXdOall5WWpsa05HVmxNVFV3TXd8MDJhYWVkZmFiYmNkMWVlNDIxMjI3MGFmMjQ3OTFmZjEyMTZkYWI0YzczZTJjZDE4ZDRlODU2ZGY2MGU2MTY4MQ&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 4, // Gucci
        ],
        [
            'name' => 'Gucci Flora',
            'description' => 'Un profumo floreale con note di peonia, agrumi e legni esotici.',
            'img' => 'https://media.douglas.it/medias/VSOzBP1188777-0-dgl-IT.jpg?context=bWFzdGVyfGltYWdlc3wxNTU0NjN8aW1hZ2UvanBlZ3xhRGc1TDJnd1ppODBPVEkyTkRBNE9EUTBPVEExTkM5V1UwOTZRbEF4TVRnNE56YzNYekJmWkdkc0xVbFVMbXB3Wnd8ZTM4OGFmMTQ5ODJkY2JlYTAzNDUwOGUxZjhjNDJmYjE4ODUxYjA2NGM1NWI3NjRmODcxYWEzZDcwNjg1Zjg1Mg&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 4, // Gucci
        ],
        [
            'name' => 'Gucci Oud',
            'description' => 'Un profumo legnoso e orientale con note di oud, rosa e ambra.',
            'img' => 'https://fimgs.net/mdimg/perfume/375x500.25946.jpg',
            'brand_id' => 4, // Gucci
        ],
        [
            'name' => 'Gucci Bamboo',
            'description' => 'Un profumo fresco e floreale con note di bambù, ylang-ylang e muschio.',
            'img' => 'https://media.douglas.it/medias/HhP9mw874110-0-global.jpg?context=bWFzdGVyfGltYWdlc3w5NDIzNXxpbWFnZS9qcGVnfGFEWTNMMmczTlM4eE16TTBOVFk0T1RNM01EWTFOQzlJYUZBNWJYYzROelF4TVRCZk1GOW5iRzlpWVd3dWFuQm58MGQ1OGZlNjYzMjdhZTM1OWE2NmJjNzNiOGE5ZmU1Njc1OTkxZDY4MjRlYWE4NjE3NWQ2YWQzNzI0MzZlODI5ZA&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 4, // Gucci
        ],
        [
            'name' => 'Gucci Rush',
            'description' => 'Un profumo orientale fruttato con note di pesca, gardenia e patchouli.',
            'img' => 'https://cdn.notinoimg.com/detail_main_mq/gucci/766124033606_01-o/gucci-rush-eau-de-toilette-da-donna___121127.jpg',
            'brand_id' => 4, // Gucci
        ],
        [
            'name' => 'Gucci Mémoire d’une Odeur',
            'description' => 'Un profumo unisex con note di camomilla, muschio e legno di sandalo.',
            'img' => 'https://bgstatic.net/photos/122787_xl_8.jpg',
            'brand_id' => 4, // Gucci
        ],
        [
            'name' => 'Gucci Flora by Gucci',
            'description' => 'Un profumo floreale con note di peonia, limone e rosa.',
            'img' => 'https://www.mvshop.it/3649-large_default/gucci-flora-edp-30ml.jpg',
            'brand_id' => 4, // Gucci
        ],
        [
            'name' => 'Gucci Guilty Pour Femme',
            'description' => 'Un profumo audace e floreale con note di geranio, pesca e patchouli.',
            'img' => 'https://media.douglas.it/medias/https-media-prod-eu-1.mirakl.net-SOURCE-91474623ee44451d80cc2b704c52d74d.jpg?context=bWFzdGVyfGltYWdlc3wzMzE4NHxpbWFnZS9qcGVnfGFEWTBMMmcyTWk4Mk1qZzJPRGMxTWpRNU9EY3hPQzlvZEhSd2N6b3ZMMjFsWkdsaExYQnliMlF0WlhVdE1TNXRhWEpoYTJ3dWJtVjBMMU5QVlZKRFJTODVNVFEzTkRZeU0yVmxORFEwTlRGa09EQmpZekppTnpBMFl6VXlaRGMwWkF8MGU5YTAzZDVhMDRiZjc5MGU1MDFkYjgyYzE3YzNiNjk0OTQxN2RlZmQwZDY5MDE3Njc1YjBmZGJiYjcwNThhZg&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 4, // Gucci
        ],
        [
            'name' => 'Gucci Pour Homme',
            'description' => 'Un profumo legnoso e aromatico con note di bergamotto, tabacco e cipresso.',
            'img' => 'https://media.douglas.it/medias/fXxxT1573646-0-global.jpg?context=bWFzdGVyfGltYWdlc3w1OTg5OXxpbWFnZS9qcGVnfGFEUTFMMmhsT0M4eU9UazVNRGcxTWpnMU16YzVNQzltV0hoNFZERTFOek0yTkRaZk1GOW5iRzlpWVd3dWFuQm58YjJjZmQ0MzU5NTVlY2E2ZWFiNDQ5YzA0Yjg0NzRjZDgyMmM1ZTZlZDAwNTYxZDRlZDhhMzEzNDI4MjZhZDU0OA&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 4, // Gucci
        ],

        // Dieci profumi di Gucci

        [
            'name' => 'Yves Saint Laurent Black Opium',
            'description' => 'Un profumo audace con note di caffè, vaniglia, e fiori d’arancio.',
            'img' => 'https://media.douglas.it/medias/https-media-prod-eu-1.mirakl.net-SOURCE-cc886c35dda9473f9610b1a58ae2f9f8.jpg?context=bWFzdGVyfGltYWdlc3w3MDg5M3xpbWFnZS9qcGVnfGFHSTFMMmd5T0M4Mk1qZzFORFk1TlRVNE16YzNOQzlvZEhSd2N6b3ZMMjFsWkdsaExYQnliMlF0WlhVdE1TNXRhWEpoYTJ3dWJtVjBMMU5QVlZKRFJTOWpZemc0Tm1Nek5XUmtZVGswTnpObU9UWXhNR0l4WVRVNFlXVXlaamxtT0F8M2JjYTcyMjY1ZmNlZTg4Yjk5MjY4MmMwNDYxMzkxZTNiNjE2NmM2OWE3ZDQ4MDExMTdjODBlNzkxMmFjMDkwMg&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 5, // Yves Saint Laurent
        ],
        [
            'name' => 'Yves Saint Laurent Libre',
            'description' => 'Un profumo floreale e fruttato con note di lavanda, arancio e muschio.',
            'img' => 'https://media.douglas.it/medias/cZeHvR1033114-0-dgl-IT.jpg?context=bWFzdGVyfGltYWdlc3wxMzkzMTN8aW1hZ2UvanBlZ3xhR1l4TDJnMlppOHpNRGM1T1RNeU1UTTJOalUxT0M5aldtVklkbEl4TURNek1URTBYekJmWkdkc0xVbFVMbXB3Wnd8MzBmMzY2NDRjMzBkMDc1ZTBjOGZlNjUxMTM5NDM1MTYzZjFkMzA2OTE4Y2VlNGExYjNjNzU2NWQ1OTdiNmRiMA&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 5, // Yves Saint Laurent
        ],
        [
            'name' => 'Yves Saint Laurent Mon Paris',
            'description' => 'Un profumo fruttato e floreale con note di fragola, peonia e patchouli.',
            'img' => 'https://media.douglas.it/medias/Z3XoDf530840-0-global.jpg?context=bWFzdGVyfGltYWdlc3wxMzI5NTl8aW1hZ2UvanBlZ3xhRGs0TDJneE5DOHhNek0wTkRVek5qSTJORGN6TkM5YU0xaHZSR1kxTXpBNE5EQmZNRjluYkc5aVlXd3VhbkJufGQ3MzAzNDgyZDU2ZTNiYzQ0ZDQ1YjI1OTkwNWM4MTMyY2JlMjU5MTkxODczM2I5Y2FiYzc1N2Q0NGUzYzgzYzA&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 5, // Yves Saint Laurent
        ],
        [
            'name' => 'Yves Saint Laurent Kouros',
            'description' => 'Un profumo legnoso e muschiato con note di cipresso, miele e muschio.',
            'img' => 'https://media.douglas.it/medias/8MIbry662742-0-global.jpg?context=bWFzdGVyfGltYWdlc3w0NjQ2MnxpbWFnZS9qcGVnfGFETXhMMmcwT0M4eE16TTBORFV6TlRZd09UTTNOQzg0VFVsaWNuazJOakkzTkRKZk1GOW5iRzlpWVd3dWFuQm58ZjYwNGRjNmQ1ZTYyYzA1OGY1MzNiNTY4NzA4NDQwOWJlY2FlYzI2YTc0MjZkMzU1NzVmODdmNWE5OTFkNjZjMA&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 5, // Yves Saint Laurent
        ],
        [
            'name' => 'Yves Saint Laurent Opium',
            'description' => 'Un profumo orientale speziato con note di garofano, pepe nero e patchouli.',
            'img' => 'https://media.douglas.it/medias/https-media-prod-eu-1.mirakl.net-SOURCE-3ac34ccc5d30472bbd8489095daf331c.jpg?context=bWFzdGVyfGltYWdlc3w2NDE5NnxpbWFnZS9qcGVnfGFEQm1MMmhoWlM4Mk1qZzRNREkyTmpJNE9URTRNaTlvZEhSd2N6b3ZMMjFsWkdsaExYQnliMlF0WlhVdE1TNXRhWEpoYTJ3dWJtVjBMMU5QVlZKRFJTOHpZV016TkdOall6VmtNekEwTnpKaVltUTRORGc1TURrMVpHRm1Nek14WXd8OTZhZDBkYjVkYTBhNDZhNDMyZjI5M2I4YjQ5NWViYzVhMGFjZTkxNGI5NmQ4OWE0MTYyNDhhYmI2Y2Y4YWM3OA&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 5, // Yves Saint Laurent
        ],
        [
            'name' => 'Yves Saint Laurent Paris',
            'description' => 'Un profumo floreale con note di rosa, iris, e sandalo.',
            'img' => 'https://media.douglas.it/medias/https-media-prod-eu-1.mirakl.net-SOURCE-a5f38b796bd548c088a0122dab1415a4.jpg?context=bWFzdGVyfGltYWdlc3w2NTc4MHxpbWFnZS9qcGVnfGFETTVMMmd4WkM4Mk16QTJOamt6TWpVME16VXhPQzlvZEhSd2N6b3ZMMjFsWkdsaExYQnliMlF0WlhVdE1TNXRhWEpoYTJ3dWJtVjBMMU5QVlZKRFJTOWhOV1l6T0dJM09UWmlaRFUwT0dNd09EaGhNREV5TW1SaFlqRTBNVFZoTkF8MmU1YWNiNGYyNjU2OWE2YjBhZGQ4Y2ExN2I5YmQ2YmI3ODY4ODU2MjVhYTg4NWY3ZDU2MDliODE5ZDYyNmM1OQ&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 5, // Yves Saint Laurent
        ],
        [
            'name' => 'Yves Saint Laurent M7',
            'description' => 'Un profumo orientale con note di mandorla, oud e ambra.',
            'img' => 'https://www.my-origines.com/dw/image/v2/BJRD_PRD/on/demandware.static/-/Sites-base-master/default/dw9595292e/images/81418038_P.jpg?sw=600&sh=600&sm=fit',
            'brand_id' => 5, // Yves Saint Laurent
        ],
        [
            'name' => 'Yves Saint Laurent L’Homme',
            'description' => 'Un profumo maschile con note di zenzero, bergamotto e legno di cedro.',
            'img' => 'https://media.douglas.it/medias/https-media-prod-eu-1.mirakl.net-SOURCE-64abd472d3bc491c97b0c7fe74c9fbd8.jpg?context=bWFzdGVyfGltYWdlc3wzODAxNXxpbWFnZS9qcGVnfGFETTRMMmczWWk4Mk1qZzFOREEzTURVMk5qazBNaTlvZEhSd2N6b3ZMMjFsWkdsaExYQnliMlF0WlhVdE1TNXRhWEpoYTJ3dWJtVjBMMU5QVlZKRFJTODJOR0ZpWkRRM01tUXpZbU0wT1RGak9UZGlNR00zWm1VM05HTTVabUprT0F8YzM3MzExNzRkZGU1NGVmOWVmYTI0OGI3ODE4ZGMyY2VmNjY0ZGYzOWFiYzVjYWU5NDIxYTYxMGI1ZjgxYWVmMA&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 5, // Yves Saint Laurent
        ],
        [
            'name' => 'Yves Saint Laurent Y',
            'description' => 'Un profumo fresco e legnoso con note di bergamotto, mela e salvia.',
            'img' => 'https://media.douglas.it/medias/VGXCdZ028600-0-global.jpg?context=bWFzdGVyfGltYWdlc3wxODM1OTN8aW1hZ2UvanBlZ3xhRE5sTDJnd01DOHpNVEF4TVRBek9UY3pPVGt6TkM5V1IxaERaRm93TWpnMk1EQmZNRjluYkc5aVlXd3VhbkJufDE2YzU1ZTRjMzcwY2VmYWEzNDhmZDE2NzFhZDZhNmIxZTBhY2ViMmZhNDU0NGI3MjlkNDg5NzAzMTNkOWZkMTU&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
            'brand_id' => 5, // Yves Saint Laurent
        ],
        [
            'name' => 'Yves Saint Laurent La Nuit de L’Homme',
            'description' => 'Un profumo legnoso e speziato con note di cardamomo, cedro e lavanda.',
            'img' => 'https://media.douglas.it/medias/EMgXFE076283-0-global.jpg?context=bWFzdGVyfGltYWdlc3w4ODc2NHxpbWFnZS9qcGVnfGFEUmhMMmhsTnk4eE16TTBNakUzTmpRM056SXhOQzlGVFdkWVJrVXdOell5T0ROZk1GOW5iRzlpWVd3dWFuQm58ZWM0Y2YzZTM2NDA0OWQwZTcxYzU3OWNjYjU4MDg2NzE3OGVlMzkzYjhhMzYxNjdjZjdhYjI2MGEyZjQ5Mzg5Zg&grid=true&imPolicy=grayScaled&imdensity=1&imwidth=775',
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
