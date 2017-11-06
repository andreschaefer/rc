<?php include '../includes/head.php'; ?>
<h1>
	RC Chlaus
	<br/> <small>09. Dezember 2017</small>
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
</div>
<?php include '../includes/foot.php'; ?>
