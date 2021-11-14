<style>
    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }

    html {
        font-size: 18px;
        line-height: 1.5;
        font-weight: 300;
        color: #333;
        font-family: "Nunito Sans", sans-serif;
    }

    body {
        margin: 0;
        padding: 0;
        height: 100vh;
        background-color: #ecf0f9;
        background-attachment: fixed;
    }

    #spinner:not([hidden]) {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #spinner::after {
        content: "";
        width: 80px;
        height: 80px;
        border: 4px solid #f3f3f3;
        /* border-top: 3px solid #f25a41;
	 */
        border-top: 3px solid #1a57e6;
        border-radius: 100%;
        will-change: transform;
        animation: spin 1s infinite linear;
    }

    @keyframes spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .content {
        display: flex;
        margin: 0 auto;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        max-width: 1000px;
    }

    p.overview {
        font-size: 12.5px;
        height: 200px;
        width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        text-align: left;
    }

    .heading {
        width: 100%;
        margin-left: 1rem;
        font-weight: 900;
        font-size: 1.618rem;
        text-transform: uppercase;
        letter-spacing: 0.1ch;
        line-height: 1;
        padding-bottom: 0.5em;
        margin-bottom: 1rem;
        position: relative;
    }

    .heading:after {
        display: block;
        content: "";
        position: absolute;
        width: 60px;
        height: 4px;
        background: linear-gradient(135deg, #1a9be6, #1a57e6);
        bottom: 0;
    }

    .description {
        width: 100%;
        margin-top: 0;
        margin-left: 1rem;
        margin-bottom: 3rem;
    }

    .card {
        color: inherit;
        width: calc(33% - 2rem);
        min-width: calc(33% - 2rem);
        height: 400px;
        min-height: 400px;
        perspective: 1000px;
        margin: 1rem;
        position: relative;
    }

    @media screen and (max-width: 800px) {
        .card {
            width: calc(50% - 2rem);
        }
    }

    @media screen and (max-width: 500px) {
        .card {
            width: 100%;
        }
    }

    .frontWeb,
    .back {
        display: flex;
        border-radius: 6px;
        background-position: center;
        background-size: cover;
        text-align: center;
        justify-content: center;
        align-items: center;
        position: absolute;
        height: 100%;
        width: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        transform-style: preserve-3d;
        transition: ease-in-out 600ms;
    }

    .frontWeb {
        cursor: pointer;
        background-size: cover;
        padding: 2rem;
        font-size: 1.62rem;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.8);
        overflow: hidden;
        font-family: Poppins, sans-serif;
    }

    .frontWeb:before {
        position: absolute;
        display: block;
        content: "";
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, #1a9be6, #1a57e6);
        opacity: 0.25;
        z-index: -1;
    }

    .card:hover .frontWeb {
        transform: rotateY(180deg);
    }

    @media screen and (max-width: 800px) {
        .card:hover .frontWeb {
            transform: rotateY(0deg);
        }
    }

    .card:nth-child(even):hover .frontWeb {
        transform: rotateY(-180deg);
    }

    @media screen and (max-width: 800px) {
        .card:nth-child(even):hover .frontWeb {
            transform: rotateY(0deg);
        }
    }

    .card {
        -webkit-transition: transform 0.6s;
        transform-style: preserve-3d;
        transition: 0.5s;
        -webkit-transition: 0.5s;
        position: relative;
        transition: transform 0.6s;
        -webkit-transition: transform 0.6s;
    }

    .card.flip {
        transform: rotateY(180deg);
        -webkit-transform: rotateY(180deg);
    }

    .back {
        background: #fff;
        transform: rotateY(-180deg);
        padding: 0 2em;
    }

    .card:hover .back {
        transform: rotateY(0deg);
    }

    @media screen and (max-width: 800px) {
        .card:hover .back {
            transform: rotateY(-180deg);
        }
    }

    .card:nth-child(even) .back {
        transform: rotateY(180deg);
    }

    .card:nth-child(even):hover .back {
        transform: rotateY(0deg);
    }

    @media screen and (max-width: 800px) {
        .card:nth-child(even):hover .back {
            transform: rotateY(180deg);
        }
    }

    .button {
        text-decoration: none;
        transform: translateZ(40px);
        cursor: pointer;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        font-weight: bold;
        color: #fff;
        padding: 0.5em 1em;
        border-radius: 100px;
        font: inherit;
        background: linear-gradient(135deg, #1a9be6, #1a57e6);
        border: none;
        position: relative;
        transform-style: preserve-3d;
        transition: 300ms ease;
    }

    .button:before {
        transition: 300ms ease;
        position: absolute;
        display: block;
        content: "";
        transform: translateZ(-40px);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        height: calc(100% - 20px);
        width: calc(100% - 20px);
        border-radius: 100px;
        left: 10px;
        top: 16px;
        box-shadow: 0 0 10px 10px rgba(26, 87, 230, 0.25);
        background-color: rgba(26, 87, 230, 0.25);
    }

    .button:hover {
        text-decoration: underline;
        transform: translateZ(55px);
    }

    .button:hover:before {
        transform: translateZ(-55px);
    }

    .button:active {
        transform: translateZ(20px);
    }

    .button:active:before {
        transform: translateZ(-20px);
        top: 12px;
    }

    .movie_gens {
        font-size: 12.5px;
    }

    .release_date {
        font-weight: bold;
    }

    .release_date span {
        font-weight: normal;
    }

    #btnFlipHover {
        display: none;
    }
