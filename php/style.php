<style>

header#banner {
    background-color: #ebecf0;
}

nav a.navbar-brand img#logotipo {
    width: 150px;
    height: 40px;
    margin-top: 1px;
}

<?php if(isset($_POST['Inicio'])):  ?>
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

<?php if(isset($_POST['FAQs'])):  ?>
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
    flex-direction: row;
    justify-content: center;
    width: 100%;
    height: 100%;
}

main form div {
    width: 20%;
    height: 50%;
}

main form textarea {
    width: 100%;
    height: 100%;
}
main form input {
    width: 100%;
}
<?php endif; ?>
    
    <?php if(isset($_POST['NServicios'])):  ?>
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

</style>