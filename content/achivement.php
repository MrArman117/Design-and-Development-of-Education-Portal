<?php
if ((function_exists('session_status')
	&& session_status() !== PHP_SESSION_ACTIVE) || !session_id()) {
	session_start();
}
include '../pages/heading.php';

?>
<div class="">

	<h1 style=" color:white; font-size:27px;text-align:center; background-color:#0e2a45;height:45px;font-family:verdana;"> Upcoming Events </h1>

	<div style="font-size:25px; font-family:vardana; background-color:#a6a6a4; color:black; padding:17px">
		Recently we have an award ceremony from ministry of ICT on 30 January.
	</div>

	<div style="font-size:25px; font-family:vardana; background-color:#cfcfc6; color:black; padding:17px">
		We have an Project Fair for our online student on 21 February.
	</div>
</div>
<?php
include '../pages/footer.php';
?>