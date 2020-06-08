<template>

    <div class="auth">


      <p>Podemos ayudarte a recuperar tu cuenta, solo ingresa el correo con el que te registraste.</p>
      <div class="divider is-size-1"></div>
      <form :action="this.c_action" :method="this.c_method" >

        <div :class="'notification is-'+this.c_type" v-if="this.c_message != 'NULL'">
         <div v-html="this.c_message"> </div>
        </div>

        <small><label for="user_email">Correo electrónico</label></small>
        <div class="field">
          <p class="control has-icons-left has-icons-right">
              <input name="user_email" id="user_email" class="input" type="email" placeholder="Correo" required>
                  <span class="icon is-small is-left">
                      <icono name="alternate_email"></icono>
                  </span>

              </p>
          </div>


              <div class="divider is-size-1"></div>
              <btn type="submit" c_class="is-primary is-fullwidth" text="Obtener enlace de recuperación"></btn>
      </form>

    </div>

</template>

        <script>
            import icono from './ui/Icon.vue';
            import btn from './ui/Button.vue';
            export default {
                name: 'recover-password',
                components: {
                    icono,
                    btn
                },
                props: {
                  c_action:String,
                  c_method:String,
                  c_message:String,
                  c_type:String,
                },
                data() {
                    return {}
                }
            }
        </script>

        <style lang="scss" scoped="scoped">
          .notification{
            color:white;
          }
          small{
            display:block;
            margin-bottom:.5rem;
          }
        </style>
