<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
* {
    list-style: none;
    font-family: 'Montserrat', sans-serif;
    color: black;
}

header#banner {
    background-color: #ebecf0;
}

#logotipo {
    width: 150px;
    height: 40px;
    margin-top: 1px;
}


/*    Colores     
 #AFB5C6 , #273362*/

main form#cartas {
    margin: 5%;
    display: grid;
    grid-template-columns: 3fr 3fr 3fr;
    grid-template-rows: 2fr 2fr;
    grid-gap: 20px 40px;
}

.card-body {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.paginas {
    width: 100%;
    height: 95%;
    margin: 0%;
}

.card:active {
    transform: scale(0.97);
    transform: transform 0.2s;
}

.Visitas{
    display: flex;
    text-align: center;
}

body img#estadisticas{
    width: 90%;
    height: 700px;
    margin: 0% 5% 0% 5%;
}

body div{
    display: flex;
    justify-content: center;
    align-content: center;
}

@media screen and (max-width: 1000px) {
    main form#cartas {
        grid-template-columns: 2fr 2fr;
        grid-template-rows: 2fr 2fr;
    }
}

@media screen and (max-width: 500px) {
    main form#cartas {
        grid-template-columns: 2fr;
    }
}
</style>