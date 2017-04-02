<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="iterate.css">
    <img src="Images/Logo%20truinal.png" width="200" height="160">
</head>
<body>


<h2>Popup</h2>

        <link rel="stylesheet" type="text/css" href="tables.css">
        <link rel="stylesheet" type="text/css" href="Vendor/css/ionicons.min.css">
        
        <div>
        <nav>
          	<div class="icon">
                <ul class="icon-list">
                           <li><a href="#"><i class="ion-android-drafts icon-big"></i></a></li>
                           <li><a href="#"><i class="ion-person icon-big"></i></a></li>
                	       <li><p class="hello">Hello Peter Sedrek</p></li><br>
                           <li class="sign"><a href="#">Sign Out</a></li>

                </ul>
                </div>
          </nav>
    </div>
        
    <div>
        <nav>
          	<div class="internal">
                <ul class="int-list">
                           <li><a href="#">ORG CHART</a></li>
                           <li><a href="#">RACI CHART</a></li>
                	       <li><a href="#">PROJECT TRACKING</a></li>
                           <li><a href="#">TIME TRACK</a></li>

                </ul>
                </div>
          </nav>
    </div>
        <form>
        <input type="text" name="search" placeholder="Search.." class="search">
        



        <table>
            <th colspan="7" class="ite">ITERATIONS</th>
            <tr class="one">
                <td><div class="popup" onclick="myFunction()">[1.1]
                    <span class="popuptext" id="myPopup">Features: <br/> Status Type: <br/> Start Date: <br/> End Date: <br/> User Story:</span>
                    </div></td>
                <td>[1.2]</td>
                <td>   </td>
                <td>[1.3]</td>
                <td>   </td>
                <td>[1.4]</td>
                <td>   </td>
            </tr>
            <tr class="two">
                <td><div class="popup" onclick="myFunction()">[2.2]
                    <span class="popuptext" id="myPopup">Features: <br/> Status Type: <br/> Start Date: <br/> End Date: <br/> User Story:</span>
                    </div></td>
                <td>   </td>
                <td>[2.2]</td>
                <td>[2.1]</td>
                <td>   </td>
                <td>   </td>
                <td>[2.3]</td>
                <td>[2.4]</td>
            </tr>
            <tr class="three">
                <td>   </td>
                <td>[3.2]</td>
                <td>[3.1]</td>
                <td>   </td>
                <td>[3.3]</td>
                <td>   </td>
                <td>[3.4]</td>
            </tr>
            <tr class="four">
                <td>   </td>
                <td>[4.2]</td>
                <td>[4.1]</td>
                <td>   </td>
                <td>   </td>
                <td>   </td>
                <td>[4.3]</td>
            </tr>
            <tr class="five">
                <td>   </td>
                <td>   </td>
                <td>   </td>
                <td>[5.1]</td>
                <td>[5.2]</td>
                <td>   </td>
                <td>   </td>
            </tr>
            <tr class="six">
                <td>   </td>
                <td>[6.2]</td>
                <td>[6.1]</td>
                <td>[6.3]</td>
                <td>   </td>
                <td>   </td>
                <td>[6.4]</td>
            </tr>
            
            </table>
    </script>
    
<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>

</body>
</html>
