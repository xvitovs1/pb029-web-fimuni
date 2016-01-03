<?php
$g = glob('galerie/' . $year . '/*_mini.jpg');
foreach($g as $filename){
$normal = str_replace('mini', 'normal', $filename);
?>
	<a href="<?php echo $normal; ?>" data-lightbox="galerie">
		<img src="<?php echo $filename; ?>" alt="Záběr z festivalu">
	</a>
<?php
}
?>
