
//products slid
var swiper = new Swiper(".product-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay:{
        delay:7500,
        disableOnInteraction:false,
    },
    breakpoints: {
        0: {slidesPerView: 1,},
    768: { slidesPerView: 2,},
    1020: {slidesPerView: 3,},
    },
  });
  
  let searchForm=document.querySelector('.search-form')
  document.querySelector('#search-btn').onclick=()=>{
      searchForm.classList.toggle('active');
      navbar.classList.remove('active');
  
  }
  let navbar=document.querySelector('.navbar')

document.querySelector('#menu-btn').onclick=()=>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
}
  
  //search box
  function myFunction() {
      // Declare variables
      var input, filter, ul, li, a, i, txtValue;
      input = document.getElementById('search-box');
      filter = input.value.toUpperCase();
      ul = document.getElementById("myUL");
      li = ul.getElementsByTagName('li');
    
      // Loop through all list items, and hide those who don't match the search query
      for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("h3")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
        }
      }
    }
  //سبد خرید
  const cartIcon=document.querySelector("#cart-btn");
  const cart=document.querySelector(".shopping-cart");
  const cartClose=document.querySelector("#cart-close");
  
  cartIcon.addEventListener('click',()=>{
  cart.classList.add('active');
  })
  cartClose.addEventListener('click',()=>{
    cart.classList.remove("active");
  })
  
  if(document.readyState=="loading"){
    document.addEventListener("DOMContentLoaded",start);
  }else{
    start();
  }
  function start(){
  addEvent();
  }
  function update(){
    addEvent();
    updateTotal();
  }
  function addEvent(){
  let cartRemove_btns=document.querySelectorAll('.cart-remove');
  console.log(cartRemove_btns);
  cartRemove_btns.forEach((btn)=>{
    btn.addEventListener("click",handle_removeCartItem);
  });
  
  let cartQuantity_inputs=document.querySelectorAll('.cart-quantity');
  cartQuantity_inputs.forEach((input)=>{
    input.addEventListener("change",handle_changeItemQuantity);
  })
  
  
  
  
  let addCart_btns=document.querySelectorAll(".add-to-cart");
  addCart_btns.forEach(btn=>{
    btn.addEventListener("click",handle_addCartItem);
  })
  
  const buy_btn=document.querySelector(".btn-buy")
  buy_btn.addEventListener("click",handle_buyOrder);
  }
  let itemsAdded=[]
  function handle_addCartItem(){
    let product=this.parentElement;
    let title=product.querySelector(".product-title").innerHTML;
    let price=product.querySelector(".price").innerHTML;
    let image=product.querySelector(".image").src;
    console.log(title,price,image);
    let newToAdd={
      title,
      price,
      image,
    };
    if(itemsAdded.find((el)=> el.title==newToAdd.title)){
      alert("این محصول قبلا اضافه شده است");
      return;
    }else{
      itemsAdded.push(newToAdd);
    }
  
    let cartBoxElement=CartBoxComponent(title,price,image);
    let newnode=document.createElement("div");
    newnode.innerHTML=cartBoxElement;
    const cartContent=cart.querySelector(".cart-content");
    cartContent.appendChild(newnode);
  
    update();
  }
  
  function handle_changeItemQuantity(){
    if(isNaN(this.value)||this.value<1){
      this.value=1;
    }
    this.value=Math.floor(this.value);
    update();
  }
  
  
  
  function handle_removeCartItem(){
    this.parentElement.remove();
    itemsAdded=itemsAdded.filter(
      (el) => el.title !=this.parentElement.querySelector(".cart-product-title").innerHTMl);
    update();
  }
  
  
  function handle_buyOrder(){
    if(itemsAdded.length<=0){
      alert("هنوز خریدی انجام ندادید \n لطفا محصولی را انتخاب کنید");
      return;
    }
    
  
    const cartContent=cart.querySelector(".cart-content");
    cartContent.innerHTML='';
    alert("خرید شما با موفقیت انجام شد");
  }
  
  function updateTotal()
  {
    let cartBoxes=document.querySelectorAll(".cart-box");
    const totalElement=cart.querySelector(".total-price");
    let total=0;
    cartBoxes.forEach((cartBox)=>{
      let priceElement=cartBox.querySelector(".cart-price");
      let price=parseFloat(priceElement.innerHTML.replace("تومان",""));
      let quantity=cartBox.querySelector(".cart-quantity").value;
      total+=price*quantity;
  });
  
  
  total=total.toFixed(2);
  totalElement.innerHTML="تومان"+total;
  }
  function CartBoxComponent(title,price,image)
  {
    return `<div class="cart-box">
    <img src=${image} alt="" class="cart-img">
    <div class="detail-box">
        <div class="cart-product-title">${title}</div>
        <div class="cart-price">${price}</div>
        <input type="number" value="1" class="cart-quantity">
    </div>    
    <i class="fas fa-trash-alt cart-remove" ></i>
  </div>`
  }
  
  
  
  
  
  
  