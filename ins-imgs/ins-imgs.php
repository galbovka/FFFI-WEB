<?php
# To prevent browser error output
header('Content-Type: text/javascript; charset=UTF-8');

# Path to image folder
$imageFolder = 'img/mini/';	

# Show only these file types from the image folder
$imageTypes = '{*.jpg,*.JPG,*.jpeg,*.JPEG,*.png,*.PNG,*.gif,*.GIF}';

# Set to true if you prefer sorting images by name
# If set to false, images will be sorted by date
$sortByImageName = true;

# Set to false if you want the oldest images to appear first
# This is only used if images are sorted by date (see above)
$newestImagesFirst = true;

# The rest of the code is technical

# Add images to array
$images = glob($imageFolder . $imageTypes, GLOB_BRACE);

# Sort images
if ($sortByImageName) {
    $sortedImages = $images;
    natsort($sortedImages);
} else {
    # Sort the images based on its 'last modified' time stamp
    $sortedImages = array();
    $count = count($images);
    for ($i = 0; $i < $count; $i++) {
        $sortedImages[date('YmdHis', filemtime($images[$i])) . $i] = $images[$i];
    }
    # Sort images in array
    if ($newestImagesFirst) {
        krsort($sortedImages);
    } else {
        ksort($sortedImages);
    }
}

# Generate the HTML output
echo '<ul class="galerie">';
foreach ($sortedImages as $image) {

    # Get the name of the image, stripped from image folder path and file type extension
    $name = substr($image, strlen($imageFolder), strpos($image, '.') - strlen($imageFolder));

    # Get the 'last modified' time stamp, make it human readable
    $lastModified = '(last modified: ' . date('F d Y H:i:s', filemtime($image)) . ')';

    # Begin adding
    echo '<li>';
    echo '<div class="img"><a name="' . $name . '" href="' . str_replace('mini/', '',$image) . '" class="lightbox[teaser]"' . '>';
    echo '<img src="' . $image . '" alt="' . $name . '" title="' . $name . '">';
    echo '</a></div>';
    echo "</li>\r\n";
}
echo '</ul>';