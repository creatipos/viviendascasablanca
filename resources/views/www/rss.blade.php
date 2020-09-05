{!! '<'.'?'.'xml version="1.0" encoding="UTF-8" ?>' !!}
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:media="http://search.yahoo.com/mrss/">
  <channel>
    <title>Dolar Blue Hoy</title>
    <link>https://dolar-plus.com/</link>
    <description><![CDATA[Noticias de Cotización del Dólar Hoy y dolar blue, cotizacion minuto a minuto]]></description>
    <atom:link href="https://dolar-plus.com/" rel="self" type="application/rss+xml" />
    <language>es</language>
    <lastBuildDate>{{ date('Y-m-d') }}</lastBuildDate>
    @foreach($noticias as $post)
    <item>
      <title><![CDATA[{!! $post->title !!}]]></title>
      <link>{{ Request::root() }}/{{ $post->slug }}</link>
      <guid isPermaLink="true">{{ Request::root() }}/{{ $post->slug }}</guid>
      <description><![CDATA[{!! $post->copete !!}]]></description>
      <content:encoded><![CDATA[{!! $post->curepo !!}]]></content:encoded>
      <dc:creator xmlns:dc="http://purl.org/dc/elements/1.1/">DolarHoy</dc:creator>
      <pubDate>{{ $post->created_at->format(DateTime::RSS) }}</pubDate>
    </item>
    @endforeach
  </channel>
</rss>