<?php
$category_explode = explode("/",$_SERVER['REQUEST_URI']);
$site = $category_explode[0];
$page = $category_explode[1];
$post = $category_explode[2];
$nnav = " ";
$nav = '<ul class="nav navbar-nav">
    <li class="inactive"><a href="/">Home</a></li>
    <li class="inactive"><a href="/bash/">Bash</a></li>
    <li class="inactive"><a href="/viml/">VimL</a></li>
    <li class="inactive"><a href="/web/">Web</a></li>
    <li class="inactive"><a href="/about/">About</a></li>
    </ul>';
switch ($page) {
    case "":
        $nnav = str_replace("<li class=\"inactive\"><a href=\"/\">Home</a></li>","<li class=\"active\"><a href=\"/\">Home</a></li>",$nav);
    break;
    case "bash":
        $nnav = str_replace("<li class=\"inactive\"><a href=\"/bash/\">Bash</a></li>","<li class=\"active\"><a href=\"/bash/\">Bash</a></li>",$nav);
    break;
    case "viml":
        $nnav = str_replace("<li class=\"inactive\"><a href=\"/viml/\">VimL</a></li>","<li class=\"active\"><a href=\"/viml/\">VimL</a></li>",$nav);
    break;
    case "web":
        $nnav = str_replace("<li class=\"inactive\"><a href=\"/web/\">Web</a></li>","<li class=\"active\"><a href=\"/web/\">Web</a></li>",$nav);
    break;
    case "about":
        $nnav = str_replace("<li class=\"inactive\"><a href=\"/about/\">About</a></li>","<li class=\"active\"><a href=\"/about/\">About</a></li>",$nav);
    break;
    default:
        $nnav = $nav;
    break;
}
?>
<div class="nav">
    <?php
    echo $nnav;
    ?>
</div>
