<?php


function L($phrase) {
	static $lang = array(
		"runsetup" => "<div>%s</div>Please run <a href='setup.php'>Setup</a>",
		"ADD" => "TOEVOEGEN",
		"Title" => "Title",
		"Pagename" => "Pagename",
		"Caption" => "Caption",
		"Instructions" => "Instructions",
		"All devices registered for push notes" => "All devices registered for push notes",
		"timestamp" => "timestamp",
		"osn" => "osn",
		"username" => "username",
		"uid" => "uid",
		"gid" => "gid",
		"group-id" => "group-id",
		"group-name" => "group-name",
		"gname" => "gname",
		"Send Push Notification" => "Send Push Notification",
		"Device" => "Device",
		"Name of os" => "Name of os",
		"Notification" => "Notification",
		"Mesage Description" => "Mesage Description",
		"Recent messages" => "Recent messages",
		"time" => "time",
		"Text" => "Text",
		"Status" => "Status",
		"List of Cats" => "List of Cats",
		"image" => "image",
		"New cat" => "New cat",
		"DELETED" => "DELETED",
		"Showing Cat #" => "Showing Cat #",
		"List of Config" => "List of Config",
		"New" => "New",
		"UPDATED" => "UPDATED",
		"Showing domain #" => "Showing domain #",
		"New Message" => "New Message",
		"Showing message #" => "Showing message #",
		"image" => "image",
		"bodytext" => "bodytext",
		"List of Pages" => "List of Pages",
		"Volgorde" => "Volgorde",
		"Cat" => "Cat",
		"New page" => "New page",
		"Showing Page #" => "Showing Page #",
		"template" => "template",
		"type" => "type",
		"extraData" => "extraData",
		"bodytext" => "bodytext",
		"CatID" => "CatID",
		"ADD" => "ADD",
		"EDIT" => "EDIT",
		"OK" => "OK",
		"preview" => "preview",
		"Browse" => "Browse",
		"EDIT" => "EDIT"
	);
	return $lang[$phrase];
}
?>
