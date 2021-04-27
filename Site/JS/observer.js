console.log("Observer is linked")
const images = document.querySelectorAll(".anim");
var played = 0;
var targetEls = 11;

observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.intersectionRatio > 0 && played <= targetEls) {
      entry.target.style.animation = `IOanim 1s ${entry.target.dataset.delay} forwards ease-out`;
      played++;
    }
  });
});

images.forEach((image) => {
  observer.observe(image);
});