import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { firstValueFrom, Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ProductoService {

  private url = 'http://127.0.0.1:8000/api';
  constructor(private http: HttpClient) { }

  public getUser(){ Observable<any>
    return this.http.get<any>(`${this.url}/user`);
  }
  public getProductos() {
    return this.http.get<any>(`${this.url}/products`);
  }
  createProduct(formValue: any){
    return this.http.post<any>(`${this.url}/store`, formValue);
  }
  deleteProduct(id: any){
    return this.http.delete<any>(`${this.url}/products?id=${id}`);
  }
  imageProduct(){
    return this.http.get<any>(`${this.url}/images`);
  }
  updateProduct(formValue: any,id: any){
    return firstValueFrom(this.http.patch(`${this.url}/update?id=${id}`, formValue));
  }

}
