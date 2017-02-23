<div class="container">
	<div class="row">
    	<div class="col-md-3">
         <?php
		 $level = $row_showmember['m_level'];
		 	if($level==1) {  ?>
            <div class="list-group">
                  <a href="#" class="list-group-item active">
                    สำหรับ Admin
                  </a>
                  	<a href="#" class="list-group-item">link</a>
                  	<a href="#" class="list-group-item">link</a>
                   	<a href="#" class="list-group-item">link</a>
                   	<a href="#" class="list-group-item">link</a>
			</div>
			<?php }elseif($level==2) { ?>
            		<div class="list-group">
                  <a href="#" class="list-group-item active">
                    สำหรับสมาชิก
                  </a>
                  <a href="list_articles.php" class="list-group-item">จัดการข่าว</a>
                  	<a href="#" class="list-group-item">link</a>
                  	<a href="#" class="list-group-item">link</a>
                   	<a href="#" class="list-group-item">link</a>
                   	<a href="#" class="list-group-item">link</a>
			</div>
            <?php } elseif($level==3) { ?>

            	<div class="list-group">
                  <a href="#" class="list-group-item active">
                    สำหรับสมาชิก
                  </a>
                  <a href="#" class="list-group-item">devbanban</a>
		   <?php }else{ }  ?>

        </div>
    </div>
</div>
