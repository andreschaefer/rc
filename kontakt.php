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
<h1>Vorstand und Verantwortlichkeiten</h1>

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
        <td>André Schäfer</td>
        <td>Obmann</td>
        <td><?php echo hide_email('obmann@rettungscorps.ch'); ?></td>
    </tr>
    <tr>
        <td>Dorothea Keckeis</td>
        <td>Mitgliederdaten / Stv. Obmann</td>
        <td><?php echo hide_email('adressen@rettungscorps.ch'); ?></td>
    </tr>
    <tr>
        <td>Rolf Bill</td>
        <td>Kassier Vereinskasse</td>
		<td><?php echo hide_email('finanzen@rettungscorps.ch'); ?></td>
    </tr>
    <tr>
        <td>Anja Gerschwiler</td>
        <td>Schriftführer </td>
<!--		<td>--><?php //echo hide_email('internet@rettungscorps.ch'); ?><!--</td>-->
    </tr>
    <tr>
        <td>Martin Breitenmoser</td>
        <td>Nördlichef / Nördli-Bauchef</td>
        <td><?php echo hide_email('noerdli@rettungscorps.ch'); ?></td>
    </tr>
    <tr>
        <td>Simon Boos</td>
        <td>Kassier Nördlikasse</td>
        <td></td>
    </tr>
    <tr>
        <td>Paul Steiner</td>
        <td>Chef Altgardistenbetreuer</td>
        <td><?php echo hide_email('altgardistenbetreuer@rettungscorps.ch'); ?></td>
    </tr>
    <tr>
        <td>Thomas Grisi</td>
        <td>Anlässe</td>
        <td><?php echo hide_email('anlass@rettungscorps.ch'); ?></td>
    </tr>
    <tr>
        <td>Daniel Häflinger</td>
        <td>Fähnrich BF, Versand</td>
        <td></td>
    </tr>
    <tr>
        <td>Peter Waldburger</td>
        <td></td>
        <td></td>
    </tr>
    </tbody>
</table>
<?php include 'includes/foot.php'; ?>
