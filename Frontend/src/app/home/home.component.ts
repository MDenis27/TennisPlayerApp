import { Component, OnInit } from '@angular/core';
import {PersonService} from '../person.service';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})

export class HomeComponent implements OnInit {

  public data: JSON[] = [];
  public customers: any[] = [];

  constructor(private api: PersonService) { }

  ngOnInit() {
    this.api.getHomeJson().subscribe(urldata => {
      this.data = JSON.parse(JSON.stringify(urldata));
      console.log(this.data);
    });
  }

}
