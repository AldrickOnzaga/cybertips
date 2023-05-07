// Get the "Read-more" button element
const readMoreBtn = document.getElementById("read-more");

// Add a click event listener to the "Read-more" button
readMoreBtn.addEventListener("click", function() {
  // Create a new "div" element to hold the pop-up image
  const popupDiv = document.createElement("div");
  popupDiv.classList.add("popup");

  // Create a new "img" element and set its "src" attribute
  const popupImg = document.createElement("img");
  popupImg.src = "resources/juice_jacking/1.png";

  // Append the "img" element to the "div" element
  popupDiv.appendChild(popupImg);

  // Add a click event listener to the "div" element that closes the pop-up image
  popupDiv.addEventListener("click", function() {
    popupDiv.remove();
  });

  // Append the "div" element to the document body
  document.body.appendChild(popupDiv);
});
