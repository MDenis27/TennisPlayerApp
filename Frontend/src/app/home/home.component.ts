import { Component, OnInit } from '@angular/core';
import {PersonService} from '../person.service';
import {Customer, Racket, TennisString} from '../interface/interface.component';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})

export class HomeComponent implements OnInit {

  public data: JSON[] = [];
  Customers: Customer[] = [];
  private Rackets : Racket[] = [];
  private Strings: TennisString[] = [];
  selected: 'None';
  hasChange: boolean = false;

  constructor(private api: PersonService) { }

  ngOnInit() {
    this.api.getHomeJson().subscribe(urldata => {
      this.data = JSON.parse(JSON.stringify(urldata));

      for (let j = 0; j < this.data.length; j++) {
        let tempData = this.data[j];
        for (let i = 0; i < tempData["idRacket"].length; i++) {
          let tempRacket = tempData["idRacket"][i];
          for (let l = 0; i < tempRacket["idString"].length; l++) {
            let tempString = tempRacket["idString"][l];
            this.Strings.push({
              id: tempString["id"],
              brand: tempString["brand"],
              model: tempString["model"],
              gauge: tempString["gauge"],
              longTension: tempString["longTension"],
              crossTension: tempString["crossTension"],
              date: tempString["date"],
            })
          }
          this.Rackets.push({
            id: tempRacket["id"],
            brand: tempRacket["brand"],
            model: tempRacket["model"],
            stringed: tempRacket["stringed"],
            idPerson: tempRacket["idPerson"],
            idString: this.Strings,
          });
          this.Strings = [];
        }
        this.Customers.push({
          id : tempData["id"],
          name: tempData["name"],
          firstname: tempData["firstname"],
          phone: tempData["phone"],
          mail: tempData["mail"],
          note: tempData["note"],
          idRacket: this.Rackets,
        });
        this.Rackets = [];
      }
    });
  }



}
