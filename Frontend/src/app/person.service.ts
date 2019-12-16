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

  constructor(private http: HttpClient, private router: Router) { }

  getHomeJson() {
    return this.http.get('http://127.0.0.1:8000/api').pipe(
        catchError(this.handelError));
  }

  createNewString(newString : TennisString){
    let url = "http://127.0.0.1:8000/api/addstring";
    return this.http.post(url,newString).pipe(catchError(this.handelError));
  }

  createNewRacket(newRacket : Racket){
    let url = "http://127.0.0.1:8000/api/addracket";
    return this.http.post(url, newRacket).pipe(catchError(this.handelError));
  }

  createNewCustomer(customer : Customer){
    let url = "http://127.0.0.1:8000/api/addperson";
    return this.http.post(url, customer).pipe(catchError(this.handelError));
  }

  handelError(err) {
    if (err instanceof HttpErrorResponse) {
      return throwError(err.error.error);
    } else {
      return throwError(err.message);
    }
  }
}
