<?php

function extractElementsFromWebPage($webPage, $tagName)
{
    //Creating a DOMDocument Object.
    $buffer = ob_get_clean();
    $tidy = new tidy();
    $myHTML = $tidy->repairString('<?xml version="1.0" encoding="UTF-8"?>' . $html);

    $dom->loadHTML($myHTML);

    //Parsing the HTML from the web page
    if ($dom->loadHTML($webPage)) {
        // Extracting the specified elements from the web page
        @$elements = $dom->getElementsByTagName($tagName);
        return $elements;
    }
    return FALSE;
}

function downloadURL($URL)
{
    $webPage = file_get_contents($URL);
    return $webPage;
}

$webPage = downloadURL("https://images.pexels.com/photos/7609113/pexels-photo-7609113.jpeg");
if ($webPage) {
    $imageURLURLs = extractElementsFromWebPage($webPage, 'img');
    if ($imageURLURLs) {

        return $imageURLURLs->getAttribute('alt');
    } else {
        echo "Error in parsing the webPagen";
    }
} else {
    echo "Error in downloading the webPagen";
}

var_dump($alt);
