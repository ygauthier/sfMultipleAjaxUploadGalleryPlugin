<?php use_helper('I18N') ?>
<link href="/sfMultipleAjaxUploadGalleryPlugin/css/jquery.Jcrop.css" media="screen" type="text/css" rel="stylesheet">
<script type="text/javascript">
    function ajaxForm(){
        $.post("<?php echo url_for(@photo_crop) ?>",
            {x:$("#x").val(),y:$("#y").val(),w:$("#w").val(),h:$("#h").val(),photo_id:$("#photo_id").val()},
            function(data){
                $("#pictures_list").html(data);
            });
    }
</script>
<?php echo link_to("Retour à l'édition de la galerie", url_for(@gallery) . "/" . $photo->getGalleryId() . "/edit") ?>

<br/>
<table border="0" width="100%" cellpadding="0" cellspacing="0" id="gallery_content">
    <tr>
        <th rowspan="3"></th>
        <th class="gallery_topleft"></th>
        <td id="gallery_tbl-border-top">&nbsp;</td>
        <th class="gallery_topright"></th>
        <th rowspan="3"></th>
    </tr>
    <tr>
        <td id="gallery_tbl-border-left"></td>
        <td>
            <table class="mediumtable">
                <tr>
                    <th rowspan="3"></th>
                    <th class="topleft"></th>
                    <td class="tbl-border-top">&nbsp;</td>
                    <th class="topright"></th>
                    <th rowspan="3"></th>
                </tr>
                <tr>
                <td class="tbl-border-left"></td>
                <td style="text-align: center">
                    <img id="photo" onclick="crop(this)" src="<?php echo $photo->getFullPicpath(); ?>"/>
                    <form onsubmit="return false;" method="post" action="" id="cropForm">
                            <input type="hidden" name="x" id="x" value="67">
                            <input type="hidden" name="y" id="y" value="45">
                            <input type="hidden" name="w" id="w" value="186">
                            <input type="hidden" name="h" id="h" value="186">
                            <input type="hidden" name="photo_id" id="photo_id" value="<?php echo $photo->getId(); ?>">
                            <input type="button" value="Valider" style="font-size:11px" onclick="checkCoords();ajaxForm();return false;">
                    </form>
                </td>
                <td class="tbl-border-right"></td>
                </tr>
                <tr>
                    <th class="bottomleft"></th>
                    <td class="tbl-border-bottom">&nbsp;</td>
                    <th class="bottomright"></th>
                </tr>
        </table>

            
            
        </td>
        <td id="gallery_tbl-border-right"></td>
    </tr>
    <tr>
        <th class="gallery_sized bottomleft"></th>
        <td id="gallery_tbl-border-bottom">&nbsp;</td>
        <th class="gallery_sized bottomright"></th>
    </tr>
</table>

<?php $ratio = sfConfig::get("app_sfMultipleAjaxUploadGalleryPlugin_ratio"); ?>
<?php $dimensions = sfConfig::get("app_sfMultipleAjaxUploadGalleryPlugin_dimensions"); ?>
<script type="text/javascript" src="/sfMultipleAjaxUploadGalleryPlugin/js/jquery.Jcrop.js" />
<script type="text/javascript" src="/sfMultipleAjaxUploadGalleryPlugin/js/jcrop-script.js" />
<script type="text/javascript">
    $(function() {
        crop("#photo",<?php echo $dimensions["min"]["width"]; ?>,<?php echo $dimensions["max"]["width"]; ?>,<?php echo $dimensions["min"]["height"]; ?>,<?php echo $dimensions["max"]["height"]; ?>,<?php echo $ratio["enable"]? "'".$ratio["value"]."'": 0; ?>);
    });
</script>

