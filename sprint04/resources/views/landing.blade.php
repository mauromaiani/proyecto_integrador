@extends('layouts.index')
@section('content')

  <body data-spy="scroll" data-target="#navbarResponsive">
    <div class="container">

<!--empieza HOME ---->
    </header>
      <div class="container" id="home">
      <section class="row align-items-center __juntos">
          <article class="__textos text-md-right text-center col-xs-12 col-md-5 col-lg-4">
            <h1 class="__titulo">Nunca más camines sola</h1>
            <p class="__texto">Unite a una comunidad que te acompaña cuando más lo necesitas.</p>
            <a class= "__registrarse __botones" href="/register">registrate</a>
            <a class="__cerrar" href="#comunidad">más info</a>
          </article>
          <article class="__imagenes col-xs-12 col-md-7 col-lg-7">
            <img src="img/home.png" alt="home" class="img-responsive center-block">
          </article>
      </section>
    </div>
    <div class="text-center">
      <i class="fas fa-chevron-down __bajar"></i>
    </div>
<!--termina HOME ---->

<!--empieza COMUNIDAD ---->
    <div class="container" id="comunidad">
      <section class="row align-items-center __juntos __invertir">
          <article class="__imagenes col-xs-12 col-md-7 col-lg-7">
            <img src="img/comunidad.png" alt="comunidad" class="img-responsive center-block">
          </article>
          <article class="__textos text-md-left text-center col-xs-12 col-md-5 col-lg-3">
            <h2 class="__titulo">Somos una comunidad</h2>
            <p class="__texto">Wal With Me es un circulo de confianza.</p>
          <a class= "__registrarse __botones" href="/register">sumate</a>
            <!-- <button class="__login" type="button">login</button> -->
          </article>
      </section>
    </div>
<!--empieza COMUNIDAD ---->


<!--empieza CARACTERISTICAS ---->
    <div class="container" id="caracteristicas">
      <section class="row align-items-center __juntos">
          <article class="__textos text-md-right text-center col-xs-12 col-md-5 col-lg-3">
            <h2 class="__titulo">Cómo funciona</h2>
            <p class="__texto">Creas tu perfil en la plataforma y elegis a quien contactar cuando estas en problemas.</p>
            <!-- <button class="__registrarse" type="button">quiero registrarme</button> -->
            <!-- <button class="__login" type="button">login</button> -->
            <a class= "__registrarse __botones" href="/register">Quiero registrarme</a>
          </article>
          <article class="__imagenes col-xs-12 col-md-7 col-lg-7">
            <img src="img/caracteristicas.png" class="img-responsive center-block" alt="caracteristicas" >
          </article>
      </section>
    </div>
<!--empieza CARACTERISTICAS ---->


<!--empieza PREGUNTAS ---->
    <div class="container" id="preguntas">
      <section class="row align-items-center __juntos __invertir">
          <article class="__imagenes col-xs-12 col-md-7 col-lg-7">
            <img src="img/preguntas.png" alt="preguntas" class="img-responsive center-block">
          </article>
          <article class="__textos text-md-left text-center col-xs-12 col-md-5 col-lg-3">
            <h2 class="__titulo">Dudas y Preguntas</h2>
            <div id="accordion" class="__texto">
              <div>
                <div id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn __preguntas" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      ¿Es privado?<i class="fas fa-caret-down"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    Solo compartis la información con quien vos quieras.
                  </div>
                </div>
              </div>
              <div>
                <div id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn __preguntas" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                      ¿Cúanto cuanta participar?<i class="fas fa-caret-down"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTne" data-parent="#accordion">
                  <div class="card-body">
                    Somos una plataforma sin costo.
                  </div>
                </div>
              </div>
              <div>
                <div id="headingTres">
                  <h5 class="mb-0">
                    <button class="btn __preguntas" data-toggle="collapse" data-target="#collapseTres" aria-expanded="true" aria-controls="collapseTres">
                      ¿Cómo participo? <i class="fas fa-caret-down"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapseTres" class="collapse" aria-labelledby="headingTres" data-parent="#accordion">
                  <div class="card-body">
                    En la plataforma existen perfiles públicos a los que podes pedir ayuda.
                  </div>
                </div>
              </div>
            </div>
          </article>

      </section>
    </div>
<!--empieza PREGUNTAS ---->


<!--empieza CONTACTO ---->
    <div class="container-fluid __contacto" id="contacto">
      <h2 class="__tituloContacto text-center">Contacto</h2>
      <section class="row">
        <article class="col-xs-12 col-md-6 col-lg-6">
          <div class="text-right">
              <input class="__campos" type="text" name="nombre" value="" placeholder="Nombre">
              <input class="__campos" type="email" name="email" value="" placeholder="Email">
              <!-- <label for="com">Algun comentario?</label> -->
              <br>
              <textarea class="__campos" name="mensaje" rows="6" cols="40" placeholder="Mensaje"></textarea>
              <button type="button" class="__login">Enviar</button>
          </div>
        </article>
        <article class="__info col-xs-12 col-md-6 col-lg-6">
          <p class="__texto">Sabemos que hay dudas que todavía no resolvimos.
            Mandanos un mensaje para ponernos en contacto y despejar todas tus preguntas.</p>
        </article>
      </section>
    </div>
  </div>
</body>
