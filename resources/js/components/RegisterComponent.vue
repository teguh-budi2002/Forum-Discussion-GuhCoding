<template>
    <Form as="div" :validation-schema="schema" v-slot="{ errors }">
        <div class="form-group mb-2 relative">
            <span class="text-sm text-pink-700">{{ errors.name }}</span>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Username
            </label>
            <Field
                class="border-none custom-form rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none"
                name="name" id="username" type="text" placeholder="Username...." />
            <span class="border-custom"></span>
        </div>
        <div class="form-group mb-2 relative">
            <span class="text-sm text-pink-700">{{ errors.email }}</span>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <Field
                class="border-none custom-form rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none"
                name="email" id="email" type="email" placeholder="Email...." />
            <span class="border-custom"></span>
        </div>
        <div class="form-group mb-2 relative">
            <span class="text-sm text-pink-700">{{ errors.password }}</span>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <Field
                class="border-none custom-form rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none"
                name="password" id="password" type="password" placeholder="Password...." />
            <span class="border-custom"></span>
        </div>
        <div class="form-group mb-2 relative">
            <span class="text-sm text-pink-700">{{ errors.password_confirmation }}</span>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password_konfirm">
                Konfirmasi Password
            </label>
            <Field
                class="border-none custom-form rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none"
                name="password_confirmation" id="password_konfirm" type="password"
                placeholder="Ketik ulang password kamu...." />
            <span class="border-custom"></span>
        </div>
        <div class="form-group mb-2 relative">
            <span class="text-sm text-pink-700">{{ errors.phone }}</span>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                Phone
            </label>
            <Field
                class="phone-input border-none custom-form rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none"
                name="phone" id="phone" type="tel" placeholder="ex(+62-8123456789))" />
            <span class="border-custom"></span>
        </div>
        <div class="form-group space-x-3">
            <span class="text-gray-700">Gender:</span>
            <input type="radio" name="gender" class="cursor-pointer" value="Laki-Laki" id="laki">
            <label for="laki" class="ml-1">Laki-Laki</label>
            <input type="radio" name="gender" class="cursor-pointer" value="Perempuan" id="perempuan">
            <label for="perempuan" class="ml-1">Perempuan</label>
        </div>
    </Form>
</template>

<script>
    import {
        Field,
        Form,
        ErrorMessage,
        useField,
    } from 'vee-validate';
    import * as Yup from "yup";
    import {
        onMounted
    } from '@vue/runtime-core';
    export default {
        setup() {
            const regexIndPhone = /^(\+62)[\s-]0?8[1-9][0-9]{6,9}$/g
            const spaceNotAllow = /^\S*$/
            const emailRegex = /^[a-z0-9._]+@gmail\.[a-z]{2,}$/gm

            const schema = Yup.object().shape({
                name: Yup.string().matches(spaceNotAllow, "Username Tidak Boleh Menggunakan Spasi").min(12, 'Username harus memiliki minimal 12 karakter').required(
                    'Username Tidak Boleh Kosong').label("Username"),
                email: Yup.string().required('Email Tidak Boleh Kosong').email('Kesalahan pada format email').matches(emailRegex, "Email Harus Terdaftar Pada Google Email").label(
                    "Email"),
                password: Yup.string().min(8, 'Password harus memiliki minimal 8 karater').required(
                    'Password Tidak Boleh Kosong'),
                password_confirmation: Yup.string()
                    .required('Konfirmasi Tidak Boleh Kosong')
                    .oneOf([Yup.ref("password")], "Password Konfirmasi Tidak Cocok"),
                phone: Yup.string().required('Nomor Tidak Boleh Kosong').matches(regexIndPhone,
                    "Format Nomor Yang Anda Masukkan Salah")
            });

            onMounted(() => {
                const phoneInputField = document.querySelector(".phone-input");
                const phoneInput = window.intlTelInput(phoneInputField, {
                    initialCountry: "id",
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                });
            })
            return {
                schema,
                spaceNotAllow,
                regexIndPhone,
                emailRegex
            };
        },
        components: {
            Field,
            Form,
            ErrorMessage,
        }
    }

</script>

<style>
    .custom-form~.border-custom {
        position: absolute;
        bottom: 0%;
        left: 50%;
        width: 0;
        height: 2px;
        background-color: #3399FF;
        transition: 0.4s;
    }

    .custom-form:focus~.border-custom {
        width: 100%;
        left: 0;
    }

</style>
