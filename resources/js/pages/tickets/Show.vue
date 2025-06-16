 <script setup>
 import AppLayout from '@/layouts/AppLayout.vue';
 import { Head } from '@inertiajs/vue3';
 import { Card,CardHeader,CardTitle,CardDescription,CardContent,CardFooter } from '@/components/ui/card';

defineProps({
    ticket:{
        type: Object,
        required: true
    }
 })

 const breadcrumbs =[
    {title:'Tickets Papu / Detalle', href: '/tickets'}
]

</script>

<template>
    <Head title="Detalle Ticket" />
    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <Card class="w-[350px]">
    <CardHeader>
      <CardTitle>:C Ticket Nuevo</CardTitle>
      <CardDescription>Deploy your new project in one-click.</CardDescription>
    </CardHeader>
    <CardContent>
              <div class="flex items-center space-x-4">
                <div class="w-32 font-semibold">Ticket:</div>
                <div>{{ ticket.title }}</div>
              </div>
              <div class="flex items-center space-x-4">
                <div class="w-32 font-semibold">Detalle:</div>
                <div>{{ ticket.content }}</div>
              </div>
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