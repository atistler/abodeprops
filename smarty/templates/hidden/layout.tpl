<html>
<head>
    <title>{block name=title}Abode Properties{/block}</title>
{block name="metatags"}
    <meta name="description" content="Abode Properties Real Estate" />
    <meta name="keywords" content="massachusetts real estate abode properties residential homes houses" />
{/block}
{block name="favicon"}
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAAAAAAA7/X0AKy3xgALS6oAsLKzAPP39wARSZ8A8fTvAO7z8gDr6eUArbO5AOju8ACYpq0A7fX1ALS8yQAxNTkAJCkyAO3z8wARRpgApaytAJmmrgDq8fEA6+vpAPH19gDs8fEA9PnzAA9UvADZ5OUAqLO7AObv7wA1OkUAtL7FADM3PQA3OkUA/f7+APT38QD+/v4A+Pr5ANfi4wCUoqoAYX6mAOrx8gAGRaUAqKuxANHR0QAJQ5oA7PHyAPj59AD7/PwAjZ62ADhvwgAALoMAWX2yANXg4QDe3t4A///8AFuCvQAGQJsA9/r6APX38gBHSU0AMDY5ANji5ADU3t8A5u3uAFh4qAAsMTcAXXOdAPf59QD6/P0AKjA6APz8/QD3/PUA7OrmAOPr7ADk6+wAZ4u9AAAsggAmKjMA4OnqAPLy8QDNzc4Al6WsAMjJyQDw9PQAuLm9AKWtrgCipqkAMzdAANzn6AAOVsIA3efoAL/CxQBlfqkAl6WtAObw8ADt9PUAnaCiAMbFxQBYeq0A+/z3AE9smwDY4+QA9Pf1ACsvNwDk7u4A9/f1AO3y8wDn7u4AnaGgAGmFrwDV4eIA3OXnAN7f3wDn8PEA6+rpAPX18wBbe6sA+/z4AGqEqgD6+/sAN27BAIOFhQAyNzoAjp21AN7q6gCoqasA6O7vAPPz8QDp7u8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPDw8ehQoUwAAUygUejw8PB96XgwUE3V5MihWFFIneh8fen0pDRk4GlpMSGBfWXofH3omS4EHNAMGbiN/Tz96Hx96PmwYO2MqEndELko1eh8femYVAS9BLTldZFRAb3ofH3pbEQV2ZTNNQzcFCxt6Hx56HRc6JQIxfA54Oi5peh48Hh9neEVqSQl0RzAIHB48ADweXFAkNlNicSKACkY8AAAAPCFVc1FXVywWK2h6AAAAAAA8WARXBQVXV05tegAAAAAAADwgfgUFYRB6cnoAAAAAAAAAPA9XV0I8emt6AAAAAAAAAAA8ez08AHpwegAAAAAAAAAAADw8AAB6enoAAAGAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIABAADAAwAA4AMAAPADAAD4AwAA/CMAAP5jAAA=" rel="icon" type="image/x-icon" />
{/block}
{block name="css"}
    <link href='http://fonts.googleapis.com/css?family=Alegreya+SC:400,700' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Cardo:400,700' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,600,700' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Signika:400,600,700' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans+Mono' rel='stylesheet' type='text/css'/>
    <!--
    <link href="/css/site.css" rel="stylesheet" type="text/css"/>
    -->

    <link href="/plugin/nivo-slider/nivo-slider.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="/plugin/nivo-slider/themes/default/default.css" rel="stylesheet"  type="text/css" media="screen" />
    <link href="/less/compiler.php?f=site.less" rel="stylesheet" type="text/css" media="screen"/>
{/block}

{block name="js"}
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load("jquery", "1.7.1");
        google.load("jqueryui", "1.8.16");
    </script>
    <!-- <script type="text/javascript" src="/js/jquery.animate-enhanced.min.js"></script> -->
    <script type="text/javascript" src="/plugin/nivo-slider/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript" src="/js/site.js"></script>
{/block}
</head>
<body>
<div class="container">
{block name=header}
{include file="hidden/header.tpl"}
{/block}
    {block name=content}{/block}
</div>
</body>
</html>