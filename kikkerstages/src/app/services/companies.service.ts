import { Injectable } from '@angular/core';
import { AngularFirestore } from '@angular/fire/firestore';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class CompaniesService {
  items: Observable<any[]>;

  constructor(db: AngularFirestore) { 
    this.items = db.collection('companies').valueChanges();
  }
}
