import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {HomeComponent} from './home/home.component';
import {AddpersonComponent} from './addperson/addperson.component';
import {PersonComponent} from "./person/person.component";


const routes: Routes = [
  {
    path: '',
    component: HomeComponent
  },
  {
    path:'home',
    component: HomeComponent
  },
  {
    path: 'addperson',
    component: AddpersonComponent
  },
  {
    path: 'person',
    component: PersonComponent
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
