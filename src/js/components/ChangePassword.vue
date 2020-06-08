<template>

    <div class="auth">
        <form :action="this.c_action" :method="this.c_method">

            <div :class="'notification is-'+this.c_type" v-if="this.c_message != 'NULL'">
                <div v-html="this.c_message"></div>
            </div>

            <small>
                <label for="user_password">Escribe la nueva contraseña:</label>
            </small>
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <input
                        name="user_password"
                        id="user_password"
                        class="input"
                        :type="(this.visibilityPassword) ? 'text' : 'password'"
                        placeholder="Nueva contraseña"
                        required="required">
                        <span class="icon is-small is-left">
                            <icon name="lock"></icon>
                        </span>

                    </p>
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
                <btn type="submit" c_class="is-primary is-fullwidth" text="Guardar mi nueva contraseña"></btn>
            </form>

        </div>

    </template>

    <script>
        import icon from './ui/Icon.vue';
        import btn from './ui/Button.vue';
        export default {
            name: 'change-password',
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
                return {visibilityPassword: false}
            }
        }
    </script>

    <style lang="scss" scoped="scoped">
        .notification {
            color: white;
        }
        small {
            display: block;
            margin-bottom: 0.5rem;
        }
        .toggle-password-visibility {
            cursor: pointer;
            margin-top: -14px;
            margin-right: 7px;
        }
    </style>
