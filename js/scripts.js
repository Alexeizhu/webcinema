const films = [{name: "Стражи галактик", image: "pic1.jpg", likes: 1957, release: "21 июля 2014г"},
               {name: "Первый мститель", image: "pic2.jpg", likes: 2140, release: "19 июля 2011г"},
               {name: "Железный человек 3", image: "pic3.jpg", likes: 2257, release: "2 мая 2013г"},
               {name: "Первый мститель 2", image: "pic6.jpg", likes: 2301, release: "3 апреля 2014г"},
               {name: "Человек-паук 3", image: "pic7.jpg", likes: 1692, release: "Человек-паук 3"},
               {name: "Новый Человек-паук", image: "pic8.jpg", likes: 2412, release: "29 июня 2012г"},
               {name: "Халк", image: "pic9.jpg", likes: 1757, release: "19 июня 2003г"},
               {name: "Росомаха: Бессмертный", image: "pic10.jpg", likes: 2051, release: "25 июля 2013г"},];

function sortUp(arr){
  const temp = JSON.parse(JSON.stringify(arr));

  temp.sort((a,b) => a.likes > b.likes ? 1 : -1);
  document.querySelector(".result").innerHTML = '';

  temp.forEach(film => {
      document.querySelector(".result").innerHTML += `
      <div class="col-lg-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" height="229" width="250" src="image/${film.image}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">${film.name}</h5>
            <p class="card-text"><b>Релиз:</b> ${film.release}</br>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-heart" viewBox="0 0 16 16">
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
              </svg> ${film.likes}
            </p>
            <a href="#" class="btn btn-primary">Смотреть</a>
          </div>
        </div>
      </div>
      `;
  });

}

function sortDown(arr){
  const temp = JSON.parse(JSON.stringify(arr));

  temp.sort((a,b) => a.likes < b.likes ? 1 : -1);
  document.querySelector(".result").innerHTML = '';

  temp.forEach(film => {
      document.querySelector(".result").innerHTML += `
      <div class="col-lg-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" height="229" width="250" src="image/${film.image}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">${film.name}</h5>
            <p class="card-text"><b>Релиз:</b> ${film.release}</br>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-heart" viewBox="0 0 16 16">
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
              </svg> ${film.likes}
            </p>
            <a href="#" class="btn btn-primary">Смотреть</a>
          </div>
        </div>
      </div>
      `;
  });

}

document.querySelector(".feedUp").addEventListener('click', () => {
  sortUp(films);
});

document.querySelector(".feedDown").addEventListener('click', () => {
  sortDown(films);
});
