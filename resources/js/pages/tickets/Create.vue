<script setup>
import AppLayout from '@/layouts/AppLayout.vue';
import { Head, router, useForm } from '@inertiajs/vue3';
import { Card,CardHeader,CardTitle,CardDescription,CardContent,CardFooter } from '@/components/ui/card';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Button } from '@/components/ui/button';
import { toast } from 'vue-sonner';

 const form = useForm({
  title: null,
  content: null,
})

function submit(){
  form.post(route('tickets.store'),{
    preserveScroll:true,
    onSuccess: () => toast.success('Producto Registrado')
  })
}

 const breadcrumbs =[
    {title:'Produtos Papu', href: '/tickets'}
]
</script>

<template>
    <Head title="Detalle Producto" />
    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <Card class="w-[350px]">
    <CardHeader>
      <CardTitle>Create Ticket</CardTitle>
      <CardDescription>Deploy your new project in one-click.</CardDescription>
    </CardHeader>
    <CardContent>
      <form @submit.prevent="submit">
        <div class="grid items-center w-full gap-4">
          <div class="flex flex-col space-y-1.5">
            <Label for="title">Name</Label>
            <Input id="title" v-model="form.title" placeholder="Name of your project" />
          </div>
          <div class="flex flex-col space-y-1.5">
            <Label for="content">Contenido</Label>
            <Input id="content" v-model="form.content" placeholder="Describe tu solicitud" />
            <!-- <Select>
              <SelectTrigger id="framework">
                <SelectValue placeholder="Select" />
              </SelectTrigger>
              <SelectContent position="popper">
                <SelectItem value="nuxt">
                  Nuxt
                </SelectItem>
                <SelectItem value="next">
                  Next.js
                </SelectItem>
                <SelectItem value="sveltekit">
                  SvelteKit
                </SelectItem>
                <SelectItem value="astro">
                  Astro
                </SelectItem>
              </SelectContent>
            </Select> -->
          </div>
        </div>
        <button type="submit">Deploy</button>

      </form>
    </CardContent>
    <CardFooter class="flex justify-between px-6 pb-6">
      <Button variant="outline">
        Cancel
      </Button>
    </CardFooter>
  </Card>
        </div>
    </AppLayout>
</template>