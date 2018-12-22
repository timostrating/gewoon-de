import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

import { AngularFireModule } from '@angular/fire';
import { AngularFireStorageModule } from '@angular/fire/storage';
import { AngularFirestore } from '@angular/fire/firestore';

@NgModule({
  declarations: [
    AppComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    AngularFireModule.initializeApp({
      apiKey: "AIzaSyBXoV8M2Tb49WU5wTDuJrCnE0-K4Ni0934",
      authDomain: "mega-199100.firebaseapp.com",
      databaseURL: "https://mega-199100.firebaseio.com",
      projectId: "mega-199100",
      storageBucket: "mega-199100.appspot.com",
      messagingSenderId: "143708431477"
    }),
    AngularFireStorageModule
  ],
  providers: [AngularFirestore],
  bootstrap: [AppComponent]
})
export class AppModule { }
