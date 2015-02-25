<!doctype html>
<html>
	<head>
		<title>Search</title>
		<link rel='stylesheet' href='master.css' type='text/css' />
	</head>
	<body>
	<div id="container">
		<center><div id="buttons">
			<label>
				<input id="query" type="text"/>
				<button id="search-button"  onclick="keyWordsearch()">
					Search Youtube Videos
				</button></label>
		</div></center>
		<div id="search-container"></div>
		
		<center>
		<div id="player-div">
			<div id="yt-player">
			</div>
		</div></center>
</div>
		<script src="./apikey.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="https://apis.google.com/js/client.js?onload=googleApiClientReady"></script>
		<script src="https://www.youtube.com/iframe_api"></script>

	</body>
</html>