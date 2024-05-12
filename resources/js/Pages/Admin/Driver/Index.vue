<script setup>
import AdminLayout from "../Components/AdminLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import DriverList from "./DriverList.vue";
</script>

<template>
    <Head title="Drivers" />
    <AdminLayout>
        <DriverList></DriverList>
    </AdminLayout>
</template>
