<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{

/*
|--------------------------------------------------------------------------
| MASTER SITEMAP INDEX
|--------------------------------------------------------------------------
*/

public function index()
{

$xml = '<?xml version="1.0" encoding="UTF-8"?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

<sitemap>
<loc>'.url('/sitemaps/sitemap-core.xml').'</loc>
<lastmod>'.now()->toAtomString().'</lastmod>
</sitemap>

<sitemap>
<loc>'.url('/sitemaps/sitemap-brands.xml').'</loc>
<lastmod>'.now()->toAtomString().'</lastmod>
</sitemap>

<sitemap>
<loc>'.url('/sitemaps/sitemap-locations-core.xml').'</loc>
<lastmod>'.now()->toAtomString().'</lastmod>
</sitemap>

<sitemap>
<loc>'.url('/sitemaps/sitemap-location-services-wien.xml').'</loc>
<lastmod>'.now()->toAtomString().'</lastmod>
</sitemap>

<sitemap>
<loc>'.url('/sitemaps/sitemap-location-services-noe.xml').'</loc>
<lastmod>'.now()->toAtomString().'</lastmod>
</sitemap>

<sitemap>
<loc>'.url('/sitemaps/sitemap-location-services-burgenland.xml').'</loc>
<lastmod>'.now()->toAtomString().'</lastmod>
</sitemap>

</sitemapindex>';

return response($xml,200)->header('Content-Type','text/xml');

}


/*
|--------------------------------------------------------------------------
| CORE PAGES
|--------------------------------------------------------------------------
*/

public function core()
{

$urls = [

'/',
'/impressum',
'/datenschutzerklaerung',
'/thermen-notdienst-wien',
'/heizung-notdienst-wien',

];

$xml='<?xml version="1.0" encoding="UTF-8"?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

foreach($urls as $url){

$xml.='

<url>
<loc>'.url($url).'</loc>
<lastmod>'.now()->toAtomString().'</lastmod>
<priority>1.0</priority>
</url>';

}

$xml.='</urlset>';

return response($xml,200)->header('Content-Type','text/xml');

}


/*
|--------------------------------------------------------------------------
| BRAND PAGES
|--------------------------------------------------------------------------
*/

public function brands()
{

$brands=[

'vaillant',
'buderus',
'loeblich',
'baxi',
'junkers',
'wolf',
'viessmann',
'saunier-duval',
'rapido',
'ocean',
'nordgas',
'windhager'

];

$xml='<?xml version="1.0" encoding="UTF-8"?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

foreach($brands as $brand){

$xml.='

<url>
<loc>'.url("/{$brand}-thermenwartung-wien").'</loc>
</url>

<url>
<loc>'.url("/{$brand}-kundendienst-wien").'</loc>
</url>

<url>
<loc>'.url("/{$brand}-notdienst-wien").'</loc>
</url>

<url>
<loc>'.url("/{$brand}-thermentausch-wien").'</loc>
</url>

<url>
<loc>'.url("/{$brand}-thermenreparatur-wien").'</loc>
</url>

<url>
<loc>'.url("/{$brand}-installateur-wien").'</loc>
</url>';

}

$xml.='</urlset>';

return response($xml,200)->header('Content-Type','text/xml');

}


/*
|--------------------------------------------------------------------------
| INSTALLATEUR DISTRICTS
|--------------------------------------------------------------------------
*/

public function locationsCore()
{

$xml='<?xml version="1.0" encoding="UTF-8"?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

for($i=1010;$i<=1230;$i+=10){

$xml.='

<url>
<loc>'.url("/installateur-{$i}-wien").'</loc>
</url>';

}

$xml.='</urlset>';

return response($xml,200)->header('Content-Type','text/xml');

}


/*
|--------------------------------------------------------------------------
| WIEN SERVICES
|--------------------------------------------------------------------------
*/

public function wien()
{

$xml='<?xml version="1.0" encoding="UTF-8"?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

for($i=1010;$i<=1230;$i+=10){

$xml.='

<url>
<loc>'.url("/thermenwartung-{$i}-wien").'</loc>
</url>';

}

$xml.='</urlset>';

return response($xml,200)->header('Content-Type','text/xml');

}


/*
|--------------------------------------------------------------------------
| NIEDERÖSTERREICH
|--------------------------------------------------------------------------
*/

public function noe()
{

$urls=[

'/warmepumpel-Installation-Niederosterreich-wien',
'/warmepumpel-Reparatur-Niederosterreich-wien',
'/warmepumpel-Niederosterreich-wien'

];

$xml='<?xml version="1.0" encoding="UTF-8"?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

foreach($urls as $url){

$xml.='

<url>
<loc>'.url($url).'</loc>
</url>';

}

$xml.='</urlset>';

return response($xml,200)->header('Content-Type','text/xml');

}


/*
|--------------------------------------------------------------------------
| BURGENLAND
|--------------------------------------------------------------------------
*/

public function burgenland()
{

$urls=[

'/warmepumpel-Wartung-Burgenland-wien',
'/warmepumpel-Installation-Burgenland-wien',
'/warmepumpel-Reparatur-Burgenland-wien',
'/installateur-eisenstadt',
'/installateur-rust'

];

$xml='<?xml version="1.0" encoding="UTF-8"?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

foreach($urls as $url){

$xml.='

<url>
<loc>'.url($url).'</loc>
</url>';

}

$xml.='</urlset>';

return response($xml,200)->header('Content-Type','text/xml');

}

}
