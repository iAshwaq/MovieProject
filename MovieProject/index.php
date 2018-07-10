
<?php
  include "conf/info.php";
  $title="Welcome To Movie's Site";
  include_once "head.php";
?>
<!-- heaer latest movies  !-->
    
    <hr>
	<h1>The Latest Movies </h1>
    <ul>
      <?php
        include_once "api/conn_api_popular.php";
        foreach($popular->results as $p){
			// here to display Poster , Namer of latest movies in main page 
          echo '<li><a href="movie.php?id=' . $p->id . '"><img src="http://image.tmdb.org/t/p/w500'. $p->poster_path . '"><h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em>Rate : " . $p->vote_average . " |  Vote : " . $p->vote_count . "</em></h5></a></li>";
        }
      ?>
    </ul>

<?php
  include_once "footer.php";
?>