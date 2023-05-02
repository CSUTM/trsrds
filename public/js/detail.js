async function getProductWithId(id) {
  // const url = `http://127.0.0.1:8000/api/products/${id}`;
  const url = `http://127.0.0.1:8000/api/products/${id}`;

  try {
    let res = await fetch(url);
    return await res.json();
  } catch (error) {
    console.log(error);
  }
}

let totalPrice = 0;

window.onload = async function () {
  const id = localStorage.getItem("id");

  const product = await getProductWithId(id);

  document.querySelector(".product-details").innerHTML = `
    <div class="card col-12 bg-white" style="width: 18rem;">
    <img src="./../images/${product.image}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">${product.name}</h5>
        <p class="card-text">${product.description}</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Category: ${product.category}</li>
        <li class="list-group-item">Rating: ${product.rating}</li>
        <li class="list-group-item">Count: ${product.count}</li>
    </ul>
    <div class="card-body">
        <a href="/" class="card-link">Go back to home</a>
    </div>
</div>
</div>
    `;

  // Wet code
  displayItemsToTheCart();
}

  

function displayItemsToTheCart(){
  document.querySelector(".cart-total").innerHTML = totalPrice;
  const newProducts = JSON.parse(localStorage.getItem("newProducts"));
  console.log(newProducts);
  if (newProducts) {
    let html = "";
    newProducts.forEach((product) => {
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
      totalPrice += product.price;

      html += htmlSegment;
    });

    document.querySelector(".dropdown-menu").innerHTML = `
        <li class="item m-3 d-flex align-items-center justify-content-between">
        <p>Number of orders:</p>
        <p>${newProducts.length} orders</p>
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
        <p>${(Number(totalPrice) + 15).toFixed(2)}$</p>
      </li>
    `;
  }

  document.querySelector(".cart-total").innerHTML = totalPrice;
}









// function Details(Id){
//     this.Id = Id
//     this.getProductWithId = async function()
//     {

//         const url = `https://fakestoreapi.com/products/${this.Id}`;
//         try{
//             let res = await fetch(url);
//             return await res.json();
//         }catch(error){
//             console.log(error);
//         }
//     }

//     this.GetDetails =  async function(){
//         const id = localStorage.getItem('id');

//         const product = await Details.getProductWithId(id);

//         document.querySelector('.row').innerHTML = `
//             <div class="card col-12" style="width: 18rem;">
//             <img src=${product.image} class="card-img-top" alt="...">
//             <div class="card-body">
//                 <h5 class="card-title">${product.name}</h5>
//                 <p class="card-text">${product.description}</p>
//             </div>
//             <ul class="list-group list-group-flush">
//                 <li class="list-group-item">Category: ${product.category}</li>
//                 <li class="list-group-item">Rating: ${product.rating.rate}</li>
//                 <li class="list-group-item">Count: ${product.rating.count}</li>
//             </ul>
//             <div class="card-body">
//                 <a href="index.html" class="card-link">Go back to home</a>
//             </div>
//         </div>
//         </div> `;
//     }

// }

// var Details = new Details(localStorage.getItem('id'))

// window.onload = Details.GetDetails()
