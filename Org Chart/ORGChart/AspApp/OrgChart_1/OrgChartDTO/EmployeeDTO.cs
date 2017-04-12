using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace OrgChartDTO
{
    public class EmployeeDTO
    {
        public int employeeId { get; set; }
        public string empFirstName { get; set; }
        public string empLastName { get; set; }
        public string address1 { get; set; }
        public string address2 { get; set; }
        public string city { get; set; }
        public string state { get; set; }
        public string country { get; set; }
        public int ZipCode { get; set; }
        public DateTime BirthDate { get; set; }
        public string contactNumber { get; set; }
        public string email { get; set; }
        public string Category { get; set; }
        public int SupervisorId { get; set; }
        public string DepartmentName { get; set; }
        public string Team { get; set; }
        public string Designation { get; set; }
        public string HourlyRate { get; set; }
        public string HoursWorked { get; set; }
        public DateTime TerminationDate { get; set; }
        public DateTime HireDate { get; set; }
        public string EmpImage { get; set; }

    }
}
