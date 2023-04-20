<div class="bienvenidos_consultas">
    <h2>¿Alguna consulta?</h2>
</div>
<div class="container-flex page-padding">
    <section>
        <h3 class="wow bounce">Comunicate con nosotros</h3>
        <p>Completá el formulario con tu consulta y te responderemos a la brevedad.</p>
        <form action="acciones/consultasDelForm.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input name="nombre" required type="text" id="nombre" class="form-control" placeholder="Tu nombre">
            </div>
            <div class="form-group">
                <label for="correo">Correo electrónico</label>
                <input name="correo" required type="email" id="correo"
                       class="form-control" placeholder="Tu correo electrónico">
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea required placeholder="Escribe tu mensaje"
                          class="form-control" name="mensaje" id="mensaje"
                          cols="30" rows="5"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn-success btn">
                    Enviar
                </button>
            </div>
        </form>
    </section>
</div>
