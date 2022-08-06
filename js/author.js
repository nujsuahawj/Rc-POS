//fetch data from an API
//get sanas
function fetchData(){
    fetch('http://localhost/Rc-POS/api/author.php')
    .then(response => {
      if(response.ok){
        return response.json();
      }
      throw new Error('Request failed!');
    })
    .then(data => {
      console.log(data);
      const author = document.querySelector('#author');
      for(let i = 0; i < data.length; i++){
        author.innerHTML += `
        <div class="box">
          <div class="icons">
                    <a class="fas fa-heart"></a>
                    <a class="fas fa-share"></a>
                    <a class="fas fa-eye"></a>
                </div>
                <img src="adminrc/public/uploads/products/${data[i].image}" alt="${data[i].name}">
                <div class="content">
                    <h3>${data[i].name}</h3>
                    <div class="price">$${data[i].sell}</div>
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
      if(data.length == 0){
        author.innerHTML += `
            <div class="box">
                <div class="content">
                    <h4>ສິນຄ້າຈະມີໄວໆນີ້...</h4>
                </div>
          <div class="box">
        `;
      }
    })
  }
  fetchData();

    