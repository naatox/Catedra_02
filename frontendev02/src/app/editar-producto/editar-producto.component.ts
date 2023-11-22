import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { ProductoService } from '../services/producto.service';
import { ActivatedRoute } from '@angular/router';
import { FormGroup, FormControl } from '@angular/forms';

@Component({
  selector: 'app-editar-producto',
  templateUrl: './editar-producto.component.html',
  styleUrls: ['./editar-producto.component.css']
})
export class EditarProductoComponent {

  private id = this.route.snapshot.paramMap.get('id');
  name: string ='' ;
  description: string = '';
  price: number = 0;

  form: FormGroup;
  constructor(private productoService: ProductoService,private router: Router, private route: ActivatedRoute,) {
    this.form = new FormGroup({
      name: new FormControl(),
      description: new FormControl(),
      price: new FormControl(),

    });
  }


onSubmit(){
  const response = this.productoService.updateProduct(this.form.value, this.id);
  setTimeout(() => {
    this.router.navigate(['/productos']);
  }, 2000);

}
}
