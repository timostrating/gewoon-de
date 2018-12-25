import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { HomeComponent } from './pages/home/home.component';
import { NotFoundComponent } from './pages/notfound/notfound.component';

export const appRoutes: Routes = [
  { path: 'home', component: HomeComponent },

  { path: '404', component: NotFoundComponent },
  { path: '**', redirectTo: '/404'}
];

const routes: Routes = [];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
