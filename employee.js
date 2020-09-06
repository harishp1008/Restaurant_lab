var jsonDataEmployee = [
               {
                "employee_photo":' <img src="employee_photo/1.png" alt="Simply Easy Learning" width="80" height="80">',
                   "EmployeeID": "1",
                   "EmployeeName": "Sartaj Husain",
                   "Contact No": "9027289",
                   "Role": "wait-staff",
                   "other":'<a href="https://limetray.com/blog/restaurant-staff-hiring-the-best-team-to-run-your-restaurant/">More Details</a>'

               },
               {
                "employee_photo":' <img src="employee_photo/2.png" alt="Simply Easy Learning" width="80" height="80">',
                   "EmployeeID": "2",
                   "EmployeeName": "Bil bob ",
                   "Contact No": "28292002",
                   "Role": "Bartender",
                   "other":'<a href="https://limetray.com/blog/restaurant-staff-hiring-the-best-team-to-run-your-restaurant/">More Details</a>'

               },
               {
                "employee_photo":' <img src="employee_photo/3.png" alt="Simply Easy Learning" width="80" height="80">',
                   "EmployeeID": "3",
                   "EmployeeName": "Saffron Sinclairr",
                   "Contact No": "9209090239",
                   "Role": "Bar Manager",
                   "other":'<a href="https://limetray.com/blog/restaurant-staff-hiring-the-best-team-to-run-your-restaurant/">More Details</a>'
               },
                {
                "employee_photo":' <img src="employee_photo/4.png" alt="Simply Easy Learning" width="80" height="80">',
                   "EmployeeID": "4",
                   "EmployeeName": "Taybah Mclaughlin",
                   "Contact No": "9209090922",
                   "Role": "Host",
                   "other":'<a href="https://limetray.com/blog/restaurant-staff-hiring-the-best-team-to-run-your-restaurant/">More Details</a>'
               }
               ,
                {
                "employee_photo":' <img src="employee_photo/5.png" alt="Simply Easy Learning" width="80" height="80">',
                   "EmployeeID": "4",
                   "EmployeeName": "Nigel Ochoa",
                   "Contact No": "92090909",
                   "Role": "Bussier",
                   "other":'<a href="https://limetray.com/blog/restaurant-staff-hiring-the-best-team-to-run-your-restaurant/">More Details</a>'
               }
               ,
                {
                "employee_photo":' <img src="employee_photo/6.png" alt="Simply Easy Learning" width="80" height="80">',
                   "EmployeeID": "4",
                   "EmployeeName": "Ikrah Lamb",
                   "Contact No": "9209090923",
                   "Role": "Bussier",
                   "other":'<a href="https://limetray.com/blog/restaurant-staff-hiring-the-best-team-to-run-your-restaurant/">More Details</a>'
               }
               ,
                {
                "employee_photo":' <img src="employee_photo/7.png" alt="Simply Easy Learning" width="80" height="80">',
                   "EmployeeID": "4",
                   "EmployeeName": "Keanan Knox",
                   "Contact No": "9209090912",
                   "Role": "Bussier",
                   "other":'<a href="https://limetray.com/blog/restaurant-staff-hiring-the-best-team-to-run-your-restaurant/">More Details</a>'
               }
        ]

        window.onload = JSONToHTMLTable(jsonDataEmployee, "tblEmployee");

        function JSONToHTMLTable(jsonData, elementToBind) {
          
            //This Code gets all columns for header   and stored in array col
            var col = [];
            for (var i = 0; i < jsonData.length; i++) {
                for (var key in jsonData[i]) {
                    if (col.indexOf(key) === -1) {
                        col.push(key);
                    }
                }
            }

            //This Code creates HTML table
            var table = document.createElement("table");

            //This Code getsrows for header creader above.
            var tr = table.insertRow(-1);

            for (var i = 0; i < col.length; i++) {
                var th = document.createElement("th");
                th.innerHTML = col[i];
                tr.appendChild(th);
            }

            //This Code adds data to table as rows
            for (var i = 0; i < jsonData.length; i++) {

                tr = table.insertRow(-1);

                for (var j = 0; j < col.length; j++) {
                    var tabCell = tr.insertCell(-1);
                    tabCell.innerHTML = jsonData[i][col[j]];
                }
            }

            //This Code gets the all columns for header
            var divContainer = document.getElementById(elementToBind);
            divContainer.innerHTML = "";
            divContainer.appendChild(table);
        }