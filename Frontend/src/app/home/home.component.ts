import {
  AfterContentChecked,
  AfterViewInit,
  Component,
  OnInit,
  ViewChild,
  Inject
} from '@angular/core';
import {PersonService} from '../person.service';
import {Customer, Racket, TennisString} from '../interface/interface.component';
import {MatSelect} from "@angular/material/select";
import {MatDialog, MatDialogRef, MAT_DIALOG_DATA} from '@angular/material/dialog';
import {NgForm} from "@angular/forms";
import {Router} from "@angular/router";


@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})

export class HomeComponent implements OnInit,AfterViewInit {

  public data: JSON[] = [];
  Customers: Customer[] = [];
  private Rackets : Racket[] = [];
  private Strings: TennisString[] = [];
  selected: 'None';
  hasChange: boolean = false;
  customer: Customer;
  racket: Racket;
  string: TennisString;

  @ViewChild('Select',{static:false}) select : MatSelect;

  constructor(private api: PersonService,
              public dialog: MatDialog) { }

  ngOnInit() {
    this.api.getHomeJson().subscribe(urldata => {
      this.data = JSON.parse(JSON.stringify(urldata));

      for (let j = 0; j < this.data.length; j++) {
        let tempData = this.data[j];
        for (let i = 0; i < tempData["idRacket"].length; i++) {
          let tempRacket = tempData["idRacket"][i];
          for (let l = 0; l < tempRacket["idString"].length; l++) {
            let tempString = tempRacket["idString"][l];
            this.Strings.push({
              id: tempString["id"],
              brand: tempString["brand"],
              model: tempString["model"],
              gauge: tempString["gauge"],
              longTension: tempString["longTension"],
              crossTension: tempString["crossTension"],
              date: tempString["date"],
              idRacket: tempRacket["id"]
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

  ngAfterViewInit(): void {
    this.select.valueChange.subscribe(data=>{
      this.hasChange = true;
      this.customer = data;
    })
  }

  openDialog(idRacket: number): void {
    const dialogRef = this.dialog.open(DialogOverviewExampleDialog, {
      width: '60%',
      data: {number: idRacket}
    });

    dialogRef.afterClosed().subscribe(result => {
      console.log("close");
      this.ngOnInit();
    });
  }

  openDialogRacket(): void {
    const dialogRef = this.dialog.open(HomeDialogRacket, {
      width: '60%',
      data: {customer: this.customer}
    });

    dialogRef.afterClosed().subscribe(result => {
      console.log('The dialog was closed');
    });
  }
}

@Component({
  selector: 'app-home-dialog',
  templateUrl: 'home.component.dialog.html',
  styleUrls: ['./home.component.css'],
})
export class DialogOverviewExampleDialog {

  public error: any;

  constructor(
      public dialogRef: MatDialogRef<DialogOverviewExampleDialog>,
      private api: PersonService,
      private router : Router,
      @Inject(MAT_DIALOG_DATA) public idracket: number) {}

  onNoClick(): void {
    this.dialogRef.close();
  }

  onSaveString(form: NgForm) {
      const string : TennisString = {
        id: 0,
        brand: form.value.brand,
        model: form.value.model,
        gauge: form.value.gauge,
        longTension: form.value.longTension,
        crossTension: form.value.crossTension,
        date: new Date(Date.now()),
        idRacket: this.idracket["number"]
      };

    this.api.createNewString(string).subscribe(urldata=>{
      if(urldata['result']){
        this.router.navigate(['api/addstring']).then(r => console.log(r))
      }
    },error =>{
      this.error = error
    } );

    this.dialogRef.close()


  }
}

@Component({
  selector: 'app-home-dialogRacket',
  templateUrl: 'home.component.dialogRacket.html',
  styleUrls: ['./home.component.css']
})
export class HomeDialogRacket {

  constructor(
      public dialogRef: MatDialogRef<HomeDialogRacket>,
      @Inject(MAT_DIALOG_DATA) public custom: Customer) {}

  onNoClick(): void {
    this.dialogRef.close();
  }

  onSaveRacket(form: NgForm) {
    const racket : Racket = {
      id: 0,
      brand: form.value.brand,
      model: form.value.model,
      stringed: true,
      idPerson: this.custom.id,
      idString: []
    }
  }
}
