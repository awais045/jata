import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { Buffer } from 'buffer';
declare const FB: any;
@Injectable({
  providedIn: 'root'
})
export class ChatserviceService {
  username:string = 'umair.tasawar'
  password:string = 'umair.tasawar@password'


  httpOptions :any;
  constructor(private httpClient: HttpClient) {
     const  token = Buffer.from(`${this.username}:${this.password}`, 'utf8').toString('base64');
       this.httpOptions= {
        headers: new HttpHeaders({
          'Content-Type':  'application/json',
          'Authorization': 'Basic ' + token
        })
      };
}
  AddProfile(profileDto:any){
    debugger
    console.log(profileDto);
    return this.httpClient.post("https://localhost/jata_laravel_git/public/api/v1/login",profileDto,this.httpOptions)
    // return this.httpClient.post("http://localhost:5109/api/ProfileManagement/RegisterProfile",profileDto,this.httpOptions)
  }
  getChat(connectionId: string,companyId:number) {
    return this.httpClient.get(`http://localhost:5076/api/WebChat/GetUserChat?connectionId=${connectionId}&companyId=${companyId}`,this.httpOptions);
  }
  connectToChat(obj: any) {
    debugger

    return this.httpClient.post("http://localhost:5076/api/WebChat/SaveVisitor", obj,this.httpOptions);
  }
  sendChat(obj: any): Observable<any> {
    return this.httpClient.post("http://localhost:5076/api/WebChat/SaveVisitorChat", obj,this.httpOptions);
  }
}
``
