<script setup>
import AppLayout from  '@/layouts/AppLayout.vue';
import { Head, Link, router } from '@inertiajs/vue3';
import { TableBody, TableRow, TableCell, Table } from '@/components/ui/table';
import { Button } from '@/components/ui/button';

defineProps({
    tickets: {
        type:Array,
        required: true
    }
})
const breadcrumbs =[
    {title:'Tickets Papu', href: '/tickets'}
]
const deleteProduct = ($id)=>{
    if(confirm("Estas seguro eliminar")){
        router('/productos')
    }else{
        console.log("flask")    
    }
}

</script>

<template>
    <Head title="Tickets" />
    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <Link variant="destructive" :href="route('tickets.create')">Registrar</Link>
            <h1>Producs :C </h1>
            <Table>
                <TableBody>
                    <TableRow v-for="ticket in tickets" :key="ticket.id">
                        <TableCell>{{ ticket.name }}</TableCell>
                        <TableCell>{{ ticket.content }}</TableCell>
                        <TableCell>{{ ticket.status == '0' ? 'Pendiente' : 'Cerrado'}}</TableCell>
                     <TableCell>
                            <Link :href="route('tickets.show',ticket.id)">Ver</Link>
                            <Button variant="destructive" @click="deleteTicket(ticket.id)">Eliminar</Button>
                        </TableCell>
                    </TableRow>
                </TableBody>
            </Table>
        </div>
    </AppLayout>
</template>