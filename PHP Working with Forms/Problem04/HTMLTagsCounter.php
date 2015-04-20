<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>HTML Tags Counter</title>
    </head>
    <body>
    <form action="HTMLTagsCounter.php" method="post">
        <p>Enter HTML tags:</p>
        <input type="text" name="tags" required="required"/>
        <input type="submit" name="submit" value="Submit" />
    </form>
    <?php
    $htmlTags = array('html', 'head', 'title', 'base', 'link', 'meta', 'style',
        'script', 'noscript', 'template', 'body', 'section', 'nav',
        'article', 'aside', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
        'header', 'footer', 'address', 'main', 'p', 'hr', 'pre',
        'blockquote', 'ol', 'ul', 'li', 'dl', 'dt', 'figure',
        'figcaption', 'div', 'a', 'em', 'strong', 'small', 's',
        'cite', 'q', 'dfn', 'abbr', 'data', 'time', 'code', 'var',
        'samp', 'kbd', 'sub', 'sup', 'i', 'b', 'u', 'mark', 'ruby',
        'rt', 'rp', 'bdi', 'bdo', 'span', 'br', 'wbr', 'ins', 'del',
        'img', 'iframe', 'embed', 'object', 'param', 'video', 'audio',
        'source', 'track', 'canvas', 'map', 'area', 'svg', 'math',
        'table', 'caption', 'colgroup', 'col', 'tbody', 'thead',
        'tfoot', 'tr', 'td', 'th', 'form', 'fieldset', 'legend',
        'label', 'input', 'button', 'select', 'datalist', 'optgroup',
        'option', 'textarea', 'keygen', 'output', 'progress',
        'meter', 'details', 'summary', 'menuitem', 'menu');
    if(isset($_POST['tags'])){
        $input = $_POST['tags'];
        if(isset($_SESSION['count'])) {
            $_SESSION['count'] = 0;
        }

        if(in_array($input,$htmlTags)){
            $_SESSION['count']++;
            echo "Valid HTML tag!";
        }
        else{
            echo "Invalid HTML tag!";
        }
        echo $_SESSION['count'];
    }
    ?>
    </body>
</html>