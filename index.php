<?php include 'includes/head.php'; ?>
    <div class="jumbotron hidden-xs hidden-sm">
        <h1><img src="/images/rc-logo-100.gif"/> Das Rettungs-Corps</h1>

        <p >Das Rettungs-Corps der Stadt St. Gallen wurde 1859 gegründet, mit dem Zweck, die Pflege und Förderung der
            Kameradschaft unter den
            Aktiven und Mitgliedern der "Alten Garde" sowie Durchführung repräsentativer Anlässe. Im Weiteren wird
            in Not geratenen
            Mitgliedern Hilfe geleistet.</p>
    </div>
    <div class="visible-sm">
        <h1><img src="/images/rc-logo-50.gif"/> Das Rettungs-Corps St. Gallen</h1>
    </div>
    <div class="visible-xs">
        <h1><img src="/images/rc-logo-50.gif"/> RC St. Gallen</h1>
    </div>
<!-- FIXME remove hard coded teaser!-->
    <div class="row">
        <div class="col-md-8">
            <img class="img-responsive" src="images/2015-09-12-degersheimer.jpg" />
        </div>
        <div class="col-md-4">
            <h2>Degersheihmer Feuerwehrmarsch <br/>
                <small>Samstag, 12. September 2015</small>
            </h2>
            <p>Viele liebe Grüsse aus Degersheim!</p>
            <p>
                Bei schönstem Wetter startet die RC-Delegation am Degersheimer Feuerwehrmarsch.
            </p>
            <p>Sei nächstes Jahr auch dabei an einem immer wieder schönen Anlass!</p>
        </div>
    </div>
<?php
$files = get_files('teaser', '.html');
$count = 0;
foreach ($files as $key => $file) {
    if (!preg_match('/[0-9]{4,4}-[0-9]{2,2}-[0-9]{2,2}/', $file, $match) || 0 <= strcmp($match[0], date('Y-m-d'))) {
        if ($count % 3 == 0) {
            echo '<div class="row">';
        }
        echo '<div class="col-md-4">';
        include $file;
        echo '</div>';
        $count++;
        if ($count % 3 == 0) {
            echo '</div>';
        }

    }
}
if ($count % 3 != 0) {
    echo '</div>';
}
?>
<?php include 'includes/foot.php'; ?>