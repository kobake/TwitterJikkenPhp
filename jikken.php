<?php
require(dirname(__FILE__) . '/vendor/autoload.php');
use Abraham\TwitterOAuth\TwitterOAuth;

const CONSUMER_KEY = 'xxxx';
const CONSUMER_SECRET = 'xxxx';
const ACCESS_TOKEN = 'xxxx';
const ACCESS_TOKEN_SECRET = 'xxxx';
$twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

// API
/*
https://dev.twitter.com/rest/public
*/

// update
if(false){
	$result = $twitter->post('statuses/update', array('status' => 'xxこんにちは世界xx'));
	$ret = $twitter->getLastHttpCode();
	print "ret = $ret\n";
}

// lookup
if(false){
	$id = '581574088159723520';
	$result = $twitter->get('statuses/lookup', array('id' => $id));
	var_dump($result);
}

// status
if(true){
	$id = '581574088159723520';
	$result = $twitter->get('statuses/show/' . $id);
	$ret = $twitter->getLastHttpCode();
	print "http code = $ret\n";
	// var_dump($result);
	print "----------------------------------\n";
	print "status text\n";
	print "----------------------------------\n";
	print $result->text . "\n";
	print "\n";
	print "\n";
	print "----------------------------------\n";
	print "status parameters\n";
	print "----------------------------------\n";
	print "    id: " . $result->id_str . "\n";
	print "source: " . $result->source . "\n";
	print "\n";
	print "\n";
	print "----------------------------------\n";
	print "user parameters\n";
	print "----------------------------------\n";
	print "         id: " . $result->user->id_str . "\n";
	print "       name: " . $result->user->name . "\n";
	print "screen_name: " . $result->user->screen_name . "\n";
	print "\n";
	print "\n";
}
