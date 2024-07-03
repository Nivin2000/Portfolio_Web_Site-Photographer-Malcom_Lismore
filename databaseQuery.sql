create database photography
use photography
CREATE TABLE images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    path VARCHAR(255) NOT NULL,
    caption VARCHAR(255) NOT NULL
);
INSERT INTO images (path, caption) VALUES
('images/MP8NW6_gallery.jpg', 'Coastal Birds');

INSERT INTO images (path, caption) VALUES
('images/MP3NW1_gallery.jpg', 'Coastal Birds');

INSERT INTO images (path, caption) VALUES
('images/MP6NW4_gallery.jpg', 'Scottish Landscapes'),
('images/gallery4.jpg', 'Beautiful Work'),
('images/Mp4NW2_gallery.jpg', 'Wildlife'),
('images/gallery6.jpg', 'Beautiful Work'),
('images/MP20P6_gallery.jpg', 'Potraits'),
('images/images/MP12WP4_gallery.jpg', 'Wedding Photography'),
('images/MP16P2_gallery.jpg', 'Potraits');

use photography
UPDATE images
SET path = 'images/MP12WP4_gallery.jpg'
WHERE path = 'images/images/MP12WP4_gallery.jpg';






