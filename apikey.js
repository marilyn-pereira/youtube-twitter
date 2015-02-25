function keyWordsearch(){
            gapi.client.setApiKey('AIzaSyDcl_qryp7O2CqBR5cGoVwKBGXOzP-nQb0');
            gapi.client.load('youtube', 'v3', function() {
                    makeRequest();
					
            });
    }
    function makeRequest() {
            var q = $('#query').val();
            var request = gapi.client.youtube.search.list({
                       q: q,
                    part: 'id,snippet',
					maxResults: 5

            });
            request.execute(function(response) {
                    var str = JSON.stringify(response.result);
                   var obj = JSON.parse(str);

                var titles="";	
                $('#search-container').html("");
                for(var i=0;i<5;i++)
                {
                    var vid = obj.items[i].id.videoId;
                    var title = obj.items[i].snippet.title;
                    var frameid='Identity'+i;
                    var v = obj.items[i];

                    $('#search-container').append('<p class="results-item" data-id="'+ vid +'"><img class="thumbnail" src="'+v.snippet.thumbnails.medium.url+'"/><a href="#sec_player">'+title+'</a></p>');
                    //titles=title;
                }
                //doSomething(titles);
            });		
	}
	
	

var player = false; 
function onYouTubeIframeAPIReady() {

        $("#search-container").on("click", "p", function(){
            $("#player-div").html("");
            $("#player-div").html('<div id="yt-player"></div>');
            var vid = $(this).attr("data-id");
            player = new YT.Player('yt-player', {
              height: '390',
              width: '640',
              videoId: vid,
              playerVars: {autoplay: 1},
                events:{}
            
                        
            });
            var title = $(this).find("a").html();
            tweet(title);
        });



}


	
	

function onPlayerReady1(event) {
  alert("onPlayerReady2");
}
	
function tweet(t) {
    $.get("tweet.php?title="+t);
    return false;
}