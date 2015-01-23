<?php include '../includes/head.php'; ?>
<h1>Jubiläumsfeier 35 Jahre Nördli<br/>
    <small>02. Mai 2015</small>
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
        <iframe src="https://docs.google.com/forms/d/1DqyEQ4hg3xo5_j50gZXLMhl1I_qAN70HGFYzYY7blkg/viewform?embedded=true">
            Anmeldung Wird geladen...
        </iframe>
    </div>
</div>
<?php include '../includes/foot.php'; ?>
