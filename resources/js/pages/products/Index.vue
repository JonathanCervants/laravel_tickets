<script setup>
import AppLayout from  '@/layouts/AppLayout.vue';
import { Head, Link, router } from '@inertiajs/vue3';
import { TableBody, TableRow, TableCell, Table } from '@/components/ui/table';
import { Button } from '@/components/ui/button';

defineProps({
    products: {
        type:Array,
        required: true
    }
})
const breadcrumbs =[
    {title:'Produtos Papu', href: '/productos'}
]
const deleteProduct = (id)=>{
    if(confirm("Estas seguro eliminar")){
        router('/productos')
    }else{
        console.log("flask")    
    }
    

}

</script>

<template>
    <Head title="Productos" />
    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <h1>Producs :C </h1>
            <Table>
                <TableBody>
                    <TableRow v-for="product in products" :key="product.id">
                        <TableCell>{{ product.name }}</TableCell>
                        <TableCell>{{ product    }}</TableCell>
                     <TableCell>
                            <Link :href="route('productos.show',product)">Ver</Link>
                            <Button variant="destructive" @click="deleteProduct(product.id)">Eliminar</Button>
                        </TableCell>
                    </TableRow>
                </TableBody>
            </Table>
        </div>
    </AppLayout>
</template>