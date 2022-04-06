<html>
<head>
    <title>Script 1 - (PHP - HTML - CSS)</title>
    <style>
        div {
            float: left;
        }
        .pixel {
            width: 1px;
            height: 1px;
        }
    </style>
</head>
<body>
<?php
$file_name = 'image.jpg'; // Replace "image.jpg" with your jpeg or jpg file.
$img = imagecreatefromjpeg($file_name); // If your going to use png files , replace imagecreatefromjpeg($file_name) with imagecreatefrompng($file_name)
$width = imagesx($img);
$height = imagesy($img);
?>
<div style='width:<?=$width;?>px;height:<?=$height?>px;'>
    <?php
    for ($i = 0; $i < $height; $i++) {
        for ($j = 0; $j < $width; $j++) {
            $pixel = imagecolorat($img, $j, $i);
            $pixel_rgb = imagecolorsforindex($img, $pixel);
            $bg_color = 'rgb(' . $pixel_rgb['red'] . ',' . $pixel_rgb['green'] . ',' . $pixel_rgb['blue'] . ')'; ?>
            <div class="pixel" style="background-color:<?= $bg_color; ?>" title="<?= $bg_color;?>"></div>
            <?php
        }
    } ?>
</div>

<?php
imagedestroy($img);
?>
</body>
</html>
