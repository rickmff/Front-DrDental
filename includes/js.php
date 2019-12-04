<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="assets/js/vendor/jquery-scrolltofixed-min.js"></script>
<script src="assets/js/classie.js"></script>
<script src="assets/js/vendor/slick.min.js"></script>
<script src="assets/js/config_slider.js"></script>
<script src="assets/js/funcoes.js"></script>
<script src="assets/js/whatsapp-window.js"></script>
<script src="assets/js/vendor/jquery.mask.min.js"></script>
<script src="assets/js/config_mask.js"></script>
<script src="assets/js/formConsulta.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>



<?
#################	CONFIGURAÇÃO DOS JS/PLUGINS DE CADA PÁGINA	#################

switch($cur_page){
	case 'index.php': ?>
        <script src="assets/js/vendor/slick.min.js"></script>
        <script src="assets/js/config_slider.js"></script>
	<? break;
    	
	case 'contato.php':
	?>
        <script src="assets/js/vendor/jquery.mask.js"></script>
		<script src="assets/js/config_mask.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<? break;
}
#################	FIM CONFIGURAÇÃO DOS JS/PLUGINS DE CADA PÁGINA	#################
?>
<script src="assets/js/vendor/magnific.min.js"></script>
<script src="assets/js/config_zoom.js"></script>