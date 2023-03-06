<template>
  <div>
    <section class="contact-section centred" id="Contact">
      <div class="container">
        <div class="sec-title">
          <div class="top-title">Contacta con Nosotros</div>
          <h1>Haga una cita</h1>
        </div>
        <div class="row">
          <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1 form-column">
            <div class="contact-form-area">
              <form @submit.prevent="enviarContacto">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                    <input
                      type="text"
                      v-model="contacto.nombre"
                      placeholder="Nombre Completo"
                      required
                    />
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                    <input
                      type="email"
                      v-model="contacto.email"
                      placeholder="Correo Electrónico"
                      required
                    />
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                    <input
                      type="text"
                      v-model="contacto.telefono"
                      placeholder="Número de Telefono"
                      required
                    />
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                    <input
                      type="text"
                      v-model="contacto.asunto"
                      placeholder="Asunto"
                      required
                    />
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <textarea
                      v-model="contacto.mensaje"
                      placeholder="Escriba aquí el mensaje"
                    ></textarea>
                  </div>
                  <div
                    class="col-lg-12 col-md-12 col-sm-12 form-group message-btn"
                  >
                    <input
                      type="submit"
                      class="theme-btn"
                      value="Enviar petición"
                    />
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import * as contactoService from "../services/contacto.js";
export default {
  data() {
    return {
      contacto: {
        nombre: "",
        email: "",
        telefono: "",
        asunto: "",
        mensaje: "",
      },
    };
  },
  methods: {
    enviarContacto() {
      contactoService
        .EnviarContacto(this.contacto)
        .then((res) => {
          console.log(res);
        })
        .catch((e) => console.log(e));
    },
  },
};
</script>
