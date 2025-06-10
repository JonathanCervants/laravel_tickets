 <script setup>
 import AppLayout from '@/layouts/AppLayout.vue';
 import { Head } from '@inertiajs/vue3';

defineProps({
    product:{
        type: Array,
        required: true
    }
 })

 const breadcrumbs =[
    {title:'Produtos Papu', href: '/productos'}
]
</script>

<template>
    <Head title="Detalle Producto" />
    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
           Ticket:
        </div>
    </AppLayout>
</template>