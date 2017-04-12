using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace OrgChart_1
{
    public partial class OrgChart : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            OrgChartDAL.EmployeeDAL Objemployee = new OrgChartDAL.EmployeeDAL();
            Objemployee.GetEmployeeDetails();
        }
    }
}