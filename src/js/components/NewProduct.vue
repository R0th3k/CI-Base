<template>

    <div class="new-user">

        <form
            :action="this.c_action"
            :method="this.c_method"
            enctype="multipart/form-data">

            <div :class="'notification is-'+this.c_type" v-if="this.c_message != 'NULL'">
                    <div v-html="this.c_message"></div>
                </div>

            <div class="columns">

                <div class="column is-8">
                    <div class="card">
                        <div class="card-content">
                            <div class="field">

                                <div class="field-body">
                                    <div class="field">
                                        <small>
                                            <label for="product_name">Nombre</label>
                                        </small>
                                        <p class="control is-expanded has-icons-left">
                                            <input
                                                id="product_name"
                                                name="product_name"
                                                class="input"
                                                type="text"
                                                placeholder="Nombre"
                                                required="required">
                                                <span class="icon is-small is-left">
                                                    <icon name="article"></icon>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="field">
                                            <small>
                                                <label for="product_model">Modelo</label>
                                            </small>
                                            <p class="control is-expanded has-icons-left has-icons-right">
                                                <input
                                                    id="product_model"
                                                    name="product_model"
                                                    class="input"
                                                    type="text"
                                                    placeholder="Modelo"
                                                    required="required">
                                                    <span class="icon is-small is-left">
                                                        <icon name="note"></icon>
                                                    </span>
                                                    <span class="icon is-small is-right">
                                                        <i class="fas fa-check"></i>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="divider is-size-1"></div>

                                    <div class="filed">
                                        <small>
                                            <label for="product_description">Descripción</label>
                                        </small>
                                        <textarea
                                            class="textarea"
                                            placeholder="Descripción"
                                            rows="10"
                                            id="product_description"
                                            name="product_description"></textarea>
                                    </div>
                                    <div class="divider is-size-1"></div>

                                    <div class="divider is-size-1"></div>

                                </div>
                            </div>
                        </div>
                        <div class="column is-4">

                            <div class="card">
                                <div class="card-content">
                                    <file_select name="product_image"></file_select>
                                    <div class="divider is-size-1"></div>
                                </div>
                            </div>
                            <!--/card-->
                            <div class="card">
                                <div class="card-content">
                                    <div class="field">

                                        <div class="field-body">
                                            <div class="field">
                                                <small>
                                                    <label for="product_price">Precio</label>
                                                </small>
                                                <p class="control is-expanded has-icons-left">
                                                    <input
                                                        id="product_price"
                                                        name="product_price"
                                                        class="input"
                                                        type="text"
                                                        placeholder="Precio"
                                                        >
                                                        <span class="icon is-small is-left">
                                                            <icon name="monetization_on"></icon>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="field">
                                                    <small>
                                                        <label for="product_price_discount">Precio con descuento</label>
                                                    </small>
                                                    <p class="control is-expanded has-icons-left has-icons-right">
                                                        <input
                                                            id="product_price_discount"
                                                            name="product_price_discount"
                                                            class="input"
                                                            type="text"
                                                            placeholder="Precio Descuento">
                                                            <span class="icon is-small is-left">
                                                                <icon name="monetization_on"></icon>
                                                            </span>
                                                            <span class="icon is-small is-right">
                                                                <i class="fas fa-check"></i>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--/card-->
                                    <div class="card">
                                        <div class="card-content">

                                            <div class="field">

                                                <div class="field-body">
                                                    <div class="field">
                                                        <small>
                                                            <label for="category_id">Categoria</label>
                                                        </small>
                                                        <div class="select">
                                                            <select name="category_id" id="category_id">
                                                                <option
                                                                    v-for="category in this.categories"
                                                                    :key="category.id_category"
                                                                    :value="category.id_category">{{category.category_name}}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="field">
                                                        <small>
                                                            <label for="brand_id">Marca</label>
                                                        </small>
                                                        <div class="select">
                                                            <select name="brand_id" id="brand_id">
                                                                <option
                                                                    v-for="brand in this.brands"
                                                                    :key="brand.id_brand"
                                                                    :value="brand.id_brand">{{brand.brand_name}}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--/card-->
                                    <btn
                                        type="submit"
                                        c_class="is-primary is-fullwidth"
                                        icon="save"
                                        text="Guardar Producto"></btn>
                                </div>
                            </div>

                        </form>

                    </div>

                </template>

                <script>

                    import axios from 'axios';

                    import icon from './ui/Icon.vue';
                    import btn from './ui/Button.vue';
                    import file_select from './ui/FileSelect.vue';

                    export default {
                        name: 'new_product',
                        components: {
                            icon,
                            btn,
                            file_select
                        },
                        props: {
                            c_action: String,
                            c_method: String,
                            c_message: String,
                            c_type: String
                        },
                        data() {
                            return {categories: [], brands: []}
                        },
                        created: function () {
                            this.getCategories();
                            this.getBrands();
                        },
                        mounted: function () {},
                        methods: {
                            async getCategories() {
                                try {
                                    //const entradasDB = await this.axios.get(apiPosts);
                                    const categories = await this
                                        .axios
                                        .get('https://aluminiotrebol.com/api/categories')
                                        .then(response => response.data)
                                    this.categories = categories;
                                    console.log(categories);
                                } catch (e) {
                                    //do somenthing with errors
                                    console.error(e)
                                }
                            },
                            async getBrands() {
                                try {
                                    //const entradasDB = await this.axios.get(apiPosts);
                                    const brands = await this
                                        .axios
                                        .get('https://aluminiotrebol.com/api/brands')
                                        .then(response => response.data)
                                    this.brands = brands;
                                    console.log(brands);
                                } catch (e) {
                                    //do somenthing with errors
                                    console.error(e)
                                }
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
                    .navbar-link:not(.is-arrowless)::after,
                    .select:not(.is-multiple):not(.is-loading)::after {
                        margin-top: -1.3rem;
                    }

                </style>
