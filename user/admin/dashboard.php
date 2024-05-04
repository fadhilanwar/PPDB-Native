<div class="content">
    <h2>
        Dashboard
    </h2>

    
    <div class="main-contenti">
    <article class="cta">
	<?php
        
        include '../../koneksi.php';

        $tableadmin = mysqli_query($koneksi,"select * from t_userlogin where level='admin'");
        $dataadmin = mysqli_num_rows($tableadmin);

        $tablepetugas = mysqli_query($koneksi,"select * from t_userlogin where level='panitia'");
        $datapetugas = mysqli_num_rows($tablepetugas);

        $tablesiswa = mysqli_query($koneksi,"select * from t_userlogin where level='siswa'");
        $datasiswa = mysqli_num_rows($tablesiswa);
        
        ?>
	<div class="cta__text-column" style="">
        
        <div class="card-top">
        <!-- <h2>Aspect ratio is great</h2>
		<p>This image has an aspect ratio of 3/2.</p> -->
        <img src="../../icon/graduate.png" width="60px">
        <div class="info-txt">
            <h3><?php echo $datasiswa;?></h3>
        </div>
                   
    </div>
        <!-- <div class="info-txt">
                Admin
            </div> -->
        <div class="card-bottom">
            <h3>Total Siswa</h3> 
            
        </div>
		
	</div>
</article>




<article class="cta-1">
    
	<div class="cta__text-column-1">
        
        <div class="card-top-1">
        <!-- <h2>Aspect ratio is great</h2>
		<p>This image has an aspect ratio of 3/2.</p> -->
        <img src="../../icon/user.png" width="75px">
        <div class="info-txt">
            <h3><?php echo $dataadmin;?></h3>
        </div>
                   
        </div>
        <!-- <div class="info-txt">
                Admin
            </div> -->
        <div class="card-bottom-1">
            <h3>Total Admin</h3> 

        </div>
		
		<!-- <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/aspect-ratio">Read all about it</a> -->
	</div>
</article>






<article class="cta-2">
	
    <div class="cta__text-column-2">
        
        <div class="card-top-2">
            <!-- <h2>Aspect ratio is great</h2>
            <p>This image has an aspect ratio of 3/2.</p> -->
            <img src="../../icon/worker.png" width="60px">
            <div class="info-txt">
                <h3><?php echo $datapetugas;?></h3>
        </div>
        
        </div>
        <!-- <div class="info-txt">
                Admin
            </div> -->
        <div class="card-bottom-2">
            <h3>Total Petugas</h3> 

        </div>
		
		<!-- <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/aspect-ratio">Read all about it</a> -->
	</div>
</article>









<article class="cta-3">
	
	<div class="cta__text-column-3">
        
        <div class="card-top-3">
        

        <!-- <h2>Aspect ratio is great</h2>
		<p>This image has an aspect ratio of 3/2.</p> -->
        <img src="../../icon/stats.png" width="50px" style="margin-left: 12px;">
        <div class="info-txt">
            <h3>79.8</h3>
        </div>
        
        </div>
        <!-- <div class="info-txt">
            Admin
            </div> -->
            <div class="card-bottom-3">
                <h3>Avg. Nilai Siswa</h3> 

            </div>
            
		<!-- <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/aspect-ratio">Read all about it</a> -->
	</div>
</article>
</div>
</div>
<div class="wrap-dash">


</div>