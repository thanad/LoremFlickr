<!DOCTYPE html>
<html class="no-js" lang="en-US" xmlns:g="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.w3.org/1999/xhtml">
<head>
<title>LoremFlickr</title>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="robots" content="noindex, nofollow" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
</head>
<body>
<div class="container">
    <h1>LoremFlickr</h1>
    <div class="row">
        <div class="col-xs-12 col-sm-9 col-md-7">
            <p>LoremFlickr provides <strong>placeholder images</strong> for every case, web or print, on almost <strong>any subject</strong>, in <strong>any size</strong>. It's simple and <strong>free</strong>. Just put the custom url in your code like so:</p>

            <pre><code class="html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">img</span> <span class="hljs-attribute">src</span>=<span class="hljs-value">"<?php echo "http://".$_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] !== "80" ? ":".$_SERVER['SERVER_PORT'] : "") ; ?>/320/240"</span> /&gt;</span></code></pre>

            <p>Photos come from <a href="http://flickr.com">Flickr</a> and have a <a href="http://creativecommons.org/">Creative Commons</a> license. The flavour of the license is shown in the top left of the image. The name of the image and the author are shown in the bottom left.</p>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-5">
            <img src="<?php echo "http://".$_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] !== "80" ? ":".$_SERVER['SERVER_PORT'] : "") ; ?>/320/640" class="thumbnail img-responsive visible-sm">
            <img src="<?php echo "http://".$_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] !== "80" ? ":".$_SERVER['SERVER_PORT'] : "") ; ?>/640/480" class="thumbnail img-responsive hidden-xs hidden-sm hidden-lg">
            <img src="<?php echo "http://".$_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] !== "80" ? ":".$_SERVER['SERVER_PORT'] : "") ; ?>/640/320" class="thumbnail img-responsive visible-xs visible-lg">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-7">
            <h2>Examples</h2>
            <pre><code class="html hljs xml"><a href="<?php echo "http://".$_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] !== "80" ? ":".$_SERVER['SERVER_PORT'] : "") ; ?>/320/240"><?php echo "http://".$_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] !== "80" ? ":".$_SERVER['SERVER_PORT'] : "") ; ?>/320/240</a></code></pre>
            <p>
                A random picture of <strong>320 x 240 pixels</strong>. If not supplying any keyword, you'll get a picture matching the keyword <strong>kitten</strong>.
            </p>

            <pre><code class="html hljs xml"><a href="<?php echo "http://".$_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] !== "80" ? ":".$_SERVER['SERVER_PORT'] : "") ; ?>/320/240/dog"><?php echo "http://".$_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] !== "80" ? ":".$_SERVER['SERVER_PORT'] : "") ; ?>/320/240/dog</a></code></pre>
            <p>
                A random picture matching the keyword <strong>dog</strong>, of 320 x 240 pixels.
            </p>

            <pre><code class="html hljs xml"><a href="<?php echo "http://".$_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] !== "80" ? ":".$_SERVER['SERVER_PORT'] : "") ; ?>/g/320/240/paris"><?php echo "http://".$_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] !== "80" ? ":".$_SERVER['SERVER_PORT'] : "") ; ?>/g/320/240/paris</a></code></pre>
            <p>
                A random picture <strong>in gray</strong> matching the keyword paris, of 320 x 240 pixels. Besides <strong>g</strong>, you can try <strong>p</strong>, <strong>red</strong>, <strong>green</strong> and <strong>blue</strong>.
            </p>

            <pre><code class="html hljs xml"><a href="<?php echo "http://".$_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] !== "80" ? ":".$_SERVER['SERVER_PORT'] : "") ; ?>/320/240/brazil,rio"><?php echo "http://".$_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] !== "80" ? ":".$_SERVER['SERVER_PORT'] : "") ; ?>/320/240/brazil,rio</a></code></pre>
            <p>
                A random picture matching the keywords brazil <strong>or</strong> rio, of 320 x 240 pixels.
            </p>

            <pre><code class="html hljs xml"><a href="<?php echo "http://".$_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] !== "80" ? ":".$_SERVER['SERVER_PORT'] : "") ; ?>/320/240/paris,girl/all"><?php echo "http://".$_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] !== "80" ? ":".$_SERVER['SERVER_PORT'] : "") ; ?>/320/240/paris,girl/all</a></code></pre>
            <p>
                A random picture matching the keywords paris <strong>and</strong> girl, of 320 x 240 pixels.
            </p>

            <pre><code class="html hljs xml"><a href="<?php echo "http://".$_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] !== "80" ? ":".$_SERVER['SERVER_PORT'] : "") ; ?>/g/320/240/paris,girl/all"><?php echo "http://".$_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] !== "80" ? ":".$_SERVER['SERVER_PORT'] : "") ; ?>/g/320/240/paris,girl/all</a></code></pre>
            <p>
                A random picture in grey matching the keywords paris and girl, of 320 x 240 pixels.
            </p>

            <p>
                If no matching photos are found, <a href="https://www.flickr.com/photos/mastababa/14666161715/">a photo of Machu Picchu</a> is returned.
            </p>

            <h2>Multiple images on the same page</h2>
            <p>Your browser might cache the images when you request the same URL multiple times on the same page. You can resolve this by adding a meaningless querystring to the URL. So, for example...</p>
						<pre><code class="html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">img</span> <span class="hljs-attribute">src</span>=<span class="hljs-value">"<?php echo "http://".$_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] !== "80" ? ":".$_SERVER['SERVER_PORT'] : "") ; ?>/320/240?random=1"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">img</span> <span class="hljs-attribute">src</span>=<span class="hljs-value">"<?php echo "http://".$_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] !== "80" ? ":".$_SERVER['SERVER_PORT'] : "") ; ?>/320/240?random=2"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">img</span> <span class="hljs-attribute">src</span>=<span class="hljs-value">"<?php echo "http://".$_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] !== "80" ? ":".$_SERVER['SERVER_PORT'] : "") ; ?>/320/240?random=3"</span> /&gt;</span></code></pre>

        </div>

    </div>

    <hr>

    <footer>
        <p class="pull-right">LoremFlickr was built by <a href="http://babakfakhamzadeh.com">Babak Fakhamzadeh</a> | Leave your comments <a href="http://babakfakhamzadeh.com/article/loremflickr-com">here</a></p>
    </footer>
</div>
</body>
</html>