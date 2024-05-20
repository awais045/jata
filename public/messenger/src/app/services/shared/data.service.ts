import { Injectable } from '@angular/core';
import { BehaviorSubject } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class DataService {

  companyId:number=658;
  nativeIdentifier:string="519ca9f1168d43bfaa48a838749db5e3";
  private messageSource = new BehaviorSubject('default message');
  loggedInUser = this.messageSource.asObservable();
  constructor() { }

  changeMessage(message: string) {
    this.messageSource.next(message)
  }
}
