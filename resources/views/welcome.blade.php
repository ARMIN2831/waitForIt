<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Scroll Slider</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* CSS for slider */
        .slider {
            overflow: hidden;
        }
        .slide {
            transition: transform 0.5s ease;
        }
    </style>
</head>
<body class="bg-gray-100 p-4">
<div x-data="{
    currentIndex: 0,
    slides: [
      'https://via.placeholder.com/800x400?text=Slide%201',
      'https://via.placeholder.com/800x400?text=Slide%202',
      'https://via.placeholder.com/800x400?text=Slide%203'
    ],
    nextSlide() {
      this.currentIndex = (this.currentIndex + 1) % this.slides.length;
    },
    startAutoScroll() {
      this.autoScrollInterval = setInterval(() => {
        this.nextSlide();
      }, 3000); // Change slide every 3 seconds
    },
  }" x-init="startAutoScroll">
    <!-- Slider container -->
    <div class="relative slider bg-gray-200 rounded-md overflow-hidden">
        <!-- Slide images -->
        <template x-for="(slide, index) in slides" :key="index">
            <img class="absolute h-full w-full object-cover slide" :src="slide" :style="{ transform: 'translateX(' + ((index - currentIndex) * 100) + '%)' }">
        </template>
    </div>
</div>
<!-- Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</body>
</html>
