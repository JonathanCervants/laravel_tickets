<script setup>
import AppLayout from '@/layouts/AppLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { Input } from '@/components/ui/input';
import { InputError } from '@/components/ui/inputError';

defineProps({
    product:{
        type: Object,
        required: true
    }
 })

 const breadcrumbs =[
    {title:'Produtos Papu', href: '/productos'}
]

const form = useForm({
  title: '',
  content: ''
})
</script>

<template>
    <Head title="Añadir Producto" />
    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <Card class="w-[350px]">
    <CardHeader>
      <CardTitle>Ingresa tu Ticket</CardTitle>
      <CardDescription>Deploy your new project in one-click.</CardDescription>
    </CardHeader>
    <CardContent>
      <form>
        <div class="grid-w-full gap-">
          <Label name="name">Nombre</Label>

          <Label name="name">Nombre</Label>
        </div>
        <div class="flex justify-between items-center">
          <Button :disabled="formProcessing">Guardar</Button>
          <Link>Cancelar</Link>
        </div>
      </form>
    </CardContent>
    <CardFooter class="flex justify-between px-6 pb-6">
      <Button variant="outline">
        Cancel
      </Button>
      <Button>Deploy</Button>
    </CardFooter>
  </Card>
        </div>
    </AppLayout>
</template>