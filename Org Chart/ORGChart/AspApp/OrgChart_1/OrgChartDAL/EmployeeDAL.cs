using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace OrgChartDAL
{
    public class EmployeeDAL
    {
        public string ConnectionString = "server=localhost;Database=truinal;Uid=root;Pwd=0536";
        public DataTable GetEmployeeDetails()
        {
            string query = "Select * from employee";
            DataTable dtEmployees = null;
            MySqlConnection con = new MySqlConnection(ConnectionString);
            MySqlDataAdapter da = new MySqlDataAdapter(query, con);
            con.Open();
            //MySqlCommand cmd = new MySqlCommand(query, con);
            dtEmployees = new DataTable();
            da.Fill(dtEmployees);
            con.Close();
            return dtEmployees;

        }
    }
}
