<?php include 'includes/head.php'; ?>
<?php
function hide_email($email)
{
    $character_set = '+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz';
    $key = str_shuffle($character_set);
    $cipher_text = '';
    $id = 'e' . rand(1, 999999999);
    for ($i = 0; $i < strlen($email); $i += 1) $cipher_text .= $key[strpos($character_set, $email[$i])];
    $script = 'var a="' . $key . '";var b=a.split("").sort().join("");var c="' . $cipher_text . '";var d="";';
    $script .= 'for(var e=0;e<c.length;e++)d+=b.charAt(a.indexOf(c.charAt(e)));';
    $script .= 'document.getElementById("' . $id . '").innerHTML="<a href=\\"mailto:"+d+"\\">"+d+"</a>"';
    $script = "eval(\"" . str_replace(array("\\", '"'), array("\\\\", '\"'), $script) . "\")";
    $script = '<script type="text/javascript">/*<![CDATA[*/' . $script . '/*]]>*/</script>';
    return '<span id="' . $id . '">[no script]</span>' . $script;
}

?>
<h1>Kommission und Verantwortlichkeiten</h1>

<table class="table table-hover ">
    <thead>
    <tr>
        <th>Person</th>
        <th>Funktion</th>
        <th>Kontakt</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th colspan="3">Ausschuss</th>
    </tr>
    <tr>
        <td>Alice Gimmi</td>
        <td>Obmann</td>
        <td><?php echo hide_email('obmann@rettungscorps.ch'); ?></td>
    </tr>
    <tr>
        <td>Ewald Keckeis</td>
        <td>Obmann-Stellvertreter / Mitglieder-Daten</td>
        <td><?php echo hide_email('adressen@rettungscorps.ch'); ?></td>
    </tr>
    <tr>
        <td>Sigi Schmuckli</td>
        <td>UK-Verwalter</td>
        <td></td>
    </tr>
    <tr>
        <td>Petra Peyer</td>
        <td>Kassiererin Corps-Kasse</td>
        <td></td>
    </tr>
    <tr>
        <td>Alejandro Cerdan</td>
        <td>Schriftführer</td>
        <td></td>
    </tr>

    <tr>
        <th colspan="3">Kommision</th>
    </tr>

    <tr>
        <td>Oskar Seger</td>
        <td>Nördli Hüttenchef</td>
        <td><?php echo hide_email('noerdli@rettungscorps.ch'); ?></td>
    </tr>
    <tr>
        <td>Jeremias Roth</td>
        <td>Nördli Kassier</td>
        <td></td>
    </tr>
    <tr>
        <td>Peter Waldburger</td>
        <td>Nördli Bauchef</td>
        <td></td>
    </tr>
    <tr>
        <td>Paul Steiner</td>
        <td>Chef Altgardistenbetreuer</td>
        <td><?php echo hide_email('altgardistenbetreuer@rettungscorps.ch'); ?></td>
    </tr>
    <tr>
        <td>Peter Strunz</td>
        <td>Anlässe</td>
        <td><?php echo hide_email('anlass@rettungscorps.ch'); ?></td>
    </tr>
    <tr>
        <td>Daniel Häflinger</td>
        <td>Fähnrich BF</td>
        <td></td>
    </tr>
    <tr>
        <td>Stefan Keller</td>
        <td>Versand</td>
        <td></td>
    </tr>
    <tr>
        <td>André Schäfer</td>
        <td>Internet Kommunikation / Homepage</td>
        <td><?php echo hide_email('internet@rettungscorps.ch'); ?></td>
    </tr>

    </tbody>
</table>
<?php include 'includes/foot.php'; ?>
