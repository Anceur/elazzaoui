document.addEventListener('DOMContentLoaded', function () {
    const track = document.querySelector('.slider-track');
    const slides = document.querySelectorAll('.slide');
    const dotsContainer = document.querySelector('.slider-dots');
    const prevButton = document.querySelector('.prev-button');
    const nextButton = document.querySelector('.next-button');

    // Clone slides for infinite loop
    const slidesToClone = Array.from(slides);
    slidesToClone.forEach(slide => {
      const clone = slide.cloneNode(true);
      track.appendChild(clone);
    });

    let currentPosition = 0;
    const slideCount = slides.length;
    let isTransitioning = false;

    // Create dots
    for (let i = 0; i < slideCount; i++) {
      const dot = document.createElement('div');
      dot.classList.add('dot');
      if (i === 0) dot.classList.add('active');
      dot.addEventListener('click', () => goToSlide(i));
      dotsContainer.appendChild(dot);
    }

    function getSlideWidth() {
      return slides[0].offsetWidth + 20; // 20px for gap
    }

    function updateSlidePosition(withTransition = true) {
      if (!withTransition) {
        track.style.transition = 'none';
      } else {
        track.style.transition = 'transform 0.5s ease-in-out';
      }

      const translateValue = currentPosition * getSlideWidth();
      track.style.transform = `translateX(${translateValue}px)`;

      // Update dots
      const normalizedPosition = Math.abs(currentPosition % slideCount);
      document.querySelectorAll('.dot').forEach((dot, index) => {
        dot.classList.toggle('active', index === normalizedPosition);
      });
    }

    function goToSlide(index) {
      if (isTransitioning) return;
      isTransitioning = true;
      currentPosition = -index;
      updateSlidePosition();

      setTimeout(() => {
        isTransitioning = false;
      }, 500);
    }

    function nextSlide() {
      if (isTransitioning) return;
      isTransitioning = true;

      currentPosition--;
      updateSlidePosition();

      if (currentPosition <= -slideCount) {
        setTimeout(() => {
          currentPosition = 0;
          updateSlidePosition(false);
          isTransitioning = false;
        }, 500);
      } else {
        setTimeout(() => {
          isTransitioning = false;
        }, 500);
      }
    }

    function prevSlide() {
      if (isTransitioning) return;
      isTransitioning = true;

      currentPosition++;
      updateSlidePosition();

      if (currentPosition > 0) {
        setTimeout(() => {
          currentPosition = -(slideCount - 1);
          updateSlidePosition(false);
          isTransitioning = false;
        }, 500);
      } else {
        setTimeout(() => {
          isTransitioning = false;
        }, 500);
      }
    }

    // Event Listeners
    prevButton.addEventListener('click', prevSlide);
    nextButton.addEventListener('click', nextSlide);

    // Auto play
    let autoPlayInterval = setInterval(nextSlide, 5000);

    track.addEventListener('mouseenter', () => {
      clearInterval(autoPlayInterval);
    });

    track.addEventListener('mouseleave', () => {
      autoPlayInterval = setInterval(nextSlide, 5000);
    });

    // Touch Events
    let touchStartX = 0;
    let touchEndX = 0;

    track.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
      clearInterval(autoPlayInterval);
    }, { passive: true });

    track.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
      autoPlayInterval = setInterval(nextSlide, 5000);
    }, { passive: true });

    function handleSwipe() {
      const difference = touchStartX - touchEndX;
      if (Math.abs(difference) > 50) {
        if (difference > 0) {
          nextSlide();
        } else {
          prevSlide();
        }
      }
    }

    // Handle window resize
    let resizeTimeout;
    window.addEventListener('resize', () => {
      clearTimeout(resizeTimeout);
      resizeTimeout = setTimeout(() => {
        updateSlidePosition(false);
      }, 250);
    });

    // Initialize
    updateSlidePosition();
  });


  document.getElementById('phone-icon').addEventListener('click', function () {
    var dropdown = document.getElementById('phone-dropdown');
    dropdown.style.display = (dropdown.style.display === 'none' || dropdown.style.display === '') ? 'block' : 'none';
  });


