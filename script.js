// Animasi sederhana untuk hobby-item
const hobbyItems = document.querySelectorAll(".hobby-item");

hobbyItems.forEach((item) => {
  item.addEventListener("mouseover", () => {
    item.style.backgroundColor = "rgba(255, 255, 255, 0.2)";
  });

  item.addEventListener("mouseout", () => {
    item.style.backgroundColor = "rgba(255, 255, 255, 0.1)";
  });
});
