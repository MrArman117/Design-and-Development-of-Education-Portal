<?php
if ((function_exists('session_status')
	&& session_status() !== PHP_SESSION_ACTIVE) || !session_id()) {
	session_start();
}
include '../pages/heading.php';

?>
<div class="">

	<h1 style="color:white; font-size:32px;text-align:center; background-color:#0e2a45;height:35px;font-family:sans-serif;"> About Portal Information</h1>

	<p style="font-size:22px; font-family:vardana; background-color:#abdce0; color:black; padding:15px">

		Education portal system is basically a web-based system that makes
		knowledge available to users or learners and disregards time
		restrictions although available learning has advantages over
		traditional face-to-face education. This project improves the
		quality of education technology which impacts on the teaching
		sectors to radically change the delivery of learning process.<br><br>

		The portal will be an effective resource and knowledge sharing
		between teachers and students. Necessary information for students
		will be provided by the system to improve their academic performance
		and excellence. It offers educational services to users. This portal
		will be community of practice and a service to maintain the knowledge.
		The significance of this project is presented below:<br><br>

		1. Teachers can provide all the necessary information resource
		material to their students and able to get the student information
		from the website.<br><br>
		2. The portal will be efficient for time and cost management.<br><br>

		3. It provides users a point of access to various educational
		tools and facilities.<br><br>
		4.Communicating the students and teachers thus forming a network among them
		5.Through this system the students will be able to access information resources and materials.<br><br>

		6. It will have positive effect to e-lifestyle for young generations towards learning.<br><br>



	</p>


</div>
<?php
include '../pages/footer.php';
?>