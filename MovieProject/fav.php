<?php
  include "conf/info.php";
  include_once "head.php";
  $fp = fopen("file.txt","r");
  
       if($fp)
	   {
		  $array = explode("\n",fread($fp,filesize("file.txt"))); 
	   }
	   
	   
			 $length= count($array);
			 echo "<hr>";
			 
			 
			 for ($x = 0; $x < $length -1 ; $x++) 
			 
		      $id_movie = $array[$x] . "<br>";
			 
			  
			 
			 
		   include_once "api/conn_api_movie_id.php";
              
			 
	           
			 
			 
			 
		  $output=""; 
	      $output.='<a href="movie.php?id='.$movie_id->id.'"><img src="http://image.tmdb.org/t/p/w300'.$movie_id->poster_path.'"><h5>'.$movie_id->original_title.'</h5></a>'; 
	      
		  echo "<br>" . $output . "<br>"; 
		  
			 
			 
		 
		 
		 
		   
           
		    
		 
		 //////////////here 
         
 
   
	
   
  
?>


    
	
	
	 

		  </br></br></br>
    <hr>
    

<?php
		 
fclose($fp);
  include_once "footer.php";
?>