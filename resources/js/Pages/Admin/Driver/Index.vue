<script setup>
import AdminLayout from "../Components/AdminLayout.vue";
import Table from "@/Components/Table.vue";
import { Head } from "@inertiajs/vue3";
import CreateDriver from "./CreateDriver.vue";
import DefaultModal from "@/Components/DefaultModal.vue";

defineProps({
    drivers: {
        type: Object,
        required: true,
    },
});

const columns = [
    "full_name",
    "code",
    "adresse",
    "phone",
    "numero_2",
    "cni",
    "cnss",
];

const colNames = [
    "Nom Complet",
    "Code",
    "Adresse",
    "Num Téléphone 1",
    "Num Téléphone 2",
    "CNI",
    "CNSS",
];
const actions = ["show", "edit", "destroy"];

const title = "driver";
</script>

<template>
    <Head title="Drivers" />
    <AdminLayout>
        <Table
            :items="drivers"
            :title="title"
            :columns="columns"
            :colNames="colNames"
            :actions="actions"
        >
        </Table>
        <DefaultModal>
            <template #title> {{ title }} </template>
            <template #body>
                <CreateDriver></CreateDriver>
            </template>
        </DefaultModal>
    </AdminLayout>
</template>
