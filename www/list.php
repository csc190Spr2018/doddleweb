 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		function genPost(post){
			var ctrl = $(" <div class='row'> <div class='col-md-12 post-header-line'> <span class='glyphicon glyphicon-user'></span>by <a href='#' id='aAuthr'>Bhaumik</a> | <span class='glyphicon glyphicon-calendar'> </span><span id='sDate'>Sept 16th, 2012 </span> </div> <div class='col-md-12 post-header-line'> <div id='divMsg'> This is the message body </div> </div> </div>	");
			var author = post["author"];
			var ts = post["ts"];
			var msg = post["post"];
			//alert("msg is : " + ts);
			ctrl.find("#aAuthr").html(author);
			ctrl.find("#sDate").html(ts);
			ctrl.find("#divMsg").html(msg);
			return ctrl;
		}
		function displayPosts(arrPosts){
			for(i=0; i<arrPosts.length; i++){
				var post = arrPosts[i];
				var divPost = genPost(post);
				$("#divContainer").append(divPost);
			}
		}
		function getPosts(){
			    $.post("servlets/data_ops.php",
			    {
				op: "getPosts"
			    },
			    function(data, status){
					var arrPosts = JSON.parse(data);
					displayPosts(arrPosts);
			    });
		}
		getPosts();
	</script>
</head>
<body>

<div class="container" id="divContainer">
</div>

</body>
</html> 
