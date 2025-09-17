const newsSingleAll = document.querySelectorAll(".news-container .news-single"); //Deklarasi
let currentActive = 0; //Mulai dari no.0
let totalNews = newsSingleAll.length; 
let duration = 3000; //durasi 3 detik 

const removeAllActive = () => {
    newsSingleAll.forEach(n => {
        n.classList.remove("active");
    });
};

const changeNews = () => { 
    if (currentActive >= totalNews - 1) { 
        currentActive = 0;
    } else {
      currentActive += 1; //Ganti news
    }

    removeAllActive(); //
    newsSingleAll[currentActive].classList.add("active");
};

setInterval(changeNews, duration); //Pengulangan news
