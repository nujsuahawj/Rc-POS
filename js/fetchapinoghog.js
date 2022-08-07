//fetch data from an API
//get noghog
function fetchData(){
    fetch('http://localhost/Rc-POS/api/noghog.php')
    .then(response => {
      if(response.ok){
        return response.json();
      }
      throw new Error('Request failed!');
    })
    .then(data => {
      console.log(data);
      const noghog = document.querySelector('#noghog');
      for(let i = 0; i < data.length; i++){
        noghog.innerHTML += `
        <div class="row">
            <div class="image-container">
                <div class="small-image">
                    <img src="adminrc/public/uploads/products/${data[i].image}" alt="${data[i].name}" class="featured-image-1" >
                    <img src="adminrc/public/uploads/products/${data[i].image}" alt="${data[i].name}" class="featured-image-1" >
                    <img src="adminrc/public/uploads/products/${data[i].image}" alt="${data[i].name}" class="featured-image-1" >
                </div>
                <div class="big-image">
                    <img src="adminrc/public/uploads/products/${data[i].image}" alt="${data[i].name}" class="big-image-1">
                </div>
            </div>
            <div class="content">
                <h3>${data[i].name}</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">$${data[i].sell}</div>
                <a href="https://wa.me/8562078914908?text=ສະບາຍດີອ້າຍRc ຂ້ອຍຕ້ອງການສັ່ງຊື້${data[i].name} ຂ້ອຍຈະໂອນເງິນເຂົ້າບັນຊີຂອງເຈົ້າແລະແຈ້ງສະຖານທີສົ່ງລາຍລະອຽດໃຫ້ເດີ້." class="btn">ຊື້ເລີຍ</a>
            </div>
            </div>
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
  
  
  