import { Component, VERSION, AfterViewChecked, ElementRef, ViewChild, OnInit, ChangeDetectorRef } from "@angular/core";
import * as signalR from "@microsoft/signalr"
import { STATUSES, Message } from './models'
import { USERS, RANDOM_MSGS, getRandom } from './data'
import { ChatserviceService } from "./services/Chat/chatservice.service";

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit, AfterViewChecked {
  statuses = STATUSES;
  activeUser: any;
  users = USERS;
  expandStatuses = false;
  expanded = false;
  messageReceivedFrom = {
    img: 'https://cdn.livechat-files.com/api/file/lc/img/12385611/371bd45053f1a25d780d4908bde6b6ef',
    name: 'Media bot'
  };

  hubConnection: signalR.HubConnection
  name: any;
  email: any;
  phone: any;

  //@ViewChild('scrollMe') private myScrollContainer: ElementRef;
  /**
   *
   */
  constructor(private myScrollContainer: ElementRef,
              private changeDetactorRef: ChangeDetectorRef,
              private chatService:ChatserviceService) {

  }
  ngOnInit() {
    //this.setUserActive(USERS[0])
    // this.scrollToBottom();
    // this.startConnection();
    // this.addTransferChartDataListener();
  }
  ngAfterViewChecked() {
    //this.scrollToBottom();
  }

  // addNewMessage(inputField: any) {
  //   const val = inputField.value?.trim()
  //   if (val.length) {
  //     this.activeUser.messages.push({ type: 'sent', message: val })
  //     this.activeUser.ws.send(
  //       JSON.stringify({ id: this.activeUser.id, message: val })
  //     );
  //   }
  //   inputField.value = '';
  // }

  // scrollToBottom(): void {
  //   try {
  //     this.myScrollContainer.nativeElement.scrollTop = this.myScrollContainer.nativeElement.scrollHeight;
  //   } catch (err) { }
  // }

  // connect(){
  //   var obj={
  //     Name:this.name,
  //     Email:this.email,
  //     Phone:this.phone
  //   };
  //   this.chatService.connectToChat(obj).subscribe((res:any)=>{
  //     debugger
  //   })
  // }
  // setUserActive(user: any) {
  //   this.activeUser = user;
  //   //this.connectToWS();
  // }


  // public startConnection = () => {
  //   debugger
  //   this.hubConnection = new signalR.HubConnectionBuilder()
  //     .withUrl('http://localhost:5146/ChatHub')
  //     .withAutomaticReconnect()
  //     .configureLogging(signalR.LogLevel.Information)
  //     .build();
  //   this.hubConnection
  //     .start()
  //     .then(() => {
  //       console.log('Connection started')
  //     })
  //     .catch(err => console.log('Error while starting connection: ' + err))
  // }


  // public addTransferChartDataListener = () => {
  //   this.hubConnection.on('getAllMachineLogs', (response: any) => {

  //     if (response != undefined && response != null) {
  //       debugger
  //       this.activeUser.messages.push({ type: 'sent', message: response.message })
        
  //     }
  //     this.changeDetactorRef.detectChanges();

  //   }
  //   );
  // }

  // onWSEvent(event: any, status: STATUSES) {
  //   this.users.forEach(u => u.ws === event.target ? u.status = status : null)
  // }
}
// function heartbeat() {
//   clearTimeout(3);

//   // Use `WebSocket#terminate()`, which immediately destroys the connection,
//   // instead of `WebSocket#close()`, which waits for the close timer.
//   // Delay should be equal to the interval at which your server
//   // sends out pings plus a conservative assumption of the latency.
//   // this.pingTimeout = setTimeout(() => {
//   //   this.terminate();
//   // }, 30000 + 1000);
// }
