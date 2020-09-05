
<?php header("Content-type: text/xml");?>
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:sy="http://purl.org/rss/1.0/modules/syndication/" xmlns:admin="http://webns.net/mvcb/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title><?php echo $titulo ?></title>
        <link>http://www.las-ultimasnoticias.com/xml.html</link>
        <atom:link href="http://www.las-ultimasnoticias.com/" rel="self" type="application/rss+xml" />
        <description><?php echo $page_description ?></description>
        <language>es-es</language>
      
  
        <sy:updatePeriod>hourly</sy:updatePeriod>

        <sy:updateFrequency>1</sy:updateFrequency>

      
        <docs>http://www.las-ultimasnoticias.com/</docs>
        <managingEditor>danuncios@gmail.com</managingEditor>
        <webMaster>Luis Daniel</webMaster>

        <?php foreach ($feeds as $post){ ?>
            <item>
                <title><?php echo $post->nombre ?></title>
                <link><?php echo baseurlname; ?>t/<?php echo utf8_decode($post->url_amigable ) ?>.html</link>
                <description><![CDATA[<?php echo $post->nombre ?>]]></description>
            </item>   
        <?php 
        }
        ?>
    </channel>
</rss>