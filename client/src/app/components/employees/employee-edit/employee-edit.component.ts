import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { Employee } from 'src/app/employee';
import { DataService } from 'src/app/service/data.service';
import { Location } from '@angular/common';

@Component({
  selector: 'app-employee-edit',
  templateUrl: './employee-edit.component.html',
  styleUrls: ['./employee-edit.component.scss'],
})
export class EmployeeEditComponent implements OnInit {
  id: any;
  data: any;
  employee = new Employee();
  constructor(
    private route: ActivatedRoute,
    private dataService: DataService,
    private _location: Location
  ) {}

  ngOnInit(): void {
    this.id = this.route.snapshot.params['id'];
    this.getData();
  }

  getData() {
    this.dataService.getEmployeeById2(this.id).subscribe((res: any) => {
      this.data = res;
      this.employee = this.data;
    });
  }

  UpdateEmployee() {
    this.dataService.UpdateData(this.id, this.employee).subscribe((res) => {
      this._location.back();
    });
  }
}
