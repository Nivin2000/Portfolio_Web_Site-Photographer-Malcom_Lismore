document.addEventListener("DOMContentLoaded", function () {
    const galleryContainer = document.getElementById("gallery");

    // Replace these image URLs with your actual image URLs
    const imageUrls = [
        "MP3NW1_gallery.jpg",
        "Mp4NW2_gallery.jpg",
        "MP6NW4_gallery.jpg",
        // Add more image URLs as needed
    ];

    // Loop through image URLs and create HTML elements for each image
    imageUrls.forEach((imageUrl) => {
        const galleryItem = document.createElement("div");
        galleryItem.classList.add("gallery-item");

        const imageElement = document.createElement("img");
        imageElement.src = imageUrl;
        imageElement.alt = "Gallery Image";
        
        // Append the image element to the gallery item
        galleryItem.appendChild(imageElement);

        // Append the gallery item to the gallery container
        galleryContainer.appendChild(galleryItem);
    });
});
