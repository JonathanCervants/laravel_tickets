<script setup>
import AppLayout from '@/layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Card,CardHeader,CardTitle,CardDescription,CardContent,CardFooter } from '@/components/ui/card';

import { Input } from '@/components/ui/input';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Textarea } from '@/components/ui/textarea';
import { Select } from '@/components/ui/select';
import { Ticket } from 'lucide-vue-next';

defineProps({
    Ticket:{
        type: Object,
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
            <Card class="w-[350px]">
    <CardHeader>
      <CardTitle>Create project</CardTitle>
      <CardDescription>Deploy your new project in one-click.</CardDescription>
    </CardHeader>
    <CardContent>
      <form>
        <div class="grid items-center w-full gap-4">
          <div class="flex flex-col space-y-1.5">
            <Label for="name">Name</Label>
            <Input id="name" placeholder="Name of your project" />
          </div>
          <div class="flex flex-col space-y-1.5">
            <Label for="framework">Framework</Label>
            <Select>
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
            </Select>
          </div>
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