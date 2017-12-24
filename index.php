<!DOCTYPE html>
<html lang="be">
<head>
    <meta charset="UTF-8">
    <meta name="description"
          content="Аўтаматычны транслітаратар у лацінку. Аўтаматычны лацінізатар. Перавесці тэкст у лацінку. Aŭtamatyčny translitaratar у łacinku. Pieraviesci tеkst u łacinku. Транслітараваць. Translitaravać. Лацінізаваць. Łacinizavać.">
    <meta name="keywords"
          content="Беларуская лацінка, транслітарацыя, пераклад, Biełaruskaja łacinka, translitaracyja, pierakład.">
    <title>Аўтаматычны лацінізатар</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css"/>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <?php if (is_file('ga.phtml')) echo file_get_contents('ga.phtml'); ?>
</head>
<body>
<?php if (is_file('ym.phtml')) echo file_get_contents('ym.phtml'); ?>
<div class="container-fluid lm-container">
    <h1>Аўтаматычны лацінізатар</h1>
    <form id="transForm" class="row">
        <div class="col-md-6 lm-col-1">
            <div class="form-group">
                <label for="input">Тэкст на кірыліцы</label>
                <div class="float-right lm-btn">
                    <button type="submit" class="btn btn-primary">Лацінізаваць</button>
                </div>
                <textarea class="form-control" id="input" required placeholder="Напішыце што небудзь"></textarea>
            </div>
        </div>
        <div class="col-md-6 lm-col-2">
            <div class="form-group">
                <label for="output">Tekst na łacincy</label>
                <textarea class="form-control" id="output"></textarea>
            </div>
        </div>
    </form>
</div>
<footer class="footer">
    <div class="container-fluid text-right">
        <span class="text-muted">Alpha <a href="https://github.com/na-ringtail/latinize-me">viersyja</a>. Raspracavana praz <a
                href="mailto:na.ringtail@gmail.com">Ringtail</a>. Budziem udziačny za dapamohu.</span>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="lacin.js?v=1.0.7" charset="utf-8" language="JavaScript"></script>
</body>
</html>