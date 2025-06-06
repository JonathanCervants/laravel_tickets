<script setup>
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Productos" />
    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <h1>Producs :C</h1>
            <Table>
                <TableBody>
                    <TableRow v-for="product in products" :key="product.id">
                        <TableCell>{{ product.name }}</TableCell>
                        <TableCell>{{ product.name }}</TableCell>
                        <TableCell>{{ product.name }}</TableCell>
                        <TableCell>{{ product.weigth }}</TableCell>
                        <TableCell>
                            <Link :href="route('products.show', product)">Ver</Link>
                        </TableCell>
                    </TableRow>
                </TableBody>
            </Table>
        </div>
    </AppLayout>
</template>