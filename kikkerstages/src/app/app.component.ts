import { Component, ChangeDetectorRef } from '@angular/core';
import { CompaniesService } from './services/companies.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title = 'kikkerstages';
  clients: any[];
  dataTable: any;

  constructor(public companies: CompaniesService, private chRef: ChangeDetectorRef) { 
  }

  ngOnInit() {
    setTimeout(function() { // TODO: fix this using aync and await. When the data fromthe comanies Service is ready.
      const table: any = $('#datatable');
      this.dataTable = table.DataTable({
        // "paging": false,
        "pageLength": 50
      });
      var search_input = this.datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
      search_input.addClass('form-control input-lg col-xs-12');
    }, 2000);
  }
}
