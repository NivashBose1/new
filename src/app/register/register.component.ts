import { Component,OnInit } from '@angular/core';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit{

    formdata={name:"",email:"",password:""}
   submit=false;
   errorMessage="";
   loading=false;

  constructor(){}

  ngOnInit(): void {
    
  }
  onSubmit(){
    this.loading=true;

  }
}
