import { router } from '@inertiajs/vue3';
import { toast } from 'vue-sonner';

export const deleteProduct =($id)=>{
    if(confirm("Estas seguro eliminar")){
        router.delete(route('productos.destroy',$id),{
            preserveScroll : true,
            onSuccess: () => toast.success('Exitoso',{
                'description' => 'Producto eliminado.'
            })
        })
    }else{
        console.log("flask")    
    }
}