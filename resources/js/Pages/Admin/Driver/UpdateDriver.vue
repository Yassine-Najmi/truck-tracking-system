<script setup>
import { useForm } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";

const props = defineProps({
    driver: Object,
    title: String,
});

const title = props.title;

const form = useForm({
    full_name: props.driver?.full_name || "",
    code: props.driver?.code || "",
    adresse: props.driver?.adresse || "",
    phone: props.driver?.phone || "",
    numero_2: props.driver?.numero_2 || "",
    cni: props.driver?.cni || "",
    cnss: props.driver?.cnss || "",
    id: props.driver?.id || null,
});

const submitForm = () => {
    form.put(route("admin.driver.update", props.driver));
};
</script>

<template>
    <form @submit.prevent="submitForm">
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
        <div class="flex items-center space-x-4">
            <button
                type="submit"
                class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
            >
                Update {{ title }}
            </button>
        </div>
    </form>
</template>
