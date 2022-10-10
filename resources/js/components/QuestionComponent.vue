<template>
    <Form as="div" :validation-schema="schema" v-slot="{ errors }">
        <div class="space-y-4">
            <div class="form-group flex flex-col">
                <span class="text-sm text-pink-700">{{ errors.judul }}</span>
                <label for="judul">Judul Postingan</label>
                <Field id="judul"
                    class="form-control p-2 focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-800 transition duration-300"
                    name="judul" />
            </div>
            <div class="form-group flex flex-col">
                <label for="slug">Slug</label>
                <Field id="slug" readonly class="form-control focus:outline-none read-only:bg-gray-200 p-2"
                    name="slug" />
            </div>
            <div class="form-group flex flex-col">
                <label for="category" class="mb-2">Category</label>
                <div class="dropDown">
                    <multiselect id="category" v-model="categories" :options="options" :multiple="true" max="2"
                        :close-on-select="true" placeholder="Pilih kategori" @tag="addTag" label="name_category"
                        track-by="id">
                    </multiselect>
                    <input type="hidden" name="category_id" :value="selectedCategory">
                    <pre class="language-json"><code>{{ value }}</code></pre>
                </div>
            </div>
        </div>
    </Form>
</template>

<script>
    import {
        Field,
        Form,
        ErrorMessage,
    } from 'vee-validate'
    import * as Yup from "yup"
    import Multiselect from 'vue-multiselect'
    export default {
        data() {
            return {
                categories: [],
                options: []
            }
        },
        setup() {
            const schema = Yup.object().shape({
                judul: Yup.string().max(230, "Maksimal Judul Adalah 230 Karakter atau 30 Kata").required(
                    "Judul Tidak Boleh Kosong")
            })

            return {
                schema
            };
        },
        components: {
            Form,
            Field,
            ErrorMessage,
            Multiselect
        },
        computed: {
            selectedCategory: function () {
                let selectedCategory = [];
                this.categories.forEach((item) => {
                    selectedCategory.push(item.id);
                });
                return selectedCategory;
            }
        },
        methods: {
            addTag(newTag) {
                const tag = {
                    name: newTag,
                    code: newTag.substring(0, 2) + Math.floor((Math.random() * 10000000))
                }
                this.options.push(tag)
                this.categories.push(tag)
            },
            async getCategories() {
                await axios.get('/api/get/category')
                    .then((res) => {
                        this.options = res.data.cat
                    })
            }
        },
        created() {
            this.getCategories()
        },
        mounted() {
            const judul = document.querySelector('#judul');
            const slug = document.querySelector('#slug');

            judul.addEventListener("change", function () {
                let preslug = judul.value;
                preslug = preslug.replace(/ /g,"-");
                slug.value = preslug.toLowerCase();
            });
        }
    }

</script>
<style>

</style>
