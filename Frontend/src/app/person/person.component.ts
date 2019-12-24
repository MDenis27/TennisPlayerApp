import { Component, OnInit } from '@angular/core';
import {PersonService} from "../person.service";
import {Router} from "@angular/router";

@Component({
  selector: 'app-person',
  templateUrl: './person.component.html',
  styleUrls: ['./person.component.css']
})
export class PersonComponent implements OnInit {

  public person: JSON[] = [];

  constructor(private api: PersonService,
              private router : Router,
              private  id: number) { }

  ngOnInit() {
    this.api.GetPerson(this.id).subscribe(urldata => {
      this.person = JSON.parse(JSON.stringify(urldata))});
    console.log(this.person);
  }

}
