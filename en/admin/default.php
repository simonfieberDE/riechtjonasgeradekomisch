<?php
function write_default()
{
    $data = '{"core":{"status":true,"question":"Does Jonas smell very weird?","firstname":"Jonas","twitter":{"owner":"manchmalfieber","nick":"aledjonesworld"},"true":{"text":"YES!","long":"you smell very weird!"},"false":{"text":"Nope.","long":"what\'s going on? You don\'t smell weird anymore!"},"url":"http:\/\/riechtjonasgeradekomisch.com","version":"1.5.1"},"admin":{"question_label":"Question:","btn_label":"Save","btn_back_label":"Back","title":"admin@riechtjonasgeradekomisch.com","firstname_label":"First name:","twitter_label":"Twitter-Username (without @):","twitter_owner_label":"Your Twitter-Username (without @):","true_text_label":"Short answer, if true:","true_long_label":"Content of tweet, if true:","false_text_label":"Short answer, if false:","false_long_label":"Content of tweet, if false:","url_label":"Domain of tweet origin (eg. http:\/\/riechtjonasgeradekomisch.com)","save_label":"Data has been saved!","status_label":"Status:","button_label":"Edit","template_label":"Template file (without suffix)","template":"default"}}';
    file_put_contents('../lib/data/content.json', $data);
    return true;
}