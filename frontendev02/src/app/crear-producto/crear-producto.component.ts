import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { ProductoService } from '../services/producto.service';
import { FormGroup, FormControl } from '@angular/forms';
@Component({
  selector: 'app-crear-producto',
  templateUrl: './crear-producto.component.html',
  styleUrls: ['./crear-producto.component.css']
})
export class CrearProductoComponent {
  name: string ='' ;
  description: string = '';
  price: number = 0;
  imageName: string = '';

  form: FormGroup;
  constructor(private productoService: ProductoService,private router: Router) {
    this.form = new FormGroup({
      name: new FormControl(),
      description: new FormControl(),
      price: new FormControl(),
      imageName: new FormControl()
    });
  }

  async onSubmit(){
    this.productoService.createProduct(this.form.value).subscribe((data) => {
      console.log(data);
      this.router.navigate(['/productos']);
    });


  }

}
