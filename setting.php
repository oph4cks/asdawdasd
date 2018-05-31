<?php

class Setting {
	public function getChannelAccessToken(){
		$channelAccessToken = "7QN4PfYf7mytNmcgMBMxu7sGZ+fXZt3/NZjJM+rgDhTskOHPvye4DmFF5MlZ+sxKLW9vDANxpHqeHVhkezg+3B0HyR8i/E1QEfwv/eDfWGonwtdBT5KpOi4zy+Fxwuh0Io8MyRVi07IongPm1nQLoAdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public function getChannelSecret(){
		$channelSecret = "cd8f4572f3622290cda10474f89b8a52";
		return $channelSecret;
	}
	public function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}
