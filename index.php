<?

$url = json_decode(file_get_contents("https://api.instagram.com/v1/users/self/media/recent/?access_token=378866779.4071259.a4daf076ab4a4ead87cbfe3730168ea4&count=8&max_id=1932265292201733845_378866779"),true);

echo "<pre>";
print_r($url);

