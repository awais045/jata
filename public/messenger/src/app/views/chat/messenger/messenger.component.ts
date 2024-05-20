
import { Component, VERSION, AfterViewChecked, ElementRef, ViewChild, OnInit, ChangeDetectorRef } from "@angular/core";
import { STATUSES, Message, User } from '../../../models'
import { USERS, RANDOM_MSGS, getRandom } from '../../..//data'
import { ChatserviceService } from "src/app/services/Chat/chatservice.service";
import * as signalR from "@microsoft/signalr";
import { Console } from "console";
import { DataService } from "src/app/services/shared/data.service";
import { ActivatedRoute, Router } from "@angular/router";
@Component({
  selector: 'app-messenger',
  templateUrl: './messenger.component.html',
  styleUrls: ['./messenger.component.css']
})
export class MessengerComponent implements OnInit, AfterViewChecked {

  statuses = STATUSES;
  activeUser: any;
  users = USERS;
  expandStatuses = false;
  expanded = false;
  messages: any[] = [];
  connectionId: string = "";
  name: string = "";
  messageReceivedFrom = {
    img: 'https://cdn.livechat-files.com/api/file/lc/img/12385611/371bd45053f1a25d780d4908bde6b6ef',
    name: 'Media bot'
  }
  message: any;
  visitorId: number = 0;
  wcVisitorSessionId: number = 0;
  companyId: number;
  nativeIdentifier: string;

  @ViewChild('scrollMe') private myScrollContainer: ElementRef;
  constructor(private chatService: ChatserviceService,
    private dataService: DataService,
    private activatedRoute: ActivatedRoute) {
  }
  ngOnInit() {
    this.connectionId = this.activatedRoute.snapshot.params['connectionId'];
    this.companyId=this.dataService.companyId;
    this.nativeIdentifier=this.dataService.nativeIdentifier;
    // this.setUserActive(USERS[0]);
    this.scrollToBottom();
    this.getConnectionChat(this.connectionId);
    this.startConnection();
    this.addTransferChartDataListener();
  }
  private hubConnection: signalR.HubConnection;
  public startConnection = () => {
    this.hubConnection = new signalR.HubConnectionBuilder()
      .withUrl('http://localhost:5076/MessengerHub')
      .withAutomaticReconnect()
      .configureLogging(signalR.LogLevel.Information)
      .build();
    this.hubConnection
      .start()
      .then(() => console.log('Connection started')
      )
      .catch(err => console.log('Error while starting connection: ' + err))
  }

  public addTransferChartDataListener = () => {
    this.hubConnection.on('Replies', (response: any) => {
      if ((response != null || response != undefined) &&
        response.nativeIdentifier == this.nativeIdentifier &&
        response.companyId == this.companyId &&
        response.connectionId == this.connectionId) {

        this.messages.push(response);
        console.log("This is response from SignalRr", response)
      }
    }
    );
  }
  ngAfterViewChecked() {
    this.scrollToBottom();
  }

  getConnectionChat(connectionId: string) {
    debugger
    this.chatService.getChat(connectionId,this.dataService.companyId).subscribe((res: any) => {
      debugger
      this.visitorId = res.Visitor.id;
      this.wcVisitorSessionId = res.Session.id;
      var user=new User(res.Visitor.name, STATUSES.ONLINE);
      this.users.push(user);
      this.setUserActive(user);
      res.Messages.forEach((element: any) => {
        this.messages.push({ type: element.type, message: element.message })
      });
      console.log("MEssages============>", this.messages)
    })
  }
  sendMessage() {
    debugger
    var obj = {
      VisitorId: this.visitorId,
      VisitorSessionId: this.wcVisitorSessionId,
      message: this.message
    }
    this.chatService.sendChat(obj).subscribe((res: any) => {
      debugger
    })
  }

  addNewMessage(inputField: any) {
    debugger
    this.message = inputField.value?.trim()
    if (this.message.length) {
      debugger
      var obj = {
        connectionId: this.connectionId,
        message: this.message,
        companyId: this.companyId,
        nativeIdentifier: this.nativeIdentifier
      };
      this.chatService.sendChat(obj).subscribe((res: any) => {
        debugger
        this.messages.push({ type: 'messages', message: this.message })
        // this.activeUser.ws.send(
        //   JSON.stringify({ id: this.activeUser.id, message: val })
        // );
      })
    }
    inputField.value = '';
  }

  scrollToBottom(): void {
    try {
      this.myScrollContainer.nativeElement.scrollTop = this.myScrollContainer.nativeElement.scrollHeight;
    } catch (err) { }
  }

  setUserActive(user: any) {
    debugger
    this.activeUser = user;
    // this.connectToWS();
  }

  connectToWS() {
    debugger
    // if (this.activeUser.ws && this.activeUser.ws.readyState !== 1) {
    //   this.activeUser.ws = null;
    //   this.activeUser.status = STATUSES.OFFLINE;
    // }
    // if (this.activeUser.ws) {
    //   return;
    // }
    // const ws = new WebSocket('wss://compute.hotelway.ai:4443/?token=TESTTOKEN');
    // this.activeUser.ws = ws;
    // ws.onopen = (event) => this.onWSEvent(event, STATUSES.ONLINE);
    // ws.onclose = (event) => this.onWSEvent(event, STATUSES.OFFLINE);
    // ws.onerror = (event) => this.onWSEvent(event, STATUSES.OFFLINE);
    // ws.onmessage = (result: any) => {
    //   const data = JSON.parse(result?.data || {});
    //   const userFound = this.users.find(u => u.id === data.id);
    //   if (userFound) {
    //     userFound.messages.push(
    //       new Message('replies', data.message)
    //     )
    //   }
    // };
  }

  onWSEvent(event: any, status: STATUSES) {
    this.users.forEach(u => u.ws === event.target ? u.status = status : null)
  }
}
function heartbeat(this: any) {
  clearTimeout(this.pingTimeout);

  // Use `WebSocket#terminate()`, which immediately destroys the connection,
  // instead of `WebSocket#close()`, which waits for the close timer.
  // Delay should be equal to the interval at which your server
  // sends out pings plus a conservative assumption of the latency.
  this.pingTimeout = setTimeout(() => {
    this.terminate();
  }, 30000 + 1000);
}
