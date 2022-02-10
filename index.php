<?php

require_once 'Text.php';

$text = new Text('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia quam sed lacinia blandit. In et viverra elit. Nullam molestie quam eget porta venenatis. Aenean blandit auctor turpis, eu rhoncus libero pulvinar id. Aenean euismod enim ac sagittis accumsan. Fusce venenatis purus orci, in euismod erat porttitor in. Morbi semper dignissim felis a tincidunt.');
print_r($text->getSentences());
echo 'Le texte possède '.$text->getSentencesCount().' phrases et '.$text->getTextLength().' caractères.';