<?php include 'includes/head.php'; ?>
    <div class="container" role="main">
        <div class="jumbotron">
            <h1><img src="/images/rc-logo-100.gif"/> Das Rettungs-Corps</h1>

            <p>Das Rettungs-Corps der Stadt St. Gallen wurde 1859 gegründet, mit dem Zweck, die Pflege und Förderung der
                Kameradschaft unter den
                Aktiven und Mitgliedern der "Alten Garde" sowie Durchführung repräsentativer Anlässe. Im Weiteren wird
                in Not geratenen
                Mitgliedern Hilfe geleistet.</p>
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
    </div>
<?php include 'includes/foot.php'; ?>