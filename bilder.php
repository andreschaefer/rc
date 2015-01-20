<?php include 'includes/head.php'; ?>
<div class="container" role="main">
    <h1>Impressionen aus dem Rettungs-Corps</h1>


        <p>
            Alle Fotos findest du auf <a href="https://www.flickr.com/photos/129011464@N05/sets/"
                                         target="_blank">flickr</a>
        </p>

        <div id="gallery" style="height: 800px"></div>

        <p class="pull-right">
            Alle Fotos findest du auf <a href="https://www.flickr.com/photos/129011464@N05/sets/"
                                         target="_blank">flickr</a>
        </p>

</div>
<footer>
    <div class="container">
        <p class="center-block text-muted">&copy; Rettungs-Corps der Stadt St. Gallen 2014</p>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/gallery/gallery.js"></script>
<script src="/gallery/flickr.min.js"></script>
<script>
    Gallery.loadTheme('/gallery/gallery.skin.js');
    Gallery.run('#gallery', {
        flickr: 'user:129011464@N05',
        flickrOptions: {
            imageSize: 'big',
            thumbSize: 'medium',
            sort: 'date-taken-desc',
            max: 100
        }
    });
</script>
</body>
</html>