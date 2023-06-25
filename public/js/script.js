window.onload = function () {
    renderProducts();

    displayItemsToTheCart();
};

async function getProducts() {
    // const url = "https://fakestoreapi.com/products";
    const url = "http://127.0.0.1:8000/api/products";
    try {
        let res = await fetch(url);
        return await res.json();
    } catch (error) {
        console.log(error);
    }
}

async function renderProducts() {
    let products = await getProducts();
    console.log("Products:" + products);
    let html = "";
    products.forEach((product) => {
        const trimmedTitle = product.name.substring(0, 11);

        let htmlSegment = `<div class="my-card col-lg-3">
        <img src= "./../images/${product.image}" alt="">

        <div class="grey-bg-options">
            <div class="boxes flex-center">

                <a href="">
                    <div class="box blue-box flex-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                    </div>
                </a>

                <a href="">
                    <div class="box blue-box flex-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-shuffle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M0 3.5A.5.5 0 0 1 .5 3H1c2.202 0 3.827 1.24 4.874 2.418.49.552.865 1.102 1.126 1.532.26-.43.636-.98 1.126-1.532C9.173 4.24 10.798 3 13 3v1c-1.798 0-3.173 1.01-4.126 2.082A9.624 9.624 0 0 0 7.556 8a9.624 9.624 0 0 0 1.317 1.918C9.828 10.99 11.204 12 13 12v1c-2.202 0-3.827-1.24-4.874-2.418A10.595 10.595 0 0 1 7 9.05c-.26.43-.636.98-1.126 1.532C4.827 11.76 3.202 13 1 13H.5a.5.5 0 0 1 0-1H1c1.798 0 3.173-1.01 4.126-2.082A9.624 9.624 0 0 0 6.444 8a9.624 9.624 0 0 0-1.317-1.918C4.172 5.01 2.796 4 1 4H.5a.5.5 0 0 1-.5-.5z" />
                            <path
                                d="M13 5.466V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192zm0 9v-3.932a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192z" />
                        </svg>
                    </div>
                </a>

                <a href="">
                    <div class="box blue-box flex-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-clock" viewBox="0 0 16 16">
                            <path
                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg>
                    </div>
                </a>

            </div>


            <a id='add-to-cart' href="#" onclick="addToCart(this)" product-id="${product.id}" value="${product.price}">
                <div class="cart-box d-flex align-items-center justify-content-center border">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-cart m-auto" viewBox="0 0 16 16">
                        <path
                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg>
                    <p class="m-auto">ADD TO CART</p>
                </div>
            </a>

        </div>
       
        <div onclick=cardDetails(${product.id}) class="bottom-bar blue-bottom-bar">
            <div class="bottom-bar-text">
                <p>${trimmedTitle}</p>
            </div>
            <div class="price blue-price">
                <p>${product.price}$</p>
            </div>
        </div>
       
    </div>
        `;

        html += htmlSegment;
    });

    let my_card = document.querySelector(".new-collection .row");
    my_card.innerHTML = html;
}

async function cardDetails(id) {
    localStorage.setItem("id", id);
    localStorage.setItem("totalPrice", totalPrice);
    window.location = `/detail/${id}`;
}

async function getProductWithId(id) {
    // const url = `https://fakestoreapi.com/products/${id}`;
    const url = `http://127.0.0.1:8000/api/products/${id}`;
    try {
        let res = await fetch(url);
        return await res.json();
    } catch (error) {
        console.log(error);
    }
}

let totalPrice = 0;
let products = [];
async function addToCart(e) {
    const currentPrice = parseFloat(e.getAttribute("value"));
    totalPrice = Number(totalPrice);
    totalPrice += currentPrice;
    totalPrice = totalPrice.toFixed(2);
    document.querySelector(".cart-total").innerHTML = totalPrice;

    const product = await getProductWithId(e.getAttribute("product-id"));
    console.log("product is" + product);
    products.push(product);
    let html = "";
    products.forEach((product) => {
        const trimmedTitle = product.name.substring(0, 11);
        const htmlSegment = `
    <li class="item m-3 d-flex align-items-center justify-content-between">
        <div class="order d-flex align-items-center">
            <img src="./../images/${product.image}" alt="" width="50px" height="50px">
            <p>${trimmedTitle}: </p>
        </div>
        <p>${product.price}$</p>
    </li>
    <hr>
  `;
        html += htmlSegment;
    });

    document.querySelector(".dropdown-menu").innerHTML = `
      <li class="item m-3 d-flex align-items-center justify-content-between">
      <p>Number of orders:</p>
      <p>${products.length} orders</p>
    </li>
    <hr>
    <div class="orders">
      ${html}
    </div>
    <li class="item m-3 d-flex align-items-center justify-content-between">
      <p>Delivery fees: </p>
      <p>15$</p>
    </li>
    <hr>
    <li class="item m-3 d-flex align-items-center justify-content-between">
      <p>Total Price: </p>
      <p>${Number(totalPrice) + 15}$</p>
    </li>
  `;
    const newProducts = JSON.stringify(products);
    // console.log(newProducts);
    localStorage.setItem("totalPrice", totalPrice);
    localStorage.setItem("newProducts", newProducts);
}

function dropdownCart() {
    const cart = document.querySelector(".cart-icon");
    const h1 = document.createElement("h1");
    h1.textContent = "Hello World";
    cart.appendChild(h1);
}

function displayItemsToTheCart() {
    document.querySelector(".cart-total").innerHTML = totalPrice;
    // const newProducts = JSON.parse(localStorage.getItem("newProducts"));
    // console.log(newProducts);
    // if (newProducts) {
    //     let html = "";
    //     newProducts.forEach((product) => {
    //         const trimmedTitle = product.name.substring(0, 11);
    //         const htmlSegment = `
    //   <li class="item m-3 d-flex align-items-center justify-content-between">
    //       <div class="order d-flex align-items-center">
    //           <img src=${product.image} alt="" width="50px" height="50px">
    //           <p>${trimmedTitle}: </p>
    //       </div>
    //       <p>${product.price}$</p>
    //   </li>
    //   <hr>
    // `;
    //         totalPrice += product.price;

    //         html += htmlSegment;
    //     });
    // }
    document.querySelector(".dropdown-menu").innerHTML = `
        <li class="item m-3 d-flex align-items-center justify-content-between">
        <p>Number of orders:</p>
        <p>1 orders</p>
      </li>
      <hr>
      <div class="orders">
      <li class="item m-3 d-flex align-items-center justify-content-between">
      <div class="order d-flex align-items-center">
          <img src='./../images/technology-dark.jpg' alt="" width="50px" height="50px">
          <p> Tablet </p>
      </div>
      <p>500$</p>
  </li>

     
      <hr>
      <div class="orders">
      <li class="item m-3 d-flex align-items-center justify-content-between">
      <div class="order d-flex align-items-center">
          <img src='./../images/1663574852_apple_black_products-wallpaper-1920x1080.jpg' alt="" width="50px" height="50px">
          <p> Mac book </p>
      </div>
      <p>1000$</p>
  </li>
  <hr>

      </div>
      <li class="item m-3 d-flex align-items-center justify-content-between">
        <p>Delivery fees: </p>
        <p>15$</p>
      </li>
      <hr>
      <li class="item m-3 d-flex align-items-center justify-content-between">
        <p>Total Price: </p>
        <p>${(1500 + 15).toFixed(2)}$</p>
      </li>
    `;

    document.querySelector(".cart-total").innerHTML = 1500;
}
