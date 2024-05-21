import { ChangeDetectorRef, Component, ElementRef, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { error } from 'console';
import { FacebookService, InitParams, LoginOptions, LoginResponse } from 'ngx-facebook';
import { USERS } from 'src/app/data';
import { STATUSES } from 'src/app/models';
import { ChatserviceService } from 'src/app/services/Chat/chatservice.service';
import { DataService } from 'src/app/services/shared/data.service';

@Component({
  selector: 'app-registration',
  templateUrl: './registration.component.html',
  styleUrls: ['./registration.component.css']
})
export class RegistrationComponent implements OnInit {
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
  appId: string = "1215976983163839";
  secret: string = "";
  address: string = "";
  // companyId: number=658;
  // nativeIdentitfier: string="519ca9f1168d43bfaa48a838749db5e3";

  //@ViewChild('scrollMe') private myScrollContainer: ElementRef;
  /**
   *
   */
  constructor(private myScrollContainer: ElementRef,
    private changeDetactorRef: ChangeDetectorRef,
    private chatService: ChatserviceService,
    private router: Router,
    private fb: FacebookService,
    private dataService: DataService) {



  }
  ngOnInit() {
    // this.loginWithFacebook();
  }
  LoginWithApp() {
    // debugger
    const initParams: InitParams = {
      appId: this.appId,
      // xfbml: true,
      version: 'v13.0'
    };
    this.fb.init(initParams).then((x: any) => {
      // debugger
      console.log(x)
    });
    this.loginWithFacebook();
  }
  loginWithFacebook(): void {
    // debugger
    const options: LoginOptions = {
      //scope:'public_profile,email,ads_management,instagram_basic,instagram_branded_content_brand,pages_manage_engagement',
      scope: 'public_profile,email,read_insights,ads_management,pages_manage_posts,business_management,catalog_management,instagram_basic,pages_manage_engagement,pages_messaging,pages_read_user_content,pages_manage_metadata,pages_manage_ads,instagram_manage_comments,instagram_manage_insights,pages_read_engagement',
      return_scopes: true,
      enable_profile_selector: true,
    };
    this.fb.login(options)
      .then((response: LoginResponse) => {
        var obj = {
          clientId: this.appId,
          clientSecret: "a889313ccf5fcd5263a408071a48c729",
          authResponse: response.authResponse,
          response: response,
        }
        // debugger
        this.chatService.AddProfile(obj).subscribe((res: any) => {
          // debugger
          console.log(res);
        })

      })
      .catch((error: any) => {
        // debugger
        console.error(error);
      })
  }
  connect() {
    // debugger
    var obj = {
      CompanyId: this.dataService.companyId,
      Name: this.name,
      Email: this.email,
      PhoneNumber: this.phone,
      Address: this.address,
      NativeIdentifier: this.dataService.nativeIdentifier
    };
    this.chatService.connectToChat(obj).subscribe((res: any) => {
      // debugger
      console.log(res);
      this.dataService.changeMessage(res);
      this.router.navigateByUrl(`/messenger/${res.connectionId}`);
    },
      (error: any) => {
        console.log(`Application throws the error:${error}`)
      })
  }

}
