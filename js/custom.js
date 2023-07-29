

// owl carousel 

$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 6
        }
    }
})

function decreaseQuantity(event) {
    event.preventDefault(); // Prevent the default button behavior

    let quantityControl = event.target.closest(".quantity-control");
    let quantityElement = quantityControl.querySelector(".quantity-value");
    let currentQuantity = parseInt(quantityElement.textContent);

    if (currentQuantity > 1) {
      quantityElement.textContent = currentQuantity - 1;
    }

    // Add the active class temporarily and remove it after a delay
    event.target.classList.add("quantity-btn-active");
    setTimeout(() => {
      event.target.classList.remove("quantity-btn-active");
    }, 300); // Adjust the delay (in milliseconds) to control the duration of the active state
  }

  function increaseQuantity(event) {
    event.preventDefault(); // Prevent the default button behavior

    let quantityControl = event.target.closest(".quantity-control");
    let quantityElement = quantityControl.querySelector(".quantity-value");
    let currentQuantity = parseInt(quantityElement.textContent);

    quantityElement.textContent = currentQuantity + 1;

    // Add the active class temporarily and remove it after a delay
    event.target.classList.add("quantity-btn-active");
    setTimeout(() => {
      event.target.classList.remove("quantity-btn-active");
    }, 300); // Adjust the delay (in milliseconds) to control the duration of the active state
}

// Pagination
// Get all pagination links
const paginationLinks = document.querySelectorAll('.page-link');

console.log(paginationLinks)

// Add click event listener to each pagination link
paginationLinks.forEach(link => {
  link.addEventListener('click', function(event) {
    // Prevent the default link behavior
    event.preventDefault();

    // Get the data-page value of the clicked link
    const clickedPage = this.dataset.page;

    // Remove "active" class from all pagination links
    paginationLinks.forEach(link => link.classList.remove('active'));

    // Add "active" class to the clicked pagination link
    this.classList.add('active');

    // Your custom logic to update content based on the clicked page number
    // Here you can use "clickedPage" to load content for the clicked page
    console.log('Clicked page:', clickedPage);
  });
});



// SİDEBAR

const triggerTabList = document.querySelectorAll('#list-tab a')
triggerTabList.forEach(triggerEl => {
  const tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', event => {
    event.preventDefault()
    tabTrigger.show()
  })
})





