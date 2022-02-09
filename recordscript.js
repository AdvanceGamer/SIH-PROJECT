var section1=document.getElementById('section1');
var seciton2= document.getElementById('section2');
section1.addEventListener('click',fun1);
section2.addEventListener('click',fun2);
 function fun1(event){
     document.getElementById('main').innerHTML=`  <div id="employeecontainer">
     <h2>Select User ID And Duration</h2>
     <form action="#" method="post"></form>
     <div id="detailscontainer" class="detailscontainer">
       <div id="filldetails" class="filldetails">
         <form id="form1" action="#" method="get">
           <label for="userid">User ID :</label><br />
           <input id="userid" type="text" name="userid" /><br />
           <label for="datefrom">Date From :</label><br />
           <input id="datefrom" type="date" name="datefrom" /><br />
           <label for="dateto">Date To :</label><br />
           <input id="dateto" type="date" name="dateto" /><br />
           <input id="submit" type="submit" name="submit">
         </form>
       </div>
     </div>
     </div>`
 }

 function fun2(event){
     document.getElementById('main').innerHTML=`        <div id="datecontainer">
     <h2>Select Date</h2>
     <form action="#" method="post"></form>
     <div id="detailscontainer" class="detailscontainer">
       <div id="filldetails" class="filldetails">
         <form id="form2" action="#" method="get">
           <label for="particulardate">Date :</label><br />
           <input id="particulardate" type="date" name="particulardate" /><br />
           <input id="submit" type="submit" name="submit">
         </form>
       </div>
     </div>
   </div>`
 }