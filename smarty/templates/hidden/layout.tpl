<html>
<head>
    <title>{block name=title}Abode Properties{/block}</title>

{block name="metatags"}
{include file="hidden/meta.tpl"}
{/block}

{block name="favicon"}
{include file="hidden/favicon.tpl"}
{/block}

{block name="css"}
{include file="hidden/fonts.tpl"}
{include file="hidden/css.tpl"}
{/block}

{block name="js"}
{include file="hidden/js.tpl"}
{/block}

</head>
<body>
{include file="hidden/fb.tpl"}
<div class="container">

{block name="header"}
{include file="hidden/header.tpl"}
{/block}

    <div class="content_wrapper">
    {block name="content"}{/block}
    </div>
{block name="footer"}
{include file="hidden/footer.tpl"}
{/block}
</div>
</body>
</html>