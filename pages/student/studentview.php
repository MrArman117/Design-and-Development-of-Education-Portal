            <?php while($ro = mysqli_fetch_array($queryuploads)) :   ?>
                <span><b><?php echo $ro['description'].'    '; ?></b></span>
                <span><i><?php echo $ro['filepath'].'     '; ?></i></span>
                <a href="uploads/<?php echo $ro['filepath'].'  '; ?>">Download</a>
                <small><span>uploaded by <i><?php echo $tcinfos['first_name'] . ' ' . $tcinfos['last_name']; ?></i></span></small>
                <br>
            <?php endwhile;?>