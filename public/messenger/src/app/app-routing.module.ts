import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { MessengerComponent } from './views/chat/messenger/messenger.component';
import { RegistrationComponent } from './views/registration/registration.component';

const routes: Routes = [
  {
    path:"messenger/:connectionId",component:MessengerComponent,
  },
  {
    path:"",component:RegistrationComponent
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
