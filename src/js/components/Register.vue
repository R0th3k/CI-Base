<template>

    <div class="auth auth-register">

        <h4 class="subtitle is-size-4">Crea tu cuenta</h4>

        <div class="divider is-size-1"></div>
        <form :action="this.c_action" :method="this.c_method">

            <div :class="'notification is-'+this.c_type" v-if="this.c_message != 'NULL'">
                <div v-html="this.c_message"> </div>
            </div>

            <div class="field">

                <div class="field-body">
                    <div class="field">
                        <small>
                            <label for="user_name">Nombre</label>
                        </small>
                        <p class="control is-expanded has-icons-left">
                            <input id="user_name" name="user_name" class="input" type="text" placeholder="Nombre" required>
                                <span class="icon is-small is-left">
                                    <icon name="account_circle"></icon>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <small>
                                <label for="user_lastname">Apellidos</label>
                            </small>
                            <p class="control is-expanded has-icons-left has-icons-right">
                                <input
                                    id="user_lastname"
                                    name="user_lastname"
                                    class="input"
                                    type="text"
                                    placeholder="Apellidos" required>
                                    <span class="icon is-small is-left">
                                        <icon name="account_circle"></icon>
                                    </span>
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-check"></i>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <small>
                        <label for="user_phone">Teléfono</label>
                    </small>
                    <div class="field">
                        <p class="control has-icons-left has-icons-right">
                            <input
                                name="user_phone"
                                id="user_phone"
                                class="input"
                                type="tel"
                                placeholder="Teléfono"
                                required>
                                <span class="icon is-small is-left">
                                    <icon name="phone"></icon>
                                </span>

                            </p>
                        </div>

                        <small>
                            <label for="user_email">Correo electrónico</label>
                        </small>
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input
                                    name="user_email"
                                    id="user_email"
                                    class="input"
                                    type="email"
                                    placeholder="Correo"
                                    required>
                                    <span class="icon is-small is-left">
                                        <icon name="alternate_email"></icon>
                                    </span>

                                </p>
                            </div>

                            <small>
                                <label for="user_password">Contraseña</label>
                            </small>
                            <div class="field">
                                <div class="control has-icons-left">

                                    <input
                                        name="user_password"
                                        id="user_password"
                                        class="input"
                                        :type="(this.visibilityPassword) ? 'text' : 'password'"
                                        placeholder="Contraseña"
                                        required>

                                        <span class="icon is-small is-left">
                                            <icon name="lock"></icon>
                                        </span>

                                    </div>

                                </div>

                                <div
                                    class="icon is-small is-right toggle-password-visibility is-pulled-right"
                                    v-if="!visibilityPassword"
                                    @click="visibilityPassword = !visibilityPassword">
                                    <icon name="visibility_off"></icon>
                                </div>
                                <div
                                    class="icon is-small is-right toggle-password-visibility is-pulled-right"
                                    v-if="visibilityPassword"
                                    @click="visibilityPassword = !visibilityPassword">
                                    <icon name="visibility"></icon>
                                </div>
                                <div class="is-clearfix"></div>



                                <div class="divider is-size-1"></div>
                                <btn
                                    type="submit"
                                    c_class="is-primary is-fullwidth"
                                    text="Registrarme"></btn>
                            </form>

                        </div>

                    </template>

                    <script>
                        import icon from './ui/Icon.vue';
                        import btn from './ui/Button.vue';
                        export default {
                            name: 'register',
                            components: {
                                icon,
                                btn
                            },
                            props: {
                                c_action: String,
                                c_method: String,
                                c_message: String,
                                c_type: String
                            },
                            data() {
                                return {
                                  visibilityPassword: false,
                                  hiddenAlert: false,
                                  }
                            }
                        }
                    </script>

                    <style lang="scss" scoped="scoped">
                        .notification {
                            color: white;
                        }
                        .toggle-password-visibility {
                            cursor: pointer;
                            margin-top: -14px;
                            margin-right: 7px;
                        }
                        small {
                            display: block;
                            margin-bottom: 0.5rem;
                        }
                    </style>
