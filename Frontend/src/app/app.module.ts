import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import {HomeComponent, HomeDialogRacket} from './home/home.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { PersonComponent } from './person/person.component';
import { AddpersonComponent } from './addperson/addperson.component';
import {MatButtonModule, MatToolbarModule} from '@angular/material';
import {MatIconModule} from '@angular/material';
import {PersonService} from './person.service';
import {HttpClientModule} from '@angular/common/http';
import { MatFormFieldModule, MatSelectModule } from '@angular/material';
import { NgxMatSelectSearchModule } from 'ngx-mat-select-search';
import {FormsModule, ReactiveFormsModule} from '@angular/forms';
import {MatCardModule} from "@angular/material/card";
import {MatDialogModule} from '@angular/material/dialog';
import {DialogOverviewExampleDialog} from './home/home.component';
import {MatInputModule} from "@angular/material/input";

@NgModule({
  declarations: [
        AppComponent,
        HomeComponent,
        PersonComponent,
        AddpersonComponent,
        DialogOverviewExampleDialog,
        HomeDialogRacket
  ],
    entryComponents: [
        DialogOverviewExampleDialog,
        HomeDialogRacket
    ],
    imports: [
        BrowserModule,
        HttpClientModule,
        AppRoutingModule,
        BrowserAnimationsModule,
        MatToolbarModule,
        MatButtonModule,
        MatIconModule,
        ReactiveFormsModule,
        BrowserAnimationsModule,
        MatSelectModule,
        MatFormFieldModule,
        NgxMatSelectSearchModule,
        MatCardModule,
        MatDialogModule,
        FormsModule,
        MatInputModule,
    ],
  providers: [
      PersonService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
