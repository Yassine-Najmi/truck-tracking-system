<script setup>
import { useForm } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";
const form = useForm({
    full_name: null,
    code: null,
    adresse: null,
    phone: null,
    numero_2: null,
    cni: null,
    cnss: null,
});
</script>

<template>
    <form @submit.prevent="form.post(route('admin.driver.store'))">
        <div class="grid gap-4 mb-4 sm:grid-cols-2">
            <div>
                <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Driver name<span class="text-red-500"> *</span></label
                >
                <input
                    type="text"
                    v-model="form.full_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Driver name"
                />
                <InputError :message="form.errors.full_name" class="mt-2" />
            </div>
            <div>
                <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Code<span class="text-red-500"> *</span></label
                >
                <input
                    type="text"
                    v-model="form.code"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Code"
                />
                <InputError :message="form.errors.code" class="mt-2" />
            </div>
            <div class="sm:col-span-2">
                <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Address</label
                >
                <input
                    type="text"
                    v-model="form.adresse"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Address"
                />
                <InputError :message="form.errors.adresse" class="mt-2" />
            </div>
            <div>
                <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Phone number N°1</label
                >
                <input
                    type="text"
                    v-model="form.phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Phone N°1"
                />
                <InputError :message="form.errors.phone" class="mt-2" />
            </div>
            <div>
                <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Phone number N°2</label
                >
                <input
                    type="text"
                    v-model="form.numero_2"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Phone N°2"
                />
                <InputError :message="form.errors.numero_2" class="mt-2" />
            </div>
            <div>
                <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >CNI</label
                >
                <input
                    type="text"
                    v-model="form.cni"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="CNI"
                />
                <InputError :message="form.errors.cni" class="mt-2" />
            </div>
            <div>
                <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >CNSS</label
                >
                <input
                    type="text"
                    v-model="form.cnss"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="CNSS"
                />
                <InputError :message="form.errors.cnss" class="mt-2" />
            </div>
        </div>
        <button
            type="submit"
            :disabled="form.processing"
            class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
        >
            <svg
                class="w-6 h-6 mr-1 -ml-1"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    fill-rule="evenodd"
                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                    clip-rule="evenodd"
                ></path>
            </svg>
            Add new Driver
        </button>
    </form>
</template>
