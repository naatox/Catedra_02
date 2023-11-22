import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ProductosComponent } from './productos/productos.component';
import { CrearProductoComponent } from './crear-producto/crear-producto.component';
import { EditarProductoComponent } from './editar-producto/editar-producto.component';

const routes: Routes = [
  {path: '', redirectTo:'productos', pathMatch: 'full'},
  {path: 'productos', component: ProductosComponent },
  {path: 'productos/editar/:id', component: EditarProductoComponent },
  {path: 'productos/nuevo', component: CrearProductoComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
