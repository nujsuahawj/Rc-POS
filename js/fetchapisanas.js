

function fetchData(){
  try{


  fetch('https://cors.io/?{http://localhost:8000/api/getsanas}')
  .then(response => {
    if(response.ok){
      return response.json();
    }
    throw new Error('Request failed!');
  })
  .then(data => {
    console.log(data);
    const sanas = document.querySelector('#sanas');
    for(let i = 0; i < data.length; i++){
      sanas.innerHTML += `
      <div class="box">
        <div class="icons">
                  <a class="fas fa-heart"></a>
                  <a class="fas fa-share"></a>
                  <a class="fas fa-eye"></a>
              </div>
              <img src="images/product-1.png" alt="">
              <div class="content">
                  <h3>${data[i].title}</h3>
                  <div class="price">$120.99</div>
                  <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                  </div>
                  <a href="#" class="btn">ຊື້ເລີຍ</a>
          </div>
        <div class="box">
      `;
    }
  })  }catch(err){
    console.log(err);
  }
}
fetchData();


