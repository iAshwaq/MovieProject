<?php
  include "conf/info.php";
  
  $id_movie = $_GET['id'];
    include_once "api/conn_api_movie_id.php";
    include_once "api/conn_api_movie_video_id.php";
    include_once "api/conn_api_movie_similar.php";
	 include_once "head.php";
    $title = "Detail Movie (".$movie_id->original_title.")";
	
   
  
?>

<hr>
    <?php 
    if(isset($_GET['id'])){
    $id_movie = $_GET['id']; 
    ?>
	
	 <!-- Show Info. about movie (Name - video - poster - description - genres !-->
	
    <h1><?php echo $movie_id->original_title ?></h1>
    

    <?php 

      foreach($movie_video_id->results as $video){
                    echo '<iframe width="560" height="315" src="'."https://www.youtube.com/embed/".$video->key.'" frameborder="0" allowfullscreen></iframe>';
      }
     ?>"

	 
    <hr>
	</br>
	
	 
          
		  
          <img class="poster" src="<?php echo $imgurl_2 ?><?php echo $movie_id->poster_path ?>"> 
          </br></br>
		  
		  <div class="description">
		  <!-- hear favorit movie !-->
		 	<form  class="lo" style="z-index:999;" action="" method="post"> 
			<button name="click" class="click1" style=" background: transparent; border: none !important;" >	<img src="image/fav.png" class="logo1" ></button> 

		  </form>	
            <a href=<?php echo "https://www.imdb.com/title/"."$movie_id->imdb_id" ?>><button class="click"style="background: transparent; border: none !important;"><img src="image/shar.png" class="logo" ></button></a>
		 <?php
		 
		 // favorit movie 
		 
        if(isset($_POST['click']))
        {
    	$fp = fopen("file.txt","a");
        
        ?>

         <!-- this is for display in -->
         <?php
	 
	     $content = $id_movie ;
		 $con = $movie_id;
         fwrite($fp,$con);
		 fwrite($fp,"\n");
         fwrite($fp,$content);
		 fwrite($fp,"\n");
         fclose($fp);
       	}
        ?> 
		 <!--  end fav method!--> 
      	
		
		  <p>Name : <?php echo $movie_id->original_title ?></p>
          <p>Tagline : <?php echo $movie_id->tagline ?></p>
          <p>Genres : 
              <?php
                foreach($movie_id->genres as $g){
                  echo '<span>' . $g->name . '</span> ';
                }
              ?>
          </p>
		 
          <p>Description : <?php echo $movie_id->overview ?></p>
          <p>Release Date : <?php $rel = date('d F Y', strtotime($movie_id->release_date)); echo $rel ?>
         
          <p>Production Countries:
              <?php
                foreach($movie_id->production_countries as $pco){
                  echo $pco->name. "&nbsp;&nbsp;" ;
                }
              ?>
          </p>
          
          <p>Vote Average : <?php echo $movie_id->vote_average ?></p>
		  </div>
		  

		  </br></br></br>
    <hr>
	<!--similar video !-->
	
    <h3>Similar Movies</h3>
      <ul>
      <?php
        $count = 4;
        $output=""; 
        foreach($movie_similar_id->results as $sim){
          $output.='<li><a href="movie.php?id='.$sim->id.'"><img src="http://image.tmdb.org/t/p/w300'.$sim->backdrop_path.'"><h5>'.$sim->title.'</h5></a></li>';
          if($count <=0){
            break;
            $count--;
          }
        }
        echo $output;
      ?>
      </ul>
 
    <?php 
    } else{
      echo "<h5>Movie Doesn't Exist.</h5>";
    }
    ?>

<?php
  include_once "footer.php";
?>