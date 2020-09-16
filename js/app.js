
const toggleBtn = document.querySelector(".cart-toggle");
const closeBtn = document.querySelector(".close-btn");
const sidebar =document.querySelector(".sidebar");


function addProductToCart(content,item)
{
    content.querySelector('.product-name').textContent =item.querySelector(".product-name").textContent;
    content.querySelector('.product-price').textContent = item.querySelector(".product-price").textContent;
    content.querySelector('.product-img img').setAttribute('src', item.querySelector(".product-img").getAttribute('src'));
    return content;
}

(function(){
    toggleBtn.addEventListener("click", function () {
  sidebar.classList.toggle("show-sidebar");
     });
    
     closeBtn.addEventListener("click", function () {
   sidebar.classList.remove("show-sidebar");
    });
     })();

    //  let addToCart = document.getElementsByClassName ('add-to-cart');
    //  for (let i=0; i<addToCart.length; i++){
    //      addToCart[i].addEventListener('click',function(event){
    //          //console.log(event.target);
    //          event.target.style.display = 'none';
    //      });}

    // let dBlock = document.createElement('a');
    // dBlock.href = "index.html";
    // dBlock.innerHTML = '<img class="product-img" src="images/bike_4.jpg" alt="..."></a>';   
// 
    //  positionRelative.appendChild(dBlock);
// product.insertBefore(positionRelative,product.firstChild);
// console.log(product.insertBefore);
// let productOverlay = document.createElement('div');
// let ul = document.createElement('ul');
// ul.className = "mb-0 list-inline";
// let li = document.createElement('li');
// li.className = "list-inline-item m-0 p-0";
// let btn = document.createElement('a');
// btn.classList = "btn";
// btn.innerHTML = '<i class="far fa-thumbs-up"></i> Like';
// btn.href = '#';
// li.appendChild(btn);
// ul.appendChild(li);
// productOverlay.appendChild(ul);
// positionRelative.appendChild(productOverlay);

//let col = document.createElement('div');
// col.className = "col-md-3 col-xl-3 col-lg-4 col-sm-6";

// let newproduct =document.createElement('div');
// newproduct.className = "newproduct text-center";
// let positionRelative =document. createElement('div');
// positionRelative.className = "position-relative mb-3";
// let h3 =document.createElement('h3');
// let resetAnchor = document.createElement('a');
// resetAnchor.className = "reset-anchor product-name";
// resetAnchor.innerText = "Bicycle";
// resetAnchor.href = "detail.html";


//const cartItem = document.getElementById('cartItem').content;


const addToCart =document.getElementsByClassName("add-to-cart");
const template =document.getElementById("cartItem").content;
for(let i=0; i<addToCart.length; i++){
    addToCart[i].addEventListener('click',function(e){
        let item =e.target.closest('.newproduct');
        let content =addProductToCart(template, item);
        document.querySelector('.cart-items').append(document.importNode(content,true));

})
}
//document.querySelector('.rowprod').appendChild(cartItem);
//document.querySelector('#addToCart').addEventListener('click', function(){
//document.querySelector('.rowprod').appendChild(cartItem);
//})


        
     