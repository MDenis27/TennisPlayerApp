import { Component, OnInit } from '@angular/core';
import {PersonService} from "../person.service";
import {Router} from "@angular/router";
import {MatDialog} from "@angular/material/dialog";
import {NgForm} from "@angular/forms";
import {Customer, Racket, TennisString} from '../interface/interface.component';


@Component({
  selector: 'app-addperson',
  templateUrl: './addperson.component.html',
  styleUrls: ['./addperson.component.css']
})
export class AddpersonComponent implements OnInit {

  public error: any;

  constructor(private api: PersonService,
              private router : Router) { }

  ngOnInit() {
  }

  onSavePerson(form: NgForm) {
    const customer : Customer = {
      id: 0,
      name: form.value.name,
      firstname: form.value.firstname,
      phone: form.value.phone,
      mail: form.value.mail,
      note: form.value.note,
      idRacket: []
    };
    console.log(form.value.name);
    console.log(form.value.firstname);
    console.log(form.value.phone);
    console.log(form.value.mail);
    console.log(form.value.note);
    this.api.createNewCustomer(customer).subscribe(urldata=>{
      if(urldata['result']){
        this.router.navigate(['home']);
      }
    },error =>{
      this.error = error
    } );
  }

  onNoClick() {
    this.router.navigate(['home'])
  }
}
