<?php
        // Bildpfaden
        $images = [
            "bilder/konferenz.jpg",
            "bilder/kultur.jpg",
            "bilder/menschen.jpg",
            "bilder/natur.jpg"
        ];

        // Bilder einfügen
        foreach ($images as $image) {
            echo "<img src='$image' alt='Foto'>";
        }
?>