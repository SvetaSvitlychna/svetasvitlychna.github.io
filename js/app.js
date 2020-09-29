
const toggleBtn = document.querySelector(".cart-toggle");
const closeBtn = document.querySelector(".close-btn");
const sidebar =document.querySelector(".sidebar");


function addProductToCart(content,item)
{
    content.querySelector('.cart-item').setAttribute('id',item.getAttribute('data-id'));
    content.querySelector('.product-name').textContent =item.querySelector(".product-name").textContent;
    content.querySelector('.product-price').textContent = item.querySelector(".product-price").textContent;
    content.querySelector('.product-price').setAttribute ('data-price', item.querySelector(".product-price").textContent);
    content.querySelector('.product-img img').setAttribute('src', item.querySelector(".product-img").getAttribute('src'));
    return content;
    
}

function createMarkup(data){
 return `
 <div class="col-md-3 col-xl-3 col-lg-4 col-sm-6">
                 <div class="newproduct text-center" data-id="${data.id}">
                    <div class="position-relative mb-3">
                      <a class="d-block" href="detail.html">
                         <img class="product-img" src="${data.image}" alt="..."></a>
                       <div class="product-overlay">
                         <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn " href="#"><i class="far fa-thumbs-up"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn add-to-cart" href="#" ><i class="fas fa-cart-arrow-down"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn " href="#"><i class="fas fa-info-circle"></i></a></li>
                        </ul>
                    </div>
                     </div>
        
                  <h3> <a class="reset-anchor product-name" href="detail.html">${data.name}</a></h3>
                   <p class="product-price " data-price="${data.price}">${data.price}</p>
            </div>
            </div>`             
}

function socIcon(className, icon, capture=''){
 return `<li class="list-inline-item m-0 p-0 ${className}"><a class="btn" href="#" ><i class="fas ${icon}"></i>${capture}</a></li>`;
}

function createNewMarkup(data){
    return `
    <div class="col-md-3 col-xl-3 col-lg-4 col-sm-6">
                    <div class="newproduct text-center" data-id="${data.id}">
                       <div class="position-relative mb-3">
                         <a class="d-block" href="detail.html">
                            <img class="product-img" src="${data.image}" alt="..."></a>
                          <div class="product-overlay">
                            <ul class="mb-0 list-inline">
                               ${socIcon('like-this', 'fa-thumbs-up',)}
                               ${socIcon('add-to-cart',' fa-cart-arrow-down', )}
                               ${socIcon('view-this','fa-info-circle',)}
                           </ul>
                       </div>
                        </div>     
                     <h3> <a class="reset-anchor product-name" href="detail.html">${data.name}</a></h3>
                      <p class="product-price " data-price="${data.price}">${data.price}</p>
               </div>
               </div>`             
   }
   function socIcon(className, icon, capture=''){
    return `<li class="list-inline-item m-0 p-0 ${className}"><a class="btn" href="#" ><i class="fas ${icon}"></i>${capture}</a></li>`;
   }
   
   function createNewMarkup(data){
       return `
       <div class="col-md-3 col-xl-3 col-lg-4 col-sm-6">
                       <div class="newproduct text-center" data-id="${data.id}">
                          <div class="position-relative mb-3">
                            <a class="d-block" href="detail.html">
                               <img class="product-img" src="${data.image}" alt="..."></a>
                             <div class="product-overlay">
                               <ul class="mb-0 list-inline">
                                  ${socIcon('like-this', 'fa-thumbs-up',)}
                                  ${socIcon('add-to-cart',' fa-cart-arrow-down', )}
                                  ${socIcon('view-this','fa-info-circle',)}
                              </ul>
                          </div>
                           </div>     
                        <h3> <a class="reset-anchor product-name" href="detail.html">${data.name}</a></h3>
                         <p class="product-price " data-price="${data.price}">${data.price}</p>
                  </div>
                  </div>`             
      }
   
      function footerSocials(className, url, icon, capture=''){
          return`
          <li><a class="footer-link ${className}" href="${url}" target="_blank"><i
          class="fab ${icon}"></i> ${capture}</a></li>`
      }
   
      function footerService( url,  capture=''){
       return`
       <li><a class="footer-link" href="${url}">${capture} </a></li>`
   }
   function footerContact(className, url, icon, capture=''){
       return`
       <li><a class="footer-link ${className}" href="${url}"><i class=" ${icon}"></i>${capture}</a></li>
       `
   } 
   function navbarNav(className, url, icon, capture=''){
       return`
   <li class="nav-item active ${className}"><a href="${url}" class="nav-link" target="_blank"><i
   class="fas ${icon}"></i>${capture}</a></li>`
   }

