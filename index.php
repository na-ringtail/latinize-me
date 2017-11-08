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

    <?php if (is_file('ga.phtml')) echo file_get_contents('ga.phtml'); ?>
</head>
<body>
<?php if (is_file('ym.phtml')) echo file_get_contents('ym.phtml'); ?>
<div class="container-fluid lm-container">
    <h1>Аўтаматычны лацінізатар</h1>
    <form id="transForm" class="row table-container">
        <div class="col-md-6 lm-col-1">
            <div class="form-group lm-form-group">
                <label for="input">Тэкст на кірыліцы</label>
                <textarea class="form-control" id="input" rows="15" required placeholder="Напішыце што небудзь"></textarea>
                <div class="form-group text-center lm-btn">
                    <button type="submit" class="btn btn-primary">Лацінізаваць</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 lm-col-2">
            <div class="form-group lm-form-group">
                <label for="output">Tekst na łacinkie</label>
                <textarea class="form-control" id="output" rows="15"></textarea>
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