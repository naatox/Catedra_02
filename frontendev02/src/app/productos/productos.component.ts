import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { ProductoService } from '../services/producto.service';

@Component({
  selector: 'app-productos',
  templateUrl: './productos.component.html',
  styleUrls: ['./productos.component.css']
})
export class ProductosComponent {
  data: any[] = [];
  image: string = '';
  userData: any[] = [];
  constructor(private productoService: ProductoService, private route: Router) { }

  ngOnInit(){

    this.products();
    this.user();



  }
  products(){
    this.productoService.getProductos().subscribe((data: any) => {
      this.data = data;

    });
  }
  user(){
    this.productoService.getUser().subscribe((data) => {
      console.log(data);
      this.userData = data;
      return this.userData;

    });
  }
  editProduct(id: any){

    this.route.navigate(['/productos/editar', id]);

  }

  newProduct(){
    this.route.navigate(['/productos/nuevo']);
  }

  deleteProduct(id: any){
    this.productoService.deleteProduct(id).subscribe((data) => {
      console.log(data);
      this.products();
    });
  }


}
