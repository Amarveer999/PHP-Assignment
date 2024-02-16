<?php

function limitTitleLength($title) {
    $maxTitleLength = 50;
    
    if (strlen($title) > $maxTitleLength) {
        $truncatedTitle = substr($title, 0, $maxTitleLength);
        return $truncatedTitle;
    }

    return $title;
}

// Example usage:
$articleTitle = "This is a sample article title that exceeds the character limit";
$truncatedTitle = limitTitleLength($articleTitle);

echo "Original Title: $articleTitle\n";
echo "Truncated Title: $truncatedTitle";

?>