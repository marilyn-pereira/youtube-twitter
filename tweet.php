<?PHP
require_once 'twitteroauth.php';

define("CONSUMER_KEY", "rLXWNMZ2UxvwNCjwjCH8QvgZD");
define("CONSUMER_SECRET", "J3Jps5HmESkDIXNu2dbmj8J6rGMYxsn8yWenZbeztX2xGE05FA");
define("OAUTH_TOKEN", "3032467105-dLR6aH88TKKvCCKb8oYKa6PKNOavFPebqwh33X6");
define("OAUTH_SECRET", "q2wThRXanZDTWY2rKYahFNgdJ32q1mI3hisHMM59k0jNa");


$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, OAUTH_TOKEN, OAUTH_SECRET);
$content = $connection->get('account/verify_credentials');


$title=$_GET['title'];
$tag="@rd_rishikesh";
$connection->post('statuses/update', array("status" => "$tag is watching $title"));
echo $connection->http_code;


?>