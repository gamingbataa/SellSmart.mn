// app.js
// Гол элементүүдийг сонгох
const productCards = document.querySelectorAll('.product-card');

productCards.forEach(card => {
  card.addEventListener('click', () => {
    // Жишээ: бүтээгдэхүүний дэлгэрэнгүй рүү шилжих (data-id ашиглана гэж үзье)
    const productId = card.getAttribute('data-id');
    if (productId) {
      window.location.href = `product-detail.html?id=${productId}`;
    }
  });
});

// Нэмэлт: header navigation-д идэвхтэй хуудас өнгө өөрчлөх жишээ
const currentPath = window.location.pathname.split("/").pop();
const navLinks = document.querySelectorAll('header nav a');

navLinks.forEach(link => {
  if (link.getAttribute('href') === currentPath) {
    link.classList.add('active');
    link.style.color = '#ffdd57';
  }
});

// product-list.html-д app.js-ээр холбох
fetch('backend/getProducts.php')
  .then(response => response.json())
  .then(products => {
    // DOM руу HTML үүсгэж оруулах
  });
