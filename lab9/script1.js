
var postsLoaded = 0;
var postsToLoad = 2;

window.onload = function(){
	document.querySelector("#InputLoad").onclick = function(){
		$.ajax({
			method: "POST",
			url: "LoadPosts_ex1.php",
			data: {
				Posts: postsToLoad,
				Start: postsLoaded
			},
			success: function(response){
				console.log("Start");
				var result = JSON.parse(response);
				var post = '';
				for(var i=0; i<Object.keys(result.id).length; i++){
					post+="<div class='Post'>";
					post+="<div class='PostImage'>";
					post+="<img src='img/" + result.image[i] + "' alt='фото города'>";
					post+="</div>";
					post+="<h4>" + result.name[i] + "</h4>";
					post+="<h5>Население:" + result.pop[i] + "</h5>";
					post+="</div>";
				}
				postsLoaded += postsToLoad;
				document.querySelector('#Posts').innerHTML += post;
			}
		})
	};
}

