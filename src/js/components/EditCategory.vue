<template>

    <div class="new-category">

        <form :action="this.c_action" :method="this.c_method">

            <div :class="'notification is-'+this.c_type" v-if="this.c_message != 'NULL'">
                <div v-html="this.c_message"></div>
            </div>



                    <small>
                        <label for="category_name">Nombre de la categoría</label>
                    </small>
                    <div class="field">
                        <p class="control has-icons-left has-icons-right">
                            <input
                                name="category_name"
                                id="category_name"
                                class="input"
                                type="text"
                                :value="this.c_name"
                                required="required">
                                <span class="icon is-small is-left">
                                    <icon name="bookmark"></icon>
                                </span>

                            </p>
                        </div>



                                <div class="divider is-size-1"></div>
                                <btn
                                    type="submit"
                                    c_class="is-primary is-fullwidth"
                                    icon="save"
                                    text="Actualizar Categoría"></btn>
                            </form>

                        </div>

                    </template>

                    <script>
                        import icon from './ui/Icon.vue';
                        import btn from './ui/Button.vue';
                        export default {
                            name: 'edit_category',
                            components: {
                                icon,
                                btn
                            },
                            props: {
                                c_action: String,
                                c_method: String,
                                c_message: String,
                                c_type: String,
                                c_name:String
                            },
                            data() {

                            },
                            mounted: function () {

                            },
                            methods: {

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

                    </style>
