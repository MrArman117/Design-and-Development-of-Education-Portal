<?php
if ((function_exists('session_status')
	&& session_status() !== PHP_SESSION_ACTIVE) || !session_id()) {
	session_start();
}
include '../pages/heading.php';
include '../pages/navbar.php';
?>
<div class="container mb-10">

    <div class="row no-gutters">
        <div class="col-12 col-sm-6 col-md-8">
		<div class="col-md-6">
            <div id="file_info">
                
                    <p> <small>At <strong></strong></small> <i>noticed by</i> <small></small>
					<a href="/ajax/uploads/<?php echo $ro['filepath'] . '  '; ?>">View</a></p>
             
            </div>
        </div>
				 
                <br>
           
        </div>
    </div>

</div>
<?php
include '../pages/footer.php';
?>