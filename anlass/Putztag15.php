<?php include '../includes/head.php'; ?>
<h1>Nördli-Putztag <br/>
    <small>Samstag 21. März von 09:00 bis 17:00 Uhr</small>
</h1>
<div class="row">
    <div class="col-md-8 info">
        <script type="application/javascript">

            var format = ".pdf";

            var target = (''+window.location).substr(0, (''+window.location).lastIndexOf(".")) + format;
            var frame = '<iframe src="http://docs.google.com/viewer?url=' + target + '&embedded=true" style="width:100%; height:1060px;" frameborder="0"></iframe>';
            document.write(frame);
        </script>
    </div>
    <div class="col-md-8 anmeldung">
        <iframe src="https://docs.google.com/forms/d/1CtVMfLbMwW1YPnDr-7gGtZpEEuc6Vt-Yk07PH6Hf76E/viewform?embedded=true" >Anmeldung wird geladen...</iframe>
    </div>
</div>
<?php include '../includes/foot.php'; ?>
