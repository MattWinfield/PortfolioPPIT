console.log("Store is linked");


//GLOBAL VARS
const productsList = document.querySelectorAll('.item-add');


//ON LOAD FUNCS
onLoadStoreProducts();
onLoadDisplayCart();

var productDesc = [
    {
        title: 'Logo Shirt Red',
        desc: 'logoshirtred',
        img:'products/red-FullLogo.jpg',
        price: 20,
        numInCart: 0        
    },
    {
        title: 'Logo Shirt Black',
        desc: 'logoshirtblack',
        img:'products/black-FullLogo.jpg',
        price: 20,
        numInCart: 0        
    },
    {
        title: 'Crest Shirt White',
        desc: 'crestshirtwhite',
        img:'products/white-ChestLogo.jpg',
        price: 15,
        numInCart: 0        
    },
    {
        title: 'Illustration Commision',
        desc: 'illustration',
        img:'products/illustrationcom.jpg',
        price: 30,
        numInCart: 0        
    },
    {
        title: '3D Model Commision',
        desc: '3dmodel',
        img:'products/3dmodelcom.png',
        price: 50,
        numInCart: 0        
    }
]





function storeProducts(product){
    var productIDs = localStorage.getItem('storeProducts');
    productIDs = parseInt(productIDs);
    var cartNumIcon = document.querySelector('.cart-wrapper span');

    if( productIDs ){
        localStorage.setItem('storeProducts', productIDs + 1);
        cartNumIcon.textContent = productIDs + 1;
    } else{
        localStorage.setItem('storeProducts', 1);
        cartNumIcon.textContent = 1;
    }

    addProduct(productDesc[product]);
    getTotalCost(productDesc[product]);

    document.getElementById("cart-notif").style.animation="notifAnim 2s 0"

}

function addProduct(product){

    console.log(product);

    var addedProducts = localStorage.getItem('currentlyInCart');
    addedProducts = JSON.parse(addedProducts);
    console.log("My cart Items are ", addedProducts);

    if(addedProducts != null){
        if(addedProducts[product.desc] == undefined){
            addedProducts = {
                ...addedProducts,
                [product.desc]: product
            }
        }
        addedProducts[product.desc].numInCart += 1;

    }else{
        product.numInCart = 1;
        addedProducts = {
            [product.desc]: product
        };
    }

    localStorage.setItem("currentlyInCart", JSON.stringify(addedProducts));
}


function getTotalCost(product){
    var totalCost = localStorage.getItem('CartTotal');

    if(totalCost != null){
        totalCost = parseInt(totalCost);
        localStorage.setItem("CartTotal", totalCost += product.price);
    }else{
        localStorage.setItem("CartTotal", product.price);
    }

}

function onLoadStoreProducts(){
    var productIDs = localStorage.getItem('storeProducts');
    if( productIDs ){

        document.querySelector('.cart-wrapper span').textContent = productIDs;
    }
}

function remove(productTitle){
    
}

function onLoadDisplayCart(){
    var cartArray = localStorage.getItem("currentlyInCart");
    cartArray = JSON.parse(cartArray);
    var cartWidget = document.querySelector(".cart-content");
    var cartAside = document.querySelector(".cart-aside");
    var totalCost = localStorage.getItem('CartTotal');

    if( cartArray && cartWidget ){
        cartWidget.innerHTML = '';
        Object.values(cartArray).map(product => {
            cartWidget.innerHTML += `
            <div class="cart-item">
                <img class="item-img" src="../../ASSETS/${product.img}">
                <div class="item-name">${product.title}</div>
                <div class="item-quant">${product.numInCart}</div>
                <div class="item-price">&euro;${product.price * product.numInCart}</div>
                <div class="item-remove" onclick="remove(${product.title})">X</div>
            </div>
            `;

            cartAside.innerHTML += `                
            <div class="aside-summary">
                <div class="item-name">${product.title}</div>
                <div class="item-price">€${product.price} x ${product.numInCart}</div>
            </div>
            `;
        });
        cartAside.innerHTML += "<div class='item-postage'>€" + parseInt(totalCost) + " + €5 = €" + (parseInt(totalCost) + 5) + "</div>"
        cartAside.innerHTML += "<a href='checkout.html' class='aside-checkout'>Hit The Checkout</a>"
        document.getElementById("cart-total").innerHTML += parseInt(totalCost);

    }
}

