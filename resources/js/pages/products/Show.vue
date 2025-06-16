<script setup>
import AppLayout from '@/layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Card,CardHeader,CardTitle,CardDescription,CardContent,CardFooter } from '@/components/ui/card';
defineProps({
    product:{
        type: Array,
        required: true
    }
 })

const breadcrumbs =[
    {title:'Productos Papudante', href: '/productos'}
]
</script>

<template>
    <Head title="Detalle Producto" />
    <AppLayout :breadcrumbs="breadcrumbs">
      <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
        <div class="flex w-full max-w-2xl flex-col">
          <Card class="mt-3">
            <CardHeader>
              <CardTitle>A por ellos soy el acorazado</CardTitle>
              <CardDescription>Por julio voltio.</CardDescription>
            </CardHeader>
            <CardContent>
              <div class="flex items-center space-x-4">
                <div class="w-32 font-semibold">Categoría</div>
                <div>{{ product.name }}</div>
              </div>
              <div class="flex items-center space-x-4">
                <div class="w-32 font-semibold">Categoría</div>
                <div>{{ product.name }}</div>
              </div>
            </CardContent>
            <CardFooter class="flex justify-between px-6 pb-6">
              <Button variant="outline">
                Cancelar
              </Button>
              <Button>Deploy</Button>
            </CardFooter>
          </Card>
        </div>
      </div>
    </AppLayout>
</template>