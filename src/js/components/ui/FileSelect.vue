<template>
    <div>

        <div v-show="!image">
            <label :for="this.name">Selecciona una Imagen</label>
            <br>
                <input type="file" @change="onFileChange" :id="this.name" :name="this.name" accept="image/png, image/jpeg">
        </div>

        <div v-show="image">
            <img class="thumb" :src="image"/>
            <button class="button is-danger is-rounded" @click="removeImage">
                <icon name="delete_forever" color="white"></icon>
            </button>
        </div>

        </div>
        </template>

        <script>
            import icon from './Icon.vue';
            export default {
                components: {
                    icon
                },
                data() {
                    return {image: ''}
                },

                props: {
                    name: String
                },
                methods: {
                    onFileChange(e) {
                        var files = e.target.files || e.dataTransfer.files;
                        if (!files.length)
                            return;
                        this.createImage(files[0]);
                    },
                    createImage(file) {
                        var image = new Image();
                        var reader = new FileReader();
                        var vm = this;

                        reader.onload = (e) => {
                            vm.image = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    },
                    removeImage: function (e) {
                        this.image = '';
                    }
                }

            }
        </script>

        <style lang="scss" scoped="scoped">

            .thumb {
                width: 160px;
                margin: auto;
                display: block;
                margin-bottom: 10px;
            }
            button {
                margin: auto;
                display: table;
            }
        </style>
