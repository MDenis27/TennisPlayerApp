import { Injectable } from '@angular/core';
import {HttpClient, HttpErrorResponse, HttpHeaders, HttpParams} from '@angular/common/http';
import {Router} from '@angular/router';
import {catchError} from 'rxjs/operators';
import {Observable, Subject, throwError} from 'rxjs';
import {Racket, TennisString, Customer} from "./interface/interface.component";

@Injectable({
  providedIn: 'root'
})
export class PersonService {

  public ip = "http://127.0.0.1:8000";

  constructor(private http: HttpClient, private router: Router) { }

  getHomeJson() {
    return this.http.get(this.ip + '/api').pipe(
        catchError(this.handelError));
  }

  GetPerson(id: number) {
    return this.http.get(this.ip + '/api/person/' + id.toString()).pipe(
        catchError(this.handelError));
  }

  createNewString(newString : TennisString){
    let url = this.ip + "/api/addstring";
    return this.http.post(url,newString).pipe(catchError(this.handelError));
  }

  createNewRacket(newRacket : Racket){
    let url = this.ip + "/api/addracket";
    return this.http.post(url, newRacket).pipe(catchError(this.handelError));
  }

  createNewCustomer(customer : Customer){
    let url = this.ip + "/api/addperson";
    return this.http.post(url, customer).pipe(catchError(this.handelError));
  }

  deleteString(id : number){
    let url = this.ip + "/api/addstring/delete/" + id.toString();
    return this.http.delete(url).pipe(catchError(this.handelError))
  }

  deleteRacket(id : number){
    let url = this.ip + "/api/addracket/delete/" + id.toString();
    return this.http.delete(url).pipe(catchError(this.handelError))
  }

  deleteCustomer(id : number){
    let url = this.ip + "/api/delete/" + id.toString();
    return this.http.delete(url).pipe(catchError(this.handelError))
  }

  handelError(err) {
    if (err instanceof HttpErrorResponse) {
      return throwError(err.error.error);
    } else {
      return throwError(err.message);
    }
  }

}