//=========
(function(){
 toggleBtn.addEventListener('click', function () {
  sidebar.classList.toggle('show-sidebar');
  console.log(document.querySelectorAll('.cart-item').length);
  
  let itemInCart = document.querySelectorAll('.cart-item');
  for (item of itemInCart){
      console.log(item);
     
      const price = item.querySelector('.product-price').getAttribute('data-price');
      item.querySelector('button.dec-btn').addEventListener('click', function(e){
          console.log(e.target.parentNode.nextElementSibling);
          let val = e.target.parentNode.nextElementSibling.textContent;
          if (+(val)> 1){
              val--;
              console.log('val--:', val);
              e.target.parentNode.nextElementSibling.textContent = val;
                    e.target.closest('.quantity').nextElementSibling.querySelector('.product-price').textContent=val*price;
          }
      });
      item.querySelector('button.inc-btn').addEventListener('click', function(e){
          console.log(e.target.parentNode.previousElementSibling);
          let val = e.target.parentNode.previousElementSibling.textContent;
              +(val) ++;
              console.log('val++:', val);
              e.target.parentNode.previousElementSibling.textContent = val;
              console.log(e.target.closest('.quantity').nextElementSibling.querySelector('.product-price').textContent);
                e.target.closest('.quantity').nextElementSibling.querySelector('.product-price').textContent=val*price;
              
             
          });
      };
      
    });
     closeBtn.addEventListener("click", function () {
   sidebar.classList.remove("show-sidebar");
    });
     
    let result = '';
newproduct.forEach(function(item) {
    // result+=createMarkup(item);
    result+=createNewMarkup(item);
});

document.querySelector('.navbar-nav').innerHTML =
`${navbarNav('', 'index.html', 'fa-home', 'Home')}
${navbarNav('','aboutUs.html','fa-book-open', 'About' )}
${navbarNav('','catalog.html', 'fa-blog','Catalog')}
${navbarNav('','SignUp.html', 'fa-address-card','Sign up')}`;

document.querySelector('.footer-socials').innerHTML =
`${footerSocials('twitter', 'https://twitter.com', 'fa-twitter', 'Twitter')}
${footerSocials('facebook','https://www.facebook.com/','fa-facebook', 'Facebook' )}
${footerSocials('instagram','https://www.instagram.com/', 'fa-instagram','Instagram')}
${footerSocials('google','https://www.google.com/', 'fa-google-plus','Google')}`;


document.querySelector('.footer-service').innerHTML =
`${footerService('#','Help')}
${footerService('#','FAQs')}
${footerService('#','Returns')}
${footerService('#','Refund')}
${footerService('#','Delivery')}`;


document.querySelector('.footer-contact').innerHTML =
 `${footerContact('message','contactUS.html','fas fa-comment-dots','Leave a message')}
${footerContact('email','','fas fa-envelope','test@test.com')}
${footerContact('phone','','fas fa-phone','+38 000 000 00 00')}
${footerContact('viber','','fab fa-viber', '+38 000 111 11 11')}
${footerContact('telegram','','fab fa-telegram', '+38 000 111 11 11')}`;


document.querySelector('.showcase').innerHTML = result;
     let content = document.getElementById("cartItem").content;
        
   const addToCart =document.getElementsByClassName("add-to-cart");
const template =document.getElementById("cartItem").content;
for(let i=0; i<addToCart.length; i++){
    addToCart[i].addEventListener('click',function(e){
        let item =e.target.closest('.newproduct');
        let content =addProductToCart(template, item);
        document.querySelector('.cart-items').append(document.importNode(content,true));
let q = document.querySelector('.cart-toggle small').textContent;
q++;
document.querySelector('.cart-toggle small').textContent = q;
})
}
})();

