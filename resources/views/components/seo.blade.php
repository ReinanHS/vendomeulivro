<meta name="language" content="pt-BR" />
<meta name="country" content="BRA" />
<meta name="currency" content="R$" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="robots" content="index, follow" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />

<meta name="apple-mobile-web-app-title" content="{{ config('app.name', 'Vendomeulivo') }}" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="#31acb4" />
<meta name="theme-color" content="#31acb4" />

@if (isset($seo['title']))
    <title>{{ $seo['title'] }} | {{ config('app.name', 'Vendomeulivo') }}</title>
    <meta property="og:title" content="{{ $seo['title'] }}">
    <meta name="twitter:title" content="{{ $seo['title'] }}">
@else
    <title>Compare preços de livros e melhores ofertas e descontos | {{ config('app.name', 'Vendomeulivo') }}</title>
    <meta property="og:title" content="Compare preços de livros e melhores ofertas e descontos">
    <meta name="twitter:title" content="Compare preços de livros e melhores ofertas e descontos">
@endif

@if (isset($seo['description']))
    <meta name="description" content="{{ $seo['description'] }}" />
    <meta property="og:description" content="{{ Str::limit($seo['description'], 195, '...') }}"/>
    <meta name="twitter:description" content="{{ Str::limit($seo['description'], 195, '...') }}">
@else
    <meta name="description" content="No vendomeulivro.com você encontra as melhores ofertas de Livros. Encontre o menor preço nas melhores lojas!" />
    <meta property="og:description" content="No vendomeulivro.com você encontra as melhores ofertas de Livros. Encontre o menor preço nas melhores lojas!"/>
    <meta name="twitter:description" content="No vendomeulivro.com você encontra as melhores ofertas de Livros. Encontre o menor preço nas melhores lojas!">
@endif

@if (isset($seo['abstract']))
    <meta name="abstract" content="{{ $seo['abstract'] }}" />
@else
    <meta name="abstract" content="Livros, Ebook | vendomeulivro.com" />
@endif
<meta name="author" content="ReinanHS, reinangabriel1520@gmail.com" />
<meta name="copyright" content="vendomeulivo.com" />

<!-- Open Graph Facebook -->
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:site_name" content="Vendo meu livro"/>

@if (isset($seo['product']['image'][0]))
<meta property="og:image" content="{!! $seo['product']['image'][0] !!}">
@else
<meta property="og:image" content="{{ url('/img/www.vendomeulivro.com.png') }}">
@endif

@if ( isset($seo['product']) )
    <meta property="og:type" content="og:product" />

    <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "Product",
          "name": "{{ $seo['title'] }}",
          "image": [
            @for ($i = 0; $i < sizeof($seo['product']['image']); $i++)
            "{{ $seo['product']['image'][$i] }}"@if ($i < sizeof($seo['product']['image']) - 1), @endif
            @endfor
           ],
          "description": "{{ Str::limit($seo['description'], 135, '...') }}",
          "sku": "{{ $seo['product']['id'] }}",
          "mpn": "925872",
          "brand": {
            "@type": "Brand",
            "name": "{{ $seo['product']['editora'] }}"
          },
          "review": {
            "@type": "Review",
            "reviewRating": {
              "@type": "Rating",
              "ratingValue": "{{ $seo['product']['review']['rating'] }}",
              "bestRating": "5"
            },
            "author": {
              "@type": "Person",
              "name": "{{ $seo['product']['review']['name'] }}"
            },
            "headline": "Bem legal",
            "reviewBody": "{{ $seo['product']['review']['body'] }}",
            "datePublished": "{{ $seo['product']['review']['date'] }}"
          },
          "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.4",
            "reviewCount": "89"
          },
          "offers": {
            "@type": "AggregateOffer",
            "offerCount": "5",
            "lowPrice": "{{ $seo['product']['offers']['lowPrice'] }}",
            "highPrice": "{{ $seo['product']['offers']['highPrice'] }}",
            "priceCurrency": "BRL"
          }
        }
    </script>
@else
    <meta property="og:type" content="website">
@endif

<!-- Twitter -->
<meta name="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:card" content="summary">

@if (isset($seo['product']['image'][0]) )
<meta name="twitter:image" content="{!! $seo['product']['image'][0] !!}">
@else
<meta name="twitter:image" content="{{ url('/img/www.vendomeulivro.com.png') }}">
@endif

<meta name="twitter:creator" content="@ReinanGabriel9">
{{--  <meta name="twitter:site" content="@empresa">  --}}

@if (isset($seo['keywords']))
    <meta name="keywords" content="@foreach ($seo['keywords'] as $keywords){{ $keywords }},@endforeach vendo meu livro"/>
@else
    <meta name="keywords" content="vendomeulivro"/>
@endif

@if (url()->current() == url('/'))
<script type="application/ld+json">
    {
    "@context": "http://schema.org",
    "@type": "WebSite",
    "name": "Vendo meu livro",
    "url": "https://www.vendomeulivro.com/",
    "potentialAction": {
        "@type": "SearchAction",
        "target": "https://www.vendomeulivro.com/busca/{search_term_string}",
        "query-input": "required name=search_term_string"
        }
    }
</script>

<script type="application/ld+json">
    {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "Vendo meu livro",
    "url": "https://www.vendomeulivro.com/",
    "logo":"https://vendomeulivro.com/img/logos/logo-site-vendomeulivro-top.png",
    "contactPoint":
    [{
        "@type" : "ContactPoint",
        "telephone" : "55 (79) 99931-3136",
        "url" : "https://www.vendomeulivro.com/central-de-atendimento",
        "contactType" : "customer service"
    }],
    "sameAs" : [
    "https://www.facebook.com/vendomeulivro/",
    "https://twitter.com/vendomeulivro",
    "https://www.youtube.com/user/vendomeulivro",
    "https://www.instagram.com/vendomeulivro/",
    "https://www.linkedin.com/company/vendomeulivro/"
    ]
    }
</script>
@endif

<link rel="shortcut icon" href="{{ url('/img/logos/favicon.ico') }}" />
<link rel="apple-touch-icon" href="{{ url('/img/logos/60x60-precomposed.png') }}" />
<link rel="apple-touch-icon" sizes="76x76" href="{{ url('/img/logos/76x76-precomposed.png') }}" />
<link rel="apple-touch-icon" sizes="120x120" href="{{ url('/img/logos/120x120-precomposed.png') }}" />
<link rel="apple-touch-icon" sizes="152x152" href="{{ url('/img/logos/152x152-precomposed.png') }}" />