</style>
<div id="spinner"></div>
<div class="content">
    <h1 class="heading">Movies-</h1>
    <p class="description">Hover over a Movie to flip it.

    </p>

    <a class="card" href="#!">
        <div class="front" style="background-image: url(//source.unsplash.com/300x401);">
            <p>Lorem ipsum dolor sit amet consectetur adipisi.</p>
        </div>
        <div class="back">
            <div class="release_date">1985</div>
            <div>
                <p>Consectetur adipisicing elit. Possimus, praesentium?</p>
                <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p>
                <button class="button">Click Here</button>
            </div>
        </div>
    </a>


</div>
<script>
    let URL_API = 'https://api.themoviedb.org/3/list/15570?api_key=516adf1e1567058f8ecbf30bf2eb9378&language=en-US';
    const card = document.querySelector('.content');
    const spinner = document.querySelector('#spinner');

    //yy-mm-dd
    const getYearFromDate = (date) => {
        let year = date.split('-').shift();
        return year;
    };
    var genres_movies =
        '{ "genres": [ { "id": 28, "name": "Action" }, { "id": 12, "name": "Adventure" }, { "id": 16, "name": "Animation" }, { "id": 35, "name": "Comedy" }, { "id": 80, "name": "Crime" }, { "id": 99, "name": "Documentary" }, { "id": 18, "name": "Drama" }, { "id": 10751, "name": "Family" }, { "id": 14, "name": "Fantasy" }, { "id": 36, "name": "History" }, { "id": 27, "name": "Horror" }, { "id": 10402, "name": "Music" }, { "id": 9648, "name": "Mystery" }, { "id": 10749, "name": "Romance" }, { "id": 878, "name": "Science Fiction" }, { "id": 10770, "name": "TV Movie" }, { "id": 53, "name": "Thriller" }, { "id": 10752, "name": "War" }, { "id": 37, "name": "Western" } ] }';

    const getNameGensFormId = (idGen) => {
        let genreName = '';
        let obj = JSON.parse(genres_movies);
        for (let i = 0; i < obj.genres.length; i++) {
            if (idGen == obj.genres[i].id) {
                genreName = obj.genres[i].name;
                break;
            }
        }
        return genreName;
    };

    const getGenNames = (gensArrayIds) => {
        let gensName = '';
        const sizeGenresArray = gensArrayIds.length;
        for (let i = 0; i < sizeGenresArray; i++) {
            gensName += ", " + getNameGensFormId(gensArrayIds[i]);

        }
        gensName = gensName.substr(1);
        return gensName;
    };

    function mapCards(movies) {
        const html = movies.map(movie => {
            let title = movie.title || movie.name;
            let isMovieOrTv = (movie.title) ? 'movie' : 'tv';
            return `
            <div class="card" >
                <div class="frontWeb" style="background-image: url(//image.tmdb.org/t/p/original${movie.poster_path});"> 
                <p>${title}</p>
                </div>

                <div class="back">
                <div>
                    <div class="release_date">${title} <span>(${getYearFromDate(movie.release_date)})</span></div>
                    <div class="movie_gens">${getGenNames(movie.genre_ids)}</div>
                    <div>⭐${movie.vote_average}</div>
                    
                    <p class="overview">${movie.overview}</p>
                    <a target="_blank" href="https://www.themoviedb.org/${isMovieOrTv}/${movie.id}" class="button">Details</a>
                </div>
                </div>

            </div>
            `;
        }).join('');
        card.innerHTML =
            `<h1 class="heading">Films</h1>`;
        card.innerHTML += html;
    }


    async function fetchMovies(urlEndpoint) {
        let data;
        try {
            const response = await fetch(urlEndpoint);
            data = await response.json();

            //return (data);
        } catch (error) {
            console.log(error);
        }
        // return data.data;
        return data.items || data.results;
    }

    (async () => {
        const movies = await fetchMovies(URL_API);
        spinner.setAttribute("hidden", "");
        mapCards(movies);
    })();
</script>