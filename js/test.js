function addProductToCart(content, item) {
    content.querySelector('.product-name').textContent = item.querySelector(".product-name").textContent;
      content.querySelector('.product-price').textContent = item.querySelector(".product-price").textContent;
      content.querySelector('.product-img img').setAttribute('src',item.querySelector(".product-img").getAttribute('src'));
      return content;
      
  }
   
  
  function openCart() {
  sidebar.style.transform = 'translate(0)';
   }
        
  function closeCart() {
      sidebar.style.transform = '';
   }
  closeBtn.onclick=closeCart;
  toggleBtn.onclick=openCart;
  
  
  // ==============================
  // toggleBtn.addEventListener("click", function () {
  //   // if (sidebar.classList.contains("show-sidebar")) {
  //   //   sidebar.classList.remove("show-sidebar");
  //   // } else {
  //   //   sidebar.classList.add("show-sidebar");
  //   // }
  // });
  
  // closeBtn.addEventListener("click", function () {
  //   sidebar.classList.remove("show-sidebar");
  // });
  
  // ==============================
  // toggleBtn.addEventListener("click", function () {
  //   sidebar.classList.toggle("show-sidebar");
  // });
  
  // closeBtn.addEventListener("click", function () {
  //   sidebar.classList.remove("show-sidebar");
  // });
  // ==============================
  // (function(){
  //     toggleBtn.addEventListener("click", function () {
  //         sidebar.classList.toggle("show-sidebar");
  //     });
  
  //     closeBtn.addEventListener("click", function () {
  //         sidebar.classList.remove("show-sidebar");
  //     });
  // })();
  (function(){
      toggleBtn.addEventListener("click", function () {
          sidebar.classList.toggle("show-sidebar");
      });
  
      closeBtn.addEventListener("click", function () {
          sidebar.classList.remove("show-sidebar");
      });
  
      // ********** close links ************
    const navToggle = document.querySelector(".nav-toggle");
      const linksContainer = document.querySelector(".links-container");
      const links = document.querySelector(".links");
  
      navToggle.addEventListener("click", function () {
          const linksHeight = links.getBoundingClientRect().height;
          const containerHeight = linksContainer.getBoundingClientRect().height;
          if (containerHeight === 0) {
              linksContainer.style.height = `${linksHeight}px`;
          } else {
              linksContainer.style.height = 0;
          }
      });
      let content = document.getElementById("cartItem").content;  
      const addToCarts = document.getElementsByClassName("add-to-cart");
  
      // for (let i=0; i<addToCarts.length; i++) {
      //     addToCarts[i].addEventListener('click', function(){
      //         document.querySelector('.cart-items').append(document.importNode(content, true));
      //     })
      // }
      const template = document.getElementById("cartItem").content;  
      for (let i=0; i<addToCarts.length; i++) {
          addToCarts[i].addEventListener('click', function(e){
              let item = e.target.closest('.product');
              let content = addProductToCart(template, item);
              document.querySelector('.cart-items').append(document.importNode(content, true));
          })
      }
  })();
  
  let addToCart = document.getElementsByClassName('add-to-cart');
  
  
  for(let i=0; i<addToCart.length; i++){
      addToCart[i].addEventListener('click',function(event){
  
  event.target.closest('.position-relative').firstElementChild.lastElementChild.style.transform = 'rotateY(180deg)';
  //event.target.style.display = 'none';
  console.log(event.target.closest('.newproduct').lastElementChild.textContent);
   console.log(event.target.closest('.newproduct').lastElementChild.previousElementSibling.lastElementChild.textContent);
        })
      
  }
  let colprod = document.createElement('div');
  colprod.className = "col-md-3 col-xl-3 col-lg-4 col-sm-6";
  
  let newproduct = document.createElement('div');
  newproduct.className ="newproduct text-center";
  
  let positionRelative = document.createElement('div');
  positionRelative.className ="position-relative mb-3";
  
  let h3 = document.createElement('h3');
  let resetAnchor = document.createElement('a');
  resetAnchor.className = "reset-anchor";
  resetAnchor.innerText = "bicycle1";
  resetAnchor.href = "detail.html";
  
  
  h3.appendChild(resetAnchor);
  newproduct.appendChild(h3 );
  colprod.appendChild(newproduct);
  document.querySelector('.rowprod').appendChild(colprod);
  
  
  //positionRelative
  let dBlock = document.createElement('a');
  dBlock.href = "index.html";
  dBlock.innerHTML = '<img class="product-img" src="images/bike_4.jpg" width="200" alt="...">';
  positionRelative.appendChild(dBlock);
  
  newproduct.insertBefore(positionRelative, newproduct.firstChild);
  
  let productOverlay = document.createElement('div');
  let ul =document.createElement('ul'); 
  ul.className = "mb-0 list-inline";
  
  let li = document.createElement ('li');
  li.className = "list-inline-item m-0 p-0";
  let btn = document.createElement('a');
  btn.className = "btn";
  btn.innerHTML = '<i class="far fa-thumbs-up"></i>Like';
  btn.href = "#";
  
  li.appendChild(btn);
  ul.appendChild(li);
  productOverlay.appendChild(ul);
  positionRelative.appendChild(productOverlay);
  
  let li3 = document.createElement ('li');
  li3.className = "list-inline-item m-0 p-0";
  let btn3 = document.createElement('a');
  btn3.className = "btn";
  btn3.innerHTML = '<i class="fas fa-info-circle"></i>';
  btn3.href = "#";
  
  li3.appendChild(btn3);
  ul.appendChild(li3);
  
  let li2 = document.createElement ('li');
  li2.className = "list-inline-item m-0 p-0";
  let btn2 = document.createElement('a');
  btn2.className = "btn";
  btn2.innerHTML = '<i class="fas fa-cart-arrow-down">';
  btn2.href = "#";
  li2.appendChild(btn2);
  
  ul.insertBefore(li2,ul.firstChild.nextSibling);
  
  //let template =document.getElementById('template-item').innerHTML;
  
  //const section =document.createElement('section');
  //section.innerHTML =template;
  
  //document.querySelector('container').appendChild(section);
  /*const cartItem = document.getElementById('cartItem').content;
  
  document.querySelector('.sidebar').appendChild(cartItem);
  
  document.querySelector('#addToCart').addEventListener('click', function(){
  document.querySelector('.sidebar').appendChild(document.importNode(cartItem, true));})
  
  
  //let content = document.getElementById('cartItem').content;
  
  const product = {
      
      id:1,
      image:'images/bike_1.jpg',
      name:'Bike 1',
      price: 100,
  };
  products.forEach(function(item){
      //console.log(item);
      for (let key in item){
          console.log(key+': ' +item[key]);
      }});
      
      let listItems =
      `<li class="list-inline-item m-0 p-0" ><a class="btn " href="#"><i class="far fa-thumbs-up"></i></a></li>
      <li class="list-inline-item m-0 p-0" ><a class="btn add-to-cart" ><i class="fas fa-cart-arrow-down"></i></a></li>
      <li class="list-inline-item m-0 p-0"><a class="btn " href="#"><i class="fas fa-info-circle"></i></a></li>
      `;
  console.log(listItems);
  
  //14092020
  class Storage{
      static saveProducts(products){
          localStorage.setItem("products", JSON.stringify(products));
      }
      static getProduct(id){
          let products = JSON.parse(localStorage.getItem('products'));
      return products.find(product=>product.id === +(id));}
      static saveCart(cart){
          localStorage.setItem("basket", JSON.stringify(cart));
      }
      static getCart(){
          return localStorage.getItem("basket") ? JSON.parse(localStorage.getItem("basket")) : [];
      }
  }
  class Product {
      getProducts(){
          return products.map(item => {
             const name =item.name;
             const price = item.price;
             const id = item.id;
              const image = item.image;
              return {id,name, price, image}
  
          })
      }
  }
  
  class App {
      cart = [];
      countItems = document.querySelector('.count-items');
      cartTotal = document.querySelector(".cart-total");
      
      // constructor
      constructor() { 
          const toggleBtn = document.querySelector(".cart-toggle");
          const closeBtn = document.querySelector(".close-btn");
  
          closeBtn.addEventListener("click", () => sidebar.classList.remove("show-sidebar"));
          toggleBtn.addEventListener("click", () => sidebar.classList.toggle("show-sidebar"));
          this.navbarToggle();
          this.makeShowcase(products);
          document.querySelector('footer div.row').lastElementChild.innerHTML=this.makeLiGroup(socialGroup, 'list-unstyled footer-socials social-icon', '<h6 class="text-uppercase">Social media</h6>');  
      
      let data =new Product();
  Storage.saveProducts(data.getProducts());
  
  this.cart= Storage.getCart();}}
  
  openCart(){
      sidebar.classList.toggle("show-sidebar");
      this.cartItems.innerHTML = '';
      this.cart =Storage.getCart();
      this.populateCart(this.cart);
      this.set TotalCart(this.cart);
  }
  
  populateCart(cart){
      cart.forEach(item=>this.addCartItem(item));
  }
  addToCarts() {
      const addToCartButtons = [...document.querySelectorAll(".add-to-cart")];
      addToCartButtons.forEach(button => {
          button.addEventListener("click", event => {
            let cartItem = { ...this.getProduct(event.target.closest('.product').getAttribute('data-id')), amount: 1 };
            this.cart = [...this.cart, cartItem];
            this.addCartItem(cartItem);
  
            this.setCartTotal(this.cart);
          });
      });
  }