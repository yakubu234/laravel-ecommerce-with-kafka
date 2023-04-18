var cartOpen = false;
var numberOfProducts = 0;

$('body').on('click', '.js-toggle-cart', toggleCart);
$('body').on('click', '.js-add-product', addProduct);
$('body').on('click', '.js-remove-product', removeProduct);

function toggleCart(e) {
  e.preventDefault();
  if (cartOpen) {
    closeCart();
    return;
  }
  openCart();
}

function openCart() {
  cartOpen = true;
  $('body').addClass('open');
}

function closeCart() {
  cartOpen = false;
  $('body').removeClass('open');
}

function addProduct(e) {
  e.preventDefault();
  openCart();
  $('.js-cart-empty').addClass('hide');
  var product = $('.js-cart-product-template').html();
  $('.js-cart-products').prepend(product);
  numberOfProducts++;
}

function removeProduct(e) {
  e.preventDefault();
  numberOfProducts--;
  $(this).closest('.js-cart-product').hide(250);
  if (numberOfProducts == 0) {
    $('.js-cart-empty').removeClass('hide');
  }
}

// {
//   id: 1,
//   imgSrc:
//     "https://images.unsplash.com/photo-1482062364825-616fd23b8fc1?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=cc37ced2e51f9f58430dfed1192067cd",
//   name: "Learn Vue",
//   description:
//     "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, nobis minus! Dicta perferendis rem pariatur sapiente nobis.",
//   price: 50,
//   inStock: 3
// }