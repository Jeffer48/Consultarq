<style>
nav a.navbar-brand img#logotipo {
    width: 150px;
    height: 40px;
    margin-top: 1px;
}

<?php if(isset($_POST['FAQs']) || isset($_POST['Salir']) || isset($_POST['guardarFAQs']) || isset($_POST['Crear']) || isset($_POST['BorrarPreguntas'])):  ?>
    body, html{
        height: 100%;
        width: 100%;
    }    
        
    main {
        display:flex;
        height: 150%;
        width: 100%;
        flex-direction: column;
        align-items: center;
    }

    main iframe {
        height: 100%;
        width: 80%;
        margin-top: 2%;
    }

    main form {
        margin-top: 2%;
        display: flex;
        flex-direction: column;
        justify-items: center;
        align-items: center;
        width: 100%;
        height: 115%;
    }

    main div.menu {
        width: 100%;
        height: auto;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-content: center;
    }

    main div.menu button{
        width: 20%;
        margin: 0% 2% 0% 2%;
    }

    main form div.datos {
        width: 90%;
        height: 50%;
        display: flex;
        flex-direction: row; 
        justify-content: center;
        flex-wrap: wrap;
    }
    main form div.datos div{
        margin: 4% 2% 0% 2%;
    }

    main form textarea {
        width: 100%;
        height: 90%;
        resize:none;
    }
    main form input {
        width: 100%;
    }
<?php endif; ?>
    
<?php if(isset($_POST['NServicios']) || isset($_POST['NExpertos']) || isset($_POST['Inicio']) || isset($_POST['guardarInicio']) || isset($_POST['guardarNServicios'])):  ?>
    body, html{
        height: 100%;
        width: 100%;
    }

    main {
        display:flex;
        height: 80%;
        width: 100%;
    }

    main iframe {
        height: 100%;
        width: 80%;
        margin-top: 2%;
    }

    main form {
        margin-top: 2%;
        display: flex;
        flex-direction: column;
        width: 20%;
        height: 100%;
    }

    main form textarea {
        height: 33.3333333333%;
    }
<?php endif; ?>

<?php if(isset($_POST['nuevaPregunta']) || isset($_POST['Borrar'])):  ?>
    body, html{
        height: 100%;
        width: 100%;
    }    
        
    main {
        display:flex;
        height: 150%;
        width: 100%;
        flex-direction: column;
        align-items: center;
    }

    main iframe {
        height: 100%;
        width: 80%;
        margin-top: 2%;
    }

    main form {
        margin-top: 2%;
        display: flex;
        flex-direction: column;
        justify-items: center;
        align-items: center;
        width: 100%;
        height: 115%;
    }

    main div.menu {
        width: 100%;
        height: auto;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-content: center;
    }

    main div.menu button{
        width: 20%;
        margin: 0% 2% 0% 2%;
    }

    main form div.datos {
        width: 90%;
        height: 50%;
        display: flex;
        flex-direction: row; 
        justify-content: center;
        flex-wrap: wrap;
    }

    main form div.datos div{
        margin: 4% 2% 0% 2%;
    }

    main form textarea {
        width: 100%;
        height: 90%;
        resize:none;
    }

    main form input {
        width: 100%;
    }

    main form#modificacion input {
        width: 100%;
    }

    .overlay{
        background: rgba(0,0,0,.3);
        position: fixed;
        top: 0;
        bottom:0;
        left:0;
        right:0;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .popup{
        background: #f8f8f8;
        box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.3);
        border-radius: 3px;
        padding: 28px;
        text-align: center;
        width: 600px;
    }

    .popup form#popupform {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .popup form#popupform>input{
        width: 100%;
    }

    .popup form#popupform div.contenedor-inputs{
        width: 100%;
        margin: 5%;
    }

    .popup form#popupform div.contenedor-inputs  input.btn-submit{
        width: 40%;
    }

<?php endif; ?>

<?php if(isset($_POST['Borrar'])):  ?>
    .popup form#popupform div#checkbox{
        width: 100%;
        display:flex;
        flex-direction: column;
    }
    .popup form#popupform div#checkbox input{
        width: 10%;
    }
<?php endif; ?>
</style>