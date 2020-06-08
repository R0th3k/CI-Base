<template>

    <div class="new-user">

        <form :action="this.c_action" :method="this.c_method">

            <div :class="'notification is-'+this.c_type" v-if="this.c_message != 'NULL'">
                <div v-html="this.c_message"></div>
            </div>

            <div class="field">

                <div class="field-body">
                    <div class="field">
                        <small>
                            <label for="user_name">Nombre</label>
                        </small>
                        <p class="control is-expanded has-icons-left">
                            <input
                                id="user_name"
                                name="user_name"
                                class="input"
                                type="text"
                                :value="this.c_name"
                                required="required">
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
                                    :value="this.c_lastname"
                                    required="required">
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
                                :value="this.c_phone"
                                required="required">
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
                                    :value="this.c_email"
                                    disabled>
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
                                        type="text"
                                        :value="this.password"
                                        >

                                        <span class="icon is-small is-left">
                                            <icon name="lock"></icon>
                                        </span>



                                    </div>

                                </div>

                                <div
                                    class="icon is-small is-right generate-password is-pulled-right"
                                    @click="generatePassword(12)">
                                    <icon name="autorenew"></icon>
                                </div>

                                <div class="is-clearfix"></div>

                                <div class="field">
                                    <small>
                                        <label for="user_role">Rol de Usuario</label>
                                    </small>
                                    <div class="control">
                                        <div class="select">
                                            <select name="user_role" id="user_role">
                                                <option value="registered" :selected="(this.c_role == 'registered') ? 'selected' : ''">Registrado</option>
                                                <option value="admin" :selected="(this.c_role == 'admin') ? 'selected' : ''">Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="divider is-size-1"></div>
                                <btn
                                    type="submit"
                                    c_class="is-primary is-fullwidth"
                                    icon="save"
                                    text="Actualizar Usuario"></btn>
                            </form>

                        </div>

                    </template>

                    <script>
                        import icon from './ui/Icon.vue';
                        import btn from './ui/Button.vue';
                        export default {
                            name: 'new_user',
                            components: {
                                icon,
                                btn
                            },
                            props: {
                                c_action: String,
                                c_method: String,
                                c_message: String,
                                c_type: String,
                                c_name: String,
                                c_lastname: String,
                                c_phone: String,
                                c_email: String,
                                c_role: String,
                            },
                            data() {
                                return {
                                  password:''
                                }
                            },
                            mounted: function(){
                            },
                            methods: {
                                generatePassword(length) {
                                    var result = '';
                                    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789#.@$%-';
                                    var charactersLength = characters.length;
                                    for (var i = 0; i < length; i++) {
                                        result += characters.charAt(Math.floor(Math.random() * charactersLength));
                                    }
                                    this.password = result;
                                }
                            }
                        }
                    </script>

                    <style lang="scss" scoped="scoped">
                        .notification {
                            color: white;
                        }
                        .generate-password {
                            cursor: pointer;
                            //margin-top: -14px;
                            margin-right: 7px;
                        }
                        small {
                            display: block;
                            margin-bottom: 0.5rem;
                        }
                        .select {
                            width: 100%;
                            select {
                                width: 100%;
                            }
                        }
                    </style>
