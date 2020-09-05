<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

      <url>
            <loc>{{ Request::root() }}</loc>
            <lastmod>{{ date('Y-m-d')}}</lastmod>
            <changefreq>hourly</changefreq>
            <priority>1.0</priority>
        </url>


    @foreach ($noticias as $noticia)
        <url>
            <loc>{{ Request::root() }}/{{ $noticia->slug }}</loc>
            <lastmod>{{ $noticia->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.7</priority>
        </url>
    @endforeach
</urlset>