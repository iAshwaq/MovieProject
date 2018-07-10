<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">M O V I E S </a>
    </div>
	
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="fav.php">Favorite Movie</a></li>
    
    </ul>
	<!-- search movie box !-->
	
	
	<form class="form-wrapper cf" action="search.php" method="get">
	
      <input class="" type="text" name="search" placeholder="Enter Movie's Title " required>
      
      <button  type="submit"> Search </button> 
	  <select  class="se" name="channel" required>
        <option value="movie" selected="selected"> Movie </option>
        <option value="tv"> TV Show </option>
      </select>
	 
    </form>
	
	
	<!-- End search movie box !-->
  </div>
  
  
  
</nav>
<img src="image/header.png" class="image" alt="header" align="center">
  


</body>
</html>
