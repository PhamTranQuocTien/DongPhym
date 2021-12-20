<div class="slider">
            <!-- Full-width images with number text -->
    <div class="mySlides">
        <img class="banner-img" src="https://media.voocdn.com/media/image/id/5ffc1bdaacc3991eac8b4576" style="width:100%;">
    </div>
    
    <div class="mySlides">
        <img class="banner-img" src="https://media.voocdn.com/media/image/id/5ffecf80acc399f9748b4567" style="width:100%">
    </div>
    
    <div class="mySlides">
        <img class="banner-img" src="https://media.voocdn.com/media/image/id/5fe1d553acc399f27d8b457f" style="width:100%">
    </div>
    
    <div class="mySlides">
        <img class="banner-img" src="https://media.voocdn.com/media/image/id/5fcf56eeacc399ff878b458d" style="width:100%">
    </div>
    
    <div class="mySlides">
        <img class="banner-img" src="https://media.voocdn.com/media/image/id/5ffffd22acc399f08c8b4570" style="width:100%">
    </div>
    
    <div class="mySlides">
        <img class="banner-img" src="https://media.voocdn.com/media/image/id/5fe95449acc399ab9d8b4577" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="row">
        <div class="column">
            <img class="demo cursor" src="https://media.voocdn.com/media/image/id/5ffc1bdaacc3991eac8b4576" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
        </div>
        <div class="column">
            <img class="demo cursor" src="https://media.voocdn.com/media/image/id/5ffecf80acc399f9748b4567" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
        </div>
        <div class="column">
            <img class="demo cursor" src="https://media.voocdn.com/media/image/id/5fe1d553acc399f27d8b457f" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
        </div>
        <div class="column">
            <img class="demo cursor" src="https://media.voocdn.com/media/image/id/5fcf56eeacc399ff878b458d" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
        </div>
        <div class="column">
            <img class="demo cursor" src="https://media.voocdn.com/media/image/id/5ffffd22acc399f08c8b4570" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
        </div>
        <div class="column">
            <img class="demo cursor" src="https://media.voocdn.com/media/image/id/5fe95449acc399ab9d8b4577" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
        </div>
    </div>
</div>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>



<!-- AUTOPLAY -->
<script>
    // Automatic Slideshow - change image every 3 seconds
    var myIndex = 0;
    carousel();
    
    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 3000);
    }
</script>